<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use PhpParser\Node\Expr\FuncCall;
use Ramsey\Uuid\Exception\DceSecurityException;

class UserController extends Controller
{
    //ユーザー一覧
    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();
        return view('user.index',['users' => $users]);
    }

    public function edit(Request $request, int $user_id)
    {
        $user = User::find($user_id);
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, int $user_id)
    {
        $user_form = $request->all();
        $user = User::find($user_id);
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($user_form)->save();
        //リダイレクト
        return redirect()->route('users');
    }

    public function destroy(Request $request, int $user_id)
    {
        User::find($user_id)->delete();
        return redirect()->route('users');
    }
}
