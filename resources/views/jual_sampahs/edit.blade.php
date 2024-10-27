@extends('layouts.app')
  
@section('title', 'Edit Jual Sampah')
  
@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('jual_sampahs.update', $jual_sampah->id) }}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jenis Sampah</label>
                <select id="jenis_sampah" name="jenis_sampah" class="form-select form-control"  required>
                    <option selected >{{ $jual_sampah->jenis_sampah }}</option>
                    <option value="Sampah Plastik">Sampah Plastik</option>
                    <option value="Sampah Kertas">Sampah Kertas</option>
                    <option value="Sampah Kaca">Sampah Kaca</option>
                    <option value="Sampah Minyak Jelantah">Sampah Minyak Jelantah</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Lokasi Pengambilan</label>
                <input type="text" name="lokasi_pengambilan" class="form-control" placeholder="Lokasi Pengambilan" value="{{ $jual_sampah->lokasi_pengambilan }}" required>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col mb-3">
            <select id="waktu_pengambilan" name="waktu_pengambilan" class="form-select form-control mb-3" required>
                <option selected >{{ $jual_sampah->waktu_pengambilan }}</option>
                <option value="09:00 - 10:00">09:00 - 10:00</option>
                <option value="11:00 - 12:00">11:00 - 12:00</option>
                <option value="13:00 - 14:00">13:00 - 14:00</option>
                <option value="15:00 - 16:00">15:00 - 16:00</option>
            </select>
        <div class="row mb-3">
        <div class="col mb-3">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection