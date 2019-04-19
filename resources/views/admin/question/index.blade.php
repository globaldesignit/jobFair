@extends('layout.layout')
@section('content')
<div class="col-lg-12">
@if(session('notify'))
                <div class="alert alert-success">
                    {{ session('notify') }}
                </div>
            @endif
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>
            @endif
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-table"></i><h5>List Question</h5>
    </div>
    <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>            
            <th>Question</th>
            <th>Answer 1</th>
            <th>Answer 2</th>
            <th>Answer 3</th>
            <th>Answer 4</th>    
            <th>Correct answer</th>   
            <th>Type</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questions as $questions)
            <tr class="gradeX">
              <td>
              <div style=" white-space: nowrap; width: 500px; overflow: hidden;  text-overflow: ellipsis; ">{{ $questions->question }}</div>
              </td>
              <td>{{ $questions->ans1 }}</td>
              <td>{{ $questions->ans2 }}</td>
              <td>{{ $questions->ans3 }}</td>
              <td>{{ $questions->ans4 }}</td>
              <td>{{ $questions->correctAns }}</td>
              <td>{{ $questions->typeQues }}</td>
              <td>{{ $questions->level }}</td>
              <td><a href="{{ route('ques.edit', ['id'=>$questions->id]) }}" class="btn btn-info" >Edit</a></td>            
              </td>
              <td>
              {!! Form::open(['method' => 'delete', 'action' => ['QuestionController@destroy', $questions->id]]) !!}
              {!! Form::submit('Delete', ['onclick'=>"return confirm('Delete questions?')", 'class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
