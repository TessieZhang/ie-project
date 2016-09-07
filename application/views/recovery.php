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
            <h3 style="text-align:center">Recovery</h3>
            <h style="text-align:center">The most important person in your recovery is you. So what kinds of rehabilitation you need to focus on is the big serious category you need to consider. </h>
            <hr>
            <h>Here are the five steps that help you during the recovery time.</h>
            <DIV style="cursor:hand" onclick="isHidden('div1')">
              <b>1. Rest</b></DIV>
              <DIV id="div1" style="display:none">
              <h>Rest is the most important thing to do, and somehow are always difficult to implement if you are the active person even you know you need a rest. It is necessary for recovery people because your wound body needs some time for recovery without any activation.               
              </h>
              </DIV>
            <hr>
            <DIV style="cursor:hand" onclick="isHidden('div2')">
              <b>2. Rehab</b></DIV>
              <DIV id="div2" style="display:none">
              <h>Rehabbing injuries is THE most important part of recovery. If you don’t rehab an injury properly, then it will be extremely difficult to reach your maximum potential.              
              </h>
              </DIV>
            <hr>
            <DIV style="cursor:hand" onclick="isHidden('div3')">
              <b>3. Change focus</b></DIV>
              <DIV id="div3" style="display:none">
              <h>Changing focus does not means changing occupation! It simple means you can jump out the work environment and start to relax yourself during the rehabilitation. It’s positive for doing that because the terrible experience of getting injured scars the many workers for a long period if you keep thinking your injured incident.               
              </h>
              </DIV>
            <hr>
            <DIV style="cursor:hand" onclick="isHidden('div4')">
              <b>4. Rest</b></DIV>
              <DIV id="div4" style="display:none">
              <ul>             
              <li>Focus on what you can do, rather than what you can’t.               
              </li>
              <li>Talk to your treating health practitioner about how you may be able to stay active.              
              </li>
              <li>Talk to your family about how they can support you and help you to get better.               
              </li>
               <li>o  If you’re away from work, keep in touch with your employer and workmates. Talk to them about how you can stay connected with what’s happening at work. There may be newsletters and updates they can send you.
              </li>
              <li>o Try not to get frustrated if things don’t always go smoothly. Rehabilitation can take time and requires persistence. Try to stay positive.             
              </li>
              </ul>
              </DIV>
            <hr>
            <DIV style="cursor:hand" onclick="isHidden('div5')">
              <b>5. Thinking the future</b></DIV>
              <DIV id="div5" style="display:none">
              <ul>             
              <li>You should start planning your future and thinking when you can go back to work. You may not have to wait until you are 100 per cent recovered to return to work. It’s important to try to keep positive and motivated – focus on what you can do, rather than what you can’t. Whether it’s on reduced hours in your regular job or on modified or alternative duties, getting back to work is part of your rehabilitation.                
              </li>
              <li>Talk to your health practitioner to seek a advise about the recovery              
              </li>
              </ul>
              </DIV>
            
          </div>
          </div>
        </div>
      </div>
    </div>

      <?php $this->load->view('footer'); ?>
  </body>

</html>