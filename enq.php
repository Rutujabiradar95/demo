<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=1">
        <title>Cutting Tools in Carbide, Brazed Carbide, Manufacturer, India</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php
        if(!empty([$_POST=""])){
            $userName=[$_POST="userName"];
            $userEmail=[$_POST="userEmail"];
            $userPhone=[$_POST="userPhone"];
            $userPhone=[$_POST="userMessage"];
            $toEmail="rutujapatil9592@gmail.com";

            $mailHeaders="Name:" . $userName .
            "\r\n Email: " . $userEmail . 
            "\r\n Phone No: " . $userPhone . 
            "\r\n Message: " . $userPhone "\r\n";

            if(mail($toEmail,$userName,$mailHeaders)){
                $message="Succeffully received";
            }
        }
        <div class="form-container">
            <form method="post" name="emailcontact">
                <div class="input-row">
                    <label >Name<em>*</em></label>
                    <input type="text" name="userName" required>
                </div>
                <div class="input-row">
                    <label >Email<em>*</em></label>
                    <input type="text" name="userEmail" required>
                </div>
                <div class="input-row">
                    <label >Phone No.<em>*</em></label>
                    <input type="tel" name="userPhone" required>
                </div>
                <div class="input-row">
                    <label >Message<em>*</em></label>
                    <textarea name="userMessage" required></textarea>
                    
                </div>
                <div class="input-row">
                  <!--  <label >Phone No.<em>*</em></label>-->
                    <input type="submit" name="Send" value="Submit" required>
                    <?php
                    if(!empty($message)){
                    ?>
                    <div class="Success">
                        <strong><?php echo $message ?></strong>
                    </div>
                    <?php }
                    ?>
                </div>
            </form>

        </div>
    </body>
</html>
