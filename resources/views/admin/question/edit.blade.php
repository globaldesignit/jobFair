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
    {!! Form::model($questions, ['method'=>'PATCH', 'action'=>['QuestionController@update', $questions->id],'class' => 'form-horizontal']) !!}

        <div class="control-group">
          <label class="control-label required">Question: </label>
          <div class="controls">
          <textarea type="text" name="question" class="form-control" required value="{{ $questions->question }}" id="article-ckeditor">{{ $questions->question }} </textarea>           
          </div>
        </div>
        <div class="control-group">
          <label class="control-label required">Answer 1: </label>
          <div class="controls">
            <input type="text" name="ans1" class="form-control" required value="{{ $questions->ans1}}" id="taikhoan" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label required">Answer 2: </label>
          <div class="controls">
            <input type="text" name="ans2" class="form-control" required value="{{ $questions->ans2 }}" id="taikhoan" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label required">Answer 3: </label>
          <div class="controls">
            <input type="text" name="ans3" class="form-control" required value="{{ $questions->ans3 }}" id="taikhoan" />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label required">Answer 4: </label>
          <div class="controls">
            <input type="text" name="ans4" class="form-control" required value="{{ $questions->ans4 }}" id="taikhoan" />
          </div>
        </div>
        <div>
            <h5>Level<label>*</label></h5>
              <select name="level" id="level">
                 @if(1 == $questions->level)                  
                    <option value='1' selected>1</option>
                  @else
                    <option value='1'>1</option>
                  @endif    
                  @if(2 == $questions->level)                  
                    <option value='2' selected>2</option>
                  @else
                    <option value='2'>2</option>
                  @endif
                  @if(3 == $questions->level)                  
                    <option value='3' selected>3</option>
                  @else
                    <option value='3'>3</option>
                  @endif
                  @if(4 == $questions->level)                  
                    <option value='4' selected>4</option>
                  @else
                    <option value='4'>4</option>
                  @endif
                  @if(5 == $questions->level)                  
                    <option value='5' selected>5</option>
                  @else
                    <option value='5'>5</option>
                  @endif            
              </select>
         </div>
         <div>
							 	<h5>Correct Answer<label>*</label></h5>
                 @if($questions->ans1 == $questions->correctAns)   
                 1 <input type="radio" name="correctAns" value="{{$questions->ans1}}" required checked>
                 @else
                 1 <input type="radio" name="correctAns" value="{{$questions->ans1}}" required >
                 @endif
                 @if($questions->ans2 == $questions->correctAns)   
                 2 <input type="radio" name="correctAns" value="{{$questions->ans2}}" required checked>
                 @else
                 2 <input type="radio" name="correctAns" value="{{$questions->ans2}}" required >
                 @endif
                 @if($questions->ans3 == $questions->correctAns)   
                 3 <input type="radio" name="correctAns" value="{{$questions->ans3}}" required checked>
                 @else
                 3 <input type="radio" name="correctAns" value="{{$questions->ans3}}" required >
                 @endif
                 @if($questions->ans4 == $questions->correctAns)   
                 4 <input type="radio" name="correctAns" value="{{$questions->ans4}}" required checked>
                 @else
                 4 <input type="radio" name="correctAns" value="{{$questions->ans4}}" required >
                 @endif						    
          </div>   
         <div>
            <h5>Type<label>*</label></h5>
                  <select name="typeQues" id="level">                  
                 @foreach($typeQues->all() as $type)
                  @if($type->type == $questions->typeQues)                  
                    <option value='{{$type->type}}' selected>{{$type->type}}</option>
                  @else
                    <option value='{{$type->type}}'>{{$type->type}} - Level {{$type->level}}</option>                    
                  @endif
                 @endforeach                                         
             </select>              
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
@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@stop
