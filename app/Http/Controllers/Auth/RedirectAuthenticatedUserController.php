<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eatery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectAuthenticatedUserController extends Controller
{
    public function home()
    {
        if (Auth::user()->rule == 'user') {
            return redirect()->route('home.index')->with('success', ('Bienvenu.e ' . Auth::user()->name . ' ' . (Auth::user()->surname ? Auth::user()->surname : ' ') . '!'));
        } elseif (Auth::user()->rule == 'eatery') {
            return redirect()->route('eatery.index')->with('success', ('Bienvenu.e ' . Auth::user()->eatery->label . ' !'));
        } elseif (Auth::user()->rule == 'deliverer') {
            return redirect()->route('deliverer.index')->with('success', ('Bienvenu.e ' . Auth::user()->name . ' ' . (Auth::user()->surname ? Auth::user()->surname : ' ') . '!'));
        } elseif (Auth::user()->rule == 'admin') {
            return redirect()->route('');
        } else {
            return Auth::logout();
        }
    }
}
