<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNewAdminController extends Controller
{
    public function index() {
        return view('layouts.admin.add-admin');
    }
}