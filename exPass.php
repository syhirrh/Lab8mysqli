<?php
if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
    $password = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) <=6 && $_POST["password"] <=7 && $_POST["password"] <=8 )) {
        $passwordErr = "Your Password Must Contain Between 6 and 8 characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 digit Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Upper case Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lower case Letter!";
    } else {
        $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    }
}
?>