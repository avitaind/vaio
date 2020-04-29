<?php
namespace App\Exports;

use App\ProductSurvey;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SurveryDataExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return ProductSurvey::all();
    }

    public function headings(): array{
        return [
            'ID',
            'Model Number',
            'Serial Number',
            'Email',
            'Birthday',
            'Age Group',
            'Gender',
            'Q1',
            'Q2',
            'Q3',
            'Submit Date',
        ];
    }

    public function map($survey): array
    {
        return [
            $survey->id,
            $survey->model_number,
            $survey->serial_number,
            $survey->present()->email,
            $survey->present()->birthday,
            $survey->age_group,
            $survey->present()->gender,
            $survey->present()->q1_answer,
            $survey->present()->q2_answer,
            $survey->present()->q3_answer,
            $survey->created_at,
        ];
    }
}
