<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::guard('auth')->logout();

        return redirect()->route('login');
    }
}
?>

<form method="POST" action="{{ route('/logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
