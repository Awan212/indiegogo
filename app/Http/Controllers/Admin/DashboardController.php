<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // return to admin dashboard view
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
