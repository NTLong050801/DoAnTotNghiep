<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings,Responsable
{
    use Exportable;
    private $headers = [
        'Content-Encoding' => 'UTF-8',
        'charset' => 'UTF-8',
    ];
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $user = User::with('majors')->where('role', 1)->orderBy('major_id')->get();
        return $user;
    }

    public function map($row): array
    {
        // TODO: Implement map() method.
        return  [
            $row->id,
            $row->name,
            $row->email,
            $row->majors[0]->name,
        ];
    }

    public function headings(): array
    {
        return ["STT", "Họ và tên", "Email", "Khoa"];
    }
}
