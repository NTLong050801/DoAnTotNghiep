<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('authentication.layouts.sign-in');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
//        dd($request);
        $request->authenticate();

        $request->session()->regenerate();
       // return redirect()->intended(RouteServiceProvider::HOME);
        $title = "Trang chủ";

        $role = Auth::user()->role;
        if($role == 2){
            return redirect()->route('admin.home') ;
        }else if($role == 1){
            return redirect()->route('teacher.home',[
                'title' => $title
            ]) ;
        } else{
            return redirect()->route('student.home',[
                'title' => $title
            ]) ;
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
