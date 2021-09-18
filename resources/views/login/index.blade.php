@extends('layouts.outer')

@section('container')
<div class="row justify-content-center" style="margin-top: 200px">
    <div class="col-lg-6">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <main class="form-signin">
            <h1 class="bi bi-app-indicator text-center"></h1>
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form>
                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
            </form>
            <small class="d-block mt-3">Not registered? <a class="text-danger" href="/register"> Register Now</a></small>
            <p class="mt-2 mb-3 text-muted"><a class="text-decoration-none text-dark" href="https://github.com/haloalfii">@haloalfii</a></p>
        </main>
    </div>
</div>
@endsection