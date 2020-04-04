<!DOCTYPE html>
<!----------------------------------------------------------------------------------------------------
-- Lightbox_view page displays the elements affected by the jQuery lightbox plugin. ------------------
------------------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque -------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------->
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <title>Lightbox Example</title>
  <!-- Link of Lightbox CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lightbox2/dist/css/lightbox.min.css'); ?>">
</head>
<body>
  <section>
    <!-- Displays logo -->
    <img src="<?php echo base_url('assets/images/5h-logo.png'); ?>">
    <div>
      <!-- Displays image of Lauren Jauregui -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/lauren.jpg'); ?>" data-lightbox="example-2" data-title="Lauren Jauregui"><img class="example-image" src="<?php echo base_url('assets/images/lauren.jpg'); ?>" alt="lauren" /></a>
      <!-- Displays image of Lauren Jauregui -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/camila.jpg'); ?>" data-lightbox="example-2" data-title="Camila Cabello"><img class="example-image" src="<?php echo base_url('assets/images/camila.jpg'); ?>" alt="camila"/></a>
      <!-- Displays image of Lauren Jauregui -->  
      <a class="example-image-link" href="<?php echo base_url('assets/images/dinah.jpg'); ?>" data-lightbox="example-2" data-title="Dinah Jane Hansen"><img class="example-image" src="<?php echo base_url('assets/images/dinah.jpg'); ?>" alt="dinah"/></a>
      <!-- Displays image of Lauren Jauregui -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/normani.jpg'); ?>" data-lightbox="example-2" data-title="Normani Kordei Hamilton"><img class="example-image" src="<?php echo base_url('assets/images/normani.jpg'); ?>" alt="normani"/></a>
      <!-- Displays image of Lauren Jauregui -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/ally.jpg'); ?>" data-lightbox="example-2" data-title="Ally Brooke"><img class="example-image" src="<?php echo base_url('assets/images/ally.jpg'); ?>" alt="ally"/></a>
    </div>   
  </section>
  <!-- Link of Lightbox Script w/ jquery.min.js -->
  <script src="<?php echo base_url('assets/lightbox2/dist/js/lightbox-plus-jquery.min.js'); ?> "></script>
  <!-- Styles -->
  <style type="text/css">
    html{
      background-image: linear-gradient(to right, #010101, #a09696); 
    }
    section{
      text-align: center;
      object-position: center;
      padding: 30px;
      padding-bottom: 78px;
      padding-top: 78px;
      background-color: #f6f6f6;
      margin:35px;
      border-radius: 25px;
    }
    a, img{
      border-radius: 15px;
      height: 280px;
    }
  </style>
</body>
</html>
