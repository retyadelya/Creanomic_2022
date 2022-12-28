$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:3
          }
      }
    });
  });
  function ganti1() {
    document.getElementById("ganti-gambar").innerHTML =
      "<img src=./assets/img/logo1.png class='img-fluid'>, <h3>Burung Elang</h3>, <p class='my-auto'>Filosofi seekor burung elang yang dimana mewakili sebuah kebebasan dalam beraktivitas yang tidak ada batasnya</p>";
  }
  function ganti2() {
    document.getElementById("ganti-gambar").innerHTML =
      "<img src=./assets/img/logo2.png class='img-fluid'>, <h3>Bentuk Kaku dan Tegas</h3>, <p class='my-auto'>Bentuk yang kaku dan tajam dikaitkan dengan sifat yang tegas akan segala rintangan untuk mencapai tujuan</p>";
  }
  function ganti3() {
    document.getElementById("ganti-gambar").innerHTML =
      "<img src=./assets/img/logo3.png class='img-fluid'>, <h3>Posisi Logo Yang Menghadap Ke Atas</h3>, <p class='my-auto'>Posisi logo menghadap keatas mengandung arti tujuan, impian, dan prinsip, yang dimana mengharuskan kita mencapai tujuan dan impian setinggi tinggi nya</p>";
  }
  function ganti4() {
    document.getElementById("ganti-gambar").innerHTML =
      "<img src=./assets/img/color.png class='img-fluid'>, <h3>Filosofi Warna</h3>, <p class='my-auto'>Pink merah muda melambangkan jiwa muda yang memegang sebuah inovasi baru dan ide-ide yang tidak ada batasnya</p></br><p class='my-auto'>Orange melambangkan energi dan kreativitas  yang mengartikan bahwa untuk membuat inovasi baru membutuhkan kreativitas itu sendiri untuk membuat sesuatu hal yang baru</p></br><p class='my-auto'>Kuning melambangkan sebuah semangat yang mengartikan bahwa di zaman milenial ini membutuhkan sebuah semangat untuk mencapai tujuan dan impian</p>";
  }

  var videoPlayer = document.getElementById("videoPlayer");
      var myVideo = document.getElementById("myVideo");

      function stopVideo() {
        videoPlayer.style.display = "none";
        videoPlayer = muted;
      }

      function playVideo(file) {
        myVideo.src = file;
        videoPlayer.style.display = "block";
      }