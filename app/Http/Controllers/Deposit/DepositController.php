<?php

namespace App\Http\Controllers\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;
class DepositController extends Controller
{
    public function index()
    {

        $deposits = Deposit::all();


        return view('deposit.index', compact('deposits'));

    }

    public function create()
    {
        return view('deposit.create');
    }
    public function store(Request $request)
    {
        $deposit = Deposit::create([

            'name' => $request->name,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'saldo' => $request->saldo,
        ]);

        flash()->success('Data Profile berhasil dibuat');

        return redirect()->back();
    }

    public function update(Request $request,$id)
    {
        $deposit = Deposit::findOrFail($id);

       $hitung = $deposit->saldo + $request->saldo;
       $deposit->update([
            'saldo' => $hitung,
       ]);

        flash()->success('Saldo Berhasil di Tambah');

        return redirect(route('deposit.index'));
    }
}
