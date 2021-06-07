@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
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


<

    <h1 class="text-center">Jenis-Jenis Ular Tidak berbisa</h1>

	
	<div class="container">
	<div class="row">
	
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/karung.jpg" class="img-fluid" />
	<h3>Karung Belang</h3>
	<p>Acrochordus granulatus</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran : Ambon, Flores, Irian Jaya, Jawa, Jobi, Schouten, Sulawesi, Sumatera, Ternate, Timor, Kami, Komodo
    Ular ini berbeda dengan A.arafurae dan A.javanicus, yang hanya dapat hidup di air tawar, ular ini memiliki toleransi terhadap kadar garam di air sehingga dapat ditemukan di perairan payau seperti pesisiran pantai, hutan bakau, rumput lamun dan muara, ular ini juga dapat ditemukan di sungai, kali, rawa-rawa dan badan air lainnya.
    </span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/tikus.JPG" class="img-fluid" />
	<h3>Ular tikus </h3>
	<p> Oreocryptophis porphyraceus laticinctus</p>
	</div>
	
	<div class="team-back">
	<span>Persebaran : Sumatera
    Ular ini hidup hutan hujan pegunungan yang lembab dari ketinggian 1000m hingga 2600m dpl. Mereka menyukai daerah yang memiliki banyak vegetasi tebal atau semak-semak.	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/loreng.JPG" class="img-fluid" />
	<h3>Loreng</h3>
	<p>Dendrelaphis striatus</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Kalimantan,Sumatera
    Permukaan dorsal ular tampar menggagumkan ini berwarna perak (bronze) dengan beberapa garis hitam tebal yang berjarak sempit pada kedua sisi tubuhnya.   </span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	<!--team-4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/malayan.jpg" class="img-fluid" />
	<h3>Malayan Bridle Snake</h3>
	<p>Dryocalamus subannulatus</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Kepulauan Mentawai, Kepulauan Riau, Sumatera.
    Ular ini memiliki 2 bentuk berbeda, di kedua-duanya mereka memiliki kepala bagian atas yang berwarna coklat dengan pigmen kuning, yang membuatnya memiliki sosok bertopeng pada mukanya.	</span>
	</div>
	
	</div>
	</div>
	<!--team-4-->
	
	<!--team-5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/wolf.jpg" class="img-fluid" />
	<h3>Wolf Snake</h3>
	<p> Lycodon effraenis</p>
	</div>
	
	<div class="team-back">
	<span>
	Persebaran : Sumatera, Jawa, Kalimantan, Sulawesi.  
    Ular pemalu ini mendiami hutan tropis lembab dataran rendah, hutan kering, perkebunan dan daerah dibudidayakan hingga ketinggian 700m dpl, ular ini juga kadang-kadang dapat ditemukan di dekat tempat tinggal manusia.
    </span>
	</div>
	
	</div>
	</div>
	<!--team-5-->
	
	<!--team-6-->
	<div class="col-lg-4">
	    <div class="our-team-main">
	
	    <div class="team-front">
	    <img src="img/kukri.jpg" class="img-fluid" />
	    <h3>Kukri Coklat</h3>
	    <p>Poligodon purpurascens</p>
	    </div>
	
	<div class="team-back">
	<span>
	Persebaran: Nias, Sumatera, Kepulauan Riau, Bangka, Belitung, Kalimantan, Jawa, Sulawesi.
    Ular ini hidup di pegunungan dan hutan sekunder pada dataran rendah hingga ketinggian 1200m. Ular ini hidup di tanah dan memiliki gaya hidup semi fossorial (menggali) yang menyukai daerah dimana terdapat banyak kayu dan tempat berlindung.
	</span>
	</div>
	
	</div>
	</div>
	
    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/barred.jpg" class="img-fluid" />
	<h3>Barred Kukri Snake</h3>
	<p> Oligodon signatus</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran: Sumatera
    Ular ini dianggap langka, atau sebenarnya jarang dite mukan. Habitat ular ini merupakan hutan primer dan sekunder pada dataran rendah.
    </span>
	</div>
	
	</div>
	</div>

    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/bola.jpg" class="img-fluid" />
	<h3>Bola</h3>
	<p>Xenelaphis ellipsifer</p>
	</div>
	
	<div class="team-back">
	<span>
    Ular jarang ditemukan ini diketahui hidup pada daerah pegunungan hanya di hutan primer dan sekunder pada ketinggian paling rendah 800m.
    
    </span>
	</div>
	
	</div>
	</div>

    <div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/pipa.jpg" class="img-fluid" />
	<h3>Pipa</h3>
	<p>Cylindrophis ruffus</p>
	</div>
	
	<div class="team-back">
	<span>
    Persebaran : Sumatera, Riau, Banka, Kalimantan, Jawa, Sula, Buton, Sulawesi, Komodo
    Ular ini terutama ditemukan pada dataran rendah, ia menyukai habitat rawa-rawa, sawah, taman, selokan, kanal, kali dan badan air tawar lainnya.
    </span>
	</div>
	
	</div>
	</div>

    
	
	
	</div>
	</div>
@endsection