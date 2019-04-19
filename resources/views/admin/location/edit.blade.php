@extends('layout.layout')
@section('css')
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-top:5px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}


.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
@stop
@section('content')
<div class="col-lg-12">@if(session('notify'))
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
    {!! Form::model($location, ['method'=>'PATCH', 'action'=>['LocationController@update', $location->id],'class' => 'form-horizontal']) !!}

        <div class="control-group">
          <label class="control-label required">Name: </label>
          <div class="controls">
            <input type="text" name="name" class="form-control" required value="{{ $location->name }}" autofocus />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label required">Short name: </label>
          <div class="controls">
            <input type="text" name="shortName" class="form-control" required value="{{ $location->shortName }}" id="taikhoan" />
          </div>
        </div>    
     
        <div>
            <h5>Level<label>*</label></h5>
              <select name="level" id="level">
                 @if(1 == $location->level)                  
                    <option value='1' selected>1</option>
                  @else
                    <option value='1'>1</option>
                  @endif    
                  @if(2 == $location->level)                  
                    <option value='2' selected>2</option>
                  @else
                    <option value='2'>2</option>
                  @endif
                  @if(3 == $location->level)                  
                    <option value='3' selected>3</option>
                  @else
                    <option value='3'>3</option>
                  @endif
                  @if(4 == $location->level)                  
                    <option value='4' selected>4</option>
                  @else
                    <option value='4'>4</option>
                  @endif
                  @if(5 == $location->level)                  
                    <option value='5' selected>5</option>
                  @else
                    <option value='5'>5</option>
                  @endif            
              </select>
         </div>     
         <div>
            <h5>Percent pass<label>*</label></h5>
              <select name="percentPass" id="percentPass">
                 @if(30 == $location->percentPass)                  
                    <option value='30' selected>30%</option>
                  @else
                    <option value='30'>30%</option>
                  @endif    
                  @if(40 == $location->percentPass)                  
                    <option value='40' selected>40%</option>
                  @else
                    <option value='40'>40%</option>
                  @endif
                  @if(50 == $location->percentPass)                  
                    <option value='50' selected>50%</option>
                  @else
                    <option value='50'>50%</option>
                  @endif
                  @if(60 == $location->percentPass)                  
                    <option value='60' selected>60%</option>
                  @else
                    <option value='60'>60%</option>
                  @endif
                  @if(70 == $location->percentPass)                  
                    <option value='70' selected>70%</option>
                  @else
                    <option value='70'>70%</option>
                  @endif  
                  @if(80 == $location->percentPass)                  
                    <option value='80' selected>80%</option>
                  @else
                    <option value='80'>80%</option>
                  @endif
                  @if(90 == $location->percentPass)                  
                    <option value='90' selected>90%</option>
                  @else
                    <option value='90'>90%</option>
                  @endif
                  @if(100 == $location->percentPass)                  
                    <option value='100' selected>100%</option>
                  @else
                    <option value='100'>100%</option>
                  @endif           
              </select>
         </div>     
         <div>
         <h5>Status<label>*</label></h5>
         <label class="switch">
           @if($location->status ==1)
            <input type="checkbox" checked name="status">
            @else
            <input type="checkbox"  name="status">
            @endif
            <span class="slider round"></span>
        </label>
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
