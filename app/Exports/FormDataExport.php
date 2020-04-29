<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Form;

class FormDataExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Form::all(['id', 'email', 'q2_ans', 'q3_ans', 'q4_ans', 'q5_ans', 'created_at']);
    }

    public function headings(): array{
        return [
          'id',
          'email',
          '你是否曾經擁有vaio之產品？',
          '你最喜歡哪一款顏色？',
          'VAIO哪一種特點最能吸引你？',
          '你來自以下哪個地方?',
          '提交日期'
        ];
    }
}
