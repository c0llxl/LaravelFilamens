<?php

namespace App\Exports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DosenExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Dosen::all();
    }

    public function headings(): array
    {
        return [
            'NIP',
            'Nama',
            'Jenis Kelamin',
            'Alamat',
            'Tanggal Lahir',
            'Bidang Keahlian',
            'Tanggal Dibuat',
        ];
    }

    public function map($dosen): array
    {
        return [
            $dosen->nip,
            $dosen->nama,
            $dosen->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan',
            $dosen->alamat,
            $dosen->tanggal_lahir->format('d/m/Y'),
            $dosen->bidang_keahlian,
            $dosen->created_at->format('d/m/Y'),
        ];
    }
}
