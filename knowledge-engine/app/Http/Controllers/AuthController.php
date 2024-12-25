<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function socialAuthCallback(string $provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        // save the user
        $u = User::where('email', $user->getEmail())->first();

        if ($u) {
            Auth::login($u, true);
            return redirect()->to(route("home", ['l' => $provider]));
        }

        $u = new User();

        $names = preg_split("/\s+/", $user->getName(), -1, PREG_SPLIT_NO_EMPTY);
        $names = empty($names) ? [] : $names;
        
        $length = count($names);
        $firstName  = $password = $email = "";

        if ($length == 1) {
            $firstName = $names[0];
        } 
        if ($length >= 2) {
        
            $firstName = implode(" ", $names);
        }

        if ($length == 0) {
            $firstName = '-';
          
        } 

        // $u->profile_photo_path = $user->getAvatar();
        $email = $user->getEmail();
        // $u->oauth_token = $user->token;
        $password = uniqid() . uniqid();
        $_password = Hash::make($password);

        $u = User::create([
            'name' => $firstName,
            'email' => $email,
            'password' => $_password,
        ]);


        $u->assignRole('customer');

        Auth::login($u, true);

       

        return redirect()->to(route("home", ['su' => $provider, 'l' => $provider]));
    }

    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }
}
