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
              //}
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
              <h1 style=" text-align:center;margin-top:20px">Convenience Store Worker</h1>
              <h>Convenience stores are unique commercial properties in that they are usually open 24-hours, are largely a cash-based business, can be operated by one clerk, and are conveniently located for quick in and out shopping. The nature of this business makes it very convenient for customers. Unfortunately, this business style also makes it an attractive target for robbers and other criminals. Since 1976, the convenience store industry has made major strides toward preventing and deterring robberies.</h>
              <hr>
              <DIV style="cursor:hand" onclick="isHidden('div1')">
              <h>Here are the situations you may face during the pwrt-time work.</h>
              <br>
              <b>1. The property and store are designed for convenience to customers, but do not make it too convenient for criminals.</b></DIV>
              <DIV id="div1" style="display:none">
              <h>To solve this issue:                
              </h>
              <ul>             
              <li>Limit the number of entrances and exits to the store and the parking lot.             
              </li>
              <li>Close off some parking lot entrances and doors at night.               
              </li>
              <li>Consider installing gates, locks or turnstiles, if necessary.               
              </li>
              <li>Switch to the prepaid method at night if your store includes a petrol station               
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div2')"><b>2. The use of physical features, such as electrical and mechanical devices, to maximize visibility.</b></DIV>
              <DIV id="div2" style="display:none">
              <h>To improve protection, provide:                
              </h>
              <ul>             
              <li>Use effective lighting both on the lot and in the store.               
              </li>
              <li>Remove signs from windows to provide clear lines of visibility to the cashier.               
              </li>
              <li>Move displays that block visibility to the cashier from the outside.             
              </li>
              <li>Be alert to your surroundings and report any problems.             
              </li>
              </ul>
              </DIV>
              <DIV style="cursor:hand" onclick="isHidden('div3')"><b>3. Minimize cash available at your store can reduce the risk of robbery.</b></DIV>
              <DIV id="div3" style="display:none">
              <h>To improve protection, Please:                
              </h>
              <ul>             
              <li>Using a drop safe.              
              </li>
              <li>Posting signs stating that the amount of cash on hand is limited.               
              </li>
              <li>Keeping cash in registers low.             
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