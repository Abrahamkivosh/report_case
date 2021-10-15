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
                                        <label>User Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                <input type="file" name="image" value="{{ $user->image }}" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Enter number">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" name="role" value="{{ $user->role }}" class="form-control"
                                            placeholder="Enter address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" value="{{ $user->password }}" class="form-control"
                                            placeholder="Enter address">
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
