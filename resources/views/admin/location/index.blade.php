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
      <i class="fa fa-table"></i><h5>List location test</h5>
    </div>
    <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>            
            <th>Location</th>
            <th>Level</th>
            <th>Short name</th>
            <th>Status</th>
            <th>Percent pass</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr class="gradeX">
              <td>{{ $location->name }}</td>
              <td>{{ $location->level }}</td>
              <td>{{ $location->shortName }}</td>
              <td>{{ $location->percentPass }}</td>
              @if($location->status==1)
              <td>Đã kích hoạt</td>          
              @else
              <td>Chưa kích hoạt</td>
              @endif   
              <td><a href="{{ route('loca.edit', ['id'=>$location->id]) }}" class="btn btn-info" >Edit</a></td>            
              </td>
              <td>
              {!! Form::open(['method' => 'delete', 'action' => ['LocationController@destroy', $location->id]]) !!}
              {!! Form::submit('Delete', ['onclick'=>"return confirm('Delete location?')", 'class' => 'btn btn-danger']) !!}
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