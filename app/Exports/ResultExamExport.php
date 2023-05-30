<?php

namespace App\Exports;

use App\Models\ExamsStudents;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ResultExamExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, Responsable,WithStyles
{
    use Exportable;
    public $exam_id;
    public $index = 1;

    public function __construct($exam_id)
    {
        $this->exam_id = $exam_id;
    }

    private $headers = [
        'Content-Encoding' => 'UTF-8',
        'charset' => 'UTF-8',
    ];

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $exam_students = ExamsStudents::where('exam_id',$this->exam_id)->get();
        return $exam_students;
    }

    public function map($row): array
    {
        // TODO: Implement map() method.
        $numberQuestion = 0;
        $point = 0;
        if ($row->questions != null){
            $numberQuestion= $row->result.'/'.count(json_decode($row->questions));
            $point = $row->result*10/count(json_decode($row->questions));
        }
        return [
            (string) $this->index++,
            $row->user->name,
            $row->user->email,
            (string) $row->warning,
            (string)$numberQuestion,
            (string)$point
        ];
    }

    public function headings(): array
    {
        return ['STT',"Họ và tên", "Email", "Số cảnh báo",'Số câu đúng','Tổng điểm'];
    }

    public function styles(Worksheet $sheet)
    {
//        $sheet->getStyle()->getAlignment()->applyFromArray(
//            array('horizontal' => 'left')
//        );
        $sheet->getStyle('F')->getFont()->setColor(new Color(Color::COLOR_RED))->setBold(true);
    }
}

