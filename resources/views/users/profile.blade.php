@extends('layouts.app')

@section('content')
    <div class="span9">
        <div class="row-fluid">
            <div class="page-header">
                <h1>My Profile <small>Update info</small></h1>
            </div>

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



            <form action="{{ url('profile')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="name" name="name" value="{{$user->name}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" value="{{$user->email}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Password</label>
                        <div class="controls">
                            <input id="password" type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Confirm Password</label>
                        <div class="controls">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-actions">
                        <input type="submit" class="btn btn-success btn-large" value="Save Changes" />
                        <a class="btn"  href="{{ url('/users') }}">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
