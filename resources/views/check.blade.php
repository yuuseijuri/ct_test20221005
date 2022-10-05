<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>@yield('ct_test')</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <style>
    .content {
      width: 70vw;
      height: 100vh;
      background-color: #F0F8FF;
    }
    h1 {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      padding: 20px;
      margin-bottom: 5px;
    }
    .text {
      width: 100%;
    }
    .title_1, .title_2, .title_3, .title_4, .title_5, .title_6, .title_7 {
      font-size: 20px;
      font-weight: bold;
      padding-left: 100px;
      margin-bottom: 50px;
    }
    .text_1 {
      margin-left: 100px;
    }
    .email {
      padding: 10px;
      font-size: 20px;
      width: 62%;
      margin-bottom: 50px;
    }
    .postcode {
      padding: 10px;
      font-size: 20px;
      width: 60%;
      margin-bottom: 5px;
    }
    .address {
      padding: 10px;
      font-size: 20px;
      width: 73%;
      margin: 0 0 5px 105px;
    }
    .building_name {
      padding: 10px;
      font-size: 20px;
      width: 62%;
      margin: 0 0 5px 160px;
    }
    .opinion {
      padding: 10px;
      font-size: 20px;
      width: 62%;
      margin: 0 0 10px 30%;
    }
    button {
      padding: 5px 60px;
      font-size: 20px;
      border-radius: 5px;
      color: white;
      background-color: black;
      display: block;
      margin: 0 auto;
    }
    button:hover {
      color: black;
      background-color: white;
    }
    .back {
      text-align: center;
    }
  </style>
</head>
<body>
<div class="content">
  @if(Auth::check())
  @endif
  <h1>内容確認</h1>
  
  <form action="/edit" method="post" class="title">
    <div class="text">
      @csrf
      <p class="title_1">お名前
        <span class="text_1" name="name">{{$users->name}}</span>
      </p>
      @csrf
      <p class="title_2">性別
        <span class="select_1" name="gender">{{$users->gender}}</span>
      </p>
      @csrf
      <p class="title_3">メールアドレス
        <span class="email" name="email">{{$users->email}}</span>
      </p>
      @csrf
      <p class="title_4">郵便番号
        <span class="postcode" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">{{$users->zip11}}</span>
      </p>
      @csrf
      <p class="title_5">住所
        <span class="address" name="addr11" size="60">{{$users->addr11}}</span>
      </p>
      @csrf
      <p class="title_6">建物名
        <span class="building_name" name="building_name">{{$users->building_name}}</span>
      </p>
      @csrf
      <p class="title_7">ご意見
        <span class="opinion" name="opinion" cols="30" rows="4"></span>
      </p>
      @csrf
      <button type="submit">送信</button>
    </div>
  </form>

  <p class="back"><a href="/">修正する</a></p>
</div>
</body>
</html>
