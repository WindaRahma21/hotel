@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/wedding.css') }}">
@endpush
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container mt-2">
            <div class="row">
                @foreach ($weddings as $wedding)
                    <div class="col-lg-12">
                        <div class="breadcrumb-text m-5">
                            <div class="card-header">
                                <h2>{{ $wedding->judul }}</h2>

                            </div>
                            <div class="description">
                                <p>{{ $wedding->paket1 }}</p>
                                <p>{{ $wedding->paket2 }}</p>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
