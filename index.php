<?php
if (isset($_GET["errors"])){
    $errors=json_decode($_GET["errors"]);
    // var_dump($errors);
}
if (isset($_GET["olddata"])){
    $olddata=json_decode($_GET["olddata"]);
    // var_dump($olddata);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .error {color: #FF0000;}
        </style>
</head>
<body>
    
    <div class="container container-fluid w-50 ">
        
        <h1 class="text-center">Form Registeration</h1>
        
        <form action="form.php" method="post">
            <div class="form-group m-2">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" value="<?php 
                 if(isset($olddata->fname)) { echo $olddata->fname;} ?>" >
                <label>  <?php  if(isset($errors->fname)){
                    echo "<p style='color:red'>$errors->fname</p>";
                }
                ?></label>
               
            </div>
            <div class="form-group m-2">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" value="<?php 
                 if(isset($olddata->lname)) { echo $olddata->lname;} ?>">
                <label>  <?php  if(isset($errors->lname)){
                    echo "<p style='color:red'>$errors->lname</p>";
                }
                ?></label>
            </div>
            <div class="form-group m-2">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" id="address" rows="3" ></textarea>
                <label>  <?php  if(isset($errors->address)){
                    echo "<p style='color:red'>$errors->address</p>";
                }
                ?></label>
            </div>
            <div class="form-group m-2">
                <label for="country">Country</label>
                <label>  <?php  if(isset($errors->country)){
                    echo "<p style='color:red'>$errors->country</p>";
                }
                ?></label>
                <select name="country" class="form-control" id="country" >
                    <option value="">Select Country</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Sudan">Oman</option>
                    <option value="KSA">Jordan</option>
                </select>
                
            </div>

            <label class="gender m-2">Gender</label>
            <label>  <?php  if(isset($errors->gender)){
                    echo "<p style='color:red'>$errors->gender</p>";
                }
                ?></label>
            <div class="form-check  m-2">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                <label class="form-check-label" for="male">
                 Male
                </label></div>
                <div class="form-check m-2 ">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">
                 Female
                </label>
                
            </div><br>


            <div class=" m-2">
                <label class="skills">Skills</label>
                <label>  <?php  if(isset($errors->skill)){
                    echo "<p style='color:red'>$errors->skill</p>";
                }
                ?></label>
                <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="php" name="skill[]" value="php">
                <label class="form-check-label" for="php">php</label> 
                 </div>
                <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="mysql" name="skill[]" value="mysql">
                <label class="form-check-label" for="mysql">mysql</label>
                </div>
                <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="c" name="skill[]" value="c">
                <label class="form-check-label" for="c">c</label>
                </div>
                <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="java" name="skill[]" value="java">
                <label class="form-check-label" for="java">java</label>
                </div>
               
            </div>
            
            <div class="form-group m-2">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="<?php 
                 if(isset($olddata->username)) { echo $olddata->username;} ?>">
              <label>  <?php  if(isset($errors->username)){
                    echo "<p style='color:red'>$errors->username</p>";
                }
                ?></label>
            </div>
            <div class="form-group m-2">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="<?php 
                 if(isset($olddata->password)) { echo $olddata->password;} ?>">
              <label>  <?php  if(isset($errors->password)){
                    echo "<p style='color:red'>$errors->password</p>";
                }
                ?></label>
            </div>
            <div class="form-group m-2">
                <label for="department">Department</label>
                <input type="text" name="department" class="form-control" id="department" placeholder="Enter Department" value="<?php 
                 if(isset($olddata->department)) { echo $olddata->department;} ?>">
                <label>  <?php  if(isset($errors->department)){
                    echo "<p style='color:red'>$errors->department</p>";
                }
                ?></label>
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </form>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  
</body>
</html>



