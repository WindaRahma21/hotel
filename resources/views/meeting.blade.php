@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/meetings.css') }}">
@endpush

@section('content')
   
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Meeting Services</h2>
                        <div class="bt-option">
                            <span>Pilih lokasi & tempat rapat terbaik yang pernah ada dengan fasilitas terlengkap!</span>
                        </div>
                        <!-- Form Pencarian -->
                        <div class="search-container mt-3">
                            <form action="{{ route('search.meeting') }}" method="GET">
                                <input type="text" name="query" placeholder="Cari lokasi atau fasilitas..." class="search-input" value="{{ request('query') }}">
                                <button type="submit" class="search-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Form Pencarian -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @if($hotels->isEmpty())
                    <div class="col-lg-12">
                        <p>Tidak ada hasil untuk pencarian "{{ request('query') }}"</p>
                    </div>
                @else
                    @foreach ($hotels as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="{{ asset('/img/hotels/' . $item->foto_hotel) }}" alt="" class="room-image">
                            <div class="ri-text">
                                <h3>{{ $item->nama_cabang }}</h3>
                                <a href="{{ route('ruang', ['location' => strtolower($item->nama_cabang)]) }}" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                 {{-- <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-sby.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Surabaya</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/room-bndg.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Bandung</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-bksi.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Bekasi</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-smrg.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Semarang</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-bgr.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Bogor</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-mlng.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Malang</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-jgj.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Yogyakarta</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-pwt.jpg" alt="" class="room-image">
                        <div class="ri-text">
                            <h3>Purwokerto</h3>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div> --}}

                {{-- <form class="appointment-form" id="appointmentForm" method="POST" action="{{ route('bookings.store') }}">
                    @csrf
                    <!-- form fields go here as before -->
                </form> --}}
                @if(session('success'))
                    <div class="success-message">
                        {{ session('success') }}
                    </div>
                @endif
    </section>

    @endsection     
