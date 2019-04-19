@extends('layout.layout')
@section('content')
<div class="content login-box">
	<div class="login-main">
		<div class="wrap">
			<h1>Input information</h1>			
			<div class="register-grids">
				{!! Form::open(['route' =>  ['ques.post', 'loca' => $name], 'class' => 'form-horizontal']) !!}
						<div class="register-top-grid">
							<h3>Input form</h3>
							<div>
								<h5>Name<label>*</label></h5>
								<input type="text" name="name" class="form-control" required > 
							</div>                            
                            <div>
								<h5>Email<label>*</label></h5>
								<input type="email" name="email" class="form-control" required> 
							</div>
                            <div>
								<h5>Phone<label>*</label></h5>
								<input type="text" name="phone" class="form-control" required > 
							</div>
						</div>
						<div class="clear"> </div>					
						<div class="clear"> </div>
						<input type="submit" value="submit" />
						<a href="{{ route('home','admin') }}" class="btn btn-danger" style="margin-left: 20px;">Cancel</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript">
		sessionStorage.setItem("timeLeft", 600);
	</script>
@stop

