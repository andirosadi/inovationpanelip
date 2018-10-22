<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class authentication-loginController extends Controller
{
  use AuthenticatesUsers;
  protected $redirectTo = '/home';
}
