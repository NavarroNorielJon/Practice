@extends('layouts.app')

@section('content')
<div class="container" action="get">
    <form action="/employees" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="col-8 offset-2">
            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label">First Name</label>
                    <input id="first_name"
                        type="first_name"
                        class="form-control @error('first_name') is-invalid @enderror"
                        name="first_name" required autocomplete="new-first_name">

                @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label">last_name</label>
                    <input id="last_name"
                        type="last_name"
                        class="form-control @error('last_name') is-invalid @enderror"
                        name="last_name" required autocomplete="new-last_name">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="company_name" class="col-md-4 col-form-label">Company_name</label>
                    <input id="company_name"
                        type="company_name"
                        class="form-control @error('company_name') is-invalid @enderror"
                        name="company_name" required autocomplete="new-company_name">

                @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">E-mail</label>
                    <input id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" required autocomplete="new-email">

                @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label">Phone Number</label>
                    <input id="phone_number"
                        type="phone_number"
                        class="form-control @error('phone_number') is-invalid @enderror"
                        name="phone_number" required autocomplete="new-phone_number">

                @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row  pt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
