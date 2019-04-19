<?php

namespace App\Http\Controllers;

use App\Location;
use App\Question;
use App\Result;
use App\TypeQues;
use Excel;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index($name){
        $location = Location::where('shortName', $name)->where('status',1)->get();        
        if (empty($location->all())) {
            abort(403, 'Unauthorized action.');
        }
        return view('questions.inputInfor',['name'=>$name]);
    }
    public function getInfor($loca,Request $request){
        session(['key' => $request->all()]);
        return redirect(route('contest.index',$loca));
    }
    public function indexValue()
    {
        $questions = Question::all();
        return view('admin.question.index', ['questions' => $questions]);
    }
    public function create()
    {
        $typeQues = TypeQues::all();
        $location = Location::all();
        return view('admin.question.create',['location'=> $location, 'typeQues'=> $typeQues]);
    }
    public function edit($id)
    {
        $typeQues = TypeQues::all();
        $questions = Question::where('id', $id)->get();
        return view('admin.question.edit', ['questions' => $questions[0], 'typeQues'=> $typeQues]);
    }
    public function update($id, Request $request)
    {
        $questions = new Question;
        $questions = Question::where('id', $id)->first();
        $questions->fill($request->all());       
        $questions->save();
        return redirect()->back()->with('notify', 'Successfully');
    }
    public function destroy($id, Request $request)
    {
        $questions = Question::findorfail($id);  
        $questions->delete();
        return redirect()->back()->with('notify', 'Successfully');
    }


    public function store(Request $request)
    {
        $questions = new Question;
        $questions->fill($request->all());
        $questions->correctAns = $request->{'ans' . $request->correctAns};
        $questions->save();
        return redirect()->back()->with('notify', 'Successfully');
    }
    public function __invoke(Request $request)
    {

    }
    public function show(Request $request)
    {

    }
    public function importExport($table)
    {
        return view('admin.importQues', ['table' => $table]);
    }
    public function importExcel($table, Request $request)
    {
        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();
        // $path = storage_path('app/Result.xls');
        $data = Excel::load($path)->get();
        switch ($table) {
            case 'Question':
                if ($data->count()) {
                    foreach ($data as $key => $value) {
                        $arr[] = ['id' => $value->id,
                            'question' => $value->question,
                            'ans1' => $value->ans1,
                            'ans2' => $value->ans2,
                            'ans3' => $value->ans3,
                            'ans4' => $value->ans4,
                            'level' => $value->level,
                            'correctAns' => $value->correctans,
                            'created_at' => $value->created_at,
                            'updated_at' => $value->updated_at];
                    }
                    if (!empty($arr)) {
                        Question::insert($arr);
                    }
                }break;
            case 'Result':
                if ($data->count()) {
                    foreach ($data as $key => $value) {
                        $arr[] = ['id' => $value->id,
                            'shortName' => $value->shortname,
                            'localTest' => $value->localtest,
                            'name' => $value->name,
                            'mail' => $value->mail,
                            'total' => $value->total,
                            'result' => $value->result,
                            'created_at' => $value->created_at,
                            'updated_at' => $value->updated_at];
                    }
                    if (!empty($arr)) {
                        Result::insert($arr);
                    }
                }break;
            case 'Location':
                if ($data->count()) {
                    foreach ($data as $key => $value) {
                        $arr[] = ['id' => $value->id,
                            'type' => $value->type,
                            'level' => $value->level,
                            'limit' => $value->limit];
                    }
                    if (!empty($arr)) {
                        TypeQues::insert($arr);
                    }
                }break;
            case 'Type':
                if ($data->count()) {
                    foreach ($data as $key => $value) {
                        $arr[] = ['id' => $value->id,
                            'name' => $value->name,
                            'level' => $value->level,
                            'shortName' => $value->shortname,
                            'totalQues' => $value->totalques,
                            'correctAns' => $value->correctans,
                            'created_at' => $value->created_at,
                            'updated_at' => $value->updated_at];
                    }
                    if (!empty($arr)) {
                        Location::insert($arr);
                    }
                }break;
            default:break;
        }

        return back()->with('success', 'Insert Record successfully.');
    }
    public function downloadExcel($table, $type)
    {
        switch ($table) {
            case 'Question':$data = Question::get()->toArray();
                break;
            case 'Result':$data = Result::get()->toArray();
                break;
            case 'Location':$data = Location::get()->toArray();
                break;
            case 'Type':$data = TypeQues::get()->toArray();
                break;
            default:$data = [];
                break;
        }
         
        return Excel::create('dataGDIT', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
}
