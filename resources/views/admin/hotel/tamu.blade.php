@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/hotel/admin/create.css') }}">
@endpush


@section('content')
<div class="back-button">
    <h3><a href="javascript:history.back()" class="btn btn-back">←</a></h3>
</div>


<h2>Pengunjung Hotel</h2>


<br>


<div class="step">
    <a href="{{ route('admin.hotel.list-tamu') }}">
        <i class="fa-solid fa-users" style="position: relative; top: 80px; left: 210px; color: #222736"></i>
    </a>
    <div class="stepbystep">
        <a href="{{ route('admin.hotel.tamu') }}">
            <i class="fa-solid fa-user" style="position: relative; bottom: 4px; left: 20px; color: #222736"></i>
        </a>
        <div class="garis" style="position: relative; left: 12px;"></div>
        <a href="{{ route('admin.hotel.create') }}">
            <i class="fa-solid fa-bed" style="padding-right: 60px; position: relative; left: 5px;"></i>
        </a>
    </div>
</div>


<br>
<br>
<br>


<div class="container">
    <div class="card">
        <form action="{{ route('admin.hotel.store.tamu') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input name="nama" class="form-control" rows="3" placeholder="Masukkan nama pengunjung">
            </div>

            <div class="form-group">
                <label class="form-label">Nomor Identitas</label>
                <input name="no_identitas" class="form-control" rows="3" placeholder="Masukkan nomor identitas pengunjung">
            </div>

            <div class="form-group">
                <label class="form-label">Nomor Telepon</label>
                <input name="no_telp" class="form-control" rows="3" placeholder="Masukkan nomor telepon pengunjung">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>


<div class="overlay" id="errorKetersediaanKamar">
    <div class="bukti">
        <span class="close" id="closeErrorKetersediaanKamarPopup"></span>
        
        <div id="ketersediaanKamar">
            <div class="circle-1">
                <div class="circle-2">
                    <i class="bi bi-exclamation-circle"></i>
                </div>
            </div>
            <h1>Kamar Tidak Tersedia</h1>
            <p>Mohon maaf, kamar yang Anda pilih tidak tersedia untuk tanggal ini.</p>
        </div>
    </div>
</div>
@endsection



@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush