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
            <h3 style="text-align:center">Wound</h3>
            <h4 style="text-align:center">Here are the steps to do the first aid</h4>
            <ol>
              <li>Wash your hands. This helps avoid infection. Also put on disposable
                protective gloves if they're available.</li>
              <br>
              <li>Stop the bleeding. Minor cuts and scrapes usually stop bleeding on
                their own. If not, apply gentle pressure with a sterile bandage or clean
                cloth and elevate the wound.</li>
              <br>
              <li>Clean the wound. Use clear water to rinse the wound. Also clean around
                the wound with soap and a washcloth. Keep soap out of the wound, as it
                can cause irritation. If dirt or debris remains in the wound after washing,
                use tweezers cleaned with alcohol to remove the particles. If debris still
                remains, see your doctor. Thorough cleaning reduces the risk of infection
                and tetanus. There's no need to use hydrogen peroxide, iodine or an iodine-containing
                cleanser, which can be irritating to tissue already injured.</li>
              <br>
              <li>Apply an antibiotic. Apply a thin layer of an antibiotic cream or ointment
                (Neosporin, Polysporin) to help keep the surface moist. These products
                don't make the wound heal faster. But they can discourage infection and
                help the body's natural healing process. Certain ingredients in some ointments
                can cause a mild rash in some people. If a rash appears, stop using the
                ointment.</li>
              <br>
              <li>Cover the wound. Bandages can help keep the wound clean and keep harmful
                bacteria out. If the injury is just a minor scrape, or scratch, leave it
                uncovered.</li>
              <br>
              <li>Change the dressing. Do this at least once a day or whenever the bandage
                becomes wet or dirty. If the injured person is allergic to the adhesive
                in tapes and bandages, switch to adhesive-free dressings or sterile gauze
                held in place with paper tape, rolled gauze or a loosely applied elastic
                bandage. These supplies generally are available at pharmacies.</li>
              <br>
              <li>Get stitches for deep wounds. A deep — all the way through the skin
                — gaping or jagged wound with exposed fat or muscle will need stitches.
                Adhesive strips or butterfly tape may hold a minor cut together, but if
                you can't easily close the wound, see your doctor as soon as possible.
                Proper closure within a few hours minimizes scarring and reduces the risk
                of infection.</li>
              <br>
              <li>Watch for signs of infection. See your doctor if the wound isn't healing
                or you notice any redness, increasing pain, drainage, warmth or swelling.</li>
              <br>
              <li>Get a tetanus shot. If the injured person hasn't had a tetanus shot
                in the past five years and the wound is deep or dirty, he or she may need
                a booster shot, as soon as possible.</li>
            </ol>
          </div>
          <div style="text-align:center" id="txtHint"></div>
        </div>
      </div>
    </div>

      <?php $this->load->view('footer'); ?>
  </body>

</html>