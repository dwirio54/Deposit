@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <a href="{{route('deposit.create')}}" class="btn btn-info">Tambah Data</a>
                            </div>
                            <div>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $deposit)
                                <tr>
                                    <td>
                                        <a href="{{route('tambah-saldo',$deposit->id) }}" class="btn btn-outline-primary btn-sm">{{$deposit->name}}</a>
                                        </td>
                                        <td>{{$deposit->alamat}}</td>
                                        <td>{{$deposit->phone}}</td>
                                        <td>
                                        <a href="{{route('kurangsaldo', $deposit->id )}}" class="btn btn-outline-danger btn-sm">{{$deposit->saldo}}</a>
                                        </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection