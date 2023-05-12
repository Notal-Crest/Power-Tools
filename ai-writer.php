<?php
include("./inc/header.php")
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style="max-width: fit-content;">NC- Digital Tools</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>AI - Writer</li>
        </ol>
          <h3>Notal - Crest AI Social Media Caption Generator</h3>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container m-auto p-0">
        <p style="padding: 0 20px;" class="text-center">Are you out of idea's for your social media caption? <br>Our AI Caption Generator has been trained to meet your needs, <br>all you need to do is give us a keyword.</p>
        <hr>
        <div class="row">
          <div class="col-md-5 card m-auto p-3">
            <div class="form">
              <fieldset class="border p-3">
                <legend class="float-none w-auto" ><b>Tell Us Your</b></legend>
                  <label for="prompt">Keyword</label>
                  <input type="text" id="prompt" name="prompt" placeholder="Shoe, Burger, iPhone, Bread e.t.c" class="form-control" maxlength="200" minlength="2" required>
                  <br>
                  <div id="warning">
                  </div>
                  <br>
                  <button type="submit" name="Submit" class="btn btn-primary" id="submit">Generate</button>
              </fieldset>
            </div>
          </div>
          
          <div class="col-md-5 card p-3">
            <div class="continer overflow-auto p-2" id="content" style="max-height: 280px;">
            
            </div>
            <div style="margin: 250px auto; position:absolute;">
            <br>
            <hr>
            <br>
            <button class="btn btn-sm btn-success" id="copy">Copy</button> | <button class="btn btn-sm btn-success">Print</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <div id="#modal" style="display: none">
    <div class="center">
        <img alt="Loader Gif" src="assets/img/gif/load.gif" />
    </div>
  </div>
  <!-- ======= Footer ======= -->
 
<?php
include("inc/footer.php")
?>