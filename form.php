<!DOCTYPE html>
<!--[if lt IE 9]><html class="lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
  <title>OnDemand | Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
</style>
<body>

<!-- navigation bar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    </div>
  </div><!-- /.navbar-collapse -->
</nav>
<!-- navbar -->


<!-- content -->
<div class="container">

  <?php if ($error != null): ?>
  <div class="alert alert-danger" role="alert"><strong>Registration failed:</strong> <?= $error ?></div>
  <?php endif; ?>

  <h3>Login to register this Open Id Provider with your OSC account</h3>
  <p>This is the first time you have tried logging into OnDemand with this external
  identity provider. By providing your OSC account credentials we will associate
  the two accounts so that in the future you may login just with this identity provider.</p>

  <div class="row">
    <div class="col-md-6">

   <form class="form-horizontal" action="<?= $form_action ?>" method="post">
     <!-- for IE8 we need to add <fieldset> tags to make styling the legend tag possible
     https://github.com/ssolomon/bootstrap/commit/650ae3b454ecbafb050a3bc7397cf2b03bdb34cd
      -->
     <!--[if lt IE 9]><fieldset><![endif]-->
       <legend>OSC Login</legend>

       <div class="form-group">
         <label class="col-sm-2 control-label" for="username">Username:</label>
         <div class="col-sm-7">
           <input class="form-control" type="text" id="username" name="username" placeholder="Username">
         </div>
       </div>

       <div class="form-group">
         <label class="col-sm-2 control-label" for="password">Password:</label>
         <div class="col-sm-7">
           <input class="form-control" type="password" id="password" name="password" placeholder="Password">
         </div>
       </div>

       <input type="hidden" name="redir" value="<?= $redir ?>">

       <div class="form-group">
         <div class="col-sm-offset-2 col-sm-6">
           <button type="submit" class="btn btn-default">Log in</button>
         </div>
       </div>
     <!--[if lt IE 9]></fieldset><![endif]-->
   </form>

    </div>
    <div class="col-md-6">
      <!-- FIXME: address Firefox fieldets issue -->
      <fieldset>
        <legend>Open ID Connect Provider</legend>
      </fieldset>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container">
    <hr>
    <p>Forgot password? <a href="https://my.osc.edu">Go to my.osc.edu</a> and click "Forgot Password" at the bottom of the page.</p>
  </div>
</div>

</body>
</html>