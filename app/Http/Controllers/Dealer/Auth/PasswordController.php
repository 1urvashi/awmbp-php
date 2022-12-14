<?php

namespace App\Http\Controllers\Dealer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    protected $linkRequestView = 'dealer.auth.passwords.email';
    protected $resetView = 'dealer.auth.passwords.reset';
    protected $redirectTo = 'dealer';
    protected $guard = 'dealer';
    protected $broker = 'dealers';
    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
