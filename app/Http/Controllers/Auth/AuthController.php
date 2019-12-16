<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Users\UsersServiceInterface;
use Exception;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AuthController extends Controller
{

    protected $UsersServiceInterface;
    protected $viewPath = "admin.";

    public function __construct(UsersServiceInterface $UsersServiceInterface)
    {
        $this->UsersServiceInterface = $UsersServiceInterface;
    }

    public function showLoginForm()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        try {
            // $params = new stdClass;
            // $params->email = $request->input('email');
            // $params->password = $request->input('password');

            // $login = $this->UsersServiceInterface->verifyLogin($params);

            $credentials = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];

            //Auth::attempt($credentials) &&

            if (Auth::attempt($credentials)) {
                //Auth::guard('email');
                //Auth::guard('nome');
                return redirect()->route('admin');
            }

            return redirect()->back()->withInput($request->all())->withErrors(['Os dados informados não conferem!']);
        } catch (Exception $exception) {
            // dd($exception->getMessage());
            return response()->json([
                'code' => 400,
                'message' => 'Tivemos um erro interno, por favor entre em contato com o Administrador!'
            ], 400);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (Auth::check() === true) {
            return view($this->viewPath.'index');
        }

        return redirect()->route('login');
    }
}
