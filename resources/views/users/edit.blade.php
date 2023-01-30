@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('User') }}</h1>
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

                <!-- <div class="alert alert-info">
                        Sample table page
                    </div> -->

                <div class="card">
                    <div class="card-body">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'enctype'=> 'multipart/form-data']) !!}

                        <div class="row">

                            <!-- name -->
                            <div class="col col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- email -->
                            <div class="col col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                    {!! Form::text('email', null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>

                            <!-- role -->
                            <div class="col col-md-6">
                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    {!! Form::label('role', 'Role', ['class' => 'control-label']) !!}
                                    {!! Form::select('role', ['app' => 'App', 'client' => 'Client', 'admin'=> 'Admin'],null, ['class' => 'form-control ']) !!}
                                    {!! $errors->first('role', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                            
                            <!-- client -->
                            <div class="col col-md-6">
                                <div class="form-group ">
                                    <label for="client_id" class="control-label">Clients</label>
                                    <select class="form-control " id="client_id" name="client_id">
                                        <!-- for client -->
                                        @foreach($clients as $client)
                                        <option value="{{$client->id}}" {{ $client->id == $user->client_id ? 'selected="selected"':'' }} >{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- button update -->
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        pages
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection