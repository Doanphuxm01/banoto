<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Admins\Admin;
use App\Http\Requests\Admin\CreateAdmin;
class LoginController extends Controller
{
   
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

    protected $redirectTo = '/admin/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function login(Request $request){
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            if($this->guard('admin')->attempt(['email' => $email, 'password' =>$password])) {
                return redirect('/admin/home');
            } else {
                return redirect('/admin')->with('error','Email hoặc mật khẩu không đúng!');
            }
        }
    }
    public function register(CreateAdmin $request){
            $params = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role'     => 0,
                'status'   =>0,
            ];
            $registration = Admin::insert($params);
            return redirect('/admin')->with('status','đăng ký thành thông mời bạn đăng nhập');
    }
    public function getRegister(){
        $view = view('backend.auth.register');
        return $view;
    }
    public function logout(){
        $this->guard('admin')->logout();
        return redirect('/admin');
    }

    public function guard()
    {
        return Auth::guard('admin');
    }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }
}
