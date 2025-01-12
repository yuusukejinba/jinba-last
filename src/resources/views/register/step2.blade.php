@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>Pigly</h2>
            <div class="register-form__title">
                <h4>新規会員登録</h4>
                <p class="register-form__step-1" >STEP2 体重データの入力</p>
            </div>
    </div>

    <form class="form" action="/weight_logs" method="post">
    @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}" />
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">現在の体重</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <span>
                        <input type="integer" name="weight" placeholder="現在の体重を入力"  />kg
                    </span>
                </div>
                <div class="form__error">
                    @error('weight')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>  {{-- 現在の体重 --}}

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">目標の体重</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="integer" name="target_weight" placeholder="目標の体重を入力"/>kg
                </div>
                <div class="form__error">
                    @error('target_weight')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>  {{-- 目標の体重 --}}

        <div class="form__button">
            <button class="form__button-submit" type="submit">アカウント作成</button>
        </div>
    </form>
</div>
@endsection