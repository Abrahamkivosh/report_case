<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ComplaintStoreRequest;
use App\Http\Requests\ComplaintUpdateRequest;

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
        return view('complaints.index',compact("complaints"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("create",Complaint::class);

        return view('complaints.create');
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
        $data['owner_id'] = Auth::user()->id ;
        $this->storeImage($request,$data);
        Complaint::create($data) ;
        return redirect()->route("complaints.index")->with("success","Complaint stored successfully wait for approvial") ;
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
        $ComplaintCount = $complaint->owner->complaints->count() ;
        $CommmentCount =  $complaint->owner->comments->count();
        

        return view('complaints.show',compact("complaint","ComplaintCount","CommmentCount"));
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
        return redirect()->route("complaints.index")->with("success","complaint deleted successfully");

    }
    public function actionTaken(request $request,Complaint $complaint)
    {
        # Approve or decline complaint send it is done by admins only
        if ( Auth::user()->role != "admin" ) {
            # code...
            abort(403,"You are not authorized to perform this action !");
        }
        // dd($request->status) ;
        $action = $complaint->update([
            'status'=>$request->status ,
            'admin_id'=>Auth::user()->id
        ]) ;
        // dd($action) ;
        return back()->with("success","Complaint status Updated") ;
    }
    public function storeImage(request $request,$data)
    {
        # code...
        if (file_exists($request->file('image'))) {
            // dd($request);
             // Get filename with extension
             $filenameWithExt = $request->file('image')->getClientOriginalName();

             // Get just the filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

             // Get extension
             $extension = $request->file('image')->getClientOriginalExtension();

             // Create new filename
             $filenameToStore = $filename . '_' . time() . '.' . $extension;

             // Uplaod image
             $path = $request->file('image')->storeAs('public/complaints', $filenameToStore);
             $avatar  = $filenameToStore;
             $data['image'] = $avatar;
         }
    }
}
