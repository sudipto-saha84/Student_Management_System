@extends('front.master')


@section('title')
    login
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card m-t-40">
                        <div class=" card-header">
                            <h3 class="text-center">Log In here</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">

                                @csrf
                                <div class="row form-group my-3">
                                    <label for="" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row form-group my-3">
                                    <label for="" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row form-group my-3">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" value="Log In" class="btn w-100 btn-success" name="btn">
                                    </div>
                                </div>
                                <div class="row form-group my-3">
                                    <p class="text-center mb-0">Create new account <a href="{{ route('register') }}">Register Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
