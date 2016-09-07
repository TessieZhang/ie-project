<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 25/08/2016
 * Time: 10:54 AM
 */
?>
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
          rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
          rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <base href="<?php echo base_url();?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>

<div class="navbar navbar-default" style="background-color:white">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo site_url('Welcome/newPage/home'); ?>" >
                <img style="width:150px;height:50px" src="image/l.png" />
                </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('Welcome/newPage/home'); ?>" >Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Welcome/newPage/preventinjury'); ?>" >Prevent Injury</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Welcome/newPage/statistic'); ?>" >Statistics</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Welcome/newPage/treatment'); ?>" >Treatment After Injury</a>
                </li>
            </ul>
        </div>
    </div>
</div>