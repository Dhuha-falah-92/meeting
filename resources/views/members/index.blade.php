@extends('layout')
@section('content')
 
        
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Meeting Corrdinator</h2>
                    </div>

                       {{--  @if (session('status'))
                            <div class="badge badge-pill badge-danger">
                            {{ session('status') }}  --}}
                    <div class="pull-right">
                        <a class="btn btn-info" href="{{ route('members.create') }}"> Create New Schdular</a>
                    </div>
                </div>
            </div>
            </br>
            @if ($message = Session::get('success'))
            <span class="badge badge-pill badge-success">{{ $message }}</span>
            
            @endif

            </br>
            </br>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>No</th>
                    
                    <th>Date</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Involves</th>
                    <th>email</th>
                    {{--  <th>Created at</th>
                    <th>Updated at</th>  --}}
                    <th width="280px">Action</th>
                </tr>
            @foreach ($members as $member)
            <tr>
                <td>{{ ++$i }}</td>
               
                <td>{{ $member->date}}</td>
                <td>{{ $member->from}}</td>
                <td>{{ $member->too}}</td>
                 <td>{{ $member->name}}</td>
                  <td>{{ $member->email}}</td>
                {{--  <td>{{ $member->created_at}}</td>
                <td>{{ $member->updated_at}}</td>  --}}
                <td>
                    <a class="btn btn-success" href="{{ route('members.show',$member->id) }}">Show</a>
                    <a class="btn btn-info" href="{{ route('members.edit',$member->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $member->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>
            {!! $members->render() !!}

    {{--  @else 
      <div class="badge badge-pill badge-danger">
                            <h3>Please login </h3>
        </div>
     @endif  --}}
    
@endsection