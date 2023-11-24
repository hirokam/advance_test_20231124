<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" >

</head>

<body>
    <div class="content">
        <div class="form__title">
            <h2>お問い合わせ</h2>
        </div>


        <div class="form__inner">
            <form action="/confirm" method="post" class="">
            @csrf
                <div class="name-section">
                    <div class="section-title">
                        <p>お名前<span>※</span></p>
                        @error('name')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="last-name">
                        <input class="last-name__input-area" type="text" name="last-name" value="{{ old('last-name') }}">
                        <p class="example">例）山田</p>
                    </div>
                    <div class="first-name">
                        <input class="first-name__input-area" type="text" name="first-name" value="{{ old('first-name') }}">
                        <p class="example">例）太郎</p>
                    </div>
                </div>

                <div class="gender-section">
                    <div class="section-title">
                        <p>性別<span>※</span></p>
                        @error('gender')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="gender">
                        <label for="male"><input type="radio" class="gender-male" name="gender" value="1" {{ old('gender',1) == '1' ? 'checked' : '' }} id="male">男性</label>
                        <label for="female"><input type="radio" class="gender-female" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }} id="female">女性</label>
                    </div>
                </div>

                <div class="email-section">
                    <div class="section-title">
                        <p>メールアドレス<span>※</span></p>
                        @error('email')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="email">
                        <input class="email__input-area" type="email" name="email" value="{{ old('email') }}">
                        <p class="example">例）test@example.com</p>
                    </div>
                </div>

                <div class="postcode-section">
                    <div class="section-title">
                        <p>郵便番号<span>※</span></p>
                        @error('postcode')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="postcode">
                        <input class="postcode__input-area" type="text" name="postcode" value="{{ old('postcode') }}">
                        <p class="example">例）123-4567</p>
                    </div>
                </div>

                <div class="address-section">
                    <div class="section-title">
                        <p>住所<span>※</span></p>
                        @error('address')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="address">
                        <input class="address__input-area" type="text" name="address" value="{{ old('address') }}">
                        <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                    </div>
                </div>

                <div class="building-section">
                    <div class="section-title">
                        <p>建物名</p>
                        @error('building_name')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="building">
                        <input class="building__input-area" type="text" name="building" value="{{ old('building') }}">
                        <p class="example">例）千駄ヶ谷マンション101</p>
                    </div>
                </div>

                <div class="opinion-section">
                    <div class="section-title">
                        <p>ご意見<span>※</span></p>
                        @error('opinion')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="opinion">
                        <textarea class="opinion__input-area" name="content" id="" cols="30" rows="10" >{{ old('content') }}</textarea>
                    </div>
                </div>

                <div class="form__button">
                    <button class="button__submit" type="submit" value="確認">確認</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>