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
      <i class="fa fa-table"></i><h5>List type question</h5>
    </div>
    <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>            
            <th>Type</th>
            <th>Level</th>
            <th>Limit</th>
          </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr class="gradeX">
              <td>{{ $type->type }}</td>
              <td>{{ $type->level }}</td>
              <td>{{ $type->limit }}</td>         
              <td><a href="{{ route('type.edit', ['id'=>$type->id]) }}" class="btn btn-info" >Edit</a></td>            
              </td>
              <td>
              {!! Form::open(['method' => 'delete', 'action' => ['TypeController@destroy', $type->id]]) !!}
              {!! Form::submit('Delete', ['onclick'=>"return confirm('Delete this type?')", 'class' => 'btn btn-danger']) !!}
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