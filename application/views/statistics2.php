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
  </head>
  
  <body>
  <?php $this->load->view('header'); ?>
    <div class="section" style="background-image:url(image/22.png); height:130px">
      <div class="container">
        <div class="row" >
          <div class="col-md-2"></div>
          <div class="col-md-2" style="margin-right:33px">
            <div class="btn-group btn-group-lg">
              <select class="form-control" id="industry" style="width:200px;height:40px;"
              onclick="selectSubIndustry();">
                <option value="industry">Industry</option>
                <option value="Clerical and administrative workers">Clerical and administrative workers</option>
                <option value="Community and personal service workers">Community and personal service workers</option>
                <option value="Labourers">Labourers</option>
                <option value="Managers">Managers</option>
                <option value="Professionals">Professionals</option>
                <option value="Sales workers">Sales workers</option>
                <option value="Technicians and trades workers">Technicians and trades workers</option>
              </select>
            </div>
          </div>
          <div class="col-md-2" style="margin-right:33px">
            <div class="btn-group btn-group-lg" id="select_sub_industry">
              <select class="form-control" id="sub_industry" style="width:200px;height:40px;"
              onclick="selectOccupation();">
                <option value="sub_industry">Sub-industry</option>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="btn-group btn-group-lg" style="margin-right:33px" id="select_occupation">
              <select class="form-control" id="occupation" style="width:200px;height:40px;">
                <option value="occupation">Occupation</option>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary" style="height:30px;width:80px;margin-left:30px;margin-top:8px"
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
                <a href="#" onclick="num_claims();">Teacher</a>
              </li>
              <br>
              <li>
                <a href="#" onclick="num_claims();">Doctor</a>
              </li>
              <br>
              <li>
                <a href="#" onclick="num_claims();">Waiter</a>
              </li>
              <br>
              <li>
                <a href="#" onclick="num_claims();">Kitchen Hand</a>
              </li>
              <br>
              <li>
                <a href="#" onclick="num_claims();">Hotel Cleaner</a>
              </li>
              <br>
              <li>
                <a href="#" onclick="num_claims();">Convenient Store Staff</a>
              </li>
              <br>
            </ul>
          </div>
          <div class="col-md-9" style="background-color:white; height:390">
            <ul class="nav nav-tabs">
              <li >
                <a href="#" >Number of Claims</a>
              </li>
              <li>
                <a href="#">Rate of Frequence</a>
              </li>
              <li class="active">
                <a href="#">Rate of Incident</a>
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