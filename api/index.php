<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>API Integration</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

  </head>

  <body>
    <div><h1>Flight Tracker</h1>
        <?php
           // step1
            $cSession = curl_init();
            //step2
            curl_setopt($cSession,CURLOPT_URL,"https://api.flightstats.com/flex/schedules/rest/v1/json/to/DXB/arriving/2018/04/22/10?appId=27e4ef87&appKey=f8ea30ba99912e9ba6d10e5d775e6c48");
            curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($cSession,CURLOPT_HEADER, false);
            //step3
            $result=curl_exec($cSession);
            //
        //step4
            curl_close($cSession);
            //step5
            echo $result;

        ?>

    </div>
  </body>
</html>