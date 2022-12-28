<?php
$competitions = [
  [
    'title' => 'International Video Competition',
    'img' => 'videography.png',
    'desc' => 'Related Of Street “Salves” Technology'
  ],
  [
    'title' => 'National Video Competition',
    'img' => 'videography.png',
    'desc' => 'Product Videos But With My Style'
  ],
  [
    'title' => 'UI/UX Design',
    'img' => 'uiux.png',
    'desc' => 'TED (The Expansion Of Digital Era 5.0)'
  ],
  [
    'title' => 'Business Case',
    'img' => 'businness.png',
    'desc' => 'Escalate Business Strategy For Living Wage Is Good Business'
  ],
  [
    'title' => 'Fashion Show',
    'img' => 'fashion.png',
    'desc' => 'Berani Berkain'
  ],
  [
    'title' => 'Public Speaking',
    'img' => 'pubspeak.png',
    'desc' => 'Shworking Hardly Or Hardly Shworking'
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include("./partials/head.php");?>
<link rel="stylesheet" href="./assets/css/home.css">

<body>
<?php include("./partials/navbar.php");?>
    <section id="hero" class="">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 hero-content my-auto px-3">
                    <h1>creanomic</h1>
                    <h2>2022</h2>
                    <h3>Future Business and Technology.</h3>
                    <a href="#about">Lets start</a>
                </div>
            </div>
        </div>
    </section>
    <div class="long-bg">
        <section id=about>
            <div class="about">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center px-4">
                        <div class="col-lg-6 col-md-4 col-sm-12 col-12 about-video mb-4 mx-lg-3">
                        <img src="./assets/img/teaser.png" class="img=fluid teaser" alt="teaser">
                        <img src="./assets/img/play-button.png" class="play-button" onclick="playVideo('./assets/img/teaser.mp4')" alt="play button">
                        </div>
                        <div class="video-player" id="videoPlayer">
                        <video width="100%" controls id="myVideo" class="d-flex justify-content-center align-items-center">
                            <source src="./assets/img/teaser.mp4" type="video/mp4">
                        </video>
                        <img src="./assets/img/close-button.png" class="close-btn" onclick="stopVideo()" alt="close button">
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12 col-12 px-sm-3 about-content d-flex mx-lg-3">
                            <div class="glass-about">
                                <h1>About Us</h1>
                                <p>Creative Economy and Innovation Centre, also known as Creanomic
                                is annual event which holds by Vocational Education Program, Brawijaya University. The event itself brings up topic about Creativity and Innovation which maintains the standard Economy and Technology Business Exploration skills <br /><br />Finally after the pandemic phase last year, Creanomic is back with bringing the new concept. Creanomic also brings up new events: Competition International level Scope, Art Exhibition, Seminar and Creanomic Music Festival international level.</p>
                                <a href="#">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="competition" class="pt-5">
            <div class="container">
                <h1 class="text-center"><b>Competition</b></h1>
                <div class="slider">
                            <div class="owl-carousel">
                                <?php foreach ($competitions as $c) { ?>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4 img-slider">
                                        <img src="./assets/img/<?= $c['img']; ?>" alt="" height="400px;" width="220px">
                                    </div>
                                    <div class="border"></div>
                                    <h5 class="mb-0 text-center"><b><?= $c['title']; ?></b></h5>
                                    <p class="text-center p-4"><?= $c['desc']; ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
            </div>
        </section>
        <!-- <section id="filosofi">
            <div class="container">
                <h1>Logo Released</h1>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 filosofi-button d-flex flex-row justify-content-center align-items-center w-100">
                        <a onclick="ganti1()">
                            <button>
                                <img src="./assets/img/logo1.png" alt="" width="50px;">
                            </button>
                        </a>
                        <a onclick="ganti2()">
                            <button>
                                <img src="./assets/img/logo2.png" alt="" width="50px;">
                            </button>
                        </a>
                        <a onclick="ganti3()">
                            <button>
                                <img src="./assets/img/logo3.png" alt="" width="50px;">
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 w-100 mx-auto filosofi-content" id="ganti-gambar">
                        <img class="d-flex align-items-center mx-auto img-filosofi" src="./assets/img/logo1.png" alt="">
                        <div class="text-filosofi ">
                            <h2>Creanomic Logo Phylosophy</h2>
                            <p>New Released</p>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->
        <section class="filosofi">
        <div class="container">
          <h1 class="text-center text-white fw-bold mb-5">Logo Released</h1>
          <div class="row text-center align-content-center px-3">
            <div class="col-md-1 tombol">
            <a onclick="ganti1()">
                <button>
                    <img src="./assets/img/logo1.png" alt="" width="50px;">
                </button>
            </a>
            <a onclick="ganti2()">
                <button>
                    <img src="./assets/img/logo2.png" alt="" width="50px;">
                </button>
            </a>
            <a onclick="ganti3()">
                <button>
                    <img src="./assets/img/logo3.png" alt="" width="50px;">
                </button>
            </a>
            <a onclick="ganti4()">
                <button>
                    <img src="./assets/img/color.png" alt="" width="50px;">
                </button>
            </a>
            </div>
            <div class="col-md-9 mt-3 view mt-sm-3 mx-md-5 text-center" id="ganti-gambar" data-aos="fade-right" >
                <img src="./assets/img/logo1.png" class="img-fluid" alt="" />
                <div class="text my-auto text-start">
                  <h3 style="font-weight: bolder">Creanomic Logo Phylosophy</h3>
                  <p>New released</p>
                </div>
            </div>
          </div>
        </div>
      </section>

        <!-- <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="soon d-flex flex-column align-items-center justify-content-center">
                        <img src="./assets/img/soon1.png" alt="" width:"450px;">
                        <h1>Website on build</h1>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    
    

    <!-- FOOTER -->
    <?php include("./partials/footer.php");?>
                                    

    <!-- SCRIPT -->
    <?php include("./partials/script.php");?>
</body>
</html>