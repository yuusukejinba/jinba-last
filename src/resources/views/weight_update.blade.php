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
                <a class="header__logo__target" href="weight_logs/goal_setting">目標体重設定</a>
                <a class="header__logo__logout" href="/login">ログアウト</a>
            </span>
        </div>
    </header>

    <main>
        <div class="form__update">
            <div class="update__title">
                <h3>Weight Log</h3>
            </div>
        
            <form class="form" action="weight_logs" method="post">
            @csrf    
                <div class="update__group">
                    <div class="update__content">
                        <p class="update__content__title">日付</p>
                            <div class="update__content__input">
                                <input type="date" name="date" id="id">
                            </div>
                    </div>

                    <div class="update__content">
                        <p class="update__content__title">体重</p>
                            <div class="update__content__input">
                                <input type="int" name="weight">kg
                            </div>    
                    </div>

                    <div class="update__content">
                        <p class="update__content__title">摂取カロリー</p>
                            <div class="update__content__input">
                                <input type="int" name="calories" id="id">cal
                            </div>
                    </div>

                    <div class="update__content">
                        <p class="update__content__title">運動時間</p>
                            <div class="update__content__input">
                                <input type="time" name="exercise_time" id="id">
                            </div>
                    </div>

                    <div class="update__content">
                        <p class="update__content__title">運動内容</p>
                            <div class="update__content__input">
                                <input type="text" name="exercise_content" >
                            </div>
                    </div>

                    <div class="update__btn">
                        <div class="update__btn__content">
                            <a class="update__btn__buck" href="/weight_logs">戻る</a>
                            <button class="update__btn__input" type="submit">更新</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>