<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\User;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {

        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);
                session(['user-session' => $finduser]);

                return redirect('/service')->with(['message' => 'Silahkan melanjutkan pengaduan anda', 'color' => 'alert-success']);;

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' =>  bcrypt('123456dummy')
                ]);

                Auth::login($newUser);
                session(['user-session' => $newUser]);
                return redirect('/service')->with(['message' => 'Silahkan melanjutkan pengaduan anda', 'color' => 'alert-success']);;
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
