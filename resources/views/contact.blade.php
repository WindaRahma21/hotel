@extends('layouts.app')

@push('styles')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
@endpush

@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Kami di Hotel Berlian siap membantu Anda dengan segala kebutuhan dan pertanyaan. 
                        Jangan ragu untuk menghubungi kami melalui informasi di bawah ini:</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>856 Cordia Extension Apt. 356, Lake, US</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>(+62) 881-2721-410</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>berlianHotel@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="item">Nama</label>
                                <input type="text" id="Nama" name="Nama" class="form-control" value="{{ Auth::user() ? Auth::user()->firstname : '' }}">
                            </div>
        
                            <div class="col-lg-6">
                                <label for="noOfServings">Email</label>
                                <input type="text" id="Email" name="Email" class="form-control" value="{{ Auth::user() ? Auth::user()->email : '' }}">
                            </div>
        
                            <div class="col-lg-12">
                                <label for="servingSize">Pesan</label>
                                <input type="text-area" id="Pesan" name="Pesan" class="form-control">
                            </div>
                        </div>

                        <button type="submit" class="btn">Submit Now</button>

                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/place/Jasa+Snack+%26+Catering+-+Intan+Snack/@-7.3856822,109.3628782,17z/data=!3m1!4b1!4m6!3m5!1s0x2e655963f663e173:0xea07d8955a926292!8m2!3d-7.3856875!4d109.3654531!16s%2Fg%2F11v9jkjhjk?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->





    {{-- <p style="padding-top: 100px"></p>
        <div class="row justify-content-center">
            <div class="col-md-8">



                <form method="POST" action="{{ route('contact.store') }}">

                    {{ csrf_field() }}

                    <h1>Beri Kami Masukan</h1>
                    <div class="form-group">

                        <label for="item">Nama</label>

                        <input type="text" id="Nama" name="Nama" class="form-control">

                    </div>



                    <div class="form-group">

                        <label for="noOfServings">Email</label>

                        <input type="text" id="Email" name="Email" class="form-control">

                    </div>



                    <div class="form-group">

                        <label for="servingSize">Pesan</label>

                        <input type="text-area" id="Pesan" name="Pesan" class="form-control">

                    </div>





                    <button type="submit" class="btn btn-primary">Kirim</button>




                </form>



            </div>
        </div>
    <p style="padding-bottom: 100px"></p> --}}
@endsection
