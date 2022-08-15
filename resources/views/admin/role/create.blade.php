@extends('admin.master')

@section('title')
    create role
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">Create New Role</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-role', ['id' => isset($role) ? $role->id : '']) }}" method="post">
                                @csrf
                                <div class="row form-group">
                                    <label for="" class="col-md-4 col-form-label">Display Name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ isset($role) ? $role->display_name : '' }}" class="form-control" name="display_name">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="" class="col-md-4 col-form-label">Role  Name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ isset($role) ? $role->role_name : '' }}" class="form-control" name="role_name">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="{{ isset($role) ? 'Update This' : 'Create New' }} Role" class="btn w-100 btn-success" name="btn">
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
