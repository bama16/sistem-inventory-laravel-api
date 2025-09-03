<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataPimpinanController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role', 'pimpinan')->get();
        return view('pages.admin.datapimpinan', compact('User'));
    }
}
