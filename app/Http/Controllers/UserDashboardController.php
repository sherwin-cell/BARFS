<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Points to the new index.blade.php
        return view('user.index');
    }
}
