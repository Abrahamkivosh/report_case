<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComplaintStoreRequest;
use App\Http\Requests\ComplaintUpdateRequest;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize("viewAny",Complaint::class);
        $complaints = Complaint::latest()->get();
        return view('complaints.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("create",Complaint::class);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComplaintStoreRequest $request)
    {
        $this->authorize("create",Complaint::class);

        $data = $request->validated();
        Complaint::create($data) ;
        return redirect()->route("complaint.index")->with("success","Complaint stored successfully wait for approvial") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
        $this->authorize("view",$complaint);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        $this->authorize("update",$complaint);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(ComplaintUpdateRequest $request, Complaint $complaint)
    {
        $this->authorize("update",$complaint);

        $complaint->update($request->validated());
        return back()->with("success","complaint updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $complaint)
    {
        $this->authorize("delete",$complaint);

        $complaint->delete() ;
        return redirect()->route("complaint.index")->with("success","complaint deleted successfully");

    }
}
