<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request, Image $image)
    {
        // dd($request->all());  // Verificar lo que se está enviando

        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create([
            'image_id' => $image->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Comentario añadido.');
    }
}
