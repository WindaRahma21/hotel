@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detail-hotel.css') }}">
@endpush

@section('content')
<br><br><br>
<div class="back-button">
    <h3><a href="javascript:history.back()" class="btn btn-back">←</a></h3>
</div>
<br>
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{ asset('img/hotels/rooms/' . $room->foto) }}" alt="Room image">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{ $room->nama_tipe }}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    {{-- <a href="#">Booking Now</a --}}
                                </div>
                            </div>
                            <h2>Rp{{ number_format($room->harga_per_malam, 2, ',', '.') }}<span>/Malam</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Ukuran:</td>
                                        <td>{{ $room->ukuran_kamar }} m²</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kapasitas:</td>
                                        <td>{{ $room->kapasitas }} orang</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Kasur:</td>
                                        <td>{{ $room->jenis_kasur }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Fasilitas:</td>
                                        <td>{{ $room->fasilitas }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="f-para">{!! nl2br(e($room->deskripsi)) !!}</p>
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div>
                    @if(Auth::check() && Auth::user()->isUser())
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-lg-4">
                    @foreach($hotels as $hotel)
                        <div class="room-booking">
                            {{-- <h3>Your Reservation at {{ $hotel->nama_cabang }} - {{ $room->nama_tipe }}</h3> --}}
                            <h3>Reservasi</h3>
                            <form action="{{ route('booking.hotel.store', ['location' => strtolower($hotel->nama_cabang), 'nama_tipe' => $room->nama_tipe]) }}" method="POST">
                                @csrf
                
                                <div class="hotel-input">
                                    <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                    <input type="hidden" name="tipe_kamar_id" value="{{ $room->id }}" data-kapasitas="{{ $room->kapasitas }}">
                                    <input type="hidden" name="status" value="belum_selesai">
                                    <input type="hidden" name="status_pembayaran" value="belum_dibayar">
                                </div>
                
                                <div class="check-date">
                                    <label for="check_in">Check In:</label>
                                    <input type="text" class="date-input" id="check_in" name="check_in">
                                    <i class="icon_calendar"></i>
                                </div>
                                <div class="check-date">
                                    <label for="check_out">Check Out:</label>
                                    <input type="text" class="date-input" id="check_out" name="check_out">
                                    <i class="icon_calendar"></i>
                                </div>
                                <div class="select-option">
                                    <label for="tamu_dewasa">Dewasa:</label>
                                    <select class="tamu_dewasa" id="tamu_dewasa" name="tamu_dewasa">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="select-option">
                                    <label for="tamu_anak">Anak:</label>
                                    <select class="tamu_anak" id="tamu_anak" name="tamu_anak">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="select-option">
                                    <label for="jumlah_kamar">Kamar:</label>
                                    <select class="jumlah_kamar" id="jumlah_kamar" name="jumlah_kamar">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="check-date">
                                    <label for="pesan">Pesan:</label>
                                    <input type="text" class="pesan" id="pesan" name="pesan">
                                    <i class="bi bi-chat"></i>
                                </div>
                                <button type="submit">Check Availability</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                
                @endif
            </div>
        </div>
    </section>


    {{-- @if ($errors->has('booking_error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $errors->first('booking_error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}


@endsection

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const forms = document.querySelectorAll('.room-booking form');

        forms.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                // Ambil nilai jumlah dewasa
                const jumlahTamu = parseInt(form.querySelector('.tamu_dewasa').value) || 0;

                // Ambil jumlah kamar dan kapasitas kamar
                const jumlahKamar = parseInt(form.querySelector('.jumlah_kamar').value) || 0;
                const kapasitasKamar = parseInt(form.querySelector('input[name="tipe_kamar_id"]').dataset.kapasitas) || 0;

                // Debugging untuk memastikan semua data diambil dengan benar
                console.log('Jumlah tamu dewasa:', jumlahTamu);
                console.log('Jumlah kamar:', jumlahKamar);
                console.log('Kapasitas per kamar:', kapasitasKamar);

                // Hitung kapasitas total
                const kapasitasTotal = jumlahKamar * kapasitasKamar;
                console.log('Kapasitas total:', kapasitasTotal);

                // Jika jumlah tamu melebihi kapasitas total, tampilkan peringatan
                if (jumlahTamu > kapasitasTotal) {
                    event.preventDefault(); // Hentikan pengiriman form
                    alert('Jumlah tamu melebihi kapasitas kamar. Silakan kurangi jumlah tamu atau tambahkan kamar.');
                    console.log('Form dihentikan karena kapasitas terlampaui');
                } else {
                    console.log('Form lanjut dikirim');
                }
            });
        });
    });

</script>

@endpush