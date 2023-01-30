@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Add User') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">



                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => 'users.store']) !!}

                        <div class="row">

                            <!-- name -->
                            <div class="col-6 col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- email -->
                            <div class="col-6 col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                    {!! Form::text('email', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- role -->
                            <div class="col-6 col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('role', 'Role', ['class' => 'control-label']) !!}
                                    {!! Form::select('role', ['app' => 'App', 'client' => 'Client', 'admin'=> 'Admin'],null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('role', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- client -->
                            <div class="col-6 col-md-6">
                                <div class="form-group ">
                                    <label for="client_id" class="control-label">Clients</label>
                                    <select class="form-control " id="client_id" name="client_id">
                                        <!-- for client -->
                                        <option value="">Select Client</option>
                                        @foreach($clients as $client)
                                        <option value="{{$client->id}}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <!-- password -->
                            <div class="col-6 col-md-6">
                                <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                                    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                                    {!! Form::text('password', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- password confirmation -->
                            <div class="col-6 col-md-6">
                                <div class="form-group {!! $errors->has('password_confirmation') ? 'has-error' : '' !!}">
                                    {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'control-label']) !!}
                                    {!! Form::text('password_confirmation', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('password_confirmation', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>


                        </div>

                        <!-- button submit -->
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}

                        {!! Form::close() !!}
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix d-none">
                        <!-- pages -->
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection