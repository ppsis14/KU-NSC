<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersManagementController extends Controller
{
    public function index() {
        $users = User::where('role', 'USER')->get();
        $admins = User::where('role', 'ADMINISTRATOR')->get();
        return view('layouts.admin.user-management', ['users' => $users, 'admins' => $admins]);
    }

    public function destroy($id) {
        $user = User::findORFail($id);
        dd($user);
        $user->delete();
        return redirect('layouts.admin.user-management');
    }
}
