<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        $categoryCount = Category::all()->count();
        $userCount = User::all()->count();


        return view('admin.dashboard.index', compact([ 'categoryCount', 'userCount']));
    }
}
