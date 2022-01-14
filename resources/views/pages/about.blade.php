@extends('layouts.app')

@section('title')
About | {{ config('settings.name') }}
@endsection

@section('content')
<div class="page-content page-home">
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3" data-aos="fade-up">
                    <h3>About Us</h5>
                </div>
            </div>
            <div class="row" data-aos="zoom-in">
                <div class="col-md-12">
                    <p>{{ config('settings.name') }} adalah toko Seafood yang mengalosikan semua hasil
                         ikannya kepada nelayan lokal di seluruh indonesia. untuk memajukan perekonomian di Indonesia dengan
                         meningkatkan proktifitas para nelayan dan mendistribusikannya secara meluas.87 Alamat lengkapnya di <i>{{ config('settings.address') }}</i> atau bisa klik
                        <b><a href="https://goo.gl/maps/tcMxZBw6xAKah3eQ7" target="__blank">di sini</a></b>  untuk
                        detailnya.
                    </p>
                    <p>Toko ini masih bergerak dan melayani secara offline, untuk operasional toko secara offline, buka
                        pada jam 7 pagi - 9 malam. Nomor handphone yang ada di link google map (<b><a href="tel:+{{
                            config('settings.telephone') }}">{{ config('settings.telephone') }}</a></b>), Seafood yang di jual di toko ini
                            merupakan hasil kerjasama antara pihak kami dan nelayan lokal. yang memanfaatkan sumber daya di indonesia
                            untuk pemesanan yang lumayan banyak. bisa menghubungi melalui e-mail disamping: <b><a
                                href="mailto:{{ config('settings.email') }}">{{ config('settings.email') }}</a></b>.
                    </p>

                    <p>Nomor Rekening:
                        <br>
                        1090088866648 | A.n DK Seafood
                        <br>
                        <img src="/images/BSI_logo.png" alt="Seafood">
                    </p>
                </div>
            </div>
    </section>
</div>
@endsection