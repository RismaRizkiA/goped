@extends('layouts.app')
  
@section('title', 'Create Jual Sampah')
  
@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('jual_sampahs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
        <!-- <label for="inputState" class="form-label">State</label> -->
        <select id="jenis_sampah" name="jenis_sampah" class="form-select form-control">
            <option selected>Pilih Jenis Sampah</option>
            <option value="Sampah Plastik">Sampah Plastik</option>
            <option value="Sampah Kertas">Sampah Kertas</option>
            <option value="Sampah Kaca">Sampah Kaca</option>
            <option value="Sampah Minyak Jelantah">Sampah Minyak Jelantah</option>
        </select>
        </div>
            <div class="col">
                <input type="text" name="lokasi_pengambilan" class="form-control" placeholder="Lokasi Pengambilan">
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
        <select id="waktu_pengambilan" name="waktu_pengambilan" class="form-select form-control mb-3">
            <option selected>Pilih Waktu Pengambilan</option>
            <option value="09:00 - 10:00">09:00 - 10:00</option>
            <option value="11:00 - 12:00">11:00 - 12:00</option>
            <option value="13:00 - 14:00">13:00 - 14:00</option>
            <option value="15:00 - 16:00">15:00 - 16:00</option>
        </select>
        <div class="row mb-3">
        <div class="col mb-3">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection