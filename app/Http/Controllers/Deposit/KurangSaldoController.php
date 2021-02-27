<?php

namespace App\Http\Controllers\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;
use App\TambahSaldo;
class KurangSaldoController extends Controller
{
    public function create($id)
    {
        $deposit = Deposit::findOrFail($id);

        return view('deposit.kurangsaldo', compact('deposit'));
    }

    public function update(Request $request, $id)
    {
        $deposit = Deposit::findOrFail($id);

        $hitung = $deposit->saldo - $request->saldo;
        $deposit->update([
            'saldo' => $hitung,
        ]);

    flash()->success('Saldo Berhasil di Tarik');

    return redirect(route('deposit.index'));
    }

}
