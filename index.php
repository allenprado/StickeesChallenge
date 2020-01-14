<?php
if(isset($_POST['qWidgets'])){
  require_once('shopWidget.php');
  $qWidgets = $_POST['qWidgets'];

  //List of Widget/Packs
  $listWidgets = [250,500,1000,2000,5000];
  //Order Widget
  //$qWidgets = 387;

  $shopWidget = new shopWidget();
  $order = $shopWidget->sendPacks($qWidgets,$listWidgets);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Order your Widget Now!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Stickees Challenge</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Order your Widget Here!</h1>
        <p class="lead">Here you are able to order your Widgets!</p>
        <ul class="list-unstyled">
<form name="myForm" method="post" action="index.php">

          <li><input type="number" name="qWidgets" min=1 required/> </li>
          <li><input type="submit" value="Order Now"> </li>
          <p>&nbsp;</p>
          <li>

<b><font size=5 color=blue>

Your order is:
<?php
            if(isset($order))
            {
              echo $order;
            }


          ?>

        </font></b></li>

</form>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
