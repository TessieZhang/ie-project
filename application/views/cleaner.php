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
                //appenddata1 += "<option value = '" + data[index].job_name + " ' selected>" + data[index].job_name + " </option>";
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
              <h1 style=" text-align:center;margin-top:20px">Cleaner</h1>
              <h>Manual handling tasks are part of the job for cleaners, but in certain circumstances they can be hazardous and cause injuries. Employers must take action to eliminate or reduce the risk of manual handling activities being hazardous to workers, usually by modifying the way a task is performed, or by providing aids and equipment that make tasks safer.</h>
              <hr>
              <DIV style="cursor:hand" onclick="isHidden('div1')">
              <h>Here are the situations you may face during the part-time work.</h>
              <br>
              <b>1. Repetitive or sustained awkward postures, such as cleaning toilets or urinals by bending the back.</b></DIV>
              <DIV id="div1" style="display:none">
              <h>To improve protection and avoid wounds, provide:                
              </h>
              <ul>             
              <li>Tools with a long handle or extended pole.               
              </li>
              <li>A cleaning head frame that can flex to clean both contoured and flat surfaces, for example, a frame that fits in both the rounded corner between the base and sides of a bathtub, and curved surfaces of the bathtub.               
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div2')"><b>2. Using high force, such as moving or lifting heavy furniture, large and long rugs or mats for cleaning.</b></DIV>
              <DIV id="div2" style="display:none">
              <h>To reduce high force, ensure:                
              </h>
              <ul>             
              <li>A 'no lift' policy is followed.               
              </li>
              <li>Cleaning equipment has handles with sufficient length so the cleaning heads can be pushed under furniture.              
              </li>
              <li>Rugs and mats are rolled out to expose the surface requiring cleaning.              
              </li>
              <li>Furniture has lockable castors or glides to prevent lifting             
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div3')"><b>3. Repetitive or sustained movements, such as wringing mops using hand squeeze mop buckets.</b></DIV>
              <DIV id="div3" style="display:none">
              <h>To reduce bending and twisting:                
              </h>
              <ul>             
              <li>Provide mechanized floor-cleaning machines              
              </li>
              <li>Provide tall mop buckets, or raise the mop bucket off the floor to reduce the bending force required to wring water               
              </li>
              <li>Train workers in safe work procedures, for example, keeping elbows close to the body.              
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