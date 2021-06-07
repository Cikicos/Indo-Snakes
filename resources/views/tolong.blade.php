    @extends('master')
    @section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
  
   <title>Pertolongan Pertama</title>

    <style>
        .main-timeline{ font-family: 'Poppins', sans-serif; }
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: calc(50% + 200px);
    margin: 0 0 25px 5px;
    float: right;
}
.main-timeline .timeline-content{
    color: #555;
    background: #fff;
    padding: 15px 15px 15px 290px;
    border-radius: 20px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    display: block;
    position: relative;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-content:before{
    content: '';
    background-color: ;
    height: 100%;
    width: 120px;
    position: absolute;
    left: 140px;
    top: 0;
}
.main-timeline .timeline-year{
    color: #00A7FB;
    font-size: 40px;
    font-weight: 700;
    line-height: 43px;
    transform: translateY(-50%);
    position: absolute;
    left: 22px;
    top: 50%;
}
.main-timeline .timeline-icon{
    color: #fff;
    font-size: 50px;
    font-weight: 600;
    text-align: center;
    line-height: 50px;
    width: 120px;
    transform: translateY(-50%);
    position: absolute;
    left: 140px;
    top: 50%;
}
.main-timeline .title{
    font-size: 23px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 7px;
}
.main-timeline .description{
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
    margin: 0 5px 25px 0;
    float: left;
}
.main-timeline .timeline:nth-child(even) .timeline-content{ padding: 15px 280px 15px 20px; }
.main-timeline .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: 139px;
}
.main-timeline .timeline:nth-child(even) .timeline-year{
    left: auto;
    right: 19px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 139px;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ background-color: #21c87a; }
.main-timeline .timeline:nth-child(4n+2) .timeline-year{ color: #21c87a; }
.main-timeline .timeline:nth-child(4n+3) .timeline-content:before{ background-color: #fff; }
.main-timeline .timeline:nth-child(4n+3) .timeline-year{ color: #000; }
.main-timeline .timeline:nth-child(4n+4) .timeline-content:before{ background-color: #ed0c0c; }
.main-timeline .timeline:nth-child(4n+4) .timeline-year{ color: #ed0c0c; }
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 30px;
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        text-align: center;
        padding: 200px 15px 15px 15px;
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline:nth-child(even) .timeline-content:before{
        width: 100%;
        height: 100px;
        transform: translateX(-50%) translateY(0);
        left: 50%;
        right: auto;
        top: 80px;
    }
    .main-timeline .timeline-year,
    .main-timeline .timeline:nth-child(even) .timeline-year{
        transform: translateY(0) translateX(-50%);
        left: 50%;
        right: auto;
        top: 20px;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        width: auto;
        transform: translateY(0) translateX(-50%);
        left: 50%;
        right: auto;
        top: 105px;
    }
}

    </style>


<h1 style="text-align:center;">Pertolongan Pertama Apabila Tergigit ular<br></h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">1</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Pastikan Korban untuk Bersikap Tenang</h3>
                        <p class="description">
                        Penanganan gigitan ular yang pertama adalah meyakinkan korban kalau gigitan bisa diatasi dengan tepat dan benar.Sementara itu, bawa korban secepat mungkin menuju fasilitas kesehatan terdekat dan punya peralatan mendukung. 
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">2</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Posisikan di Tempat yang Aman</h3>
                        <p class="description">
                        Hindari area-area di mana ular mungkin bersembunyi, seperti di bawah batu atau balok kayu. Bila Anda sedang mendaki gunung atau menjelajahi area yang baru, sebaiknya ketuk-ketuk dulu area di hadapan Anda dengan tongkat kayu.

Saat diberi cukup peringatan dengan ketukan kayu, ular biasanya akan memilih untuk menjauhi Anda.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">3</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Tanggalkan Segala Benda di Sekitar Luka Gigitan</h3>
                        <p class="description">
                        Lepaskan pakaian ataupun aksesori, seperti cincin dan gelang di sekitar area gigitan (bila ada). Pasalnya, area gigitan sangat mungkin untuk membengkak dan menghalangi selama proses pertolongan pertama.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">4</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Meminimalkan Gerakan</h3>
                        <p class="description">
                        Arahkan korban untuk meminimalkan gerakan. Hal itu bertujuan untuk mencegah racun makin meluas ke bagian tubuh lain.

Jika perlu, buatlah pembidaian longgar di area bekas gigitan ular. Cara sederhana ini dapat membantu korban untuk tak banyak bergerak.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">5</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Pastikan Area Tergigit Berada di Bawah Jantung</h3>
                        <p class="description">
                        Penanganan gigitan ular berikutnya adalah dengan memosisikan lokasi gigitan tidak lebih tinggi dari pada jantung atau dada.

Misalnya, area tangan yang dipatuk, pastikan organ tersebut tak diangkat melebihi atau sejajar jantung dan dada.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">6</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Hindari Pembendungan Ketat terhadap Bagian Tubuh Tertentu</h3>
                        <p class="description">
                        Jangan pakai torniket atau mengikat bagian tubuh tertentu pada korban. Pengikatan yang tidak tepat berisiko mematikan seluruh sel atau jaringan. Biasanya hal itu disebabkan ikatan yang terlalu kuat.

Pada kondisi tersebut, aliran darah bisa berhenti total. Ujungnya, bisa terjadi kematian jaringan total hingga berujung pada amputasi.
                        </p>
                    </a>
                </div>                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">7</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Hindari Terlalu Banyak Menyentuh atau Mengelola Area Gigitan</h3>
                        <p class="description">
                        Jangan tekan bagian yang tergigit dengan kompres dingin atau berusaha memotongnya dengan pisau. Anda juga tidak boleh mengisap racun ular menggunakan mulut.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">8</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title">Hindari Pemberian Makanan atau Minuman</h3>
                        <p class="description">
                        Sebaiknya orang yang baru digigit ular tidak diberi makanan atau minuman lewat mulut. Korban rentan tersedak ketika kehilangan kesadaran. Hindari juga untuk memberikan minuman, berupa alkohol atau kopi.

Kopi dan alkohol bisa mempercepat diserapnya racun oleh tubuh. Jangan pula memberi sembarang obat tanpa rekomendasi dokter.
                        </p>
                    </a>
                </div>                <div class="timeline">
                    <a class="timeline-content">
                        <div class="timeline-year">9</div>
                        <div class="timeline-icon"> </div>
                        <h3 class="title"> Segera Cari Pertolongan, jika Ada Perburukan</h3>
                        <p class="description">
                        Biasanya, setelah gigitan ular berbisa, timbul rasa nyeri terbakar yang cukup berat di area tersebut dalam waktu 15-30 menit. Kondisi dapat berkembang menjadi pembengkakan, memar, serta perubahan warna pada luka hingga ke lengan atau tungkai.

Tanda dan gejala lainnya termasuk mual, sesak napas dan rasa lemas secara umum, serta rasa aneh di mulut.

Jangan sia-siakan waktu untuk mencari atau membunuh ular tersebut. Prioritaskan korban dengan segera membawanya ke fasilitas kesehatan terdekat. Jika Anda ingat, jelaskan ciri-ciri binatang melata yang mematuk kepada petugas medis.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection