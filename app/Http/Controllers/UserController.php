<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function sign_in(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'     => 'required|string|email',
            'password'  => 'required|string'
        ]);

        if (!$validator->fails()) {

            if (Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
                return redirect()->intended(route('home'));
            } else $validator->getMessageBag()->add('password', 'Password or E-mail are wrong!');


        }

        return back()->withErrors($validator)->withInput();

    }

    public function sign_up(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username'  => 'required|string|min:2|max:30|unique:users',
            'email'     => 'required|string|email|unique:users',
            'password'  => 'required|string|min:6|max:255'
        ]);

        if (!$validator->fails()) {

            $user = User::create([
                'username'  => $request->username,
                'email'     => $request->email,
                'password'  => Hash::make($request->password)
            ]);

            Auth::login($user);

            return redirect()->intended(route('home'));

        }

        return back()->withErrors($validator)->withInput();

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('home'));
    }

    public function updateHeader(Request $request)
    {
        $header_path = $request->file('header')->store('headers');
        return User::where('id', Auth::id())->update(['header' => $header_path]);
    }

    public function updateAvatar(Request $request)
    {
        $avatar_path = $request->file('avatar')->store('avatars');
        return User::where('id', Auth::id())->update(['avatar' => $avatar_path]);
    }

    public function subscribe(Request $request)
    {

        if (Subscribe::where([
            ['user_id', Auth::id()],
            ['channel_id', $request->get('id')]
        ])->exists()) {

            Subscribe::where([
                ['user_id', Auth::id()],
                ['channel_id', $request->get('id')]
            ])->delete();

            return 0;

        } else {

            Subscribe::create([
                'user_id' => Auth::id(),
                'channel_id' => $request->get('id')
            ]);

            return 1;

        }

    }

}
