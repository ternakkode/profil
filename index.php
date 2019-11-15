<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/62143ec4a9.js" crossorigin="anonymous"></script>

    <style type="text/css" sr>

    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: white;
    }

    #header {
      padding: 0px 0px 20px 0px;
      left: 0;
      top: 0;
      right: 0;
      transition: all 0.5s;
      z-index: 997;
      background: #fff !important;
    }

    .large-header {
      position: relative;
      width: 100%;
      background: #111;
      overflow: hidden;
      background-size: cover;
      background-position: center center;
      z-index: 1;/*
      max-height: 600px !important;*/
    }

    .main-title {
      font-family: 'Muli', sans-serif;
      position: absolute;
      width: 80%;
      margin: 0;
      padding: 0;
      color: #F9F1E9;
      text-align: center;
      top: 60%;
      left: 50%;
      -webkit-transform: translate3d(-50%, -50%, 0);
      transform: translate3d(-50%, -50%, 0);
    }

    .teks-judul {
      font-size: 4.2em;
      letter-spacing: 10px;
      font-weight: 800;
    }

    .main-title .thin {
      font-weight: 200;
    }

    .button-kenalan {
      background: transparent;
      border-color: white;
      margin-top: 150px;
      padding: 10px 50px 10px 50px;
      font-weight: bolder;
      letter-spacing: 3px;
    }

    .button-kenalan:hover {
      background: transparent;
      border-color: white;
    }

    .button-kenalan:active {
      background: transparent;
      border-color: white;
    }

    .judul-sekilas{
      color: #232323;
      font-family: 'Oswald', sans-serif;
      font-size: 70px;
      font-weight: 700;
      line-height: 120px;
      letter-spacing: 5px;
      text-decoration: none solid rgb(0, 0, 0);
      margin: 0 auto;
      text-align: center;
      justify-content: center;

    }

    .penjelasan-sekilas{
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 30px;
    }

    hr {
      margin-top: -10px;
      background: url('hr.png');
      width: 101px;
      height: 16px;
      border: none;
    }

    .section-title {
    margin-top: 50px;
    font-family: poppins;
    font-weight: 700;
    font-size: 40px;
    margin-bottom: 20px;
    color: #10161a;
  }

  .section-title:after {
    content: "";
    display: block;
    height: 4px;
    width: 40px;
    background-color: #6195ff;
    margin: 20px auto 0;
  }

  .circle-bg:after {
    width: 300px;
    height: 300px;
    content: "";
    z-index: -1;
    border-radius: 50%;
    position: absolute;
    bottom: -90px;
    right: -90px;
    background: #f8f9fa;
}

#service {
  padding-top: 120px;
  padding-bottom: 120px;
  background-color: #fafafa;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
}

.title {
    font-size: 40px;
    font-family: poppins
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 80px;
    color: #10161a;
}

