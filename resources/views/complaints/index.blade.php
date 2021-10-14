@extends('layouts.mainapp')
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Complaints</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Complaints </li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <a href="{{ route('complaints.create') }}">Create New</a> </button>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Complaints</h4>
                <h6 class="card-subtitle">All Complaints made</h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Complanant</th>
                                <th>Title</th>
                               
                                @if (auth()->user()->role == "admin")
                                <th>Admin</th>
                                @endif
                                
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($complaints as $complaint)
                            <tr>
                                <td> {{ $complaint->owner->name }} </td>
                                <td> {{ $complaint->title }} </td>
                                @if (auth()->user()->role == "admin")
                                    <td>{{ $complaint->admin->name ?? "Null" }}</td>
                                @endif
                                
                                <td>
                                    @include(  'complaints.components.complaintStatus' , ['status' => $complaint->status]) 
                                 </td>
                                <td><a href="{{ route('complaints.show',$complaint)}}" class="bt btn-sm btn-info">View</a></td>
                            </tr>
                                
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
