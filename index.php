<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function call(){
            var phone=document.getElementById("phone_number").value;
            phone=parseInt(phone);
            if(phone > 6000000000 && phone < 9999999999 ){

                return true;
            }
         alert("please provide the valid phone_number");

            return false;
        }
    </script>
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" onsubmit="return call()" class="appointment-form" id="appointment-form" action="rec.php" enctype= "multipart/form-data">
                <h2>Sms form requirements</h2>
                <div class="form-group-1">
\                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                  <input type="text" name="deg" placeholder="msc or mca">
                  <select name="stype" class="from-control">
                        <option>student</option>

                        <option>staff</option>

                  </select>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="submit" />
                </div>

            <a href="admin/"><input type="button" name="" style="background-color: green;color: white" value="Admin"></a>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>