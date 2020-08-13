<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class SignupController extends Controller
{
    public function index() {
        return View('signup');
    }
    public function signin() {
        return view('signin');
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);

        // $user->token;
    }

    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        // $user->token;
    }
}
