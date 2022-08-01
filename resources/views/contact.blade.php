@extends('master')
@section('title')
Contact
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="{{ route('fullName') }}" method="POST">
                @csrf 
                <div class="mb-3">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" value="{{ isset($result) ? $result : '' }}">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection