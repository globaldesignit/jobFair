@extends('layout.layout')
@section('content')
<div class="content login-box">
	<div class="login-main">
		<div class="wrap">
			<h1>CREATE NEW LOCATION</h1>
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
				{!! Form::open(['route' => 'loca.store', 'class' => 'form-horizontal']) !!}
						<div class="register-top-grid">
							<h3>CREATE NEW LOCATION</h3>
							<div>
								<h5>Name<label>*</label></h5>
								<input type="text" name="name" class="form-control" required value="{{ old('Name') }}"> 
							</div>                            
                            <div>
								<h5>Short Name<label>*</label></h5>
								<input type="text" name="shortName" class="form-control" required value="{{ old('Name') }}"> 
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
							<div>
                                <h5>Percent pass<label>*</label></h5>
                                <select name="percentPass" id="percentPass">
                                    <option value='30'>30%</option>
                                    <option value='40'>40%</option>
                                    <option value='50'>50%</option>
                                    <option value='60'>60%</option>
									<option value='70'>70%</option>
									<option value='80'>80%</option>
									<option value='90'>90%</option>
									<option value='90'>100%</option>
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

