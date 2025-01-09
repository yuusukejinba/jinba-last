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
                <a class="header__logo__target" href="/weight_logs/{:weightLogId}/update">目標体重設定</a>
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
                
             </div> 
        </div> 
                    @endforeach
    </main>