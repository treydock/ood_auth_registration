<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Register my DN</title>
</head>

<body>
  User: <code><?php echo $_SERVER['PHP_AUTH_USER']; ?></code>

<pre>
  <?php foreach(array_filter($_SERVER, function($k){ return preg_match("/^OIDC_CLAIM_/", $k); }, ARRAY_FILTER_USE_KEY) as $key => $value){ ?>
  <?= $key ?>: <?= $value ?>

  <?php } ?>
</pre>

User friendly OIDC_CLAIM values:

<pre>
<?php foreach(array_filter($_SERVER, function($k) { return preg_match("/^OIDC_CLAIM_(name|idp_name|eppn|email)/", $k); }, ARRAY_FILTER_USE_KEY) as $key => $value) { ?>
  <?= $key ?>: <?= $value ?>

<?php } ?>
</pre>

</body>
</html>
