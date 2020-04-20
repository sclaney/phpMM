<?php
  $first_name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $email = $_REQUEST['email'];
  $facebook_url = $_REQUEST['facebook_url'];
  $position = strpos($facebook_url, "facebook.com");
  if ($position === false) {
    $facebook_url = "https://facebook.com/" . $facebook_url;
  }
  $twitter_handle = $_REQUEST['twitter_handle'];
?>

<html>
  <body>

    <h1>Example 3-1</h1>

    <p>here's a record of what information you submitted:</p>

    <p>
      Name: <?php echo $first_name . " " . $last_name; ?><br />
      Email: <?php echo $email; ?><br />
      <a href = "<?php echo $facebook_url; ?>">Your Facebook Page</a><br />
      Twitter Handle: <?php echo $twitter_handle; ?><br />
    </p>

  </body>
</html>
