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
      <base href="<?php echo base_url();?>" />
  </head>

  <body>
    <?php $this->load->view('header');?>
    <div class="carousel slide" id="carousel-example" data-interval="false"
    data-ride="carousel">
      <div class="carousel-inner" >
        
          <div class="item active">
              <a href="<?php echo site_url('Welcome/newPage/home'); ?>" >
          <!--a href="http://localhost/iteration1/home.php"-->

            <img src="image/workeralone.jpg" style="height:730px">
          </a>

          <div class="carousel-caption">
            <h2>SAFE@PTJ</h2>
            <p>safeatpart-timejob.tk</p>
          </div>
          </div>
          <div class="item">

              <a href="<?php echo site_url('Welcome/newPage/preventinjury'); ?>" >
          <!--a href="http://localhost/iteration1/statistic.php"-->
            <img src="image/20.png" style="height:730px">
          </a>

          <div class="carousel-caption">
            <h2>Prevent Injury</h2>
            <p>The statistic section can provide you the useful information like the average salary by occupation. Thus you can avoid the potential loss at work.Besides,  the ststistic of injury by industry will also be presented. You can use this information as a reference to choose your future career.</p>
          </div>
          </div>
          <div class="item">
              <a href="<?php echo site_url('Welcome/newPage/statistic'); ?>" >
          <!--a href="http://localhost/iteration1/self-evaluation.php"-->
            <img src="image/24.png" style="height:730px">
          </a>
            <div class="carousel-caption">
            <h2>Statistic</h2>
            <p>You can also take the mini-test to check whether you have enough knowlwdge to handle your job. Some tips according to your anster will be displayed after you submitting your answer.</p>
          </div>
          </div>
          <div class="item">
              <a href="<?php echo site_url('Welcome/newPage/treatment'); ?>" >
          <!--a href="http://localhost/iteration1/forum.php"-->
            <img src="image/17.jpg" style="height:730px">
          </a>
                    <div class="carousel-caption">
            <h2>Treatment After Injury</h2>
            <p>Another important function is the user discussion forum. This function can help you commucate with others after your registeration.</p>
          </div>
          </div>
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
     <?php $this->load->view('footer'); ?>

  </body>

</html>