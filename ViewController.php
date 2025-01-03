<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
   
    public function present()
    {
        return view('present');
    }
    public function permission()
    {
        return view('permission');
    }
    public function leave()
    {
        return view('leave');
    }
    public function report()
    {
        return view('report');
    }
    public function presenttable()
    {
        return view('presenttable');
    }
    public function permissiontable()
    {
        return view('permissiontable');
    }
    public function leavetable()
    {
        return view('leavetable');
    }
}
