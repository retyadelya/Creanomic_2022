<?php
$merch = [
  [
    'img' => './assets/img/tumblr.png',
    'name' => 'Tumblr',
    'price' => '75k',
    'aos' => 'up-right'
  ],
  [
   
    'img' => './assets/img/korek.gif',
    'name' => 'Lighter',
    'price' => '10k',
    'aos' => 'flip-up'
  ],
  
  [
    'img' => './assets/img/baju.gif',
    'name' => 'T-Shirt',
    'price' => '85k',
    'aos' => 'up-left'
  ],
  [
    'img' => './assets/img/keychain.gif',
    'name' => 'keychain',
    'price' => '8k',
    'aos' => 'up-right'
  ],
  [
    'img' => './assets/img/A.gif',
    'name' => 'Bundle A (Tumblr + Keychain)',
    'price' => '80k',
    'aos' => 'up-right'
  ],
  [
    'img' => './assets/img/B.gif',
    'name' => 'Bundle B (kaos + Tumblr + Keychain)',
    'price' => '160k',
    'aos' => 'up-right'
  ], 
  [
    'img' => './assets/img/C.gif',
    'name' => 'Bundle C (Lighter + Tumblr + Keychain)',
    'price' => '90k',
    'aos' => 'up-right'
  ], 
  [
    'img' => './assets/img/D.gif',
    'name' => 'Bundle D (Kaos + Lighter + Tumblr + Keychain)',
    'price' => '175k',
    'aos' => 'up-right'
  ], 
  [
    'img' => './assets/img/E.gif',
    'name' => 'Bundle E (Lighter + Keychain)',
    'price' => '20k',
    'aos' => 'up-right'
  ], 


];
?>
<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include("./partials/head.php");?>
<link rel="stylesheet" href="./assets/css/merchandise.css">
<body onload="myFunction()">
    <!-- NAVBAR -->
    <?php include("./partials/navbar.php");?>

    <!-- ISI -->
    <main>
  <section class="merch text-center text-white">
    <div class="vh-30 w-30">
      <div class="d-flex align-items-center justify-content-center h-50 bg-dark">
        <!-- <video src=""></video> -->
  
      </div>
    </div>
    <div class="container my-5">
      <h1 class="text-uppercase mt-5 pt-5">official<br>merchandise</h1>
      <h5 class="fw-bold pb-5">Creanomic 2022</h5>
      <div class="row mt-5">
        <?php foreach ($merch as $m){ ?>
        <div class="col-md-4 mb-1 d-flex flex-column" data-aos="fade-<?= $m['aos'] ?>">
          <div class="foto align-self-center">
            <img class="img-fluid" src="<?= $m['img'] ?>" alt="tote" />
          </div>
          <div class="h5 mb-0 mt-3"><?= $m['name'] ?></div>
          <p class="small"><?= $m['price'] ?></p>
        </div>
        <?php } ?>
      </div>
      <div class="h3 text-uppercase mt-5 mb-3 pt-5">What are you waiting for? Grab it fast!</div>
      <div class="justify-content-center"><a href="https://api.whatsapp.com/send/?phone=%2B6282178548412&text&type=phone_number&app_absent=0" class="btn btn-dark-red shadow-none ">ORDER VIA WHATSHAPP</div>
        </div>
      </div>
    </div>
  </section>
  </main>
    <!-- FOOTER -->
    <?php include("./partials/footer.php");?>

     <!-- SCRIPT -->
     <?php include("./partials/script.php");?>
</body>
</html>
