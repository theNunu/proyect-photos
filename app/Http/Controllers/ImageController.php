<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Tag;
use App\Models\Category;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::with('tags')->get();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all(); // Obtén todas las categorías
        return view('images.create', compact('tags', 'categories'));
    }

    public function show($id)
{
    $image = Image::with('comments.user')->findOrFail($id); // Obtener la imagen con los comentarios
    return view('images.show', compact('image'));
}

    public function store(Request $request)
    { //gestion de las imagenes
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Solo formatos permitidos y un máximo de 2 MB
        ]);

        $filename = $request->file('image')->store('images', 'public');
        if (auth()->check()) {
            $image = Image::create([
                'title' => $request->title,
                'filename' => $filename,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'user_id' => auth()->id(),
            ]);
        } else {
            return redirect()->route('images.index')->with('success', 'Imagen subida correctamente.');
        }
        

        $image->tags()->attach($request->tags);

        return redirect()->route('images.index')->with('success', 'Imagen subida correctamente.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Buscar imágenes por título (nombre de la imagen)
        $images = Image::where('title', 'like', '%' . $query . '%')
            // Buscar imágenes que tengan categorías coincidentes
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            // Buscar imágenes que tengan etiquetas coincidentes
            ->orWhereHas('tags', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            ->get();
    
        // Si no se encuentran resultados, mostrar mensaje de no encontrado
        if ($images->isEmpty()) {
            return view('images.search-results', ['images' => [], 'noResults' => true]);
        }
    
        return view('images.search-results', compact('images'));
    }
    



}
