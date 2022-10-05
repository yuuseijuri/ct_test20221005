@extends('layouts.default')

@section('title', 'index.blade.php')

@section('content')

<div class="content">
  @if(Auth::check())
  @endif
  <h1>お問い合わせ</h1>
  <form action="/add" method="post" class="title">
  @csrf  
    <div class="text">
      <label class="title_1">お名前<span>※</span><input type="text" name="name" class="text_1" value="{{$users->name}}"></label>
      <!-- <input type="text" name="name" class="text_2" value="{{$users->first_name}}"> -->
      @error('name')
      <li>{{$message}}</li>
      @enderror
    </div>
    <span class="example_1">例) 山田</span>
    <span class="example_2">例) 太郎</span>
    <p>
      <label class="title_2">性別<span>※</span></label>
        @csrf
      
        <input type="radio" name="gender"  class="select_1" style="transform:scale(3.0);" value=" {{ old('gender','1') == '1' ? 'checked' : '' }} "checked>男性
        
        @csrf
        <input type="radio" name="gender"  class="select_2" style="transform:scale(3.0);" value="{{ old('gender','2') == '2' ? 'checked' : '' }}" >女性
        
      
      @error('gender')
      <li>{{$message}}</li>
      @enderror
    </p>
    
    @csrf
    <p><label class="title_3">メールアドレス<span>※</span>
      <input type="text" name="email" class="email" value="{{$users->email}}"></label>
      @error('email')
      <li>{{$message}}</li>
      @enderror
    </p>
    <p class="example_3">例) test@example.com</p>
    
    @csrf
    <label class="title_4">郵便番号<span>※</span>
    <a>〒</a>
    <input type="text" name="zip11" class="postcode" value="{{$users->zip11}}" size="10" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">
    @error('zip11')
      <li>{{$message}}</li>
    @enderror
    </label>
    <p class="example_4">例) 123-4567</p>
    
    @csrf
    <p style="display:inline-flex"><label class="title_5">住所<span>※</span>
      <input type="text" name="addr11" class="address" value="{{$users->addr11}}" size="60"></label>
      @error('addr11')
      <li>{{$message}}</li>
      @enderror
    </p>
    <p class="example_5">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
    
    @csrf
    <p><label class="title_6">建物名<input type="text" name="building_name" class="building_name" value="{{$users->building_name}}"></label></p>
    <p class="example_6">例) 千駄ヶ谷マンション101</p>

    @csrf
    <p><label class="title_7">ご意見<span>※</span></label></p>
    <textarea name="opinion" class="opinion" value="{{$users->opinion}}" cols="30" rows="4">
    </textarea>
    @error('opinion')
      <li>{{$message}}</li>
    @enderror
    @csrf
    <button type="submit">確認</button>
  </form>
</div>
</body>
</html>