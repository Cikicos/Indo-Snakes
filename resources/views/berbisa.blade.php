@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
    <title>Ular Berbisa</title>

    <style>
    

.our-team-main
{
	width:100%;
	height:auto;
	border-bottom:5px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.our-team-main img
{
	border-radius:50%;
	margin-bottom:20px;
	width: 90px;
}

.our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

.our-team-main p
{
	margin-bottom:0;
}

.team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	
}

.team-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
}

/*our-team-main*/


    
    </style>




    <h1 class="text-center">Jenis-Jenis Ular berbisa</h1>

	
	<div class="container">
	<div class="row">
	
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/weling.jpg" class="img-fluid" />
	<h3>Weling</h3>
	<p>Bungarus candidus</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran : Jawa, Sumatera, Bali, Sulawesi
    Mereka biasa berdiam di dekat sumber air, seperti sawah, ular ini juga kadang-kadang menggunakan lubang tikus sebagai tempat bersembunyi. Ular ini bersifat pemalu dan biasanya bersembunyi dalam tempat tertutup pada pagi hari, dimana mereka aktif pada malam hari, mereka paling aktif pada jam 9 dan 11, dimana mereka keluar dari persembunyian dan dapat ditemukan di sekitar jalanan atau tepi jalan di sekitar rumput sedang mencari mangsa. Ular ini biasanya tidak bertemperamen agresif, khususnya jika masih pada pagi hari, mereka lebih memilih untuk menutupi kepala mereka dengan buntut mereka daripada mencoba menggigit.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/welang.JPG" class="img-fluid" />
	<h3>Welang </h3>
	<p>Bungarus fasciatus</p>
	</div>
	
	<div class="team-back">
	<span>Persebaran : Jawa, Kalimantan, Borneo, Kepulauan Mentawai, Kepulauan Natuna, Sumatera, Ambon
    Ular welang tersebar luas dan merupakan ular dari genus Bungarus yang paling umum. Menghuni daerah berhutan, rawa-rawa, hutan bakau, sawah dan sekitar pedesaan, ia menyukai daerah kering terbuka yang dekat dengan sumber air. Diketahui memiliki persebaran hingga daerah yang terganggu oleh aktivitas manusia, lebih sering ditemukan pada ketinggian yang rendah, namun kadang-kadang juga ditemukan hingga hutan pegunungan pada ketinggian maksimum 2500m dpl. Ular nokturnal dan hidup di tanah. Pemalu dan tidak agresif pada siang hari, ia menyembunyi di gundukan rayap, bawah kayu atau batu dan liang yang dibuat oleh hewan pengerat. Kebanyakan gigitan oleh ular terjadi pada malam hari, saat seseorang tidak sengaja menginjaknya karena tidak melihatnya.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/anang.JPG" class="img-fluid" />
	<h3>King Kobra</h3>
	<p>Ophiophagus hannah</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Sumatera, Jawa, Sulawesi, Kalimantan, Bangka, Bali, Kepulauan Mentawai dan Kepulauan Riau.
    Ular ini dapat mencapai hingga ukuran sekitar 6 meter, ini adalah ular berbisa terbesar di dunia. Sebuah gigitan dari ular ini dapat menyebabkan kematian pasti jika tidak ditangani dengan cepat. Ular ini memiliki sifat pemalu dan lebih memilih menghindar konfrontasi dengan manusia sehingga ertemuan dengan manusia cukup jarang oleh ular ini. Ular cerdas ini dapat ditemukan di berbagai habitat seperti hutan murni, hutan bakau, hutan terganggu, lahan pertanian, persawahan dan lingkungan pemukiman hingga ketinggian 2000m dimana ia memburu mangsa utamanya yaitu ular lain, terutama ular tikus. Ophiophagus memiliki arti 'pemakan ular. Walaupun terutama memangsa ular, ia juga akan memangsa kadal dan biawak kecil.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	<!--team-4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/belang.jpg" class="img-fluid" />
	<h3>Belang Maut</h3>
	<p>Acanthophis laevis</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Irian Jaya, Seram dan Tanimbar.
    Ular ini berlimpah populasinya di daerah-daerah yang memiliki banyak tempat berembunyi seperti vegetasi lebat atau tumpukan dedaunan yang sering dijadikan tempat bersembunyi bagi ular ini. Ia juga dapat ditemukan pada padang rumput, perkebunan kopi dan taman dibudidayakan.Ular ini juga dapat ditemukan di padang rumput, perkebunan kopi dan taman dibudidayakan, namun juga sering ditemukan di daerah yang dekat dengan tempat tinggal manusia hingga ketinggian 1800m. Ular ini aktif pada malam hari, memangsa pada kadal tanah, burung dan tikus kecil. Ular ini memiliki badan yang gemuk, lebih besar dari ular beludak yang  hidup di tanah biasanya.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-4-->
	
	<!--team-5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/picung.jpg" class="img-fluid" />
	<h3>Picung</h3>
	<p>Rhabdophis subminiatus</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Sumatera, Jawa, Kalimantan, Sulawesi.  
    Ular ini memiliki warna leher merah mencolok, yang merupakan ciri khas ular ini. Dapat tumbuh hingga 1.3m, ular bertaring belakang ini dulu diketahui  sebagai spesies yang berbisa rendah. Namun telah diketahui setelah beberapa kasus gigitan bahwa ular ini ternyata berbisa tinggi gigitannya dan dapat mengancam nyawa manusia. Dengan fakta bahwa ular ini sering ditemukan, sehingga membuatnya menjadi lebih berbahaya. Dengan penampakannya yang terlihat menarik dan ukurannya yang biasa kecil, ular ini dapat membahayakan orang-orang yang tidak sadar akan  kemampuan bisa tinggi yang dimiliki oleh ular ini.Ular Picung / Red Necked Keelback (Rhabdophis subminiatus)
	</span>
	</div>
	
	</div>
	</div>
	<!--team-5-->
	
	<!--team-6-->
	<div class="col-lg-4">
	    <div class="our-team-main">
	
	    <div class="team-front">
	    <img src="img/pit.jpg" class="img-fluid" />
	    <h3>Viper Pit</h3>
	    <p>Parias hageni</p>
	    </div>
	
	<div class="team-back">
	<span>
	Persebaran: Sumatera.  
    Ular ini hidup di hutan hujan dataran rata dan bukit berhutan pada dataran rendah hingga ketinggian 1000m. Mereka biasa ditemukan setelah hujan saat malam hari. Aktif pada malam hari, hidup terutama di pepohonan namun juga dapat kadang-kadang ditemukan di semak-semak rendah dan dasar hutan. Ular ini memangsa pada burung, tikus dan mamalia kecil. Ular ini biasanya tidak bertemperamen agresif dan jarang cepat menggigit, tidak seperti kebanyakan Ular Beludak lainnya. Ular ini ditemukan di Sumatera.
	</span>
	</div>
	
	</div>
	</div>
	
    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/rhodos.jpg" class="img-fluid" />
	<h3>Ular Tanah</h3>
	<p>Calloselasma rhodostoma</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran: Jawa
    Ular ini sangat berbisa dan dapat menggigit dengan sangat cepat, juga dapat sulit dilihat jika tersamar di sekitar dedaunan mati. Gigitan dari ular ini terkenal sebagai 'pembusuk jari' karena jika anda tergigit di jari, kemungkinan besar anda akan harus amputasi jari tersebut. Kebanyakan gigitan akan menyebabkan kematian jika tidak segera pergi ke rumah sakit. Mereka merupakan ular pemalas yang tidak akan bergerak atau kabur saat ada orang yang berjalan ke arah mereka, melainkan mereka akan hanya diam di tempat dan menggigit orang yang mendekatinya, setelah menggigit mereka biasanya masih akan berdiam di tempat yang sama. Ular ini merupakan penyebab kasus gigitan terbanyak di seluruh daerah penyebarannya.
   	</span>
	</div>
	
	</div>
	</div>

    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/cabai.jpg" class="img-fluid" />
	<h3>Cabai Kecil</h3>
	<p>Calliophis intestinalis</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran : Jawa, KepulaUlar ini dapat ditemukan di hutan lembab, sawah, kebun desa dan kadang-kadang di taman rimbun yang tak terurus. Ular ini memiliki sifat yang pemalu sehingga jarang terlihat walaupun sebernarnya populasi ular ini cukup melimpah. Ular ini hidup penuh di tanah, biasa memangsa pada ular kecil lainnya, khususnya Ular Kawat, namun juga akan memangsa kodok. Ia menyukai habitat yang tertutup dan lembab, tempat-tempat gelap yang lembab atau berisi air memiliki potensi untuk menjadi sarang bagi ular ini. Ular ini dikenal dari garis kemerahan-coklat pada bagian atas tubuhnya, bagian bawah buntutnya berwarna merah. Di setiap sisi tubuh bagian bawahnya terdapat sebuah garis pucat.uan Mentawai, Sumatera
    
    </span>
	</div>
	
	</div>
	</div>

    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/sunda.jpg" class="img-fluid" />
	<h3>Sunda Viper pit</h3>
	<p>Trimeresurus insularis</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran : Adonara, Alor, Bali, Flores, Komodo, Lombok, Padar, Rinca, Romang, Roti, Sumba, Sumbawa, Timor, Wetar, Java), Timor-Leste
    Ular ini menghuni hutan pada ketinggian hingga 880m dpl. Aktif pada malam hari, terutama ditemukan di pohon hingga ketinggian 15m di atas tanah. Memangsa pada kodok, tikus, cicak dan kadal. Tubuh bagian atas ular ini biasanya hijau terang, kadang-kadang zaitun atau biru, dengan belang-belang gelap. Buntut berujung warna merah. Bagian bawah badan hijau-kekuningan, putih-kehijauan atau biru muda. Mata berwarna coklat atau merah. Ular ini melahirkan 11 - 17 individu muda, berukuran 14 - 19cm.
    </span>
	</div>
	
	</div>
	</div>

    
	
	
	</div>
	</div>
@endsection