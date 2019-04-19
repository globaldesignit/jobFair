<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Result;
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result = Result::paginate(10);
        return view('admin.result.index', ['results' => $result]);
    }
    public function search(Request $request)
    {     
        $results =  Result::where('name','like', "%".$request->search."%")->orWhere('localTest','like', "%".$request->search."%")->orWhere('mail','like', "%".$request->search."%")->orWhere('phone','like', "%".$request->search."%")->paginate(10);
        return view('admin.result.index', ['results' => $results]);
    }   
    public function orderBy($order)
    {   
        $results =  Result::orderBy($order)->paginate(10);
        return view('admin.result.index', ['results' => $results]);
    }   
    public function pagination($numpage)
    {           
        if($numpage == 'All')
        {
            $result = Result::all();
            return view('admin.result.table', ['results' => $result, 'all' => 'all']);
        }
        else
            $result = Result::paginate($numpage);
        return view('admin.result.table', ['results' => $result]);
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
        $questions = Result::findorfail($id);  
        $questions->delete();
        return redirect()->back()->with('notify', 'Successfully');
    }
}