.title:after {
    content: "";
    display: block;
    height: 4px;
    width: 40px;
    background-color: #6195ff;
    margin: 20px auto 0;
  }

  .single_service {
    padding: 45px 40px;
    margin-bottom: 20px;
    border: 1px solid #e8e9eb;
    background-color: #fff;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}

  .single_service:hover {
    background-color: #0042ff;
  }

  .single_service span {
    font-size: 20px;
    margin-bottom: 21px;
    display: inline-block;
    color: #000;
    line-height: 16px;
    font-weight: 700;
}

.single_service:hover span {
  color: #fff;
}

.single_service h4 {
    color: #10161a;
    font-weight: 700;
    font-size: 24px;
    margin-bottom: 30px;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}

.single_service:hover h4 {
    color: #fff;
}

.our_service .single_service p {
    color: #7f7f7f;
    line-height: 1.8;
    font-size: 15px;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}

.single_service:hover p {
    color: #fff;
}


.single_service:hover ul li a {
    color: #fff;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}

.filters .btn {
    border-color: transparent;
    font-size: .8rem;
    padding: 8px 20px;
    margin: 5px;
    background: rgba(52, 58, 64, 0.05);
    color: #343a40;
    border-radius: 30px;
}

.contact{
  padding-top: 10px;
  padding-bottom: 80px;
  border-top: 1px solid #eee;
}

.sosmed {
  font-weight: 800;
  padding-top: 30px;
  font-size: 14px;
  font-weight: bolder;
}

.site-footer {
  background-color: #1A1A1A;
    margin-top: -50px;
    padding: 30px;
    text-align: center;
    font-size: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.white-color {
  font-weight: 700;
  font-size: 52px;
  margin: 0 0 15px;
  color: white;
  font-family: "Dosis", sans-serif;
}

.btn-pendataan{
  margin-bottom: -45px;
  background: transparent;
  border-color: white;
}

.btn-pendataan:hover{
  background: white;
  border-color: white;
  color: #111111;
}

.brook-counter .content span {
    margin-bottom: 29px;
    font-size: 48px;
    font-weight: 700;
    color: rgb(34, 34, 34);
    display: block;
}

.brook-counter .icon i {
    font-size: 80px;
    color: #6195ff;
}

.icon {
  margin-bottom: 30px;
}

.social-container {
   width: 400px;
   margin: 40vh auto;
   text-align: center;
}
 .social-icons {
   padding: 0;
   list-style: none;
   margin: 1em;
}
 .social-icons li {
   display: inline-block;
   margin: 0.15em;
   position: relative;
   font-size: 1.2em;
}
 .social-icons i {
   color: #fff;
   position: absolute;
   top: 21px;
   left: 21px;
   transition: all 265ms ease-out;
}
 .social-icons a {
   display: inline-block;
}
 .social-icons a:before {
   transform: scale(1);
   -ms-transform: scale(1);
   -webkit-transform: scale(1);
   content: " ";
   width: 60px;
   height: 60px;
   border-radius: 100%;
   display: block;
   background: linear-gradient(45deg, #00b5f5, #002a8f);
   transition: all 265ms ease-out;
}
 .social-icons a:hover:before {
   transform: scale(0);
   transition: all 265ms ease-in;
}
 .social-icons a:hover i {
   transform: scale(2.2);
   -ms-transform: scale(2.2);
   -webkit-transform: scale(2.2);
   color: #00b5f5;
   background: -webkit-linear-gradient(45deg, #00b5f5, #002a8f);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   transition: all 265ms ease-in;
}






@media only screen and (max-width: 768px) {
   .teks-judul {
      font-size: 3em;
   }

   .navbar-logo {
    margin-top: 50px;
   }
   .brook-counter{
    margin-top: 50px;
   }
}
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-default raja-nav" style="z-index: 999;">
  <a class="navbar-brand" href="https://rajabrawijaya.ub.ac.id"><img class="navbar-logo" src="logo.png" width="90px;"></a>
  <button class="navbar-toggler custom-toggler float-xs-right" type="button" data-toggle="collapse" data-target="#menu-raja" aria-controls="menu-raja" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu-raja">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 kiri">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeri</a>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0 kanan">
      <li class="nav-item">
        <a class="nav-link" href="#">Himpunan</a>
      </li>
      <li class="nav-item">
                  <a class="nav-link" href="#">Pendataan</a>
      </li>
      <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container-fluid demo" style="padding: 0;background-color: white;">
   <div class="content" style="background-color: white;">
      <div id="large-header" class="large-header" style="background-color: white;">
         <canvas id="demo-canvas" style="background-image: linear-gradient(to top, #0E2740 ,#229BA8);"></canvas>
         <div class="main-title">
           <h1 class="teks-judul">
             SISTEM INFORMASI
           </h1>
             <h3>
               <span class="thin element"></span>&nbsp;
             </h3>
           <a href="#aboutus"><button class="btn btn-primary button-kenalan">KENALI LEBIH LANJUT <i class="fa fa-arrow-right" style="margin-left: 10px;"></i></button></a>
         </div>
        <!--  <h1 class="main-title">
         <span style="letter-spacing: 10px;font-weight: 800">SISTEM INFORMASI</span>
         <br>
         <span class="thin element" style="font-size: 35px;"></span>&nbsp;</h1> -->
      </div>
   </div>
  </div>

  <div class="site-section cta-big-image" id="aboutus">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-os="fade">
            <h2 class="section-title mb-3">Tentang Jurusan</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="hero_1.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Apa itu Sistem Informasi ? </h3>
              <p style="text-align: justify;padding-top: 30px;">&emsp;&emsp;&emsp;&emsp;Seiring dengan berkembangnya teknologi informasi yang sangat cepat, Program Studi Teknologi Informasi Vokasi UB diarahkan pada penguasaan ilmu dan keterampilannya di bidang distribusi informasi. D3 SI menawarkan program keunggulan yang dapat menghasilkan akademisi  yang profesional untuk memenuhi permintaan pasar tenaga kerja.
Proses pembelajaran untuk D3 Sistem Informasi UB dirancang untuk berada dalam integrasi antara dosen akademik UB dan staff pengajar ahli yang berasal dari perusahaan didukung dengan laboratorium modern.
.</p>
            </div>  
          </div>

          <div class="col-lg-6 col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-1" style="font-size: 30px;">VISI</h2>
            <p style="font-size: 13px;padding-right: 40px;padding-left: 40px;">
              Menjadi pelaksana pendidikan vokasi di bidang keahlian Sistem Informasi bagi mahasiswa yang ingin mengembangkan potensi dirinya untuk meraih keahlian dan kompetemsi dalam mendesain dan memanfaatkan sistem informasi untuk keperluan pengelolaan suatu pekerjaan atau progra sehingga operasional kantor menjadi lebih efektif dan efisien sehingga mampu mengembangkan potensi pada dirinya untuk memanfaatkan IPTEK.
            </p>
            <h2 class="section-title mb-3 text-center" style="font-size: 30px;">Capaian pembelajaran</h2>
            <p style="font-size: 13px;padding-right: 40px;padding-left: 40px;">
              Menjadi pelaksana pendidikan vokasi di bidang keahlian Sistem Informasi bagi mahasiswa yang ingin mengembangkan potensi dirinya untuk meraih keahlian dan kompetemsi dalam mendesain dan memanfaatkan sistem informasi untuk keperluan pengelolaan suatu pekerjaan atau progra sehingga operasional kantor menjadi lebih efektif dan efisien sehingga mampu mengembangkan potensi pada dirinya untuk memanfaatkan IPTEK.
            </p>
            <h2 class="section-title mb-3 text-center" style="font-size: 30px;">Kemampuan yang diharapkan</h2>
            <p style="font-size: 13px;padding-right: 40px;padding-left: 40px;">
              Mampu untuk merancang, membangun, mengembangkan dan menerapkan sistem informasi organisasi/perusahaan berupa aplikasi website maupun mobile.
            </p>
          </div>

          <div class="col-lg-6 col-12" data-aos="fade">
            <h2 class="section-title mb-3 text-center" style="font-size: 30px;">MISI</h2>
            <ul class="list-unstyled feature-list text-muted" style="padding-left: 60px;">
                                <li class="pb-3"><i class="mdi mdi-checkbox-marked-circle text-success h4"></i>Melaksanakan pendidikan, pelatihan, dan menumbuh kembangkan kepercayaan diri peserta didik, sehingga mencapai keahlian dan kompetensi dalam bidang Sistem Informasi.</li>
                                <li class="pb-3"><i class="mdi mdi-checkbox-marked-circle text-success h4"></i>Melaksanakan kegiatan praktis di bidang sitem informasi sehingga menjadi insan cerdas, kreatif, inovatif, dan kompetitif serta bermanfaat bagi dunia industri.</li>
                                <li class="pb-3"><i class="mdi mdi-checkbox-marked-circle text-success h4"></i>Melakukan pendampingan, tutorial, pembimbingan dan konsultasi di bidang sistem informasi agar peserta didik mampu memimpin suatu proyek pembangunan sistem informasi serta menjembatani antara pemakai akhir dari jasa komputer dengan memanfaatkan ilmu pengetahuan dan teknologi.</li>
                                <li class="pb-3"><i class="mdi mdi-checkbox-marked-circle text-success h4"></i>Memberikan peluang yang sebesar-besarnya untuk mengikuti pelatihan, pemagangan, dan/atau on the job training di dalam maupun di luar negeri agar peserta didik mampu berdaya saing dalam mendesain dan memanfaatkan sistem informasi.</li>
                            </ul>
                            <h2 class="section-title mb-3 text-center" style="font-size: 30px;">Kurikulum</h2>
            <p style="font-size: 13px;padding-right: 40px;padding-left: 40px;text-align: center;">
              Menggabungkan teknologi informasi dengan proses bisnis/manajemen sehingga memastikan sistem informasi yang dibangun selaras dengan strategi bisnis perusahaan untuk meningkatkan daya saing perusahaan.
            </p>
          </div>


        </div>

        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
                    <div class="row">
                        <!-- Start Single Counter -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="brook-counter text-center">
                                <div class="icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div class="content">
                                    <span class="count">9</span>
                                    <h6 class="heading heading-h6">Angkatan</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter -->

                        <!-- Start Single Counter -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt_mobile--40">
                            <div class="brook-counter text-center">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="content">
                                    <span class="count">500++</span>
                                    <h6 class="heading heading-h6">Jumlah Mahasiswa</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter -->

                        <!-- Start Single Counter -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt_sm--40">
                            <div class="brook-counter text-center">
                                <div class="icon">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="content">
                                    <span class="count">200++</span>
                                    <h6 class="heading heading-h6">Mahasiswa Aktif</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter -->

                    </div>
                </div>



      </div>  


    </div>

    <div id="service" class="section md-padding">

    <div class="container">

        <div class="row">

            <div class="col-md-12 section-header text-center">
                <h2 class="title">Apa Yang Kami Pelajari</h2>
            </div>

          <div class="col-sm-6 col-xl-3">
            <div class="single_feature">
              <div class="single_service">
                <span>01</span>
                <h4>
                  UI / UX Designing
                </h4>
                <p>
                  Belajar mendesain bagaimana apps, web, dan platform yg lain bisa lebih mudah digunakan oleh user.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="single_feature">
              <div class="single_service">
                <span>02</span>
                <h4>Project Management</h4>
                <p>
                  Belajar bagaimana me-manage project dengan terstruktur dan sesuai dengan aturan yang ada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="single_feature">
              <div class="single_service">
                <span>03</span>
                <h4>Web Development</h4>
                <p>
                  Belajar bagaimana membuat website dan pengamanan website, Frontend maupun Backend.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="single_feature">
              <div class="single_service">
                <span>04</span>
                <h4>Mobile Apps Development</h4>
                <p>
                  Belajar bagaimana membuat sebuah aplikasi pada platform android menggunakan java.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<section class="pendataan" style="background-color: #111111;padding: 70px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-pendataan text-center">
                                <h2 class="white-color">Pendataan Mahasiswa & Alumni</h2>
                                <p class="m-0px large" style="color: #828282;">Untuk keperluan Akreditas, kami meminta untuk semua Mahasiswa aktif dan Alumni dari Bidang Keahlian Sistem Informasi untuk meluangkan waktunya melakukan pendataan.</p>
                                <div class="p-25px-t">
                                    <button class="btn btn-primary btn-pendataan">Pendataan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

    <section class="site-section bg-light aos-init aos-animate" id="contact-section" data-aos="fade">
      <div class="container-fluid contact" id="contact">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Hubungi Kami !</h2>
          </div>
        </div>
        <div class="row mb-5 justify-content-center">

        <div class="col-md-12 text-center" style="margin-bottom: 70px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15805.810355630278!2d112.6161551460327!3d-7.952092768088375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11a949e002df2194!2sPendidikan%20Vokasi%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1572845038106!5m2!1sid!2sid" width="75%;" height="400px;" frameborder="1" style="border:0;" allowfullscreen=""></iframe>
        </div>


          <div class="col-md-12 text-center">
              <ul class="social-icons">
        <li><a href="https://www.instagram.com/himmasi_ub/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="http://line.me/ti/p/~kdc4008j"><i class="fab fa-line"></i></a></li>
        <li><a href="mailto:mail.himmasi.ub@gmail.com"><i class="fa fa-envelope"></i></a></li>
        <li><a href="https://github.com/ternakkode"><i class="fab fa-github"></i></a></li>
    </ul></div>
        </div>
      </div>
    </section>

    <footer id="footer" class="site-footer uk-section uk-section-small">
                <div class="copyrights">
                    <div class="uk-container uk-container-large">
                        <span data-uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200;" class="uk-scrollspy-inview uk-animation-slide-bottom-small" style="color: white;">2019 © HIMMASI All rights reserved. Designed & Developed by <a href="https://twitter.com/makmumtarawih">Muhammad Firhan</a></span>
                    </div>
                </div>
            </footer>



    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
        var typed = new Typed('.element', {
        strings: ["Program Pendidikan Vokasi", "Universitas Brawijaya"],
        stringsElement: null,
    typeSpeed: 60,
    backSpeed: 40,
    loop: true,
    loopCount: false,
    // show cursor
    // character for cursor
    backDelay: 500,
    // attribute to type (null == text)
    attr: null,
    // either html or text
    contentType: 'html',
      });
    });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>