<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function seller()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        //products uploaded by Auth::user()
        $current_user = Auth::user()->id;
        $products = Product::orderBy('id', 'desc')->where('user_id', $current_user)->paginate(20);
        return view('seller.dashboard', compact('categories', 'sub_categories', 'products'));
    }

    public function product()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        //products uploaded by Auth::user()
        $current_user = Auth::user()->id;
        $products = Product::orderBy('id', 'desc')->where('user_id', $current_user)->paginate(20);
        return view('seller.product.products', compact('categories', 'sub_categories', 'products'));
    }

    public function buyer()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('buyer.dashboard', compact('categories', 'sub_categories'));
    }

    public function bbforce()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('bbforce.dashboard', compact('categories', 'sub_categories'));
    }

    
    //reward
    public function reward()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('reward.dashboard', compact('categories', 'sub_categories'));
    }
    
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

    public function sellerSettings()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('seller.settings', compact('categories', 'sub_categories'));
    }

    public function buyerSettings()
    {
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('buyer.settings', compact('categories', 'sub_categories'));
    }
}
