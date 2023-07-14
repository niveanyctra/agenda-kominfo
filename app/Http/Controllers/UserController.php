<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;

class UserController extends Controller
{
    use PasswordValidationRules;
    public function index()
    {
        $user = User::get();

        return view('pages.user.index', compact('user'));
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store( Request $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('user')->with('store','User Berhasil Dibuat');
    }

    public function destroy(User $user)
    {
        USer::where('id', $user->id)->delete();

        return redirect('user')->with('delete', 'Data berhasil dihapus');
    }
}
