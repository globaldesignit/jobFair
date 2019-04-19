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
      <i class="fa fa-table"></i><h5>List result</h5>
    </div>
    <form action="{{route('res.search')}}" method="POST" role="search" style ="margin-bottom:10px;">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search"
                placeholder="Search..."> <span class="input-group-btn">
                <button type="submit" class="btn btn-default" style="margin-left:10px;">
                    <span class="glyphicon glyphicon-search">Search</span>
                </button>
            </span>
        </div>
    </form>
       <div class="data-grids">    
       <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>            
            <th><a href="{{ route('res.orderBy',['order'=>'localTest']) }}">Location</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'name']) }}">Name</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'mail']) }}">Mail</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'phone']) }}">Phone</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'total']) }}">Total</a></th>     
            <th><a href="{{ route('res.orderBy',['order'=>'result']) }}">Result</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'status']) }}">Status</a></th>
            <th><a href="{{ route('res.orderBy',['order'=>'created_at']) }}">Date</a></th>           
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($results as $res)
            <tr class="gradeX">
              <td>{{ $res->localTest }}</td>
              <td>{{ $res->name }}</td>
              <td>{{ $res->mail }}</td>
              <td>{{ $res->phone }}</td>
              <td>{{ $res->total }}</td>
              <td>{{ $res->result }}</td>
              @if($res->status ==1)
              <td style="color:green; font-weight:bold">Pass</td>
              @else
              <td style="color:red; font-weight:bold">Not pass</td>
              @endif
              <td>{{ $res->created_at }}</td>              
              <td>
              {!! Form::open(['method' => 'delete', 'action' => ['ResultController@destroy', $res->id]]) !!}
              {!! Form::submit('Delete', ['onclick'=>"return confirm('Delete result?')", 'class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>       
</table>
        <div class="containpagination">
            @if(!isset($all))
                {{ $results->render() }}
            @endif
        </div>
        </div>

    </div>
    
  </div>
</div>
@stop
<!-- @section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var status= true;
            console.log(status);
            $('#mail').on('click', function(e) {
                status= !status;
                console.log(status);      
                document.getElementById("mail").href="{{ route('res.orderBy',['order'=>'mail']) }}";       
  
            });            

            $("#search").change(function(e){
                var url = '{{ route('res.search', ['id' => '']) }}'+'/'+this.value;
                console.log(this.value)
               $.ajax(
                    {
                        url: url,

                        type: 'GET',

                    }).done( 
                        function(data) 
                        {                          
                            $('.data-grids').html(data);
                        }

                    );          
            });
            $("#numpage").change(function(e){
                var url = '{{ route('res.index', ['id' => '']) }}'+'/'+this.value;
               $.ajax(
                    {
                        url: url,

                        type: 'GET',

                    }).done( 
                        function(data) 
                        {                          
                            $('qbody').html(data);
                        }

                    );          
            });
            $("#numpage").change();
        });
    </script>
@stop -->
