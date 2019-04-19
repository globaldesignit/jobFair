@extends('layout.layout')
@section('content')
{!! Form::open(['route' => ['contest.post', 'loca'=> $loca], 'class' => 'form-horizontal']) !!}

<p> The test will be out in <span id="countdowntimerM"> </span> minutes <span id="countdowntimerS">  </span> seconds</p>

@for($i = 0 ; $i < count($questions) ; $i++)
		<h4>Q{{$i+1}}:</h4>	{!! $questions[$i]->question !!}	
		</br>
		{{Form::radio(  $questions[$i]->id,  $questions[$i]->ans1,  false, array('id'=> $questions[$i]->id ))}}
		<span> {{ $questions[$i]->ans1 }}</span></br>
		{{Form::radio(  $questions[$i]->id,  $questions[$i]->ans2,  false, array('id'=> $questions[$i]->id ))}}
		<span> {{ $questions[$i]->ans2 }}</span></br>
		{{Form::radio(  $questions[$i]->id,  $questions[$i]->ans3,  false, array('id'=> $questions[$i]->id ))}}
		<span> {{ $questions[$i]->ans3 }}</span></br>
		{{Form::radio(  $questions[$i]->id,  $questions[$i]->ans4,  false, array('id'=> $questions[$i]->id  ))}}
		<span> {{ $questions[$i]->ans4 }}</span></br>
		</br>
		
@endfor
<input type="hidden" name="countQues" value="{{$countQues}}"/>
<input type="submit" id="submit" value="submit" />
{!! Form::close() !!}
@stop
@section('script')
<script type="text/javascript">		
	var timeleft = sessionStorage.getItem("timeLeft");
	var timeM = parseInt((sessionStorage.getItem("timeLeft"))/60);
	document.getElementById("countdowntimerM").textContent = timeM;
	document.getElementById("countdowntimerS").textContent = timeleft % 60;
    var downloadTimer = setInterval(function(){
	if(timeleft >0)
	{
    timeleft--;
	sessionStorage.setItem("timeLeft", timeleft);
	}	
    document.getElementById("countdowntimerS").textContent = timeleft % 60;
	timeM = parseInt((sessionStorage.getItem("timeLeft")-1)/60);
	document.getElementById("countdowntimerM").textContent = timeM;
	if(timeleft <=0)
	{
		alert("Time out!!")
		form =document.getElementById("submit");
		form.click();
	}
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);

</script>
@stop