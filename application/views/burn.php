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
                //appenddata1 += "<option value = '" + data[index].injury_Name + " ' selected>" + data[index].injury_Name + " </option>";
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
        <div class="row" style="background-color:white">
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
            <h3 style="text-align:center">Burn</h3>
            <h4 style="text-align:center">Here are the steps to do the first aid for minor burn</h4>
            <ol>
              <li>Cool the burn to help soothe the pain. Hold the burned area under cool (not cold) running water for 10 to 15 minutes or until the pain eases. Or apply a clean towel dampened with cool tap water.</li>
              <br>
              <li>Remove rings or other tight items from the burned area. Try to do this quickly and gently, before the area swells.</li>
              <br>
              <li>Don't break small blisters (no bigger than your little fingernail). If blisters break, gently clean the area with mild soap and water, apply an antibiotic ointment, and cover it with a nonstick gauze bandage.</li>
              <br>
              <li>Apply moisturizer or aloe vera lotion or gel, which may provide relief in some cases.</li>
              <br>
              <li>If needed, take an over-the-counter pain reliever, such as ibuprofen (Advil, Motrin IB, others), naproxen sodium (Aleve) or acetaminophen (Tylenol, others).</li>
              <br>
              <li>Consider a tetanus shot. Make sure that your tetanus booster is up to date. Doctors recommend people get a tetanus shot at least every 10 years.</li>
            </ol>
            <h4 style="text-align:center">Here are the steps to do the first aid for major burn</h4>
            <ol>
              <li>Protect the burned person from further harm. If you can do so safely, make sure the person you're helping is not in contact with smoldering materials or exposed to smoke or heat. But don't remove burned clothing stuck to the skin.</li>
              <br>
              <li>Check for signs of circulation. Look for breathing, coughing or movement. Begin CPR if needed.</li>
              <br>
              <li>Remove jewelry, belts and other restrictive items,especially from around burned areas and the neck. Burned areas swell rapidly.</li>
              <br>
              <li>Don't immerse large severe burns in cold water. Doing so could cause a serious loss of body heat (hypothermia) or a drop in blood pressure and decreased blood flow (shock).</li>
              <br>
              <li>Elevate the burned area. Raise the wound above heart level, if possible.</li>
              <br>
              <li>Cover the area of the burn. Use a cool, moist, bandage or a clean cloth.</li>
            </ol>
          </div>
          <div style="text-align:center" id="txtHint"></div>
        </div>
      </div>
    </div>

      <?php $this->load->view('footer'); ?>
  </body>

</html>