@extends('layouts.mainapp')
@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Profile</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Complaint</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10">Hanna Gover</h4>
                        <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <font class="font-medium">254</font>
                                </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <font class="font-medium">54</font>
                                </a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile"
                            role="tab">Complaint</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab">Comments</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane " id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user"
                                            class="img-circle" /> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)" class="link">John Doe</a> <span
                                                class="sl-date">5 minutes ago</span>
                                            <blockquote class="m-t-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt <button type="submit"
                                                    class="btn btn-sm btn-danger waves-effect waves-light m-r-10">Delete</button>

                                            </blockquote>

                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div>
                                    <label for="" class="card-title m-t-10">Add comment</label>
                                    <form action="">
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                        <br>
                                        <button type="submit"
                                            class="btn btn-sm btn-success waves-effect waves-light m-r-10">Comment</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">Johnathan Deo</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">(123) 456 7890</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">johnathan@admin.com</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">London</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac, enim.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries </p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</p>
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50%
                                    Complete</span> </div>
                            <div class="row">
                                <div style="padding-right:2px;padding-top:5px;">
                                    <a href="" class="btn btn-sm btn-success">Approve</a>
                                    <a href="" class="btn btn-sm btn-warning">Reject</a>
                                </div>
                                <div style="padding-left:70%; float:right; padding-top:5px;">
                                    <a href="" style="" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
</div>


@endsection
