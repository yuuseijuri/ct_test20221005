<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ct_test</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <style>
    .thanks {
      width: 70vw;
      height: 100vh;
      background-color: #F0F8FF;
      position: relative;
    }
    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    h1 {
      font-size: 25px;
      font-weight: bold;
      text-align: center;
      padding: 20px;
      margin-bottom: 15px;
      
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
  </style>
</head>
<body>
  <div class="thanks">
    <div class="content">
    <h1>ご意見いただきありがとうございました。</h1>
    <button>トップページへ</button>
    </div>
  </div>
</body>
</html>