@extends('admin.master')

@section('title')
    Create User
@endsection


@section('body')

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">Create New User</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $key => $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form action="{{ route('new-user', ['id' => isset($user->id) ? $user->id : null]) }}" method="post">
                                @csrf
                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ isset($user->name) ? $user->name : '' }}" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" value="{{ isset($user->email) ? $user->email : '' }}" class="form-control" name="email">
                                    </div>
                                </div>
                                @if(!$user)
                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                @endif
                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label">Role</label>
                                    <div class="col-md-9">
                                        @foreach($roles as $key => $role)
                                            <label class="mx-2" ><input type="radio" name="role" value="{{ $role->role_name }}" {{ (isset($user->id) ? ($user->role == $role->role_name ? 'checked' : '') : ($key == 1 ? 'checked' : '')) }}>{{ $role->display_name }}</label>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" value="{{ isset($user->id) ? 'Update This User' : 'Create New User' }}" class="btn w-100 btn-success" name="btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
