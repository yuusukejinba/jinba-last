<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pigly</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h3>Pigly</h3>
            <span class="header__logo">
                <a class="header__logo__target" href="/wight_logs/goal_setting">目標体重設定</a>
                <a class="header__logo__logout" href="/login">ログアウト</a>
            </span>
        </div>
    </header>

    <main>
        <form class="form__setting" action="/weight_logs" method="post"></form>
        
            <div class="form__weight__setting">
                <div class="weight__setting__title">
                    <h2>目標体重</h2>
                </div>
                <div class="weight__setting">
                    <input type="int" name="weight__setting" >kg
                </div>
                <div class="weight__setting__button">
                   
                    <a class="weight__setting__button__buck" href="/weight_logs">戻る</a>
                    <button class="weight__setting__button__update" type="submit" name="update">更新</button>
                   
                   
                </div>
            </div>        
        </form>
    </main>
