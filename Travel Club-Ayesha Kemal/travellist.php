<?php
// DO NOT REMOVE!
$c= "hello";
include("includes/init.php");
// DO NOT REMOVE!
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Travel List</title>
</head>

<body>

<div class="top-part">
  <div class="heading">
    <h1> Travel List </h1>
  </div>

</div>

<?php
include("includes/header.php");
?>

<br>
<br>
<br>

<h2> </h2>

<h1> Top 5 Travel Destinations </h1>


<div class="travel">

    <figure class="dest">
      <img src="images/bris.jpg" alt="Travel photo"/>
      <br>
      <a href ="https://www.australia.com/en/places/brisbane-and-surrounds/guide-to-brisbane.html ">Source</a>
      <!-- This image is from https://www.australia.com/en/places/brisbane-and-surrounds/guide-to-brisbane.html -->
    </figure>
    <p id="aust">
      1. Brisbane, Austrailia
    </p>


</div>


<div class="travel">

<figure class="hello">
      <img src="images/alex.jpg" alt="Travel photo"/>
      <br>
      <a href ="http://www.egypttoday.com/Article/9/31497/Good-news-for-Alexandria-tourists">Source</a>
      <!-- This image is from http://www.egypttoday.com/Article/9/31497/Good-news-for-Alexandria-tourists -->
    </figure>
    <p id="egypt">
      2. Alexandria, Egypt
    </p>

</div>

<div class="travel">

<figure class="rica">
      <img src="images/rica.jpg" alt="Travel photo"/>
      <br>
      <a href ="https://steemkr.com/mgsc/@rahul.pansara/world-s-6-country-where-indians-travels-at-cheap-cost-and-feel-like-rich">Source</a>
      <!-- This image is from https://steemkr.com/mgsc/@rahul.pansara/world-s-6-country-where-indians-travels-at-cheap-cost-and-feel-like-rich -->
    </figure>
    <p>
      3. San Jose, Costa Rica
    </p>

</div>

<div class="travel">

<figure class="mal">
      <img src="images/mal.jpg" alt="Travel photo"/>
      <br>
      <a href ="https://www.flickr.com/photos/sanmang/2115134874">Source</a>
      <!-- This image is from https://www.flickr.com/photos/sanmang/2115134874 -->
    </figure>
    <p>
      4. Langkawi, Malaysia
    </p>

</div>


<div class="travel">

<figure class="oman">
      <img src="images/oman.jpg" alt="Travel photo"/>
      <br>
      <a href ="https://vegnews.com/2018/1/4-reasons-every-vegan-needs-to-visit-oman">Source</a>
      <!-- This image is from https://vegnews.com/2018/1/4-reasons-every-vegan-needs-to-visit-oman -->
    </figure>
    <p>
      5. Muscat, Oman
    </p>

</div>


<?php
include("includes/footer.php");
?>





</body>
</html>
