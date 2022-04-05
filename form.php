<?php
 ini_set('display_errors', 1); 
 ini_set('display_startup_errors', 1); 
 error_reporting(E_ALL);



$errors=[];
$olddata=[];

if (empty($_POST["fname"])) {
    $errors["fname"] = "First Name is required";
  } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"])) {
    $errors["lname"] = "Only letters and white space allowed";
}
  else {
    $olddata["fname"] = $_POST['fname'];
}
    
    if (empty($_POST["lname"])) {
        $errors["lname"] = "Last Name is required";
      } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["lname"])) {
        $errors["lname"] = "Only letters and white space allowed";
    }
      else {
        $olddata["lname"] = $_POST['lname'];
    }

        if (empty($_POST["address"])) {
            $errors["address"] = "Address is required";
        }else {
            $olddata["address"] = $_POST['address'];
        }
        if (empty($_POST["country"])) {
            $errors["country"] = "country is required";
        }else {
            $olddata["country"] = $_POST['country'];
        }
        if (empty($_POST["gender"])) {
            $errors["gender"]= "Gender is required";
          } else {
            $olddata["gender"] = $_POST["gender"];
          }
          if (empty($_POST["gender"])) {
            $errors["username"]= "username is required";
          } else {
            $olddata["username"] = $_POST["username"];
          }
          if (empty($_POST["password"])) {
            $errors["password"]= "password is required";
          } else {
            $olddata["password"] = $_POST["password"];
          }
          if (empty($_POST["department"])) {
            $errors["department"]= "department is required";
          } else {
            $olddata["department"] = $_POST["department"];
          }
          if (empty($_POST["skill"])) {
            $errors["skill"]= "skills is required";
          } else {
            $olddata["skill"] = $_POST["skill"];
          }
         



if (count($errors)>0){
   $err =json_encode($errors);

   if (count($olddata)>0)
   {
       $old =json_encode($olddata);
       header("Location: index.php?errors={$err}&olddata={$old}" );
    }else
    header("Location: index.php?errors={$err}" );
}

if (count($errors)===0){
   
    $user=$_POST["fname"].":".$_POST["lname"].":".$_POST["address"].":".$_POST["country"].":".$_POST["gender"].":".$_POST["username"].":".$_POST["password"].":".$_POST["department"];
     var_dump($user);

     try {
         $userfile=fopen("user.txt","a");
         fwrite($userfile,$user.PHP_EOL);

         fclose($userfile);
         header("Location: allusers.php");


     } catch (Exception $e) {
         echo $e->getMessage(); 
     }

    
}




  

?>