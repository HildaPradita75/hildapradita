<?php

namespace App\Exports;

use App\Models\Book;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BookExport implements FromArray, ShouldAutoSize, WithHeadings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    
    public function array(): array
    {
        return Book::getDataBooks();
    }

    public function headings(): array
    {
        return [
            'No',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit'
        ];
    }
}
