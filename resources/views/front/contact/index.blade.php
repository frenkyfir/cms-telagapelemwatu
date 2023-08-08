@extends('front.layouts.index')

@section('content')
    <section id="contact" class="contact" data-aos="zoom-in" data-aos-duration="2000">
        <h2>Kontak <span>Kami</span></h2>
        <p>Lokasi Wisata Telaga desa pelemawtu terletak di alamatJl. Tembusan Putat Lor Pelemwatu, Watu Wetan,
            Gempolkurung, Kec. Menganti, Kabupaten Gresik, Jawa Timur 61174. Untuk Rute menuju Wisata telaga pelemwatu bisa
            ditempuh dengan kendaraan pribadi dengan jarak tempuh 21 km dari Gresik kota dan membutuhkan waktu perjalanan
            sekitar 39 menit saja.
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5597.15130829441!2d112.5800046988286!3d-7.265445385261426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7801537301e989%3A0x4a4017d5b23146b4!2sWisata%20Telaga%20Pelemwatu!5e0!3m2!1sid!2sid!4v1683136087703!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form method="POST" action="mailto:Frenkyfir@gmail.com">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>

        </div>
    </section>
@endsection
