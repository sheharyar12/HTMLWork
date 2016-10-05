<?php

    if($_POST){   
        mail("syar0052@gmail.com", $_POST['subject'], $_POST['description'], $_POST['email']);
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
  <body>
      
    <div class="container">
        <h1>Contact Us</h1>
    </div>   
      
    <div class="container">
        
        <div id="error">
        
        
        </div>
        
        
        <form method="post">
            
          <div class="form-group">
            <label for="email"><h4>Email address</h4></label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
            
          <div class="form-group">
              <label for="subject"><h4>Subject</h4></label>
            <input name="subject" type="text" class="form-control" id="subject">
          </div>
            
          <div class="form-group">
            <label for="description"><h4>What would you like to ask us?</h4></label>
            <textarea name="description" class="form-control" id="description" rows="6"></textarea>
          </div>

          <button type="submit" id="submit" class="btn btn-primary">Send</button>

        </form>
 
        
    </div>
        

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
      
        $("form").submit(function(e){
            e.preventDefault();
            
            var error = "";
            
            if($("#email").val()==""){
                error += "Email is required.<br>";
            }
            if($("#subject").val()==""){
                error += "Subject field is required.<br>";
            }
            if($("#description").val()==""){
                error += "Description field is required.<br>";
            }
            
            if(error!=""){
                $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were errors!</strong></p>'+ error + '</div>');
            }else{
                $("#error").html('<div class="alert alert-success" role="alert"><strong>Email was sent sucessfully!</strong></div>');
                $("form").unbind("submit").submit();
            }
            
            
            
        });
      
      
      
      </script>
      
      
      
  </body>
</html>