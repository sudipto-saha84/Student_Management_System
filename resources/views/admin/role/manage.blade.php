@extends('admin.master')

@section('title')
    manage role
@endsection
@section('body')

    <section class="py-5">
        <div class="container row">
            <div class="col-md-12 px-0">
                <div class="card card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Display name</th>
                            <th scope="col">Role name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->role_name }}</td>
                                <td>{{ $role->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('role-status', ['id' => $role->id]) }}" class="btn float-left mx-1 btn-sm btn-{{ $role->status == 1 ? 'success' : 'secondary' }}">
                                            <i class="fas fa-{{ $role->status == 1 ? 'eye' : 'eye-slash' }} "></i>
                                        </a>
                                        <a href="{{ route('create-role', ['id' => $role->id, 'title' => str_replace(' ', '-', $role->title)]) }}" class="btn float-left mx-1 btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
