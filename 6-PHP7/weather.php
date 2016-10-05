<?php

$wSummary ="";
if($_POST){
    
    $city = $_POST['city'];

    $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
    
    $summary = explode('3 Day Weather Forecast Summary:</b> <span class="phrase">',$forecastPage);
    
    $summary2 = explode('</span></p>',$summary[1]);
    $wSummary= $summary2[0];
    //echo $summary2[0];
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
  </head>
  
    <style type ="text/css">
    
        body{
            background: url('http://rmzhanxian.com/data/out/41/67739243-horizon-wallpaper.jpeg') no-repeat center center fixed;
        }
        
        #jumbo{
            
                    /* IE8 and below */

            /* all other browsers */
            background: rgba(255, 255, 255, 0.0);

        }
        
        #cityText{
            text-align: center;
        }

        .container{
            text-align: center;
        }
        
        #message{
            
            margin-top: 60px;
            
        }
        
    </style>
    
    
    

  <body>
   

      <div class="container" >
        
          <div class="jumbotron" id="jumbo">
              <h3 id="cityText" class="display-3">What is the weather today?</h3>
              <p id="cityText" class="lead">Enter the name of the city</p>
              <hr class="m-y-2">
              
              <form method="post">
                  <div class="form-group">
                    <input name="city" type="text" class="form-control" id="cityInput" placeholder="Eg. Floral Park, Bellerose">
                  </div>
                    <button id="submitButton" type="submit" class="btn btn-primary">Submit</button>

                  
              </form>
              
              <div id="message"><?php
               
                   if($wSummary){

                       echo '<div class="alert alert-success" role="alert">
      <strong>Forecast: </strong>'.$wSummary.'</div>';

                   }else{
                       echo "";
                   }

               ?>
              
              </div>
             
              
         </div>
      
      
      
      
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
      
    <script type="text/javascript">
      
       $("form").submit(function(e){
            e.preventDefault();
           
           var cast = '<?php $summary2[0]; ?>'
           
           if($("#cityInput").val() ==""){
               $("#message").html('<div class="alert alert-danger" role="alert"><strong>Error!</strong> Enter a City please.</div>');
           }
           
           
           
       
       
       });
      
      
      
      
      
      </script>
      
      
      
      
      
      
  </body>
</html>