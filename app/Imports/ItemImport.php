<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;

class ItemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!Item::where('model', '=', $row[3])->exists()) {

            return new Item([
                'name' => $row[1],
                'model' => $row[3]
            ]);

        }

    }

    // public function rules(): array
    // {
    //     return [
    //         '3' => Rule::unique(['model', 'model'])
    //     ];
    // }
}
