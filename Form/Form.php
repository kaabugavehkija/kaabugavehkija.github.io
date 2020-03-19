<!DOCTYPE html>
<html>
<head>
    <title >Kirjuta faili</title>
        <style type="text/css">
        p{
            font-family: "Times New Roman", Times, serif;
            font-size: 22px;
        }

        input[type=text]{
            border: 2px solid red;
        }

        label{
            font-size: 20px;
        }

        .radio{
            font-size: 18px;
        }
        input:last-of-type{
            background: blue;
            font-size: 24px;
        }

        </style>
        
        
</head>
<body >
    <form method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <p>Vali sugu</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male" class="radio">Male</label><br>
        <input type="radio" id="female" name="gender" value="female"class="radio">
        <label for="female" class="radio">Female</label><br>
        <input type="radio" id="other" name="gender" value="other"class="radio">
        <label for="other" class="radio">Other</label>
        <br>
        
        <input name="submit_button" type="submit" value="Saada">
    </form>
</body>
</html>

<?php
              
if(isset($_POST['submit_button']) and isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['gender']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sugu=$_POST['gender'];
$fp = fopen('Andmed.txt', 'a');
fwrite($fp, "Eesnimi:".$fname."\t");
fwrite($fp, "Perenimi:".$lname."\t");
fwrite($fp, "Sugu:".$sugu."\n");
// fwrite($fp, "\n");
fclose($fp);
header('Location: http://localhost/Form/Form.html');
}
?>