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


class ClassStudentsImport implements ToCollection, WithHeadingRow,SkipsOnError
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    protected $class_id;

    public function __construct($class_id)
    {
        $this->class_id = $class_id;
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $account = User::where('email', $row['email'])->first();
            if (!$account) {
                $major = Major::where('name', $row['khoa'])->first();
                $account = User::create([
                    'name' => $row['ho_va_ten'],
                    'identifier' => $row['ma_sinh_vien'],
                    'email' => $row['email'],
                    'password' => Hash::make($row['email']),
                    'role' => 0,
                    'major' => $major->id,
                ]);
            }
            $StudentInClass = ClassesStudents::where('class_id', $this->class_id)->where('user_id', $account->id)->first();
            if (!$StudentInClass) {
                ClassesStudents::create([
                    'class_id' => $this->class_id,
                    'user_id' => $account->id,
                ]);
            }

        }

    }

    public function onError(Throwable $e)
    {
        // TODO: Implement onError() method.
    }
}
