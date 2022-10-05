<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ct_test</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
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
    .main {
      padding: 20px;
      border: 2px solid black;
    }
    .title_1 {
      font-size: 20px;
      font-weight: bold;
      padding-left: 100px;
      
    }
    .text_1 {
      padding: 10px;
      font-size: 20px;
      width: 30%;
      border: 2px solid #D3D3D3;
      border-radius: 8px;
    }
    .title_2 {
      font-size: 20px;
      font-weight: bold;
      margin: 0 60px 0 100px;
    }
      input[type=radio] {
      accent-color: black;
    }
    .select_1 {
      margin: 20px 15px 20px 110px;
      font-size: 20px;
      font-weight: bold;
    }
    .select_2 {
      margin: 20px 15px 20px 35px;
      font-size: 20px;
      font-weight: bold;
    }
    .title_3 {
      font-size: 20px;
      font-weight: bold;
      padding: 10px 0 10px 100px;
    }
    .text_2, .text_3 {
      padding: 10px;
      font-size: 20px;
      width: 30%;
      border: 2px solid #D3D3D3;
      border-radius: 8px;
      
    }
    .email {
      font-size: 20px;
      font-weight: bold;
      padding-left: 20px;
      
    }
    .email_text {
      padding: 10px;
      font-size: 20px;
      width: 30%;
      border: 2px solid #D3D3D3;
      border-radius: 8px;
      
    }
    .button_1 {
      padding: 5px 60px;
      font-size: 20px;
      border-radius: 5px;
      color: white;
      background-color: black;
      display: block;
      margin: 10px auto;
    }
    .button_1:hover {
      color: black;
      background-color: white;
    }
    .clear {
      text-align: center;
    }
    svg.w-5.h-5 {
      width: 30px;
      height: 30px;
    }
    .title_list {
    width: 100%;
    margin-top: 20px;
    font-size: 18px;
    }
    .list1, .text_search_1 {
      width: 15%;
      text-align: center;
    }
    .list2, .text_search_2 {
      width: 15%;
      text-align: center;
    }
    .list3, .text_search_3 {
      width: 10%;
      text-align: center;
    }
    .list4, .text_search_4 {
      width: 20%;
      text-align: center;
    }
    .list5, .text_search_5 {
      width: 30%;
      text-align: center;
    }
    .border {
      border-bottom: 2px solid black;
    }
    .button_2 {
      width: 10%;
      padding: 3px 20px;
      font-size: 20px;
      border-radius: 5px;
      color: white;
      background-color: black;
      display: block;
      margin: 10px 50px 0 auto;
    }
    .button_2:hover {
      color: black;
      background-color: white;
    }
  </style>
</head>
<body>
  <div class="content">
    <h1>管理システム</h1>
    <div class="main">
      <form action="/search" method="get" class="text">
        @csrf
        <label class="title_1">お名前
          <input type="text" name="name" class="text_1" value="">
        </label>
        <label class="title_2">性別
          @csrf
          <input type="radio" class="title_3" name="gender" style="transform:scale(2.0);" value="全て"  {{ old('gender','全て') == '0' ? 'checked' : '' }} checked>全て
          @csrf
          <input type="radio" class="title_4" name="gender" style="transform:scale(2.0);" value="男性"  {{ old('gender','男性') == '1' ? 'checked' : '' }} >男性 
          @csrf
          <input type="radio" class="title_5" name="gender" style="transform:scale(2.0);" value="女性"  {{ old('gender','女性') == '2' ? 'checked' : '' }} >女性
        </label>
        <p class="title_3"><label>登録日
          <input type="date" name="created_at" class="text_2">
          <label>～</label>
          <input type="date" name="created_at" class="text_3">
        </label></p>
        <p class="email"><label>メールアドレス
          <input type="text" name="email" class="email_text">
        </label></p>
        <button class="button_1">検索</button>
        <p class="clear"><a href="/find">リセット</a></p>
      </form>
    </div>
    {{ $page->links() }}
    <table class="title_list">
      <tr>
        <th class="list1">ID</th>
        <th class="list2">お名前</th>
        <th class="list3">性別</th>
        <th class="list4">メールアドレス</th>
        <th class="list5">ご意見</th>
      </tr>
      <tr class="border"></tr>
      <tr>
        <form action="/search" method="get">
          @csrf
          <td class="text_search_1">{{$user->id}}</td>
          @csrf
          <td class="text_search_2">"{{$user->name}}"</td>
          @csrf
          <td class="text_search_3">
          @csrf
          @foreach($checks as $check)
            <input type="radio" name="gender" class="" value="{{$check->gender}}" @if($check->gender==$user->check_id) checked @endif>
          @endforeach      
          </td>
          @csrf
          <td class="text_search_4">{{$user->email}}</td>
          <td class="text_search_5">{{$user->opinion}}</td>
          <button class="button_2">削除</button>
        </form>  
      </tr>
    </table>
</body>
</html>