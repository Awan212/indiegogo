<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // return to admin dashboard view
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function user_list()
    {
        return view('admin.pages.users.index', [
            'users' => User::where('role_id', 2)->get()
        ]);
    }
}
