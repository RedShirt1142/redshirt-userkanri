@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h1 class="text-center mt-5 mb-5">会員編集 会員ID:{{ $user->id }}</h1>
    
    <div class="w-75 m-auto">
        <form method="POST" action="{{ route('update',$user->id) }}">
            @csrf

            <div class="mb-3">
                <input id="name" type="text" class="m-auto w-100 bg-white border-dark p-2 @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input id="tel" type="tel" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" class="m-auto w-100 bg-white border-dark p-2 @error('tel') is-invalid @enderror" name="tel" value="{{ $user->tel }}" required autocomplete="tel-national">

                @error('tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input id="email" type="email" class="m-auto w-100 bg-white border-dark p-2 @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-2">
                <button type="submit" class="d-block mx-auto w-75 btn btn-light btn-lg border-dark">
                    {{ __('編集') }}
                </button>
            </div>
        </form>
        <form method="POST" action="{{ route('destroy',$user->id) }}">
            @csrf
                <button type="submit" class="d-block mx-auto w-75 btn btn-light btn-lg border-dark">
                    {{ __('削除') }}
                </button>
        </form>
    </div>
</div>
@endsection
