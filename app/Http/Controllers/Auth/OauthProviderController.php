<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class OauthProviderController extends Controller
{
    //
    public  function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public  function callback($provider){
            $socialUser = Socialite::driver($provider)->user();

            $findUser = User::where('email', $socialUser->email)->first();
            // dd($findUser->provider);
            if($findUser) {
                if($findUser->provider_id == null && $findUser->provider == null) {
                    return redirect(route('login'))->withErrors(['email' => 'This email is associated with a different login method']);
                } else {
                   $findUser->update([
                        'name' => $socialUser->name,
                        'email' => $socialUser->email,
                        // 'email_verified_at' =>now(),
                        'provider' => $provider,
                        'provider_token' => $socialUser->token,
                        'authprovider_id' => $socialUser->id,
                        'avatar'=>$socialUser->avatar,
                        'provider_refresh_token' => $socialUser->refreshToken,
                    ]);
                    $user = User::where('email', $socialUser->email)->first();
                }
            } else {
                $user=User::create([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    // 'email_verified_at' => now(),
                    'provider' => $provider,
                    'provider_token' => $socialUser->token,
                    'authprovider_id' => $socialUser->id,
                    'avatar'=>$socialUser->avatar,
                    'provider_refresh_token' => $socialUser->refreshToken,
                ]);
            }
            Auth::login($user);
          
            return redirect('/dashboard');
     
    }
}
