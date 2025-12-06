<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; 
use App\Models\User;
use App\Models\Candidate;
use App\Models\Study;
use App\Models\Experience;

class CV_ReportController extends Controller
{
    public function generarPDF($user_id)
    {
        $user_id = $user_id;
        $candidate = Candidate::where('user_id', $user_id)->first();
        $studies = Study::where('candidate_id', $candidate->id)->get();
        $experiences = Experience::where('candidate_id', $candidate->id)->get();

        $pdf = Pdf::loadView('cv_pdf.index', compact('candidate', 'studies', 'experiences'));

        return $pdf->stream('reporte.pdf'); 
        //return $pdf->download('reporte.pdf'); // si lo quieres descargar
    }
}
