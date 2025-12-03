<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('halaman-login');
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($input)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); // Arahkan User Biasa
    }

    // Jika Login Gagal
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);

        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required|min:3|regex:/[A-Z]/',
        // ], [
        //     'username.required' => 'Username wajib diisi.',
        //     'password.required' => 'Password wajib diisi.',
        //     'password.min' => 'Password minimal 3 karakter.',
        //     'password.regex' => 'Password harus mengandung minimal satu huruf kapital.',
        // ]);

        // $data = [
        //     'username' => $request->input('username'),
        //     'password' => $request->input('password'),
        //     'pesan' => 'Login berhasil! Selamat datang, ' . $request->input('username')
        // ];
        //     return view('halaman-berhasil', $data);
    }
    // 3. Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
