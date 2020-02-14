<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Submit</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>

    <body>
        <div id="outer-container">
            <div id="inner-container">
                <form name="form_id" action="action.php" method="post">
                    <?php
                        echo <<<EOS
                            <h1>Sample Form</h1>
                        EOS;
                    ?>
                    <div id="input-container">
                        <div class="row">
                            <div class="column">
                                <p>First Name:</p>
                                <input type="text" name="first_name" required />
                            </div>
                            <div class="column">
                                <p>Last Name:</p>
                                <input type="text" name="last_name" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <p>Email:</p>
                                <input type="text" name="email" required />
                            </div>
                            <div class="column">
                                <p>Zipcode:</p>
                                <input type="text" name="zipcode" required />
                            </div>
                        </div>
                    </div>
                    <input id="submit" type="submit" value="Submit" onclick="return validate_form()" />
                </form>
            </div>
        </div>
    </body>

    <script>
        function validate_form() {
            
            let first_name_value = document.forms["form_id"]["first_name"].value;
            let last_name_value = document.forms["form_id"]["last_name"].value;
            let email_value = document.forms["form_id"]["email"].value;
            let zipcode_value = document.forms["form_id"]["zipcode"].value;

            if (first_name_value === "" || last_name_value === "" || email_value === "" || zipcode_value === "" ) {
                alert("No empty values allowed");
                return false;
            }
        }
    </script>
</html>