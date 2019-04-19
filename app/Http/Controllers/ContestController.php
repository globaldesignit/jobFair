<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Question;
use App\Result;
use App\TypeQues;
class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($loca)
    {
        $location = Location::where('shortName', $loca)->get();        
        if (empty($location->all())) {
            abort(403, 'Unauthorized action.');
        }
        $questions = array();
        $data = array();
        $data = Question::inRandomOrder()->where('level', $location[0]->level)->get();
        $type = TypeQues::where('level', $location[0]->level)->get();
        $types;
        $countType;
        $counttest = 0;       
        foreach ($type as $key => $value) {
            $countType[$value['type']] = 0;
            $types[$value['type']] = $value['limit'];
        }

        foreach ($type as $key => $value1) {
            foreach ($data as $key => $value) {
                if ($countType[$value1['type']] < $types[$value1['type']]) {
                    if ($value->typeQues == $value1->type) {
                        $countType[$value1['type']] = $countType[$value1['type']] + 1;
                        $counttest = $counttest + 1;
                        array_push($questions, $value);
                    }
                }
            }
        }          
        $countQues=count($questions);
        return view('questions.index', ['questions' => $questions, 'loca'=> $loca , 'countQues'=> $countQues]);
    }
    public function submit($loca,Request $request)
    {
        $result = 0;
        $session= session('key'); 
        $name = $session['name'];
        $mail = $session['email'];
        $phone = $session['phone'];
        $localTest = $loca;
        $check = Result::where('mail',$mail)->where('phone',$phone)->where('localTest',$localTest)->get();
       
        $questions = Question::all();
        foreach ($questions as $key => $value) {
            if ($request[$value->id] == $value->correctAns) {
                $result++;
            }
        }
        $location = Location::where('shortName',$localTest)->get();
        $status = 0;
        if(($result*100/ $request->countQues)>$location[0]->percentPass)
        {
            $status = 1;
        }
        if (!empty($check->all())) { 
            $resultDB = Result::findorfail($check[0]->id);
            $resultDB->total = $request->countQues;
            $resultDB->status= $status;
            $resultDB->result = $result;
            $resultDB->save();
         }    
         else{
            $resultDB = new Result;
            $resultDB->localTest = $localTest;
            $resultDB->mail = $mail;
            $resultDB->name = $name;
            $resultDB->phone = $phone;
            $resultDB->total = $request->countQues;
            $resultDB->result = $result;
            $resultDB->status= $status;
            $resultDB->save();
         }       
        return view('questions.result', ['result' => $result, 'total' => $request->countQues, 'status'=> $status]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
