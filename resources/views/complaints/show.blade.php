@extends('layouts.mainapp')
@section('content')

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Read Complaint</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <a
                            href="{{ route('complaints.create') }}">Create New</a> </button>

                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            @can('delete', $complaint)
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{ $complaint->owner->image }}"
                                alt="{{ $complaint->owner->name }}" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10">{{ $complaint->owner->name }}</h4>
                            <h6 class="card-subtitle">{{ $complaint->owner->role }}</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link">
                                        {{-- <i class="icon-people"></i> --}}
                                        <i class="fa fa-book" aria-hidden="true">Complaints</i>
                                        <font class="font-medium"> {{ $ComplaintCount }}</font>
                                    </a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link">
                                        {{-- <i class="icon-picture"></i> --}}
                                        <i class="fa fa-comment" aria-hidden="true"> Comments </i>
                                        <font class="font-medium">{{ $CommmentCount }}</font>
                                    </a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{ $complaint->owner->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ $complaint->owner->phone }}</h6>
                    </div>
                </div>
            </div>
            @endcan
            
            <!-- Column -->
            <!-- Column -->
            @can('delete', $complaint)
            <div class="col-lg-8 col-xlg-9 col-md-7">
            @endcan
            @cannot('delete', $complaint)
            <div class="col-lg-12  col-md-12">
            @endcannot
            
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile"
                                role="tab">Complaint</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home"
                                role="tab">Comments</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane " id="home" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline">
                                    <hr>
                                    @foreach ($complaint->comments as $comment)
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="../assets/images/users/4.jpg"
                                                    alt="{{ $comment->user->name }}" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div><a href="javascript:void(0)"
                                                        class="link">{{ $comment->user->name }}</a> <span
                                                        class="sl-date">{{ $complaint->created_at->diffForHumans() }}</span>
                                                    <blockquote class="m-t-10">
                                                        <div>
                                                            {{ $comment->body }}
                                                        </div>
                                                        @can('delete', $comment)
                                                            <div>



                                                                @include("complaints.components.ComplaintAction",[
                                                                'route'=> route( 'comments.destroy' , $comment),
                                                                'action'=>"delete",
                                                                'name'=>"Delete",
                                                                'method'=> "DELETE",
                                                                'class'=>"btn btn-sm btn-danger"
                                                                ])
                                                            </div>
                                                        @endcan


                                                    </blockquote>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    <hr>

                                    <div>
                                        <label for="" class="card-title m-t-10">Add comment</label>
                                        <form action="{{ route('comments.store',$complaint) }}" method="POST">
                                            @csrf
                                            <textarea name="body" id="" cols="60" rows="10"></textarea>
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
                                <div class="row justify->between ">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Approved By </strong>
                                        <br>
                                        <p class="text-muted">{{ $complaint->admin->name ?? 'Null' }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Status</strong>
                                        <br>
                                        <p class="text-muted">
                                            @include( 'complaints.components.complaintStatus' , ['status' =>
                                            $complaint->status])
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Comments</strong>
                                        <br>
                                        <p class="text-muted">{{ $complaint->comments->count() }}</p>
                                    </div>
                                    {{-- <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">London</p>
                                </div> --}}
                                </div>
                                <hr>
                                <p class="m-t-30">
                                <h2 class=" capitalize ">
                                    {{ $complaint->title }}
                                </h2>

                                </p>
                                <p>
                                    {{ $complaint->body }}
                                </p>

                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50%
                                        Complete</span> </div>
                                <div class="row   pt-4 ">
                                    @can('update', $complaint)
                                    <div class=" col-md-4">
                                        @include("complaints.components.ComplaintAction",[
                                        'route'=> route('complaint.action.taken', $complaint),
                                        'action'=>1,
                                        'name'=>"Approved",
                                        'class'=> "btn btn-sm btn-success"
                                        ])
                                    </div>
                                    <div class=" col-md-4">
                                        @include("complaints.components.ComplaintAction",[
                                        'route'=> route('complaint.action.taken', $complaint),
                                        'action'=>2,
                                        'name'=>"Reject",
                                        'class'=>"btn btn-sm btn-warning"
                                        ])
                                    </div>
                                        
                                    @endcan
                                    @can('delete', $complaint)
                                    <div class="col-md-4 float-right pl-12  ">
                                        @include("complaints.components.ComplaintAction",[
                                        'route'=> route('complaints.destroy', $complaint),
                                        'action'=>'',
                                        'method'=> "DELETE",
                                        'name'=>"Delete",
                                        'class'=>"btn btn-sm btn-danger"
                                        ])
                                    @endcan

                                  
                                 
                                        {{-- <a href="{{ route('com') }}" style="" class="btn btn-sm btn-danger">Delete</a> --}}
                                    </div>


                                    {{-- <a href="" class="btn btn-sm btn-success">Approve</a> --}}
                                    {{-- <a href="" class="btn btn-sm btn-warning">Reject</a> --}}


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
