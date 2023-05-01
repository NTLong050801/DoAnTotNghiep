<?php

namespace App\Imports;

use App\Models\Question;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;

class QuestionsImport implements ToCollection, WithHeadingRow, WithValidation,SkipsOnError
{
    use Importable;

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $exits = Question::where('name', $row['cau_hoi'])
                ->where('user_id', auth()->id())->exists();
            if(!$exits){
                $options = json_encode([
                    'option1' => $row['dap_an_1'],
                    'option2' => $row['dap_an_2'],
                    'option3' => $row['dap_an_3'],
                    'option4' => $row['dap_an_4'],
                ]);
                switch($row['dap_an_dung']){
                    case 1 :
                        $ans = 'option1';break;
                    case 2 :
                        $ans = 'option2';break;
                    case 3 :
                        $ans = 'option3';break;
                    case 4 :
                        $ans = 'option4';break;
                    default:
                        $ans = 'option1';
                }
                Question::create([
                    'name' => $row['cau_hoi'],
                    'ans' => $ans,
                    'options' => $options,
                    'note' => $row['ghi_chu'],
                    'user_id' => auth()->id(),
                ]);
            }
        }
    }




    public function rules(): array
    {
        return [
            '*' => ['required'],
            'name' => 'unique:questions',
            'ghi_chu' => ['nullable'],
        ];
    }

    public function onError(Throwable $e)
    {
        // TODO: Implement onError() method.
    }
}
