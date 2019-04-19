@extends('layout.layout')
@section('content')
<div class="content login-box">
	<div class="login-main">
		<div class="wrap">
			<h1>CREATE NEW QUESTION</h1>
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
			<div class="register-grids">
				{!! Form::open(['route' => 'ques.store', 'class' => 'form-horizontal']) !!}
						<div class="register-top-grid">
							<h3>CREATE NEW QUESTION</h3>
							<div>
								<h5>Question<label>*</label></h5>
								<textarea type="text" name="question" class="form-control" required id="article-ckeditor"> </textarea>
							</div>							
							
                            <div>
                                <h5>Answer 1<label>*</label></h5>
                                <input rows="4"  type="text" name="ans1" class="form-control" required />							
                            </div>	
                            <div>
								<h5>Answer 2<label>*</label></h5>
                                <input  type="text" name="ans2" class="form-control" required/>
                        
                            </div>	
                            <div>
								<h5>Answer 3<label>*</label></h5>
                                <input rows="4"  type="text" name="ans3" class="form-control" required/>
                            </div>	 
                            <div>
								<h5>Answer 4<label>*</label></h5>
                                <input rows="4"  type="text" name="ans4" class="form-control" required />
                            </div>	                            
                            <div>
								<h5>Correct Answer<label>*</label></h5>
								1 <input type="radio" name="correctAns" value="1" required>
                                2 <input type="radio" name="correctAns" value="2" required>
                                3 <input type="radio" name="correctAns" value="3" required>
                                4 <input type="radio" name="correctAns" value="4" required>
                            </div>   
                            <div>
                                <h5>Level<label>*</label></h5>
                                <select name="level" id="level">
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                </select>              
                            </div>	
                            <div>
                                <h5>Type<label>*</label></h5>
                                <select name="typeQues" id="level">
                                @foreach($typeQues->all() as $type)
                                <option value='{{$type->type}}'>{{$type->type}} - Level {{$type->level}}</option>
                                @endforeach                              
                                </select>              
                            </div>	
						</div>
						<div class="clear"> </div>					
						<div class="clear"> </div>
						<input type="submit" value="submit" />
						<a href="{{ route('user.index','admin') }}" class="btn btn-danger" style="margin-left: 20px;">Cancel</a>
				{!! Form::close() !!}
			</div>
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
