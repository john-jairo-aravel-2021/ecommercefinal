<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
 
 use AuthennticatesUsers;




 protected $redirectTo = '/home';

 public function __construct()
 {
     $this->middleware('guest',['except' => 'logout']);
 }

}
