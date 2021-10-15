@extends('layouts.mainapp')
@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Basic Form</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Users</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Update Details</h3>


                <br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('update.user',$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label>User Name <span style="color: red;">*</span></label>
                                <input type="text" name="name" value="{{ $user->name }}" required class="form-control @error('name') is-invalid @enderror" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address<span style="color: red;">*</span></label>
                                <input type="text" name="email" value="{{ $user->email }}" required class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Phone Number<span style="color: red;">*</span></label>
                                        <input type="text" name="phone" value="{{ $user->phone }}" required class="form-control @error('phone') is-invalid @enderror" placeholder="Enter number">
                                    </div>

                                    @if (auth()->user()->role == "admin")

                                    <div class="form-group">
                                        <label for="role">Role<span style="color: red;">*</span></label>

                                        <select id="role" class="form-control @error('role') is-invalid @enderror" name="role">
                                            <option value="{{ $user->role }}" selected >{{ $user->role }}</option>
                                            <option value="user" >User</option>
                                            <option value="admin">Admin</option>
                                        </select>

                                    </div>

                                    @endif

                                    <div class="form-group">
                                        <label>Old Password<span style="color: red;">*</span></label>
                                        <input type="password" name="old_password" required value="" class="form-control @error('old_password') is-invalid @enderror"
                                            placeholder="Your Old Password">
                                    </div>

                                    <div class="form-group">

                                        <label>{{ __('New Password') }}</label>
                                        <input type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">

                                        <label>{{ __('Confirm password') }}</label>
                                        <input type="password" name="password_confirmation" value="" class="form-control"
                                            placeholder="Confirm password">
                                    </div>


                                </div>


                            </div>

                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
