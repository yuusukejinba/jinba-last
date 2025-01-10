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
        <div class="form" >
            <div class="weight__display">
                <div class="weight-title">
                @foreach ($weight_logs as $weight_log)
                    <p class="target-weight_title">体重</p>
                    <p class="target-weight_display">{{ $weight_log['weight'] }}</p>
                </div>

                <div class="form__date"> 
                    <div class="form__date__list">
                        <input class="date__list" type="date" name="date" > ~ 
                        <input class="date__list" type="date" name="date" >
                        <input class="date__list__search" type="search" name="search" value="検索">                       
                        <a class="date__list__addition" href="weight_logs/goal_setting">データ追加</a>
                    </div>   

                <div class="weight__date">
                    <table>
                        <th>
                            <p>日付</p>
                            <p>{{ $weight_log['date'] }}</p>
                        </th>
                        <th>
                            <p>体重</p>
                            <p>{{ $weight_log['weight'] }}</p>
                        </th>
                        <th>
                            <p>食事摂取カロリー</p>
                            <p>{{ $weight_log['calories'] }}</p>
                        </th>
                        <th>
                            <p>運動時間</p>
                            <p>{{ $weight_log['exercise_time'] }}</p>
                        </th>
                    </table>
                </div> 
            </div> 
        </div>
                @endforeach
    </main>