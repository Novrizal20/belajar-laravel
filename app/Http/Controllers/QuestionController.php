<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
<<<<<<< HEAD
        //dd($request->all());
=======
        // $data['nama'] = $request->nama;
        // $data['email'] = $request->email;
        // $data['pertanyaan'] = $request->pertanyaan;
        // $request->validate([
		//     'nama'  => 'required|max:10',
		//     'email' => ['required','email'],
		//     'pertanyaan' => 'required|max:300|min:8',
		// ]);
>>>>>>> 7be1f32315091dc860e29b49745917c807e3bd0f
        $request->validate([
		    'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
		],[
            'nama.required'=>'Nama tidak boleh kosong',
<<<<<<< HEAD
            'email.email'=>'Email tidak valid'
        ]);
        // $data['nama'] = $request->nama;
        // $data['email'] = $request->email;
        // $data['pertanyaan'] = $request->pertanyaan;
        // return view('home-question-respon', $request);
        // return redirect()->route('home');
        // return redirect()->back();
        // return redirect()->away('https://www.pcr.ac.id');
        // return redirect()->route('home')->with('info', 'Selamat, Kamu Lulus!');
        // return redirect()->back()->with('info', 'Oops... Saldo Kamu Kurang!');
        // return redirect()->back()->with('info', 'Oops... Saldo Kamu Kurang!');
        $nama = $request->input('nama');
        $pertanyaan = $request->input('pertanyaan');
        $email = $request->input('email');
        $pesan = "Terimakasih {$nama}! Pertanyaan Anda:'{$pertanyaan}' akan segera direspon melalui email {$email}" ;
        return redirect('/home')->with('info', $pesan);
=======
            'email.email' => 'Email Tidak Valid'
        ]);
        return view('home-question-respon', $request);
>>>>>>> 7be1f32315091dc860e29b49745917c807e3bd0f
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
