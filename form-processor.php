<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "dzhang29@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "dzhang29@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3 = $_POST['check3'];
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$radio = $_POST['radio'];
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$open = Trim(stripslashes($_POST['open']));

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "The user's name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "The user's email: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "The user's phone number: \n"; //...a label
$body .= $phone;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Which movie about Makoto Shinkai do you know?: \n"; 	 	// a heading for your checkbox section

if (isset($check1)) {		// a checkbox variable
	$body .= $check1 . "\n";	// the same checkbox variable
}
if (isset($check2)) {		// a checkbox variable
	$body .= $check2 . "\n";	// the same checkbox variable
}
if (isset($check3)) {		// a checkbox variable
	$body .= $check3 . "\n";	// the same checkbox variable
}

$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "What element in Makoto Shinkai's movie do yo like?: \n";		// a heading for your radio button section
$body .= $radio;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "How do you think of Makoto Shinkai?: \n";		// a heading for your text area
$body .= $open;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML
	 webpage with a customized message
	 for the user
	 ********************************** -->

<?php include "inc/html-top.php"; ?>

<body>
    <div class="container">
    <header>
        <h1>Makoto Shinkai</h1>
        <div class="subtitle">---- A Japanese animator, filmmaker, and manga artist</div>
    </header>

<?php include "inc/nav.php"; ?>

<main class="full-width">
  <h2>Thank You <?php echo $name; ?></h2>
  <p>Go back to <a href=".">the home page</a>.</p>
</main>

</div>
</body>

</html>
