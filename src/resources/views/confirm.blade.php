<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>内容確認</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" >


</head>

<body>
    <div class="content">
        <div class="form__title">
            <h2>内容確認</h2>
        </div>

        @if (count($errors) > 0)
        <p>入力に問題があります。</p>
        @endif

        <div class="confirm-table">
            <form action="/confirm/thanks" method="post" >
            @csrf
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            <input type="text" name="fullname" value="{{ $contact['last-name'] }}  {{ $contact['first-name'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                            <input type="text" name="" value="{{ $contact['gender_string'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">郵便番号</th>
                        <td class="confirm-table__text">
                            <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building_name" value="{{ $contact['building'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">ご意見</th>
                        <td class="confirm-table__text">
                            <input type="text" name="opinion" value="{{ $contact['content'] }}" readonly />
                        </td>
                    </tr>
                </table>
            </div>

            <div class="form__button">
                <button class="button__submit" type="submit">送信</button>
            </div>
            <div class="form-correct__button">
                <a href="/" class="">修正する</a>
            </div>
        </form>
    </div>
</body>
</html>