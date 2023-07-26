<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'O campo senha é obrigatório!'
        ]);

        if(Auth::attempt($credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('index.home'));
        }else{
            return redirect()->back()->with('error', 'Email ou senha inválidos!');
        }
    }

    public function create()
    {
        return view ('pages.login.register');
    }

    public function register(Request $request)
    {
        $user = $request->all();

        $user['password'] = bcrypt($request->password);

        $user = User::create($user);

        Auth::login($user);

        return redirect()->route('index.home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index.home'));
    }

    public function update(Request $request, $id)
    {
        try {
            $user = Auth::user($id);
    
            $user->update([
                'password' => bcrypt($request->password)
            ]);
    
            return redirect()->back()->with('success', 'Usuário atualizado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Erro! Tente novamente mais tarde.');
        }
    }
}
