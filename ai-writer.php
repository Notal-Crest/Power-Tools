<?php
include("./inc/header.php")
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">NC- Digital Tools</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.html">Home</a></li>
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
          <h3>Notal - Crest AI Content Generator</h3>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container m-auto p-0">
        <p>Are you out of idea's to write about in your outline, article or media content? <br>Our AI Content Generator has been trained to meet your needs, all you need to do is give us a title and an introductory statement.</p>
    
        <div class="row">
          <div class="col-md-5 card m-auto p-3">
            <div class="form">
              <fieldset class="border p-3">
                <legend class="float-none w-auto" ><b>Tell Us Your</b></legend>
                  <label for="title">Article Title</label>
                  <input type="text" id="title" name="title" placeholder="Enter a Title" class="form-control" maxlength="20" minlength="6" required>
                  <br>
                  <label for="intro">Article Introduction</label>
                  <input type="text" id="intro" name="intro" placeholder="Introductory Statement" class="form-control" maxlength="50" minlength="10" required>
                  <div class="text-danger text-sm d-none" id="warning">
                    Nelson
                  </div>
                  <br>
                  <button type="submit" name="Submit" class="btn btn-primary" id="submit">Generate</button>
              </fieldset>
            </div>
          </div>
          
          <div class="col-md-5 card p-3">
            <div class="continer">
              <p class="p-2">
                  Nelson Omoniyi
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
<?php
include("inc/footer.php")
?>