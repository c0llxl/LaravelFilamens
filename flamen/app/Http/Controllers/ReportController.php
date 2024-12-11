<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Makul;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenExport;
use App\Exports\MakulExport;

class ReportController extends Controller
{
    public function dosenPdf()
    {
        $dosens = Dosen::all();
        $pdf = Pdf::loadView('reports.dosen-pdf', compact('dosens'));
        return $pdf->download('laporan-dosen.pdf');
    }

    public function dosenExcel()
    {
        return Excel::download(new DosenExport, 'laporan-dosen.xlsx');
    }

    public function makulPdf()
    {
        $makuls = Makul::all();
        $pdf = Pdf::loadView('reports.makul-pdf', compact('makuls'));
        return $pdf->download('laporan-makul.pdf');
    }

    public function makulExcel()
    {
        return Excel::download(new MakulExport, 'laporan-makul.xlsx');
    }
}
