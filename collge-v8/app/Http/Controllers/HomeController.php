<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Posts;

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
        $users = User::all();
        $count_students = User::where('user_type','STUDENT')->count();

        $show_posts = Posts::orderby('id', 'desc')->paginate(3);


        return view('dashbord.dashbord',compact('users','count_students','show_posts'));
    }

    public function tables_admin()
    {
        // $table_admins = User::all();
        $table_admins = User::where('user_type' , 'ADMIN')->get();
        return view('Tables.admin', compact('table_admins'));
    }
    public function tables_students()
    {
        // $table_students = User::all();
        $table_students = User::where('user_type' , 'STUDENT')->get();
        // dd($table_students);
        return view('Tables.students', compact('table_students'));
    }
}
