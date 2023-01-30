@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <!-- add user button -->
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary float-right">
                        {{ __('Add User') }}
                    </a>
                </div>
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
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Client</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ ($user->client !=null ? $user->client->name: '') }}</td>

                                        <td>
                                            <!-- delete -->
                                            <form action="{{ route('users.show', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <!-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">
                                                    {{ __('Show') }}
                                                </a> -->
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success">
                                                    {{ __('Edit') }}
                                                </a>

                                                <!-- alert delete -->
                                                <script>
                                                    function confirmDelete() {
                                                        var result = confirm("Want to delete?");
                                                        if (result) {
                                                            return true;
                                                        } else {
                                                            return false;
                                                        }
                                                    }
                                                </script>
                                                <!-- end alert delete -->

                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirmDelete()">
                                                    {{ __('Delete') }}
                                                </button>

                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection