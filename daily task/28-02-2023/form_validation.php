<!DOCTYPE HTML>
<html>

<head>
    <style>
       input{
        padding: 5px;
       }
       
        body {
           
            background-color: wheat
        }

        form {
            background-color: aqua;
        }

        input[type="text"],
        input[type="password"]
        {
            width: 250px;
        }


        input[type="submit"]
         {
            width: 77px;
            height: 27px;
            position: relative;
            left: 180px;
        }
        select{
            padding: 5px;
            width: 263px;
        }
         
        form {
            text-align: center;
           
            font-size: 20px;
            padding: 5%;
            width: fit-content;
            margin: 20px auto;
        }

        td {
            padding: 10px;
        }

        td:first-child {
            text-align: right;
            font-weight: bold;
        }

        td:last-child {
            text-align: left;
        }

        .error {
            color: #FF0000;
        }
        div{
         background-color: white;
         padding: 5%;
        }
    </style>
</head>

<body>


    <?php
    // define variables and set to empty values
    $nameErr = $passErr = $addressErr = $countryErr = $zip_codeErr = $emailErr = $genderErr = $langErr = $aboutErr = "";
    $name = $pass = $address = $country = $zip_code = $email = $gender = $lang = $about = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $nameErr = "Only letters and white space allowed";
        } else {
            $name = test_input($_POST["name"]);
        }
    

        //Validates password 
        if (empty($_POST["pass"])) {
            $passErr = "password is required";
        } else if (strlen($_POST["pass"]) <= '8') {
            $passErr = "Your Password Must Contain At Least 8 Characters!";
            
        } else if (!preg_match('/^[A-Z]*$/', $pass)) {
            $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
        } else if (!preg_match('/^[a-z]*$/', $pass)) {
            $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $pass = test_input($_POST["pass"]);
        }

        $s = $_POST['country'];
        if (empty($_POST["country"]) || $s = ""  ) {
            $countryErr = "country required";
        } else {
            $country = test_input($_POST["country"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } 
          else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            else {
                $email = test_input($_POST["email"]);
        }


        if (empty($_POST["zip_code"])) {
            $zip_codeErr = "zipcode required";
        } 
          else  if (!preg_match('/^\d{5}$/', $zip_code)) {
                $zip_codeErr = "Please enter your zip code as #####.";
            }
            else {
                $zip_code = test_input($_POST["zip_code"]);
        }



        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }


        if (empty($_POST["lang"])) {
            $langErr = "language is required";
        } else {
            $lang = test_input($_POST["lang"]);
        }



        if (empty($_POST["address"])) {
            $addressErr = "address required";
        } else {
            $country = test_input($_POST["address"]);
        }

        if (empty($_POST["about"])) {
            $about = "";
        } else {
            $about = test_input($_POST["about"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <section>

        <center>
            <h2>REGISTRATION FORM</h2>
        </center>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td><label for="name">Name:</label> </td>
                    <td> <input type="text" name="name"><span class="error" style="margin-left:4px">*<?php echo $nameErr; ?></span></td>

                    </span>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label> </td>
                    <td><input type="password" name="pass">
                        <span class="error">*
                            <?php echo $passErr; ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td><label> address:</label> </td>
                    <td><input type="text" name="address">
                    </td>
                </tr>
                <tr>
                    <td> <label for="country">country:</label> </td>
                    <td>
                        <select name="country" id="country">
                        <option value="">--select country--</option>
                            <option value="cuddalore">cuddalore</option>
                            <option value="vilupram">vilupram</option>
                        </select>
                        <span class="error">*
                            <?php echo $countryErr; ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td><label for="zip_code">Zip Code:</label> </td>
                    <td><input type="text" name="zip_code">
                        <span class="error">*
                            <?php echo $zip_codeErr; ?>
                        </span>
                    </td>

                </tr>
                <tr>
                    <td><label for="id">E - mail:</label> </td>
                    <td><input type="text" name="email">
                        <span class="error">*
                            <?php echo $emailErr; ?>
                        </span>
                    </td>

                </tr>
                <tr>
                    <td><label for="id">gender:</label> </td>
                    <td>
                        <input type="radio" name="gender" value="female">Male
                        <input type="radio" name="gender" value="male">Female
                        <span class="error">*
                            <?php echo $genderErr; ?>
                        </span>
                    </td>

                </tr>
                <tr>
                    <td><label for="id">language:</label> </td>
                    <td>
                        <input type="checkbox" name="lang" value="English">English
                        <input type="checkbox" name="lang" value="Non English">Non English
                        <span class="error">*
                            <?php echo $langErr; ?>
                        </span>
                    </td>

                </tr>

                <tr>
                    <td><label for="about">About:</label> </td>
                    <td>
                        <textarea name="about" rows="5" cols="40"></textarea>

                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </section>

    <div>
        <?php
        echo "<h2>Your Input:</h2>";
        echo "your name:".$name;
        echo "<br>";
        echo "your password:". $pass;
        echo "<br>";
        echo "your address:".$address;
        echo "<br>";
        echo "country you selected:".$country;
        echo "<br>";
        echo "your zipcode:". $zip_code;
        echo "<br>";
        echo "your email:".$email;
        echo "<br>";
        echo "your gender:" .$gender;
        echo "<br>";
        echo "language you chosen:".$lang;
        echo "<br>";
        echo "about:".$about;
        ?>
    </div>

</body>

</html>