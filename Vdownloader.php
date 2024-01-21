<?php
include("./inc/header.php");

?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php" style="max-width: fit-content;">NC- Digital Tools</a></h1>
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Video Downloader </li>
        </ol>
          <h3>Notal - Crest Video Downloader</h3>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container m-auto p-0">
        <p style="padding: 0 20px;" class="text-center">What does our Video Downloader do? <br> Our Video Downloader is a powerful tool that helps you download any social media video at a go.<br> All you need to do is, paste the video url into the space provided below and you video will be ready in few secs.</p>
        <br>
        <div class="row position-relative">
        <form>
            <div class="col-md-4 input-group mb-3 top-50 start-50 translate-middle" style="width: 50%;">
                <input type="url" class="form-control" placeholder="Paste video url" aria-label="Product Name" id="item">
                <button class="btn btn-primary" type="button" id="video">Download</button>
            </div>
        </form>
        </div>
      </div>
    </section>

    <section id="result" class="">
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