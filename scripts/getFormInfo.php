<?php
  $first_name = trim($_REQUEST['first_name']);
  $last_name = trim($_REQUEST['last_name']);
  $email = trim($_REQUEST['email']);
  $facebook_url = str_replace("facebook.org", "facebook.com",
                              trim($_REQUEST['facebook_url']));
  $position = strpos($facebook_url, "facebook.com");
  if ($position === false) {
    $facebook_url = "https://facebook.com/" . $facebook_url;
  }
  $position = strpos($facebook_url, "https://");
  if ($position === false) {
    $facebook_url = "https://" . "$facebook_url";
  }
  $twitter_handle = trim($_REQUEST['twitter_handle']);
  $twitter_url = "https://twitter.com/";
  $position = strpos($twitter_handle, "@");
  if ($position === false) {
    $twitter_url = $twitter_url . $twitter_handle;
  } else {
    $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
  }
?>

<html>
  <body>

    <h1>Example 3-1</h1>

    <p>here's a record of what information you submitted:</p>

    <p>
      Name: <?php echo $first_name . " " . $last_name; ?><br />
      Email: <?php echo $email; ?><br />
      <a href = "<?php echo $facebook_url; ?>">Your Facebook Page</a><br />
      <a href="<?php echo $twitter_url ?>">Check out your Twitter feed</a><br />
    </p>

  </body>
</html>
