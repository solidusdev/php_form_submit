<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Submit</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>

    <body>
        <div id="outer-container">
            <div id="inner-container">
                <h1>Thank you for submitting!</h1>
                <?php
                    
                    // gather all input values from the form
                    $first_name = $_POST["first_name"];
                    $last_name = $_POST["last_name"];
                    $email = $_POST["email"];
                    $zipcode = $_POST["zipcode"];

                    // database
                    $host;          // database host
                    $dbusername;    // database user
                    $dbpassword;    // database password
                    $dbname;        // database name

                    // create a MYSQL connection
                    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                    // connection error
                    if ($conn->connect_error) {
                        die ("Connection failed: " . $conn->connect_error);
                    }

                    // connection success
                    else {
                        
                        // insert input values to database table
                        $sql = "INSERT INTO SampleTable (first_name, last_name, email, zipcode)
                        values ('$first_name','$last_name', '$email', '$zipcode')";
                        
                        // close connection
                        $conn->close();
                    }
                ?>
            </div>
        </div>
    </body>
</html>