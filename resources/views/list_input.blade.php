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
      <form method="POST" name="form" id="passenger_list_form" action="{{route('memberList.create_submit')}}">
        @csrf
        <div class="memberList">
          <ul>
            <?php
            use Illuminate\Support\Facades\Session;
            $param = Session::get('param'); ?>
            @isset($param['data'])
            @foreach ($param['data']['name'] as $i => $name)
            
            <li>
              <div class="delete"><img src="common/img/ico_close.svg" alt=""></div>
              <ul class="info">
                <li><input type="text" placeholder="お名前" name="data[name][]" class="validate[required]" value="{{$name}}"></li>
                <li><input type="text" placeholder="住所" name="data[address][]" class="validate[required]" value="{{ $param['data']['address'][$i] }}"></li>
                <li><input type="text" placeholder="年齢" name="data[age][]" class="validate[required,custom[number],maxSize[3]]" value="{{ $param['data']['age'][$i] }}">歳</li>
                <li><select name="data[gender][]" class="validate[required]">
                    <option <?php if ($param['data']['gender'][$i] === '男性') {
                              echo 'selected';
                            } ?>>男性</option>
                    <option <?php if ($param['data']['gender'][$i] === '女性') {
                              echo 'selected';
                            } ?>>女性</option>
                  </select></li>
                <li><input type="text" placeholder="連絡先" name="data[contact][]" class="validate[required]" value="{{ $param['data']['contact'][$i] }}"></li>
              </ul>
            </li>
            @endforeach
            @endisset
            <li class="addBtn"><input type="button" value="+ 乗船者を追加" id="addMember">
            </li>
          </ul>
        </div>
        <input type="submit" name="action" id="button" value="確認画面へ進む" class="payBtn">
      </form>
    </main>
    <footer>
      Copyrights 2002-2018 Cab-Station co.Ltd.[Former HUMAN VEHICLE, INC.]All Rights Reserved.</footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="common/js/common.js"></script>
  <link rel="stylesheet" href="common/js/validationEngine.jquery.css" type="text/css" />
  <script src="common/js/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
  <script src="common/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>