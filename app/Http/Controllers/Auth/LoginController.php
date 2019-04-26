<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{
    

    use AuthenticatesUsers;

    protected $redirectTo = '/login';

    public function __construct(){

        $this->middleware('guest', ['except' => 'logout']);
    }



    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }

    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //lấy trang login
    public function getLogin(){
        return view('auth.login');
    }

    // Hàm đăng nhập
    public function postLogin(Request $request){

        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        //captcha thành công
        if ($request->input('g-recaptcha-response') || $_SERVER['SERVER_NAME'] == "trungnotes.dev") {

            $throttles = $this->isUsingThrottlesLoginsTrait();

            if ($throttles && $this->hasTooManyLoginAttempts($request)) {
                return $this->sendLockoutResponse($request);
            }

            $credentials = $this->getCredentials($request);

            if (Auth::attempt($credentials, $request->has('remember'))) {

                // tạo biến này để kiểm soát phiên đăng nhập trên filemanager
                session_start();
                $_SESSION['logedin'] = "logedin";
                ini_set("session.cookie_lifetime","2592000");  //tạo session trong 30 days

                return $this->handleUserWasAuthenticated($request, $throttles);
            }

            if ($throttles) {
                $this->incrementLoginAttempts($request);
            }

            return redirect("loginx")
                ->withInput($request->only($this->loginUsername(), 'remember'))
                ->withErrors([$this->loginUsername() => $this->getFailedLoginMessage(),]);

        //captcha lỗi
        }else {

            return redirect("loginx")
                ->withInput($request->only($this->loginUsername(), 'remember'))
                ->withErrors([$this->loginUsername() => "Nhập lại captcha",]);
        }
    }

    // Hàm logout
    public function getLogout(){

        session_start();
        $_SESSION['logedin'] = "null";
        ini_set("session.cookie_lifetime","2592000");  //30 days

        Auth::logout();
        return Redirect::back();
    }
}
