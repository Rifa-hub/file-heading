<!DOCTYPE HTML>
<html>
<head>
<style>
.error{color: #FF000;}
</style>
</head>
<body>

<?php>
//define veriable
$nameErr = $emailErr = $genderErr =$websiteErr = "";
$name = $email = $gender =$website = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){
if (empty($_POST["name"])) {
  $fnameErr = "NAme is required";

}else{
  $name= test_input($_POST["name"]);
}
if(empty($_POST["email"])){
  $emailErr = "Email is required";
}else{
  $email = test_input($POST["email"]);
}
if (empty($_POST["gender"])){
  $genderErr = "Gender is required";
}else{
  $gender = test_input($_POST ["grnder"]);
}
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method ="post" action="<?oho echo htmlspecialchars($_SERVER[""PHP_SELF]);?>"
  First Name: <input type ="text" name="First name">
  <span class="error">* <?php echo $nameErr;?></<span>
    <br><br>
    Last Name: <input type ="text" name="Last name">
    <span class="error">* <?php echo $nameErr;?></span>
      <br><br>

      Gender:
      <input type ="radio" name="gender" value="female">Female
        <input type ="radio" name="gender" value="male">Male
          <input type ="radio" name="gender" value="other">Other
          <span class = "error">* <?php echo $genderErr;?></span>
          <br><br>

          <input type="submit" name="submit" value="submit">
          </form>

          <?php
          echo"<h2>Your Input:</h2>";
          echo $name;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $gender;
          echo "<br>";
          ?>

        </body>
       </html>
