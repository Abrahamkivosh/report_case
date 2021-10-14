@extends('layouts.mainapp')
@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Complaint Form</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Complaint Form</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Complaint Form</h3>
                <p class="text-muted m-b-30 font-13"> Add Complaint </p>
                <div class="row">
                    <div class="col-md-12 col-md-12">
                        <form>
                            <div class="row">
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Message <span style="color: red">*</span></label>
                                    <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
