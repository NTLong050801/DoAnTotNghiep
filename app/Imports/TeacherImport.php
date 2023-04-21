<?php

namespace App\Imports;

use App\Models\Major;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;


class TeacherImport implements ToCollection, WithHeadingRow, WithValidation,SkipsOnError
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function collection(Collection $collection)
    {
        $majors = Major::all();
        foreach ($majors as $major) {
            foreach ($collection as $row) {
                if ($major->name ==  $row['khoa']) {
                    User::create([
                        'name' => $row['ho_va_ten'],
                        'email' => $row['email'],
                        'password' => Hash::make($row['email']),
                        'role' => 1,
                        'major_id' =>$major->id,
                    ]);
                }
            }
        }

    }

    public function rules(): array
    {
        return [
            '*.email' => ['email', 'unique:users,email'],
        ];
    }

    public function onError(Throwable $e)
    {
        // TODO: Implement onError() method.
    }
}
