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
        var job = '<?php echo $job; ?>';
        $(".chzn-select").chosen();

        $.ajax({
          type: "POST",
          dataType : 'json',
          url: "<?php echo site_url('/Occ_controller/selectStatistic');?>",
          success:function(data)  {
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              $("select#industry").empty();
              if (data[index].job_name == job.trim() ) {
                appenddata1 += "<option value = '" + data[index].occupation + " ' selected>" + data[index].occupation + " </option>";
              } else {
                appenddata1 += "<option value = '" + data[index].occupation + " '>" + data[index].occupation + " </option>";
              }
            });
            $(".chzn-select").append(appenddata1);
            $('.chzn-select').chosen().trigger("chosen:updated");

          }
        });


        $.ajax({
          type: "POST",
          data: "job=" + job,
          dataType : 'json',
          url: "<?php echo site_url('/Occ_controller/selectData');?>",
          success:function(data)  {
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              appenddata1

              /*
              $("select#industry").empty();
              if (data[index].job_name == job.trim() ) {
                appenddata1 += "<option value = '" + data[index].job_name + " ' selected>" + data[index].job_name + " </option>";
              } else {
                appenddata1 += "<option value = '" + data[index].job_name + " '>" + data[index].job_name + " </option>";
              }*/
            });
            //$(".chzn-select").append(appenddata1);
            //$('.chzn-select').chosen().trigger("chosen:updated");

          }
        });
      });
    </script>
  </head>
  
  <body>
  <?php $this->load->view('header'); ?>
    <div class="section" style="background-image:url(image/22.png); height:115px">
      <div class="container">
        <div class="row" >
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>
          <div class="col-md-2">
            <div class="btn-group btn-group-lg">
              <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/searchData');?>" method="post">
                <select class="chzn-select" id="industry" name="industry" style="width:200px;height:40px;">
                </select>
              </form>
            </div>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary" style="height:30px;width:80px;margin-left:30px;"
            onclick="search();">Search</button>
          </div>
        </div>
      </div>
    </div>
    <div class="section" style="background-color:#f2f2f2;padding-left:0px;padding-right:0px">
      <div class="container">
        <div class="row" style="background-color:white; height:450px">
          <div class="col-md-3">
            <h3>Occupation</h3>
            <hr>
            <ul style="list-style-type:none">
              <li>
                <a>Waiter</a>
              </li>
              <br>
              <li>
                <a>Kitchen Hand</a>
              </li>
              <br>
              <li>
                <a>Hotel Cleaner</a>
              </li>
              <br>
              <li>
                <a>Convenient Store Staff</a>
              </li>
              <br>
            </ul>
          </div>
          <div class="col-md-9" style="background-color:white; height:390">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="<?php echo site_url('Welcome/newPage/statistics'); ?>" ">Number of Claims</a>
              </li>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/statistics1'); ?>" ">Rate of Frequence</a>
              </li>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/statistics2'); ?>"">Rate of Incident</a>
              </li>
            </ul>
            <div style="text-align:center" id="txtHint"></div>
          </div>
          
        </div>
      </div>
    </div>
  <?php $this->load->view('footer'); ?>
  </body>

</html>