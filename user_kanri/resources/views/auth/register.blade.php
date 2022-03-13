@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h1 class="text-center font-weight-bold mt-5 mb-5">会員登録</h1>
    
    <div class="w-75 m-auto">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                        <input id="name" type="text" class="m-auto w-100 bg-white border-dark p-2 @error('name') is-invalid @enderror" name="name" placeholder="{{__('名前') }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="mb-3">
                        <input id="tel" type="tel" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" class="m-auto w-100 bg-white border-dark p-2 @error('tel') is-invalid @enderror" name="tel" placeholder="{{ __('電話番号') }}" required autocomplete="tel-national">

                        @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="mb-3">
                        <input id="email" type="email" class="m-auto w-100 bg-white border-dark p-2 @error('email') is-invalid @enderror" name="email" placeholder="{{ __('メールアドレス') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div>
                    <button type="submit" class="d-block mx-auto w-75 btn btn-light btn-lg border-dark">
                        {{ __('登録') }}
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
