@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection
@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>お問い合わせ</h2>
        </div>

        <form action="/confirm" class="form">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="form__group-content">
                    <div class="form__name-content">
                        <div class="form__name-content--item">
                            <input type="text" name="first_name" class="form__input--text"
                                value="{{ old('first_name') }}">
                            <div class="form_input--example">例）山田</div>
                        </div>
                        <div class="form__name-content--item">
                            <input type="text" name="last_name" class="form__input--text" value="{{ old('last_name') }}">
                            <div class="form_input--example">例）太郎</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="form__group-content">
                    <input type="radio" name="sex" value="1" class="form__radio" checked>
                    <label for="1" class="form__radio-label">男性</label>

                    <input type="radio" name="sex" value="2" class="form__radio">
                    <label for="2" class="form__radio-label">女性</label>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="form__group-content">
                    <input type="text" name="email" class="form__input--text" value="{{ old('email') }}">
                    <div class="form_input--example">例）test@example.com</div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="form__group-content">
                    <div class="form__postcode-content">
                        <div class="form__postcode-content--mark">
                            〒
                        </div>
                        <div class="form__postcode-content--item">
                            <input type="text" name="postcode" class="form__input--text" value="{{ old('postcode') }}">
                            <div class="form_input--example">例）123-4567</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>

                <div class="form__group-content">
                    <input type="text" name="address" class="form__input--text" value="{{ old('address') }}">
                    <div class="form_input--example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>

                <div class="form__group-content">
                    <input type="text" name="building_name" class="form__input--text" value="{{ old('building_name') }}">
                    <div class="form_input--example">例）千駄ヶ谷マンション101</div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>

                <div class="form__group-content">
                    <textarea name="option" class="form__textarea">{{ old('option') }}</textarea>
                </div>
            </div>







            <div class="form__button">
                <button class="form__button-submit">確認</button>
            </div>
        </form>
    </div>
@endsection
