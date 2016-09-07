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
    <div class="section" style="background-color:#f2f2f2; height:650px">
      <h1 style="text-align:center">Frequently Ased Questions</h1>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ol style="font-size:20px;">
                <li>What is SAFE@PTJ?</li>
                <p>It's full name is safe at part-time job.</p>
                <li>How to search the information I want to know?</li>
                <p>You can click the statistis on the navigation. After choosing the area
                  you want to search, You can get the relevent information.</p>
                <li>How to use the discussion form function?</li>
                <p>This function will be punished in next version.</p>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('footer'); ?>
  </body>

</html>