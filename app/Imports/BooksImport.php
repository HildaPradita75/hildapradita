<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BooksImport implements WithHEadingRow, ToModel
{
    public function model(array $row)
    {
        return new Book([
            'judul' => $row['judul'],
            'penulis' => $row['penulis'],
            'tahun' => $row['tahun'],
            'penerbit' => $row['penerbit'],
        ]);
    }
}