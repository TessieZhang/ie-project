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

    <script type="text/javascript">
      $(document).ready(function(){

        $(".chzn-select").chosen();
        $.ajax({
          type: "POST",
          dataType : 'json',
          url: "<?php echo site_url('/Occ_controller/selectJob');?>",
          success:function(data)  {
            var appenddata1 = "<option value='' selected > Select a Job</option>";
            console.log(data);
            //appenddata1 += "<option selected >Select a job</option>"

            $.each(data, function(index, element) {

              $("select#industry").empty();
              appenddata1 += "<option value = '" + data[index].job_name + " '>" + data[index].job_name + " </option>";
            });
            $(".chzn-select").append(appenddata1);
            $('.chzn-select').chosen().trigger("chosen:updated");
          }
        });
        $("#search").click(function () {
          $('#jobForm').submit();});

      });
    </script>
  </head>
  
  <body>
  <?php $this->load->view('header'); ?>

    <div class="section" style="background-image:url(image/21.png);height:120px">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>

<!--search-->
          <div class="col-md-2" style="margin-right:33px">
            <div class="btn-group btn-group-lg">
              <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/selectJobDetail');?>" method="post">
              <select class="chzn-select" name = "industry" id="industry" style="width:200px;height:40px;" >
              </select>
              </form>
            </div>
          </div>
          <div class="col-md-2">
              <button class="btn btn-primary" id="search" style="height:30px;width:80px;margin-left:30px;">Search</button>
          </div>
          <div class="col-md-2"></div>
<!--search-->
        </div>
      </div>
    </div>
    <div class="section" style="background-color:#f2f2f2;height:620px">
      <div class="container">
        <div class="row" style="height:555px; background-color:white">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="image/28.jpg"
                    class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <p>Prevention is the best intervention. In order to avoid and mitigate the risk of injury, you should beware your surrounding areas and ensure you’ve got enough knowledge of dealing with injury.</p>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3">
                    <img src="image/14.jpg"
                    class="img-responsive">
                  </div>
                  <div class="col-md-9">
                    <p>Moreover, the best common method that prevents injury may not be what you expect. Safe Work Australia are recommended all workers use voices to avoid injury in your organization. Select one of the occupation to see more further details.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    <?php $this->load->view('footer'); ?>
  </body>

</html>