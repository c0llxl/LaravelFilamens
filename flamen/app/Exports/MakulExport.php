<?php

namespace App\Exports;

use App\Models\Makul;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MakulExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Makul::all();
    }

    public function headings(): array
    {
        return [
            'Kode Makul',
            'Nama Makul',
            'SKS',
            'Deskripsi',
            'Tanggal Dibuat',
        ];
    }

    public function map($makul): array
    {
        return [
            $makul->kode_makul,
            $makul->nama_makul,
            $makul->sks,
            $makul->deskripsi,
            $makul->created_at->format('d/m/Y'),
        ];
    }
}
