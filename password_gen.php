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
        <li>Unique Password Generator</li>
      </ol>
      <h3>Notal - Crest Unique Password Generator</h3>
    </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container m-auto p-0">
        <p style="padding: 0 20px;" class="text-center">Generate Unique & Strong Passwords!</p>
        <hr>
        <div class="row">
          <div class="col-md-6 card m-auto p-3" style="margin: 0 auto;">
            <div class="form" id="form1">
              <fieldset class="border p-3">
                <legend class="float-none w-auto" ><b>Password Generator</b></legend>
                  <!-- <label for="title">Generate Password With :: </label>
                  <input type="text" id="name" name="name" placeholder="Enter A Text or Name" class="form-control" maxlength="15" minlength="2" required>
                  <br> -->
                  <label for="length">Password Length :: </label>
                  <select name="length" id="length" class="form-control" required>
                    <option hidden value="" aria-placeholder="Select Number Of Paragraph">Select Length</option>
                    <option value="5"> 5 Characters Long</option>
                    <option value="10"> 10 Characters Long</option>
                    <option value="15"> 15 Characters Long</option>
                    <option value="20"> 20 Characters Long</option>
                    <option value="25"> 25 Characters Long</option>
                  </select>
                  <br>
                    <div class="continer card overflow-auto p-2" id="content" style="max-height: fit-content; margin:0 auto; text-align: center;">
              
                    </div>
                  <div id="warning">
                  </div>
                  <br>
                  <button type="submit" name="submit_password" class="btn btn-primary" id="submit_password">Generate Password</button>
              </fieldset>
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