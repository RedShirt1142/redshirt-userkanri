@extends('layouts.app')

@section('content')

<!-- ユーザー一覧表示 -->
<div class="container bg-white">
    <table class="table table-bordered border-dark w-100%">
        <thead class="text-center">
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td><div>{{ $user->name }}</div></td>
                <td><div>{{ $user->tel }}</div></td>
                <td><div>{{ $user->email }}</div></td>
                <td><div><a class="text-dark" href="{{route('edit',$user->id) }}">{{__('>> 編集') }}</a></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection