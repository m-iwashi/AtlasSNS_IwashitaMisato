<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function register(Request $request){
        if($request->isMethod('post')){

            $username = $request->input('username');
            $mail = $request->input('mail');
            $password = $request->input('password');

            User::create([
                'username' => $username,
                'mail' => $mail,
                'password' => bcrypt($password),
            ]);
            //Requestインスタンスを経由記述？
            //存在チェック
            if ($request->session()->has('name')){

            }
            //セッションへ値を保存
            $request->session()->put('key', 'value');
            //'name'というセッションキーに'TEST'をセット
            $request->session()->put('name', 'TEST');
            //フォームからのname属性をセッションに保存場合
            $request->session()->put('name', $request->input('name'));
            //セッション「name」の値を読み込み。
            $name = $request->session()->get('name');
            //セッションの値全てを取得
            $data = $request->session()->all();
            //指定アイテム削除
            $request->session()->forget('key');
            //全削除
            $request->session()->flush();

            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(){
        return view('auth.added');
    }
}
