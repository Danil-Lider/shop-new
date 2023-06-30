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
        if(Item::where('article_for_1c', '=', $row[4])->exists() && !empty($row[4])){
            
            // обновляем

            Item::where('article_for_1c', '=', $row[4])
            ->update(['name' => $row[1], 'model' => $row[0],'link_youtube' => $row[3]]);

        }else{

            if(($row[1] == '' || !Item::where('model', '=', $row[0])->exists()) && !empty( $row[1])) {

                return new Item([
                    'model' => $row[0],
                    'name' => $row[1],
                    'link_youtube' => $row[3],
                    // 'model' => $row[3],
                    'article_for_1c' => $row['4']
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
