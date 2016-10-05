<p>What is your name?</p>

<form method="post">

    <input name="username" type="text">
    
    <input type="submit" value="Go!">

</form>




<?php

print_r($_POST);




if($_POST){
    $exists = false;
    $username = array("Shaher","Ghazi","Muhammad");
    
    for($i=0;$i<sizeof($username);$i++){

        if($_POST['username'] == $username[$i]){
            $exists = true;
        }
    }
    
    if($exists){
        echo "User exists in Database ".$_POST['username'];
    }else{
        echo "Doesnt exist";
    }
    
}


?>

