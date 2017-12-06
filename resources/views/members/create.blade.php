@extends('members.default')
{{--  @extends('')  --}}
@section('content')




                    <div class="pull-center">

                        <h1 class="mbr-section-title display-1">Welcome to Meeting Room Coordinator App</h1>
                    </div>

                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('members.index') }}"> Back</a>
                    </div>
                
                             </br>
                             </br>
                             </br>
                             </br>
                            <div class="container">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {!! Form::open(array('route' => 'members.store','method'=>'POST')) !!}
                                @include('members.form')
                            {!! Form::close() !!}
                            </div>
                    

  
</section>












    
@endsection