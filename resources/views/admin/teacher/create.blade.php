@extends('admin.master')

@section('title')
    add teacher
@endsection
@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">Add New Teacher</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add-teacher', ['id' => (isset($teacher->id) ? $teacher->id : $item->id }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row form-group">
                                    <div class="col-md-6 p-0">
                                        <label for="1" class="col-form-label col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{ isset($teacher->name) ? $teacher->name : Auth::user()->name }}" id="1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <label for="2" class="col-form-label col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="{{ isset($teacher->email) ? $teacher->email : Auth::user()->email }}" id="2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <label for="3" class="col-form-label col-md-12">Phone</label>
                                        <div class="col-md-12">
                                            <input type="number" name="phone" id="3" value="{{ isset($teacher->phone) ? $teacher->phone : '' }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <label for="5" class="col-form-label col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" id="5" value="{{ isset($teacher->address) ? $teacher->address : '' }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="6" class="col-form-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="6" class="form-control editor1"  cols="30" rows="3">{!! isset($teacher->description) ? $teacher->description : '' !!}</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file" accept="image/*">
                                        <img src="{{ isset($teacher->image) ? asset($teacher->image) : null }}" alt="" class="mt-1" style="height: 70px; width: 80px">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" value="Update This Teacher" class="btn btn-success w-100">
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

