@extends('members.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Members CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('members.create') }}"> Create New Member</a>
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
            <th>Name</th>
            <th>Date</th>
            <th>From</th>
            <th>To</th>
            <th>Email</th>
            <th width="280px">Operation</th>
        </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $member->name}}</td>
        <td>{{ $member->date}}</td>
        <td>{{ $member->from}}</td>
        <td>{{ $member->too}}</td>
        <td>{{ $member->email}}</td>
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
@endsection