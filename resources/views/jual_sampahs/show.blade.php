@extends('layouts.app')
  
@section('title', 'Detail Jual Sampah')
  
@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jenis Sampah</label>
            <input type="text" name="jenis_sampah" class="form-control" placeholder="Jual Sampah" value="{{ $jual_sampah->jenis_sampah }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi Pengambilan</label>
            <input type="text" name="lokasi_pengambilan" class="form-control" placeholder="Lokasi Pengambilan" value="{{ $jual_sampah->lokasi_pengambilan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Waktu Pengambilan</label>
            <input type="text" name="waktu_pengambilan" class="form-control" placeholder="Waktu Pengambilan" value="{{ $jual_sampah->waktu_pengambilan }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $jual_sampah->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $jual_sampah->updated_at }}" readonly>
        </div>
    </div>
@endsection