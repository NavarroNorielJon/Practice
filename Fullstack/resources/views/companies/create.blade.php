@extends('layouts.app')

@section('content')
<div class="container" action="get">
    <form action="/companies" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="col-8 offset-2">
            <div class="form-group row">
                <label for="company_name" class="col-md-4 col-form-label">Company Name</label>
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
                <label for="email" class="col-md-4 col-form-label">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" required autocomplete="new-email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <label for="logo" class="col-md-4 col-form-label">Company Logo</label>
                <input type="file" class="form-control-file" id="logo" name="logo">

                @error('logo')
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
