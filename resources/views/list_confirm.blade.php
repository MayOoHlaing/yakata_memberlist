<!doctype html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="robots" content="noindex,nofollow">
  <link href="common/css/set.css" rel="stylesheet" type="text/css" />
  <title>屋形船の窓口お申込内容</title>
</head>

<body>
  <div id="wrapper">
    <header>
      <h1><img src="common/img/head_logo.png" width="185" height="46" alt="屋形船の窓口" /></h1>
    </header>
    <main>
      <h2 class="pageTit">乗船内容</h2>
      <div class="baseList">
        <dl>
          <dt>出船月日</dt>
          <dd>2023年04月20日</dd>
          <dt>船宿名</dt>
          <dd>〇〇〇屋形船</dd>
          <dt>出船時間</dt>
          <dd>17時20分</dd>
          <dt>出船場所</dt>
          <dd>〇〇乗り場</dd>
          <dt>下船時間</dt>
          <dd>20時30分</dd>
          <dt>下船場所</dt>
          <dd>〇〇乗り場</dd>

        </dl>
      </div>
      <h2 class="pageTit">乗船名簿登録</h2>
      <form method="POST" name="f1" id="passenger_list_form" action="{{route('memberList.confirm_submit')}}">
        @csrf
        <div class="memberList confirm">
          <ul>
            <?php

            use Illuminate\Support\Facades\Session;

            $param = Session::get('param'); ?>
            @isset($param['data'])
            @foreach ($param['data']['name'] as $i => $name)
            <input type="text" name="data[name][]" value="{{$name}}" hidden />
            <input type="text" name="data[address][]" value="{{ $param['data']['address'][$i] }}" hidden />
            <input type="text" name="data[age][]" value="{{ $param['data']['age'][$i] }}" hidden />
            <input type="text" name="data[gender][]" value="{{ $param['data']['gender'][$i] }}" hidden />
            <input type="text" name="data[contact][]" value="{{ $param['data']['contact'][$i] }}" hidden />
            <li>
              <ul class="info">
                <li data-label="お名前">{{$name}}</li>
                <li data-label="住所">{{ $param['data']['address'][$i] }}</li>
                <li data-label="年齢">{{ $param['data']['age'][$i] }}歳</li>
                <li data-label="性別">{{ $param['data']['gender'][$i] }}</li>
                <li data-label="連絡先">{{ $param['data']['contact'][$i] }}</li>
              </ul>
            </li>
            @endforeach
            @endisset
        </div>

        <div>
          <input type="submit" name="action" id="change_btn" value="内容を修正する" class="change_btn">
          <input type="submit" name="action" id="next_btn" value="この内容で送信する" class="next_btn">
        </div>
      </form>
    </main>
    <footer>
      Copyrights 2002-2018 Cab-Station co.Ltd.[Former HUMAN VEHICLE, INC.]All Rights Reserved.</footer>
  </div>
</body>

</html>