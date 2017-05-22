<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * @var Guard
     */
    private $auth;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

     /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider, Guard $auth,Request $request)
    {
        $this->auth=$auth;
        $hasCode = $request->has('code');

        return Socialite::driver($provider)->redirect();
        //if ( ! $hasCode) return $this->getAuthorizationFirst($provider);
        
    }
    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return Redirect::to('/home');
        }

        $authUser = $this->findOrCreateUser($user,$provider);

        Auth::login($authUser, true);

        return redirect($this->redirectTo);

    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        dd($user);

        //Caso github
        if($user->name == null)
            $user->name = $user->nickname;

        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => null,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    private function getAuthorizationFirst($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

     /**
     * @return \Laravel\Socialite\Contracts\User
     */
    private function getProviderUser($provider)
    {
        return Socialite::with($provider)->user();
    }
}


