@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
	<style>

		/* ============================================ */

.aboutus-area {
    padding-top:120px;
     padding-bottom:120px;
}
/*-- aboutus Image --*/
.aboutus-image {
  background-color: #21c87a;
  margin-right: 52px;
  width: 318px; }
  @media only screen and (min-width: 992px) and (max-width: 1200px) {
    .aboutus-image {
      margin-right: 35px;
      width: 345px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .aboutus-image {
      margin-bottom: 30px;
      float: none; } }
  @media only screen and (max-width: 767px) {
    .aboutus-image {
      margin-bottom: 30px;
      margin-right: 0;
      float: none;
      width: auto; } }
  .aboutus-image img {
    width: 100%; }

/*-- aboutus Content --*/


.aboutus-content h1 {
  font-size: 40px;
  font-weight: 800;
  line-height: 40px;
  margin-bottom: 2px; }
  @media only screen and (max-width: 479px) {
    .aboutus-content h1 {
      font-size: 30px;
      line-height: 30px; } }
  .aboutus-content h1 span {
    color: #71b100; }

.aboutus-content h4 {
  font-size: 18px;
  font-weight: 500;
  color: #9b9b9b;
  margin-bottom: 23px; }

.aboutus-content p {
  font-size: 16px;
  line-height: 27px; }
  
 /*-- counter --*/
.counter {
  border: 1px solid #eeeeee;
  margin-top: 32px;
  float: left;
  width: 100%; }
  .counter .single-counter {
    float: left;
    width: 25%;
    padding: 28px 15px 28px; }
    @media only screen and (max-width: 767px) {
      .counter .single-counter {
        width: 50%; }
        .counter .single-counter:nth-child(3) {
          border-top: 1px solid #eeeeee;
          border-left: 0px solid #eeeeee; }
        .counter .single-counter:nth-child(4) {
          border-top: 1px solid #eeeeee; } }
    .counter .single-counter + .single-counter {
      border-left: 1px solid #eeeeee; }
    .counter .single-counter h2 {
      font-size: 30px;
      color: #71b100;
      line-height: 24px;
      font-family: "Open Sans", sans-serif;
      margin-bottom: 8px; }
    .counter .single-counter p {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 0;
      color:#000; }
	</style>

<!------ Include the above in your HEAD tag ---------->

<div class="aboutus-area">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
            <div class="col-md-4 col-sm-6 col-xs-12">    
                <div class="aboutus-image float-left hidden-sm"><img src="img/is3.png"></div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="aboutus-content ">
                    <h1>Tentang Kita <span>IndoSnakes</span></h1>
                    <h4>Reptile Lovers</h4>
                    <p>Kami adalah pencinta reptil terutama ular,kami adalah komunitas pencinta ular yang berhasil dibudidayakan atau ular yang berasal asli dari indoneisa.<br>Kami ingin memberikan Informasi sisi lain mengenai ular yang biasanya ular sering sekali dipandang sebelah sisi oleh masyarakat kami ingin mengedukasi kepada masyarkat tentang ular disekitar kita. <br>#INDOSNAKES </p>
					<p class="mb-0"><a href="/index" target="_blank" class="btn btn-primary btn-circled">Mulai Menjelajah</a></p>
                    <div class="counter ">
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">349</h2>
                            <p>Jenis</p>
                        </div>

						<div class="single-counter text-center">
                            <h2 class="counter">4</h2>
                            <p>Familia</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">17.000+</h2>
                            <p>Pulau Penyebaran</p>
                        </div>
                        
                        <div class="single-counter text-center">
                            <h2 class="counter">2</h2>
                            <p>Tipe</p>
                        </div>                        
                    </div>
                    
                </div>
            </div>    
            </div>
        </div>
    </div>
</div>
@endsection