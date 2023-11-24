<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理システム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" >

</head>

<body>
    <div class="index__content">
        <div class="index__title">
            <h2>管理システム</h2>
        </div>

        <div class="search-section">
            <form action="/index" method="post" class="">
            @csrf
                <div class="name-gender__row">
                    <div class="name__item">
                        <div class="name__index">
                            <p>お名前</p>
                        </div>
                        <input type="text" class="name__search-area">
                    </div>
                    <div class="gender__item">
                        <div class="gender__index">
                            <p>性別</p>
                        </div>
                        <label for="all"><input type="radio"    class="gender__choice-group" name="gender">全て</label>
                        <label for="male"><input type="radio" class="gender__choice-group" name="gender">男性</label>
                        <label for="female"><input type="radio" class="gender__choice-group" name="gender">女性</label>
                    </div>
                </div>
                <div class="register__item">
                    <div class="register__index">
                        <p>登録日</p>
                    </div>
                    <div class="register__search-area1">
                        <input type="text" class="register__search-area">
                    </div>
                    <div class="range">〜</div>
                    <div class="register__search-area2">
                        <input type="text" class="register__search-area">
                    </div>
                </div>
                <div class="mail__item">
                    <div class="mail__index">
                        <p>メールアドレス</p>
                    </div>
                    <input type="text" class="mail__search-area">
                </div>
                <div class="button">
                    <div class="button__item">
                        <button class="search__button" type="submit">検索</button>
                    </div>
                    <div class="button__item">
                        <a href="/index" class="reset__button">リセット</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="pagenate">
            {{ $contacts->links() }}
        </div>
        
        <div class="search__result">
            <table class="result">
                <tr>
                    <th>ID</th>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>ご意見</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->fullname}}</td>
                    <td>{{$contact->gender}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->opinion}}</td>
                    <td>
                        <form action="/index" method="post"class="">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $contact['id'] }}" class="">
                            <button class="">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>