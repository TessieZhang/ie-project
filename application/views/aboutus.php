<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
  <?php $this->load->view('header'); ?>
    <div class="carousel slide" id="carousel-example" data-interval="false"
    data-ride="carousel">
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
    <div class="section" style="background-color:#f2f2f2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Summit</h1>
            <p class="text-center">We are a group of skilled individuals.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <img src="image/Neal.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-4">
            <h3 class="text-left">Jueting Wang</h3>
            <p class="text-left">MIT Student</p>
          </div>
          <div class="col-md-2" >
            <img src="image/Luke.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-4">
            <h3 class="text-left">Yuyang Lin</h3>
            <p class="text-left">MBIS Student.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2" >
            <img src="image/Tessie.png"
            class="img-circle img-responsive" >
          </div>
          <div class="col-md-4">
            <h3 class="text-left">Zhaoying Zhang</h3>
            <p class="text-left">MIT Student</p>
          </div>
          <div class="col-md-2" >
            <img src="image/Edmond.png"
            class="img-circle img-responsive">
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-left">Chi Wan</h3>
            <p class="text-left">MBIS Student</p>
          </div>
        </div>
      </div>
    </div>
  <?php $this->load->view('footer'); ?>
  </body>

</html>