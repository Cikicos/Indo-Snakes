@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
<title>Cara Menangkap Ular</title>

    <style>
        .main-timeline{
    font-family: 'Nunito', sans-serif;
    position: relative;
}
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 50%;
    padding: 20px 0 0;
    margin: 0 10px 0 0;
    float: left;
}
.main-timeline .timeline-content{
    color: #333;
    min-height: 90px;
    padding: 0 85px 0 0;
    display: block;
    position: relative;
    z-index: 1;
}
.timeline-icon p{
    transform:translateY(-10px);
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-icon{
    color: #db0909;
    background-color: #fff;
    font-size: 40px;
    text-align: center;
    line-height: 71px;
    height: 70px;
    width: 70px;
    border-radius: 50%;
    border: 2px solid #f5f5f5;
    margin: 0 0 10px;
    position: absolute;
    top: -20px;
    right: -35px;
}
.main-timeline .timeline-icon:before,
.main-timeline .timeline-icon:after{
    content: '';
    background: #db090993;
    height: 100%;
    width: 100%;
    border-radius: 50%;
    position: absolute;
    left: -8px;
    top: 1px;
    z-index: -1;
}
.main-timeline .timeline-icon:after{
    height: 40%;
    width: 55%;
    border-radius: 0;
    transform: translateY(-50%);
    top: 50%;
    left: -55%;
    clip-path: polygon(50% 0, 50% 20%, 100% 20%, 100% 80%, 50% 80%, 50% 100%, 0% 50%);
}
.main-timeline .title{
    color: #db090993;
    font-size: 22px;
    font-weight: 800;
    text-transform: uppercase;
    margin: 0 0 3px;
}
.main-timeline .description{
    font-size: 15px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
    float: right;
    margin: 0 0 0 10px;
}
.main-timeline .timeline:nth-child(even) .timeline-content{ padding: 0 0 0 85px; }
.main-timeline .timeline:nth-child(even) .timeline-icon{
    right: auto;
    left: -35px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon:before{
    left: auto;
    right: -8px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon:after{
    transform: translateY(-50%) rotateY(180deg);
    left: auto;
    right: -55%;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-icon,
.main-timeline .timeline:nth-child(4n+2) .title{
    color: #21c87a;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-icon:before,
.main-timeline .timeline:nth-child(4n+2) .timeline-icon:after{
    background: #21c87a;
}
.main-timeline .timeline:nth-child(4n+3) .timeline-icon,
.main-timeline .timeline:nth-child(4n+3) .title{
    color: #000;
}
.main-timeline .timeline:nth-child(4n+3) .timeline-icon:before,
.main-timeline .timeline:nth-child(4n+3) .timeline-icon:after{
    background: #000;
}
.main-timeline .timeline:nth-child(4n+4) .timeline-icon,
.main-timeline .timeline:nth-child(4n+4) .title{
    color: ##db0909;
}
.main-timeline .timeline:nth-child(4n+4) .timeline-icon:before,
.main-timeline .timeline:nth-child(4n+4) .timeline-icon:after{
    background: ##db0909;
}
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 20px 0;
    }
    .main-timeline .timeline-content{
        padding: 0 120px 0 0;
        min-height: 80px;
    }
    .main-timeline .timeline:nth-child(even) .timeline-content{ padding: 0 0 0 120px; }
    .main-timeline .timeline-icon{ right: 0; }
    .main-timeline .timeline:nth-child(even) .timeline-icon{ left: 0; }
}
@media screen and (max-width:576px){
    .main-timeline .timeline{ padding-top: 60px; }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(even) .timeline-content{
        padding: 0;
        min-height: auto;
    }
    .main-timeline .timeline-icon{
        /* transform: translate(0,-150px); */
        font-size: 30px;
        line-height: 51px;
        height: 50px;
        width: 50px;
        top: -60px;
    }
    .main-timeline .title{ font-size: 20px; }


}
    </style>
<h1 style="text-align:center;">Cara untuk merescue atau menangkap ular dengan aman<br></h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>1</p>
                        </div>
                        <h3 class="title">Jangan panik</h3>
                        <p class="description">
                        Pertama tidak panik dalam kondisi apapun. Minimal kalau tidak berani, foto ular untuk mengidentifikasi ular untuk menghindari asumsi ular itu tidak berbisa
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>2</p>
                        </div>
                        <h3 class="title">Minta bantu orang lain</h3>
                        <p class="description">
                        jika ukuran ular lebih dari 2 meter "Disarankan untuk menangkap ular jenis piton itu juga tidak sendiri. Untuk ukuran sepanjang 2 meter itu harus bantuan orang lain
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>3</p>
                        </div>
                        <h3 class="title">Gunakan tongkat</h3>
                        <p class="description">
                        Tongkat kayu, sapu dan sejenisnya sangat berguna dalam proses evakuasi ular. Menurut Ageng, tongkat digunakan untuk menghindari atau mengalihkan perhatian ular saat penangkapan berlangsung.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>4</p>
                        </div>
                        <h3 class="title">Lakukan perlahan</h3>
                        <p class="description">
                        perlahan guna mengurangi agresivitas ular Sebab, ular akan agresif terhadap pergerakan objek yang tiba-tiba mendekatinya. 
                        </p>
                    </a>
                </div>               <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>5</p>
                        </div>
                        <h3 class="title">Tangkap ular pada bagian ekor</h3>
                        <p class="description">
                        Selanjutnya lakukan penangkapan pada bagian ekor, bukan kepala. Karena yang sudah pro pun melakukan atau menangkap dari ekor. Berbeda kalau untuk aksi, umumnya menangkap dari bagian kepala
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>6</p>
                        </div>
                        <h3 class="title">Masukkan ke karung atau tempat lain yang aman</h3>
                        <p class="description">
                        Adapun langkah selanjutnya dengan menutup mulut ular guna menghindari gigitan sampai datang seseorang yang ahli dalam menangani ular, Apa yang Harus Kita Lakukan? Namun, sedikit orang yang melakukan cara itu. Biasanya ular yang sudah ditangkap langsung dimasukan ke dalam karung atau tempat lain. 
                        </p>
                    </a>
                </div>               <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                             <p>7</p>
                        </div>
                        <h3 class="title">Serahkan ular kepada seseorang yang ahli atau komunitas reptil dan sebagainya</h3>
                        <p class="description">
                            Ular diserahkan kepada ahli agar ular tersebut bisa tetap hidup dan dilepas liarkan kembali di tempat yang benar dan jauh dari pemukiman.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection