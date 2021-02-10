<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard()
    {
        $users = User::all()->count();

        return view('backoffice.dashboard',['users' => $users]);
    }
}
