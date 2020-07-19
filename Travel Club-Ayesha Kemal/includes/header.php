<header>

    <nav>
    <?php
    $sites= array("joinus.php", "articles.php", "travellist.php", "index.php");
    $title= array("Join Us", "Articles", "Travel List", "Home");
    echo "<ul>";

    ?>

    <li>
    <img id="logo" src="images/lll.png" alt="Logo Image"/>
   <a id="cap" href ="https://www.primergrp.com/concept-stores/the-travel-club"> Source

    </a></li>

    <!-- this photo was taken from https://www.primergrp.com/concept-stores/the-travel-club -->



    <?php

    $current_file = basename($_SERVER['PHP_SELF']);
    for ($x = 0; $x <= 3; $x++) {
      if ($current_file == $sites[$x]) {
        echo '<li id="current"><a href="'.$sites[$x].'">'.$title[$x].'</a></li>';
      }
      else {
        echo '<li><a href="'.$sites[$x].'">'.$title[$x].'</a></li>';
      }

    }

    echo "</ul>";

    ?>

    </nav>

    </header>
