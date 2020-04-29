<?php

namespace App\Http\Controllers\Admin;

use App\Exports\FormDataExport;
use App\Exports\SurveryDataExport;
use App\Http\Controllers\Controller;
use App\ProductSurvey;
use Illuminate\Http\Request;
use App\Form;


class FormDataController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('can:manage-marketing-data');
    }

    public function showQuestionnaireResults(Request $request) {

        $forms = Form::paginate(10);
        return view('admin.questionnaire_result', compact('forms') );
    }

    protected function downloadExcel(){
        return \Excel::download(new FormDataExport(), 'Result.xlsx');
    }

    public function showSurveyResults(Request $request) {

        $survey = ProductSurvey::paginate(10);
        return view('admin.survey_result', compact('forms') )->with('forms', $survey);

    }

    protected function downloadSurveyExcel( ) {
        return \Excel::download(new SurveryDataExport(), 'Survery-Result.xlsx');
    }
}
