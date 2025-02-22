@extends('layouts.default')
@section('title', 'お問い合わせ確認')

@section('content')

<section>
    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

        <div>
            <label for="company">会社名</label>
            {{ old('company') }}
            <input  type="hidden" name="company" value="{{ old('company') }}">
        </div>

        <div>
            <label for="name">お名前</label>
            {{ old('name') }}
            <input  type="hidden" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="name_kana">フリガナ</label>
            {{ old('name_kana') }}
            <input  type="hidden" name="name_kana" value="{{ old('name_kana') }}">
        </div>

        <div>
            <label for="phone">電話番号</label>
            {{ old('phone') }}
            <input  type="hidden" name="phone" value="{{ old('phone') }}">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            {{ old('email') }}
            <input  type="hidden" name="email" value="{{ old('email') }}">
            <input  type="hidden" name="email_confirmation" value="{{ old('email_confirmation') }}">
        </div>

        <div>
            <label for="body">お問い合わせ内容</label>
            {{ old('body') }}
            <input  type="hidden" name="body" value="{{ old('body') }}">
        </div>

        <div>
            <button type="submit" name="submitBtnVal" value="back">戻る</button>
            <button type="submit" name="submitBtnVal" value="complete">送信</button>
        </div>

    </form>
</section>
@endsection
