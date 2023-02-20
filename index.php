<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Company Profile</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>

  <!-- navbar -->
<div class="navbar-fixed">
  <nav class="brown darken-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#slider" class="brand-logo white-text">PT.HG</a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
          <li><a href="#slider" class="white-text" >Home</a></li>
          <li><a href="#about" class="white-text">About Us</a></li>
          <li><a href="#service" class="white-text">Services</a></li>
          <li><a href="#menu" class="white-text">Menu</a></li>
          <li><a href="#contact" class="white-text">Contact</a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- sidenav -->
<ul id="nav-mobile" class="side-nav">
  <li><a href="#slider">Home</a></li>
  <li><a href="#about">About us</a></li>
  <li><a href="#service">Services</a></li>
  <li><a href="#menu">Menu</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>

<!-- slide -->
  <div class="slider scrollspy" id="slider">
    <ul class="slides">
      <li>
        <img src="img/1.png">
        <div class="caption center-align">
          <h3>Web company profile</h3>
          <h5 class="light grey-text text-lighten-3">Get your coffe on</h5>
          <br><br>
          <a class="btn-large brown darken-2" href="#menu">Grab Now</a>
        </div>
      </li>
      <li>
        <img src="img/2.jpg">
        <div class="caption center-align">
          <h3>Web company profile</h3>
          <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam facere ut numquam soluta quasi labore quibusdam aut atque consequuntur optio obcaecati dolorum nemo dolores nesciunt hic esse delectus illo!</h5>
          <a class="btn-large brown darken-2" href="#menu">Grab Now</a>
        </div>
      </li>
      <li>
        <img src="img/3.jpg">
        <div class="caption center-align">
          <h3>Web company profile</h3>
          <h5 class="light grey-text text-lighten-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente, officia unde in culpa accusantium minima amet odio explicabo laudantium eaque illum quod accusamus blanditiis voluptas error esse perspiciatis ex.</h5>
          <a class="btn-large brown darken-2" href="#menu">Grab Now</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="parallax"><img src="background1.jpg" alt=""></div>
  </div>

<!-- about us -->
<section id="about" class="about scrollspy">
  <div class="container">
  <div class="row">
<h3 class="light center grey-text text-darken-3">About Us</h3>
<div class="col m6 light">
  <h5>SAYA DESAINER BERUSIA 22 TAHUN DAN FOKUS RADA IDENTITAS MEREKA</h5>
  <p>
    Perkembangan bisnis kopi yang meningkat
    tajam membuat penjual kopi harus pintar
    dalam merangkai kata-kata promosi kapi dan
    coffeshop. Jika tidak, bisa-bisa tempat usaha
    tergeser oleh para pesaing yang juga
    berambisi membangun bisnis kopi merek
    Bentuk promosi sendiri bisa bermacam macam. 
    <!-- Selain mengiklankan tempat usaha anda,
    perlu juga untuk memperkenalkan produk kopi apa saja yang tersedia disana.
    Akan lebih baik lagi jika anda memiliki citarasa kopi yang khas dan
    tidak dapat ditemukan di tempat lain. -->
    
  </p>
</div>
<div class="col m6 light">
  <p>CAFE</p>
  <div class="progress">
    <div class="determinate" style="width: 75%"></div>
</div>
  <p>WEB DEVELOPMENT</p>
  <div class="progress">
    <div class="determinate" style="width: 95%"></div>
</div>
  <p>RESTAURANT</p>
  <div class="progress">
    <div class="determinate" style="width: 89%"></div>
</div>
      
</div>
  </div>
</section>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
    </div>
    <div class="parallax"><img src="bg1.jpg" alt=""></div>
</div>


<!-- our service -->
  <section id="service" class="services grey lighten-3 scrollspy">
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Our Services</h3>
        <div class="col s12 m4">
          <div class="card-panel center">
            <i class="material-icons medium">local_cafe</i></h2>
            <h5>Cafe</h5>
            <p>We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components,we refined animations.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card-panel center">
            <i class="material-icons medium">desktop_windows</i></h2>
            <h5>Web development</h5>
            <p>By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card-panel center">
            <i class="material-icons medium">local_dining</i></h2>
            <h5>Restaurant</h5>
            <p>We have provided detailed documentation as well as specific code examples to help new users get started.</p>
          </div>
        </div>
      </div>
    </section>

      <!-- Menu -->
      <section class="menu scrollspy" id="menu">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Menu</h3>
            <div class="row">
              <div class="col m3 s12">
                <img src="img/bakery.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Bakery</p>
              </div>
              <div class="col m3 s12">
                <img src="img/savory_pies.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Savory Pies</p>
              </div>
              <div class="col m3 s12">
                <img src="img/cakes.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Cakes</p>
              </div>
              <div class="col m3 s12">
                <img src="img/sandwiches.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Sandwiches</p>
              </div>
            </div>
            <div class="row">
              <div class="col m3 s12">
                <img src="img/caffe_latte.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Caffe Latte</p>
              </div>
              <div class="col m3 s12">
                <img src="img/cappucino.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Cappuccino</p>
              </div>
              <div class="col m3 s12">
                <img src="img/caffe_mocha.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Caffe Mocha</p>
              </div>
              <div class="col m3 s12">
                <img src="img/caramel_macchiato.jpg" class="responsive-img materialboxed" alt="">
                <p class="center">Caramel Macchiato</p>
              </div>
            </div>
        </div>
      </section>

    </div>
  </div>



  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="bg2.jpg" alt="Unsplashed background img 2"></div>
  </div>

    <!-- Contact -->
  <section class="contact grey lighten-3 scrollspy" id="contact">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel brown darken-1 center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi libero temporibus doloribus excepturi unde vel harum! Quaerat velit consectetur doloribus cumque beatae architecto itaque, dolor tenetur alias, debitis minima fugiat.</p>
        </div> 
        <ul class="collection with-header">
          <li class="collection-header"><h4>Our Office</h4></li>
          <li class="collection-item">PT.HG</li>
          <li class="collection-item">Jl. Tanah Baru Kemiri Jaya II Beji, Depok</li>
          <li class="collection-item">West Java, Indonesia</li>
        </ul>
      </div> 
      <div class="col m7 s12">
        <form action="php/hasil.php" method="POST">
          <div class="card-panel">
            <h5>Please fill out this form</h5>
            <div class="input-field">
              <input type="text" name="nama" id="nama" required class="validate">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" name="phone" id="phone">
              <label for="phone">Phone Number</label>
            </div>
            <div class="input-field">
              <textarea name="pesan" id="pesan" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn brown darken-1">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="bg3.jpg" alt="Unsplashed background img 3"></div>
  </div>


  <!-- footer -->
  <section class="footer black">
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="">
            <h5 class="white-text center">HubSpotl</h5>
            <p class="grey-text text-lighten-4 center">copyright @ 2021 HubSpot,Inc.</p>
            <p class="footer-links center">
              <a href="#" class="">informacion legal</a>
              |
              <a href="#">politica de privacidad </a>
  </section>

  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
