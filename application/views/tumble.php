<html>
  
  <head>
    <script>
      function isHidden(oDiv){
        var vDiv = document.getElementById(oDiv);
        vDiv.style.display = (vDiv.style.display == 'none')?'block':'none';
      }
    </script>

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
          url: "<?php echo site_url('/Occ_controller/selectInjury');?>",
          success:function(data)  {
            var appenddata1 = "";
            console.log(data);
            $.each(data, function(index, element) {
              $("select#industry").empty();
              //if (data[index].injury_Name == job.trim() ) {
               // appenddata1 += "<option value = '" + data[index].injury_Name + " ' selected>" + data[index].injury_Name + " </option>";
              //} else {
                appenddata1 += "<option value = '" + data[index].injury_Name + " '>" + data[index].injury_Name + " </option>";
              //}
            });
            $(".chzn-select").append(appenddata1);
            $('.chzn-select').chosen().trigger("chosen:updated");

          }
        });

        $("#search").click(function () {$('#jobForm').submit();});
      });
    </script>
  </head>
  
  <body>

  <?php $this->load->view('header'); ?>
    <div class="section" style="background-image:url(image/25.png); height:115px">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>
          <!------->
          <div class="col-md-2" style="margin-right:33px">
            <div class="btn-group btn-group-lg">
              <form name="jobForm" id="jobForm" action="<?php echo site_url('/Occ_controller/selectInjuryDetail');?>" method="post">
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
    <div style="text-align:center" id="txtHint"></div>
    <div style="background-color:#f2f2f2;padding-left:0px;padding-right:0px"
    class="section">
      <div class="container">
        <div class="row" style="background-color:white; height:550px">
          <div class="col-md-2">
            <h4>First Aid</h4>
            <hr>

            <ul style="list-style-type:none">
              <li>
                <a href="<?php echo site_url('Welcome/newPage/wound');?>">Wound</a>
              </li>
              <br>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/burn');?>">Burn</a>
              </li>
              <br>
              <li>
                <a href="<?php echo site_url('Welcome/newPage/tumble');?>">Tumble</a>
              </li>
              <br>
            </ul>
            <br>
            <h4>Recovery</h4>
            <hr>
            <ul style="list-style-type:none">
              <li>
                <a href="<?php echo site_url('Welcome/newPage/recovery');?>">Recovery</a>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <h3 style="text-align:center">Tumble</h3>
            <h4 style="text-align:center">Here are the steps to do the first aid</h4>
            <ol>
              <li>Stop any bleeding. Apply pressure to the wound with a sterile bandage, a clean cloth or a clean piece of clothing.</li>
              <br>
              <li>Immobilize the injured area. Don't try to realign the bone or push a bone that's sticking out back in. If you've been trained in how to splint and professional help isn't readily available, apply a splint to the area above and below the fracture sites. Padding the splints can help reduce discomfort.</li>
              <br>
              <li>Apply ice packs to limit swelling and help relieve pain. Don't apply ice directly to the skin. Wrap the ice in a towel, piece of cloth or some other material.</li>
              <br>
              <li>Treat for shock. If the person feels faint or is breathing in short, rapid breaths, lay the person down with the head slightly lower than the trunk and, if possible, elevate the legs.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

      <?php $this->load->view('footer'); ?>
  </body>

</html>