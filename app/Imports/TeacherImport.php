<?php

namespace App\Imports;

use App\Models\ClassesStudents;
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

        foreach ($collection as $row) {
            $account = User::where('email', $row['email'])->first();
            if (!$account) {
                $major = Major::where('name', $row['khoa'])->first();
                $account = User::create([
                    'name' => $row['ho_va_ten'],
                    'email' => $row['email'],
                    'password' => Hash::make($row['email']),
                    'role' => 1,
                    'major_id' => $major->id,
                ]);
            }

        }
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function onError(Throwable $e)
    {
        // TODO: Implement onError() method.
    }
}
