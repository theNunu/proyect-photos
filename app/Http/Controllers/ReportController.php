<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Report;
class ReportController extends Controller
{
    public function store(Request $request, Image $image)
    {
        // Guardar el reporte en la base de datos
        Report::create([
            'image_id' => $image->id,
            'reason' => $request->reason,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Reporte enviado.');
    }

    public function index()
    {
        // Solo el administrador puede ver los reportes
        $this->authorize('viewReports', Report::class);
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }
}
