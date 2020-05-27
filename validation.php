<?php
// define variables and set to empty values
$ContactnameErr = $emailErr =$managementCompErr = $businessNameErr = $propAddreErr =$cityErr=$StateErr= $zip_codeErr=$phoneErr=$faxErr=$washing_company="";
$contactName = $email = $managementComp = $businessName =$propAddr=$city= $State=$zip_code=$phone=$fax=$washing_company="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["contactName"])) {
    $nameErr = "Name is required";
  } else {
    $contactName = test_input($_POST["contactName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contactName)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    if (empty($_POST["managementComp"])) {
    $managementCompErr="Management Company is required";
  } else {
               $managementComp = $_POST["managementComp"];
            }
       
    if (empty($_POST["businessName"])) {
    $businessNameErr="Business Name is required";
  } else {
               $businessName = $_POST["businessName"];
            }

           
    if (empty($_POST["businessName"])) {
    $businessNameErr="Business Name is required";
  } else {
               $businessName = $_POST["businessName"];
            }
               
    if (empty($_POST["propAddr"])) {
    $propAddrErr="Property Address is required";
  } else {
               $propAddr = $_POST["propAddr"];
            }
                  
    
    if (empty($_POST["city"])) {
    $cityErr="City is required";
  } else {
               $city = $_POST["city"];
        if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed";
    }
            }
    
    if (empty($_POST["State"])) {
    $StateErr="State is required";
  } else {
               $State = $_POST["State"];
        if (!preg_match("/^[a-zA-Z ]*$/",$State)) {
      $StateErr = "Only letters and white space allowed";
    }
            }
    
       if (empty($_POST["zip_code"])) {
    $zip_codeErr="zip code is required";
  } else { if (is_numeric($zip_code)) {
               $zip_code = $_POST["zip_code"];}
          else{
              $zip_codeErr="It should include only numbers";
          }
            }
    
    
        if (empty($_POST["phone"])) {
    $phoneErr="phone is required";
  } else {
              if (is_numeric($phone)) {
               $phone = $_POST["phone"];}
          else{
              $phoneErr="It should include only numbers";
          }
            }
    
    
        if (empty($_POST["fax"])) {
    $faxErr="fax is required";
  } else {
               $fax = $_POST["fax"];
            }
    
        if (empty($_POST["washing_company"])) {
    $washing_companyErr="washing company is required";
  } else {
               $washing_company = $_POST["washing_company"];
            }
    
    
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

?>