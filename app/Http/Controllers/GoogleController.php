<?php
  
namespace App\Http\Controllers;
  
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
  
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
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect('/');
    }

    public function redirectToFacebook()
    {

        return Socialite::driver('facebook')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect('/');
    }

      public function redirectToGithub()
    {

        return Socialite::driver('github')->redirect();
        
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        
        return redirect('/');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if($user && !$user->active)
        return redirect()->back()->withErrors(["errorLogin"=>"Your account has been disabled !"]);
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->active = 1;
            $user->save();
        }
        Auth::login($user);
    }
}