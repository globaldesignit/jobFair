@extends('layout.layout')
@section('content')
<p>Hoàn thành bài kiểm tra!</p><br/>
<h3>Kết quả:</h3>
@if($status==1)
<span>Bạn đã vượt qua bài thi</span>
@else
<span>Bạn đã không vượt qua bài thi</span>
@endif
@stop
