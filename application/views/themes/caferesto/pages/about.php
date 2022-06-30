<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/header1.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p>
          <h1 class="mb-0 bread">Tentang Kami</h1>
        </div>
      </div>
    </div>
  </div>
  
  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_theme_uri('images/about1.jpg'); ?>);">
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Selamat Datang di <?php echo get_store_name(); ?></h2>
              </div>
            </div>
            <div class="pb-md-5">
                <p><?php echo get_settings('store_description'); ?></p>
                          <p><a href="<?php echo site_url('#products'); ?>" class="btn btn-primary">Pesan sekarang!</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section">
      <div class="container">
          <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Pemesanan Online</h3>
          <span>Pesanan Online daerah Parapat</span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Pesan Antar</h3>
          <span>Pesan Antar daerah Parapat</span>
        </div>
      </div>    
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet "></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Bahan Segar</h3>
          <span>Menggunakan Bahan Segar</span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Bahan Terbaik</h3>
          <span>Menggunakan Bahan dengan kualitas baik</span>
        </div>
      </div>      
    </div>
  </div>
  </div>
  </section>

      <section class="ftco-section bg-light ftco-no-pb ftco-no-pt">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
        <br><br><span class="subheading">Jadwal Buka</span>
          <h2 class="mb-4">Kapan Putra Kembar Coffee Shop & Resto Buka?</h2>
            
            <h5>Senin &nbsp&nbsp&nbsp : &nbsp	Buka 24 jam
              <br>Selasa &nbsp :	&nbsp  Buka 24 jam
              <br>Rabu &nbsp&nbsp&nbsp&nbsp : &nbsp	Buka 24 jam
              <br>Kamis &nbsp&nbsp : &nbsp	Buka 24 jam
              <br>Jumat &nbsp&nbsp : &nbsp	Buka 24 jam
              <br>Sabtu &nbsp&nbsp&nbsp : &nbsp	Buka 24 jam
              <br>Minggu &nbsp:	&nbsp Buka 24 jam
            </h5> <br>

            <h5>Melayani Pesanan Online dari pukul <font color="secondary">07.00</font> WIB hingga pukul <font color="red">18.00</font> WIB</h5><br>
        </div>
      </div>
</section>

      <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <br><span class="subheading">Testimony</span>
          <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <?php if ( count($reviews) > 0) : ?>
            <?php foreach ($reviews as $review) : ?>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(<?php echo base_url('assets/uploads/users/'. $review->profile_picture); ?>)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
                  <p class="name"><?php echo $review->name; ?></p>
                  <span class="position"><?php echo get_formatted_date($review->review_date); ?></span>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
