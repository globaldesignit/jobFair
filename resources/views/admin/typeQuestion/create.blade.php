@extends('layout.layout')
@section('content')
<div class="content login-box">
	<div class="login-main">
		<div class="wrap">
			<h1>CREATE NEW TYPE</h1>
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
				{!! Form::open(['route' => 'type.store', 'class' => 'form-horizontal']) !!}
						<div class="register-top-grid">
							<h3>CREATE NEW TYPE</h3>
							<div>
								<h5>Type<label>*</label></h5>
								<input type="text" name="type" class="form-control" required value="{{ old('Name') }}"> 
							</div>                            
                            <div>
								<h5>Limit<label>*</label></h5>
								<input type="text" name="limit" class="form-control" required value="{{ old('Name') }}"> 
							</div>   
                            <div>
                                <h5>Level test<label>*</label></h5>
                                <select name="level" id="level">
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
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

