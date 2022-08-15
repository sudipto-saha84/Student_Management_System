@extends('admin.master')

@section('title')
    manage teacher
@endsection
@section('body')

    <section class="py-5">
        <div class="container row">
            <div class="col-md-12 px-0">
                <div class="card card-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Code</th>
                            <th scope="col">Address</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>{{ $teacher->code }}</td>
                                <td>{{ substr_replace($teacher->address, '....', 30) }}</td>
                                <td>{{ substr_replace($teacher->description, '....', 30) }}</td>
                                <td>{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <img src="{{ asset($teacher->image) }}" alt="image" style="height: 70px; width: 80px">
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('teacher-status', ['id' => $teacher->id]) }}" class="btn float-left mx-1 my-1 btn-sm btn-{{ $teacher->status == 1 ? 'success' : 'secondary' }}">
                                            <i class="fas fa-{{ $teacher->status == 1 ? 'eye' : 'eye-slash' }} "></i>
                                        </a>
                                        <a href="{{ route('edit-teacher', ['id' => $teacher->id, 'title' => str_replace(' ', '-', $teacher->title)]) }}" class="btn my-1 float-left mx-1 btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" onclick="deleteTeacher({{$teacher->id}})" class="btn mx-1 my-1 float-left btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <form action="{{ route('delete-teacher', ['id' => $teacher->id]) }}" method="POST" id="delete{{$teacher->id}}">
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
        function deleteTeacher(id) {
            event.preventDefault();
            var teacher = confirm('Are you want to delete this teacher??')

            if (teacher){
                document.getElementById('delete'+id).submit();
            }
        }
    </script>

@endsection
