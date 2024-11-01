@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/wedding.css') }}">
@endpush

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text m-5">
                        <h2>Admin Weddings</h2>
                        <div class="bt-option">
                            <a href="{{ route('index') }}">Beranda</a>
                            <span>Data Weddings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <section>
        <div class="container"><div class="container mt-5">
            <a href="{{ route('wedding.create') }}" style="border: none; background: none;"><i class="icon_plus"></i></a>

            <table class="table table-custom">
                <thead class="thead-custom">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Paket 1</th>
                        <th>Paket 2</th>
                        <th>Paket 3</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Kapasitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($weddings as $wedding)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $wedding->judul }}</td>
                            <td>{{ $wedding->judul_paket1 }}</td>
                            <td>{{ $wedding->judul_paket2 }}</td>
                            <td>{{ $wedding->judul_paket3 }}</td>
                            <td><img src="{{ asset($wedding->gambar) }}" alt="{{ $wedding->judul }}"></td>
                            <td>IDR {{ is_numeric($wedding->harga) ? number_format((float) $wedding->harga, 2) : $wedding->harga }}</td>
                            <td>{{ $wedding->kapasitas }} guests</td>
                            <td>
                                <a href="{{ route('wedding.edit', $wedding->id) }}" class="btn btn-outline-secondary">Edit</a>
                                <form action="{{ route('wedding.destroy', $wedding->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-other btn-outline-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="no-data">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <!-- Breadcrumb Section End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
