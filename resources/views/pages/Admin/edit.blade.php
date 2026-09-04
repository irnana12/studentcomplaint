@extends('layouts.app')

@section('title', 'Admin Page')

@section('content')
<div class="container" py-4></div>
<h1 class="page-title mb-3">Update Admin</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin.admin.update', encrypt($user->id)) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.admin.index') }}" class="btn btn-secondary">
                    <span class="fa fa-times-circle"></span>
                        Cancel
                </a>
            </form>
        </div>
    </div>
    
@endsection