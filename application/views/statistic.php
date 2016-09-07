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
            url: "<?php echo site_url('/Occ_controller/selectStatistic');?>",
            success:function(data)  {
              var appenddata1 = "";
              console.log(data);
              $.each(data, function(index, element) {

                $("select#industry").empty();
                appenddata1 += "<option value = '" + data[index].occupation + " '>" + data[index].occupation + " </option>";
              });
              $(".chzn-select#industry").append(appenddata1);
              $('.chzn-select#industry').chosen().trigger("chosen:updated");

            }
          });
          /*
        $("select#industry").click(function() {
          var industry = this.value;
          $.ajax({
            type: "POST",
            data: "industry=" + industry,
            dataType : 'json',
            url: "<//?php echo site_url('/Occ_controller/selectSubIndustry');?>",
            success:function(data)  {
              var appenddata1 = "";
              console.log(data);
              $.each(data, function(index, element) {
                $("select#sub_industry").empty();
                appenddata1 += "<option value = '" + data[index].sub_industry + " '>" + data[index].sub_industry + " </option>";
              });
              $(".chzn-select#industry").append(appenddata1);
              $('.chzn-select#industry').chosen().trigger("chosen:updated");
            }
          });
        });
        $("select#sub_industry").click(function() {
          var sub_industry = this.value;
          $.ajax({
            type: "POST",
            data: "sub_industry=" + sub_industry,
            dataType : 'json',
            url: "<//?php echo site_url('/Occ_controller/selectOccupation');?>",
            success:function(data)  {
              var appenddata1 = "";
              console.log(data);
              $.each(data, function(index, element) {
                $("select#occupation").empty();
                appenddata1 += "<option value = '" + data[index].occupation + " '>" + data[index].occupation + " </option>";
              });
              $("select#occupation").append(appenddata1);
            }
          });
        });*/

          $("#search").click(function () {$('#jobForm').submit();});
      });

    </script>
  </head>
  
  <body>
  <?php $this->load->view('header'); ?>
    <div class="section" style="background-image:url(image/24.png); background-repeat:repeat-x; height:115px">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>
              <div class="col-md-2" style="margin-right:33px">
                  <div class="btn-group btn-group-lg">
                      <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/searchData');?>" method="post">
                          <select class="chzn-select" id="industry" name="industry" style="width:200px;height:40px;">
                          </select>
                      </form>
                  </div>
          </div>
          <div class="col-md-2">
              <button class="btn btn-primary" style="height:30px;width:80px;margin-left:30px;" id="search">Search</button>
            </a>
          </div>
          <div class="col-md-2"></div>
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
                    <img src="image/29.jpg"
                    class="img-responsive">
                  </div>
                  <div class="col-md-9">
                      <br>
                    <p style="font-size: larger; align-content: justify;">From 1 July 2009, Australia Fair Work Act 2009 has created a new system that governed most Australia workplaces minimum wages. A minimum wage is an employee’s base rate of pay for ordinary hours worked, and is generally dependent on the industrial instrument that applies to their employment.

The Fair Work Commission reviews the minimum wages received by employees in the national workplace relations system annually, with any adjustments taking effect on 1 July each year.

The national minimum wage is currently $17.70 per hour or $672.70 per 38-hour week (before tax).

Casual employees covered by the national minimum wage also get at least a 25 per cent casual loading.
</p>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3">
                    <img src="image/30.jpg" class="img-responsive">
                  </div>
                  <div class="col-md-9" >
                      <br>
                    <p style="font-size: larger;">This is the statistic table is sourced by Safe Work Australia compiles national statistics on work health and safety using information and data from multiple sources. The statistics are used to inform policies and measures that are related to work health and safety.

You can take it as a reference to see the index of injury in particular industry.
</p>
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