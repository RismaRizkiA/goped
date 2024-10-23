@extends('layouts.app')
  
@section('title', 'Daftar Jual Sampah')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <a href="{{ route('jual_sampahs.create') }}" class="btn btn-primary">Tambah Jual Sampah</a>
    </div>
    <hr />
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
                <th>Action</th>
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
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('jual_sampahs.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('jual_sampahs.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('jual_sampahs.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
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