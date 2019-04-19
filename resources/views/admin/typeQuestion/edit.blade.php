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
      <i class="fa fa-align-justify"></i><h5>Edit Question</h5>
    </div>
    <div class="panel-body">
    {!! Form::model($types, ['method'=>'PATCH', 'action'=>['TypeController@update', $types->id],'class' => 'form-horizontal']) !!}

        <div class="control-group">
          <label class="control-label required">Type: </label>
          <div class="controls">
            <input type="text" name="type" class="form-control" required value="{{ $types->type }}" autofocus />
          </div>
        </div>
        <div>
            <h5>Level<label>*</label></h5>
              <select name="level" id="level">
                 @if(1 == $types->level)                  
                    <option value='1' selected>1</option>
                  @else
                    <option value='1'>1</option>
                  @endif    
                  @if(2 == $types->level)                  
                    <option value='2' selected>2</option>
                  @else
                    <option value='2'>2</option>
                  @endif
                  @if(3 == $types->level)                  
                    <option value='3' selected>3</option>
                  @else
                    <option value='3'>3</option>
                  @endif
                  @if(4 == $types->level)                  
                    <option value='4' selected>4</option>
                  @else
                    <option value='4'>4</option>
                  @endif
                  @if(5 == $types->level)                  
                    <option value='5' selected>5</option>
                  @else
                    <option value='5'>5</option>
                  @endif            
              </select>
         </div>
        <div class="control-group">
          <label class="control-label required">Limit: </label>
          <div class="controls">
            <input type="text" name="limit" class="form-control" required value="{{ $types->limit }}" id="taikhoan" />
          </div>
        </div>

        <div class="form-actions">
          <input type="submit" class="btn btn-primary btn-large" value="Save">
          <a class="btn btn-danger" style="margin-left: 50px;">Cancel</a>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
