<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('message', 'User deleted successfully');
    }

    public function banUser($id)
    {
        $user = User::find($id);
        $user->is_banned = true;
        $user->save();

        return redirect()->back()->with('message', 'User banned successfully');
    }

    public function unbanUser($id)
    {
        $user = User::find($id);
        $user->is_banned = false;
        $user->save();

        return redirect()->back()->with('message', 'User unbanned successfully');
    }
}
