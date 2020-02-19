<?php

namespace App\Imports;

use App\Petugas;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PetugasImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $value) {
            if ($key >= 1) {
                $tgl_lahir = ($value[3] - 25569) * 86400;
                $data = [
                    'name' => $value[1],
                    'tmpt_lahir' => $value[2],
                    'tgl_lahir' => date('Y-m-d', $tgl_lahir),
                ];
                Petugas::create($data);
            }
        }
    }
}
