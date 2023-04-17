<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\resetPassword;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {

        return view('authentication.layouts.reset-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'email:users'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $user = User::where('email', $request->email)->first();
//        dd($user->email);
//        $user->update([
//            'remember_token' => Str::random(60),
//        ]);
        $user->remember_token= Str::random(60);
        $user->save();
        Mail::to($user->email)->send(new resetPassword($user));
        Session::flash('success', "Vui lòng kiểm tra email ");
        return redirect()->back();

        return abort(404);

//        return $status == Password::RESET_LINK_SENT
//                    ? back()->with('status', __($status))
//                    : back()->withInput($request->only('email'))
//                            ->withErrors(['email' => __($status)]);

    }
}
