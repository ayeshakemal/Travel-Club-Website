<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Join Us</title>
</head>

<body>

<div class="top-part">
  <div class="heading">
    <h1> Join Us </h1>
  </div>

</div>

<?php
include("includes/header.php");
?>

<br>
<br>
<br>

<h2> </h2>


<?php

if (isset($_POST['submit'])) {
  $valid_form = TRUE;

  $firstname = trim( $_POST['first_name'] );
  if ( $firstname == '' ) {
    // No first name
    $valid_form = FALSE;
    $show_first_name_error = TRUE;
  }

  $lastname = trim( $_POST['last_name'] );
  if ( $lastname == '' ) {
    // No last name
    $valid_form = FALSE;
    $show_last_name_error = TRUE;
  }

  $netid = trim( $_POST['netid'] );
  if ( $netid == '' ) {
    // No netid
    $valid_form = FALSE;
    $show_netid_error = TRUE;
  }

  $email = trim( $_POST['email'] );
  if ( $email == '' ) {
    // No email
    $valid_form = FALSE;
    $show_email_error = TRUE;
  }

  $jointext = trim( $_POST['join_text'] );

}
?>


<article id="content">


      <?php
      if ( isset($valid_form) && $valid_form ) { ?>


        <h2 id = "conpage"> Contact Information </h2>

        <p id ="info"> First Name: <br> <?php echo htmlspecialchars($firstname); ?> </p>

        <p id ="info"> Last Name: <br> <?php echo htmlspecialchars($lastname); ?> </p>

        <p id ="info"> Netid: <br> <?php echo htmlspecialchars($netid); ?> </p>

        <p id ="info"> Email: <br> <?php echo htmlspecialchars($email); ?> </p>

        <p id ="info"> Why are you interested in joining Travel Club?: <br> <?php echo htmlspecialchars($jointext); ?> </p>






















      <?php } else { ?>

        <h1 id="article-title">Join the Travel Club Listserv!</h1>


        <form id="joinus" method="post" action="joinus.php">
          <fieldset>

            <p class="form_error <?php if ( !isset($show_first_name_error) ) { echo 'hidden'; } ?>">Please enter a first name.</p>
            <p>
              <label for="firstname_field">First Name:</label>
              <input id="firstname_field" type="text" name="first_name" value="<?php if( isset($firstname) ) { echo htmlspecialchars($firstname); } ?>"/>
            </p>


            <p class="form_error <?php if ( !isset($show_last_name_error) ) { echo 'hidden'; } ?>">Please enter a last name.</p>
            <p>
              <label for="lastname_field">Last Name:</label>
              <input id="lastname_field" type="text" name="last_name" value="<?php if( isset($lastname) ) { echo htmlspecialchars($lastname); } ?>"/>
            </p>


            <p class="form_error <?php if ( !isset($show_netid_error) ) { echo 'hidden'; } ?>">Please enter a netid.</p>
            <p>
              <label for="netid_field">Netid:</label>
              <input id="netid_field" type="text" name="netid" value="<?php if( isset($netid) ) { echo htmlspecialchars($netid); } ?>"/>
            </p>


            <p class="form_error <?php if ( !isset($show_email_error) ) { echo 'hidden'; } ?>">Please enter an email.</p>
            <p>
              <label for="email_field">Email:</label>
              <input id="email_field" type="text" name="email" value="<?php if( isset($email) ) { echo htmlspecialchars($email); } ?>"/>
            </p>


            <p>
              <label for="join_field">Why are you interested <br>in joining Travel Club? :</label>
              <input id="join_field" type="text" name="join_text" value="<?php if( isset($jointext) ) { echo htmlspecialchars($jointext); } ?>"> </textarea>
            </p>

            <input type="submit" name="submit" value="Submit"/>
          </fieldset>
        </form>

      <?php } ?>

    </article>


  <br>
  <br>


<?php
include("includes/footer.php");
?>




</body>
</html>
