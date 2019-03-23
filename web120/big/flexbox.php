<?php include "includes/config.php"?>
<?php include "includes/header.php"?>
 <!-- START LEFT COL -->
<section>
<h2>Flexbox Layouts</h2>
    <p>Flexbox is a module that allows you to design fluid layouts for your website. Instead of using block and inline flow, direction is based off of the main axis and cross axis. It’s a great way to create responsive styles because it gives you control over the container size, and different properties of the items such as width and flow direction in a way that completely fills the given space. Properties for the parent or flex container include display, flex-direction, flex-wrap, flex-flow, justify-content, align-items, and align-content. Child or flex item properties include order, flex-grow, flex-shrink, flex-basis, and align-self. All of these are defined in CSS-Tricks’ <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">A Complete Guide to Flexbox.</a></p>

    <p>How flexbox is used depends on the content of the site. W3Schools gives a great example of the different ways this module can be used. The first is a responsive image grid that shifts the amount of images are displayed across the screen depending on the width of the viewport. This is achieved by creating media queries that limit the amount of columns at different page widths and the flex-wrap property. </p>
    
        <img src="images/flexbox.png" alt="flexbox example">
    <p class="caption">screenshot taken from <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss3_flexbox_image_gallery" target="_blank">w3schools.com</a></p>
    
    <p>Another example shows how flexbox can be used to create a fully responsive website with flexible navigation and content. Similar to the image grid, a media query is also used to change the layout of the content into a single column and change the direction of the links in the navigation bar from horizontal to vertical. </p>

    <p>Both examples use flexbox properties to fill the size of the container appropriately, expanding as the size of the page grows and shrinking so that the content does not overflow the parent. Using responsive styles such as the properties of flexbox is important because screen sizes tend to vary depending on what is being used to view the page. A website needs to be able to display content properly across all device sizes and flexbox is one of the ways this is possible.</p>

</section>
 <!-- END LEFT COL -->
    
 <!-- START RIGHT COL -->
<aside>
  <h3>Works Cited</h3>
    <p>“A Complete Guide to Flexbox.” CSS-Tricks, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">css-tricks.com/snippets/css/a-guide-to-flexbox/.</a></p>
<p>“CSS Flexbox.” Browser Statistics, <a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank">www.w3schools.com/css/css3_flexbox.asp.</a></p>
<p>“CSS Flexible Box Layout Module Level 1.” Same Origin Policy - Web Security, Reuters Limited, <a href="https://www.w3.org/TR/css-flexbox-1/" target="_blank">www.w3.org/TR/css-flexbox-1/</a>.
</p>

</aside>
 <!-- END RIGHT COL -->
<?php include "includes/footer.php"?>