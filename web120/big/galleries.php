<?php include "includes/config.php"?>
<?php include "includes/header.php"?>
 <!-- START LEFT COL -->
<section>

<h2>Image Galleries</h2>
    <p>There are many different ways to create an image gallery. Below are a few different examples of ways to create one using html, css, and javascript. </p>

<h3>Slideshow</h3>
    
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div id="slide1" class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/flower.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/cloud.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/train.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
    
    <p>A simple slideshow can be created by using javascript to display one image at a time. </p>

<h3>Image Grid</h3>

    <img src="images/flexbox.png">
        <p class="caption">screenshot taken from <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss3_flexbox_image_gallery" target="_blank">w3schools.com</a></p>
    
    <p>Responsive image grids can be created using flexbox properties. The example in the image above is also featured on the <a href="flexbox.php">flexbox</a> page. </p>

<h3>Lightbox</h3>

<div class="gallery">
        <figure>
            <a href="images/train.jpg" data-lightbox="example" data-title="train">
        <img src="images/train.jpg" alt="train" /></a>
        </figure>
</div>
    
    <p>Creating a lightbox or modal image will open a pop-up or dialog box over the current page.  </p>

<p>Many sites use a combination of different gallery types to meet the different needs of their content. For instance, lightbox can be incorporated with an image grid so that when the image is clicked on it becomes larger and the rest of the page is darkened. The lightbox can even be combined with the function of a slide show so that the user can click through the photos within the lightbox itself. </p>

    
</section>
 <!-- END LEFT COL -->
    
 <!-- START RIGHT COL -->
<aside>
  <h3>Works Cited</h3>
  <p>“How TO - Modal Images.” Browser Statistics, <a href="https://www.w3schools.com/howto/howto_css_modal_images.asp" target="_blank">www.w3schools.com/howto/ howto_css_modal_images.asp</a>.</p>
    <p>“How TO - Responsive Image Grid.” Browser Statistics, <a href="https://www.w3schools.com/howto/howto_css_image_grid_responsive.asp" target="_blank">www.w3schools.com/howto/ howto_css_image_grid_responsive.asp</a>.</p>
    <p>“How TO - Slideshow.” Browser Statistics, <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp" target="_blank">www.w3schools.com/howto/ howto_js_slideshow.asp</a>.
</p>
    
    <p>*images taken from <a href="https://unsplash.com/free-stock-photos" target="_blank">unsplash.com</a>*</p>
</aside>
 <!-- END RIGHT COL -->
<?php include "includes/footer.php"?>