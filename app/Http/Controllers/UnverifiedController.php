<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class UnverifiedController extends Controller
{
    //index
    public function index()
    {
        $users = User::orderBy('id', 'desc')->where('is_seller', 1)->with('seller')->where('verified_seller', 0)->get();
        return view('dashboard.verify.index', compact('users'));
    }

    //verify
    public function approveUser($id)
    {
        $user = User::find($id);
        $user->verified_seller = 1;
        $user->save();
        return redirect()->back()->with('success', 'User Verified Successfully');
    }
}
