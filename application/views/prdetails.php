<html>
  
  <head>
    <SCRIPT>
    function isHidden(oDiv){
      var vDiv = document.getElementById(oDiv);
      vDiv.style.display = (vDiv.style.display == 'none')?'block':'none';
    }
  </SCRIPT>

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
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              $("select#industry").empty();
              //if (data[index].job_name == job.trim() ) {
               // appenddata1 += "<option value = '" + data[index].job_name + " ' selected>" + data[index].job_name + " </option>";
              //} else {
                appenddata1 += "<option value = '" + data[index].job_name + " '>" + data[index].job_name + " </option>";
             // }
            });
            $(".chzn-select").append(appenddata1);
            $('.chzn-select').chosen().trigger("chosen:updated");

          }
        });
/*
        $.ajax({
          type: "POST",
          dataType : 'json',
          url: "<//?php echo site_url('/Occ_controller/selectJob');?>",
          success:function(data)  {
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              $("ul#job").empty();
              appenddata1 += "<br><li><a href='javascript:void(0)'  name='lilili' value = '" + data[index].job_name + " '>" + data[index].job_name + "</a> </li>";
            });
            $("ul#job").append(appenddata1);

          }
        });
/*
        $.ajax({
          type: "POST",
          data: "job=" + job,
          dataType : 'json',
          url: "<//?php echo site_url('/Occ_controller/selectAccident');?>",
          success:function(data)  {
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              /*$("#div1").empty();
              appenddata1 += "<b> " + data[index].accident_name+ "</b>";
            });
            $("#div1").append(appenddata1);

          }
        });*/
        $("#search").click(function () {$('#jobForm').submit();});
      });
    </script>
  </head>
  
  <body>

  <?php $this->load->view('header'); ?>
    <div class="section" style="background-image:url(image/21.png); height:130px">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>
          <!------->
          <div class="col-md-2" style="margin-right:33px">
            <div class="btn-group btn-group-lg">
              <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/selectJobDetail');?>" method="post">
              <select class="chzn-select" id="industry" name="industry" style="width:200px;height:40px;">
              </select>
                </form>
            </div>
          </div>
          <!------>
          <div class="col-md-2">
              <button id="search" class="btn btn-primary" style="height:30px;width:80px;margin-left:30px;" >Search</button>

          </div>
        </div>
      </div>
    </div>
    <div style="background-color:#f2f2f2"
    class="section">
      <div class="container" style="background-color:white; height:555px">
        <div class="row" >
          <div class="col-md-3">
            <h3>Occupation</h3>
          <hr>
            <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/selectJobDetail');?>" method="post">
            <ul style="list-style-type:none">
              <li>
                <a href="<?php echo site_url('Welcome/newPage/prdetails'); ?>" >Waiter</a>
              </li>
              <br>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/cleaner'); ?>" >Cleaner</a>
              </li>
              <br>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/worker'); ?>" >Convenience Store Worker</a>
              </li>
              <br>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/kitchenhand'); ?>" >Kitchen Hand</a>
              </li>

            </ul>
              </form>
          </div>
          <div class="col-md-9">
            <div class="section" >
              <h1 style=" text-align:center;margin-top:20px">Waiter</h1>
              <h>Manual handling tasks are part of the job for waiters, but in certain
                circumstances they can be hazardous and cause injuries. Employers must
                take action to eliminate or reduce the risk of manual handling activities
                being hazardous to workers, usually by modifying the way a task is performed,
                or by providing aids and equipment that make tasks safer.</h>
              <hr>
              <DIV style="cursor:hand" onclick="isHidden('div1')">
              <h>Here are the situations you may face during the pwrt-time work.</h>
              <br>
              <b>1. Cleaning broken dishes or bowls.</b></DIV>
              <DIV id="div1" style="display:none">
              <h>To improve protection and avoid wounds, provide:                
              </h>
              <ul>             
              <li>Tools with a long handle or extended pole.               
              </li>
              <li>Broom and dustpan.               
              </li>
              <li>Never use hand to collect them which may cut your fingers.               
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div2')"><b>2. Handling Boiling water or hot soup.</b></DIV>
              <DIV id="div2" style="display:none">
              <h>To improve protection and avoid burn, provide:                
              </h>
              <ul>             
              <li>Kitchen gloves or hand protection.               
              </li>
              <li>Tools with a long handle or extended pole.               
              </li>
              <li>Tray to hold dishes.              
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div3')"><b>3. Slipped to the ground.</b></DIV>
              <DIV id="div3" style="display:none">
              <h>To improve protection and avoid fall down, Please:                
              </h>
              <ul>             
              <li>Watch steps and be careful.              
              </li>
              <li>Non-slip shoes.               
              </li>
              <li>Cleaning ground frequently especially water place.              
              </li>
              </ul>
              </DIV>
              <hr>
              <h style=" text-align:center">During the work, you may meet the following injuries.</h>
              <div class="row">

                <div class="col-md-3">
                  <br>
                  <img src="image/11.jpg"
                  class="img-responsive">
                </div>
                <br>
                <div class="col-md-3">
                  <img src="image/12.png"
                  class="img-responsive">
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