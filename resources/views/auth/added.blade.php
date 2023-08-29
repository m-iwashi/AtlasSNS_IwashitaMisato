@extends('layouts.logout')

@section('content')

<div id="clear">
  <p> {{ Session::get('name')}} さん</p><!--受取の記述の仕方がわからない-->
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection


<!-- RegisterControllerで登録処理した情報から〇〇の部分に$usernameを引っ張ってきたい。
セッション自体に記述する形式があるのか？セッションを用いてユーザー名を表示させる方法とあるからセッションの記述の仕方を探せばいいとは思うがよくわからない-->
