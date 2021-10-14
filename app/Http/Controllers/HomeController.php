<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Complaint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $complaintsCount = Complaint::all()->count() ;
        $complaintsApproved = Complaint::where('status',"approved")->count() ;

        $commentsCount = Comment::all()->count();
        $usersCount = User::all()->count();
        $complaints = Complaint::all();

        return view('pages.dashboard',compact('complaintsCount','complaintsApproved','commentsCount','usersCount','complaints'));
    }
}
