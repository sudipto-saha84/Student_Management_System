@extends('front.master')


@section('title')
    register
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card m-t-10">
                        <div class=" card-header">
                            <h3 class="text-center">Sign Up here</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">

                                @csrf
                                <div class="row form-group my-3">
                                    <label for="" class="col-md-4 col-form-label">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="col-md-4 col-form-label">Confirm Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Register" class="btn w-100 btn-success" name="btn">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <p class="text-center mb-0">Have you a account?? <a href="{{ route('login') }}">Login Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

