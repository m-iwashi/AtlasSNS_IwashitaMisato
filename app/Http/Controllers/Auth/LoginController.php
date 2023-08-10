<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            //isMethod()で引数とHTTP動詞(ここではpost?)が一致するか判定
            //postリクエストならpostを返す


            $data=$request->only('mail','password');
            $request->session()->regenerate(); //セッションを再生成？
            //セッション＝送ったデータを一時的にサーバ側に保存する機能

            // ログインが成功したら、トップページへ
            //↓ログイン条件は公開時には消すこと
            if(Auth::attempt($data)){
                return redirect('/top'); //topに戻る
                //attemptメソッドでDBに該当ユーザーを照合Auth::attemptで条件分岐(attempt=試す)
            }

        }
        //viewを表示してください(viewのauthフォルダのlogin.blade.php)階層構造の記載
        return view("auth.login");
    }

    public function getLogout(){
        Auth::logout();
        return view("auth.login");
    }
}
