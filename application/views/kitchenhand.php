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

        $.ajax({
          type: "POST",
          dataType : 'json',
          url: "<?php echo site_url('/Occ_controller/selectJob');?>",
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
        $("#job li a").click(function () {alert("aaaaaaa")});
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
    <div style="background-color:#f2f2f2;padding-left:0px;padding-right:0px"
    class="section">
      <div class="container">
        <div class="row" style="background-color:white">
          <div class="col-md-3">
            <h3>Occupation</h3>
          <hr>

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
          </div>
          <div class="col-md-9" style="background-color:white">
            <div class="section" style="background-color:white">
              <h1 style=" text-align:center;margin-top:20px">Kitchen Hand</h1>
              <h>We believe that kitchen workers are quite dangerous for the part time worker. Many workplaces use knives and blades on a regular basis. These hazards present risks of cuts and other injuries. This information is for people who work in kitchen and food service areas of health care facilities. It identities common risk areas and provides practical examples of how you can help control and improve safety in your workplace.</h>
              <hr>
              <DIV style="cursor:hand" onclick="isHidden('div1')">
              <h>Here are the situations you may face during the pwrt-time work.</h>
              <br>
              <b>1. Prevent injury coming into contact with hot liquids and surfaces.</b></DIV>
              <DIV id="div1" style="display:none">
              <h>To solve this situation:                
              </h>
              <ul>             
              <li>Prevent injury coming into contact with hot liquids and surfaces               
              </li>
              <li>Where possible, use alternative cooking methods to deep frying (eg microwaving, grilling or baking).               
              </li>
              <li>Post signs to warn workers about hot equipment and use stickers for stainless steel utensils.               
              </li>
              <li>Keep pot handles away from the stove’s edge.               
              </li>
              <li>Design the workplace or work processes to avoid carrying around hot liquids.
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div2')"><b>2. How to prevent the injury when you are facing the chemicals in café or restaurants?</b></DIV>
              <DIV id="div2" style="display:none">
              <h>To solve this problem:                
              </h>
              <ul>             
              <li>Store chemicals in approved containers; do not use old drink or food containers.               
              </li>
              <li>Do a risk assessment for all hazardous substances to determine how to use the chemicals safely.              
              </li>
              <li>Post emergency numbers, including poison information numbers, beside the telephone.             
              </li>
              <li>Make the MSDS and risk assessments available to people who use the chemicals at all times so they can refer to them.             
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div3')"><b>3. Knives and sharp tools safety.</b></DIV>
              <DIV id="div3" style="display:none">
              <h>To improve protection and avoid this problem, Please:                
              </h>
              <ul>             
              <li>Knives should be sharp, maintained and in a good working condition.              
              </li>
              <li>Ensure slicing machines and butchers’ steels for knife sharpening have hand guards.              
              </li>
              <li>Provide the correct knife for the task and only use knives for cutting purposes.              
              </li>
              <li>Provide mesh gloves and use them when working with knives.              
              </li>
              <li>Train and instruct workers to use and sharpen knives safely. Provide workers with training first aid.             
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
            
            <br>
            
          </div>
          <div class="container"></div>
          <div style="text-align:center" id="txtHint"></div>
        </div>
      </div>
    </div>
  <?php $this->load->view('footer'); ?>
  </body>

</html>