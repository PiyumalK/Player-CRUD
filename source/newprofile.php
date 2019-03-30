<!DOCTYPE html>
<html>
    <head>
        <title>Create Player Profile</title>
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/styles.css">

        <?php
            include 'connect.php';

            //define variables to hold inputs and input errors
            $firstnameErr = $lastnameErr = $kitnameErr = $ageErr = $heightErr = $weightErr = $emailErr = "";
            $fname = $lname = $kname = $age = $height = $weight = $email = $position = $role = $foot = $address = "";
            $complete = true;

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["firstname"])){
                    $firstnameErr = "First Name is required";
                }else{
                    $fname = test_input($_POST["firstname"]);

                    //check if first name only contains letters
                    if(!preg_match("/^[a=zA-Z]*$/", $fname)){
                        $firstnameErr = "Only letters are allowed";
                    }
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["lastname"])){
                    $lastnameErr = "Last Name is required";
                }else{
                    $lname = test_input($_POST["lastname"]);

                    //check if last name only contains letters
                    if(!preg_match("/^[a=zA-Z]*$/", $lname)){
                        $lastnameErr = "Only letters are allowed";
                    }
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["kitname"])){
                    $kitnameErr = "Kit Name is required";
                }else{
                    $kname = test_input($_POST["kitname"]);

                    //check if kit name only contains letters and white space
                    if(!preg_match("/^[a=zA-Z ]*$/", $kname)){
                        $kitnameErr = "Only letters are allowed";
                    }
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["age"])){
                    $ageErr = "Age is required";
                }else{
                    $age = test_input($_POST["age"]);

                    //check if age only contains numbers
                    if(!preg_match("/^[0-9]*$/", $age)){
                        $ageErr = "Only numbers are allowed";
                    }
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["height"])){
                    $heightErr = "Height is required";
                }
                else{
                    $height = test_input($_POST["height"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["weight"])){
                    $weightErr = "Weight is required";
                }
                else{
                    $weight = test_input($_POST["weight"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["email"])){
                    $emailErr = "Email is required";
                }else{
                    $email = test_input($_POST["email"]);
                    
                    //check if e-mail address is well-formed
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                    }
                }
            }

           if($_SERVER["REQUEST_METHOD"] == "POST"){
                $position = test_input($_POST["position"]);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $role = test_input($_POST["role"]);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $foot = test_input($_POST["foot"]);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $address = test_input($_POST["address"]);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($complete == true){
                    $sql = "INSERT INTO player_details (first_name, last_name, kit_name, age, height, weight, email, address, position, role, prefered_foot) VALUES ('$fname', '$lname', '$kname', '$age', '$height', '$weight', '$email', '$address', '$position', '$role', '$foot')";
                    if($conn -> query($sql) == TRUE){
                        header("Location: index.php?action=new");
                        //echo $sql;
                    }
                    else{
                        "ERROR: " . $sql . "<br />" . $conn -> error;
                    }
                }
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
    </head>

    <body>
        <div class="container">
            <h4><b>Enter player details...</b></h4>
            <p><span class="error">* required field</span></p>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!--Player's personal information-->
                <fieldset>
                    <legend>Personal Information</legend>
                    
                    <div class="row">
                        <div class="three columns">
                            <label for="fname">First Name: <span class="error">* <?php $complete = false; echo $firstnameErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="John" id="fname" name="firstname">
                            
                        </div>

                        <div class="three columns">
                            <label for="lname">Last Name: <span class="error">* <?php $complete = false; echo $lastnameErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="Doe" id="lname" name="lastname">
                        </div>

                        <div class="three columns">
                            <label for="kname">Kit Name: <span class="error">* <?php $complete = false; echo $kitnameErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="J. Doe" id="kname" name="kitname">
                        </div>

                    </div>

                    <div class="row">
                        <div class="three columns">
                            <label for="userage">Age: <span class="error">* <?php $complete = false; echo $ageErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="Age" id="userage" name="age">
                            <span class="error">* <?php echo $ageErr; ?></span>
                        </div>

                        <div class="three columns">
                            <label for="userheight">Height: <span class="error">* <?php $complete = false; echo $heightErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="Height" id="userheight" name="height">
                        </div>

                        <div class="three columns">
                            <label for="userweight">Weight: <span class="error">* <?php $complete = false; echo $weightErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="Weight" id="userweight" name="weight">
                        </div>

                    </div>

                    <div class="row">
                        <div class="three columns">
                            <label for="useremail">E-mail: <span class="error">* <?php $complete = false; echo $emailErr; ?></span> </label>
                            <input class="u-full-width" type="text" placeholder="johndoe@something.com" id="useremail" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <label for="useradrs">Address</label>
                        <textarea class="u-full-width" placeholder="" id="useradrs" name="address"></textarea>
                    </div>
                </fieldset>

                <!--Player's position information-->
                <fieldset>
                    <legend>Position</legend>
                    
                    <div class="three columns">
                        <label for="playerposition">Position: </label>
                        <select class="u-full-width" id="playerposition" name="position">
                            <option disabled selected value>--select an option--</option>
                            <option value="Forward">Forward</option>
                            <option value="Midfielder">Midfielder</option>
                            <option value="Defender">Defender</option>
                            <option value="Goal Keeper">Goal Keeper</option>
                        </select>
                    </div>

                    <div class="three columns">
                        <label for="playerrole">Role: </label>
                        <select class="u-full-width" id="playerrole" name="role">
                            <option disabled selected value>--select an option--</option>
                        </select>
                    </div>

                    <div class="three columns">
                        <label for="foot">Prefered Foot: </label>
                        <select class="u-full-width" id="foot" name="foot">
                            <option disabled selected value>--select an option--</option>
                            <option value="Left">Left</option>
                            <option value="Right">Right</option>
                        </select>
                    </div>
                </fieldset>
                
                <input class="button-primary" type="submit" value="Submit">
            </form>
        </div>
        <script src="javascript/script.js"></script>
    </body>

</html>