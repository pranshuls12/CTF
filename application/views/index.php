<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (isset($message)) {
    ?>
    <script>alert('<?php echo $message; ?>');</script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Catch The Flag</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style1.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>

<body>
    <section class="main text-center">
        <div id="particles-js"></div>
        <div class="hero-bkg-animated">
            <h1>Catch The Flag</h1>
        </div>
    <div class="col-3 offset-4 pt-5">
        <div class="card card-signin">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
    <?= form_open('login');?>
    <div class="form-signin">
      <div class="form-label-group">
        <input type="email" id="" name="user_email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="" name="user_password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
    </div>

    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Remember password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
</form>
</div>
        </div>
      </div>
</section>
<script type="text/javascript" src="./js/main.js"></script>

<script type="text/javascript" src="./js/particles.js"></script>
<script type="text/javascript" src="./js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>