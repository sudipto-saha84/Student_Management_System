@extends('admin.master')

@section('title')
    Manage User
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
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('create-user', ['id' => $user->id, 'title' => str_replace(' ', '-', $user->title)]) }}" class="btn mx-1 btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" onclick="deleteUser({{$user->id}})" class="btn mx-1 float-left btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="POST" id="delete{{$user->id}}">
                                            @csrf
                                        </form>
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

    <script>
        function deleteUser(id) {
            event.preventDefault();
            var teacher = confirm('Are you want to delete this User??')

            if (teacher){
                document.getElementById('delete'+id).submit();
            }
        }
    </script>

@endsection
