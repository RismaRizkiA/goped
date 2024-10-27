@extends('layouts.app')
  
@section('title', 'Dashboard Goped')
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Jenis Sampah</th>
                <th>Lokasi Pengambilan</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @if($jual_sampah->count() > 0)
                @foreach($jual_sampah as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->jenis_sampah }}</td>
                        <td class="align-middle">{{ $rs->lokasi_pengambilan }}</td>
                        <td class="align-middle">{{ $rs->waktu_pengambilan }}</td>
                        <td class="align-middle">
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Jual Sampah not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection