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


<!------ Include the above in your HEAD tag ---------->


    <h1 class="text-center">Rumah sakit yang menyediakan Serum Anti Bisa Ular</h1>

	
	<div class="container">
	<div class="row">
	
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/RSCM.jpg" class="img-fluid" />
	<h3>RSUPN Dr. Cipto Mangunkusumo
</h3>
	<p>Jl. Pangeran Diponegoro No.71, RW.5, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430</p>
	</div>
	
	<div class="team-back">
	<span>
	Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo (disingkat RSUPN Dr. Cipto Mangunkusumo atau RSCM) adalah sebuah rumah sakit pemerintah . Selain menjadi RS pemerintah RSCM juga berfungsi sebagai RS pendidikan, salah satunya adalah Fakultas Kedokteran Universitas Indonesia.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/RSTAR.jpg" class="img-fluid" />
	<h3>RSUD Tarakan Jakarta</h3>
	<p>Jl. Kyai Caringin No.7, RT.11/RW.4, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</p>
	</div>
	
	<div class="team-back">
	<span>
	Telp :(021) 3503003
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/MKK.jpg" class="img-fluid" />
	<h3>RS Mitra Keluarga Kalideres</h3>
	<p>Jl. Peta Selatan No.1, RT.7/RW.11, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11840</p>
	</div>
	
	<div class="team-back">
	<span>
	Telp :(021) 22523700
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	<!--team-4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/RSHJ.jpeg" class="img-fluid" />
	<h3>RS Haji Jakarta</h3>
	<p>Jl. Raya Pd. Gede No.4, RT.1/RW.1, Lubang Buaya, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13650</p>
	</div>
	
	<div class="team-back">
	<span>
	Telp :(021) 8000694
	</span>
	</div>
	
	</div>
	</div>
	<!--team-4-->
	
	<!--team-5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/RSHS.jpg" class="img-fluid" />
	<h3>RS Dr. Hasan Sadikin</h3>
	<p>Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161</p>
	</div>
	
	<div class="team-back">
	<span>
	Telp :(021) 2034953
	</span>
	</div>
	
	</div>
	</div>
	<!--team-5-->
	
	<!--team-6-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="img/RSFW.jpg" class="img-fluid" />
	<h3>RSUP Fatmawati.</h3>
	<p>Jl. RS. Fatmawati Raya No.4, RT.4/RW.9, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430</p>
	</div>
	
	<div class="team-back">
	<span>
	Telp :(021) 7501524
	</span>
	</div>
	
	</div>
	</div>
	
	
	
	</div>
	</div>
@endsection