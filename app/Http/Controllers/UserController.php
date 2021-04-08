<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
//use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    protected $users;

    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function index()
    {
        $user= DB::table('users')->get();

        return View::first(['user.index'],$user);

//        return view('user.index')->with('user',$user);
    }

    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile',['user',$user]);
    }
}
