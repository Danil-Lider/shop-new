<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithStartRow;

class ItemImport implements ToModel,  WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if(Item::where('article_for_1c', '=', $row[0])->exists() && !empty($row[0])){

            // dd($row);

            Item::where('article_for_1c', '=', $row[0])
            ->update(['name' => $row[1], 'model' => $row[2]]);

        }else{

            if(($row[2] == '' || !Item::where('model', '=', $row[2])->exists()) && !empty( $row[1])) {

                return new Item([
                    'article_for_1c' => $row['0'],
                    'name' => $row[1],
                    'model' => $row[2]
                ]);
    
            }
        }

        

    }

    public function startRow(): int
    {
       return 2;
    }

    // public function rules(): array
    // {
    //     return [
    //         '3' => Rule::unique(['model', 'model'])
    //     ];
    // }
}
