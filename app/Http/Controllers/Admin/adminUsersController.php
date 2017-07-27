<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class adminUsersController extends Controller
{
    public function getAdmin()
    {
        if(!\Auth::check())
            return redirect('/');

        return view('admin.index')
            ->with('title','Admin Panel');
    }


} 