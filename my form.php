<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>my form</title>
</head>
<style>
    .wrong{
        color: red;
    }
</style>
<style>
.wavy {
    text-decoration-line: underline;
    text-decoration-style: wavy;
    text-decoration-color:dodgerblue;
  }
  </style>
<body class="container" style="background-image: url(login2.jpg);" >
<?php
// define variables and set to empty values
$nameErr = $fathernameErr = $phonenumberErr = $emailErr = $websiteErr = $nationalityErr = $addressErr = "";
$name = $fathername = $phonenumber = $email = $website = $nationality = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name1"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }}

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fathername"])) {
      $fathernameErr = "FatherName is required";
    } else {
      $fathername = test_input($_POST["fathername"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fathername)) {
        $fathernameErr = "Only letters and white space allowed";
      }
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
    
  if (empty($_POST["website"])) {
    $websiteErr = "website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["textarea"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["textarea"]);
  }
  if (empty($_POST["name"])) {
    $phonenumberErr = "phonenumber is required";
  } else {
    $phonenumber = test_input($_POST["name"]);
  }

  if (empty($_POST["nationality"])) {
    $nationalityErr = "nationality is required";
  } else {
    $nationality = test_input($_POST["nationality"]);
  }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <h1 style="font-family: 'Times New Roman', Times, serif;color:dodgerblue" class="wavy">CONTACT</h1>
    
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row" style="background-image:url(log.png);background-repeat:no-repeat;background-position:right top;" >
                    <div class="col-sm-4">
            <div class="form-group" >
                <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Name</label>
                <input type="text" id="na1" name="name1" class="form-control"  style="width: 250px;">
                <span class="wrong"><?php echo $nameErr; ?></span>
            </div>
            <div class="form-group" >
                <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Father name</label>
                <input type="text" id="na2" name="fathername" class="form-control"  style="width: 250px;">
                <span class="wrong"><?php echo $fathernameErr; ?></span>

            </div>
            <div class="form-group" >
                <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Phone Number</label>
                <input type="text" id="na3" name="name" class="form-control"  style="width: 250px;">
                <span class="wrong"><?php echo $phonenumberErr; ?></span>
            </div>
        </div>
            <div class="col-sm-8">
            <div class="form-group" >
                    <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Email</label>
                    <input type="text" id="na4" name="email" class="form-control"  style="width: 250px;">
                    <span class="wrong"><?php echo $emailErr; ?></span>
                </div>
                <div class="form-group" >
                    <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Website</label>
                    <input type="text" id="na5" name="website" class="form-control"  style="width: 250px;">
                    <span class="wrong"><?php echo $websiteErr; ?></span>
                </div>
                <div class="form-group" >
                    <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Nationality</label>
                    <input type="text" id="na6" name="nationality" class="form-control"  style="width: 250px;">
                    <span class="wrong"><?php echo $nationalityErr; ?></span>
                </div>
            </div>
            <div class="form-group">
                <label style="font-family: 'Times New Roman', Times, serif;font-size: larger;">Address</label>
            <textarea name="textarea" id="ta1" cols="83" rows="5" class="form-control" ></textarea>
            <span class="wrong"><?php echo $addressErr; ?></span>
            </div></div>
              <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
    <br>
    <h3 style="font-family: 'Times New Roman', Times, serif;font-size: larger;text-decoration:underline">Your Logins here</h3>
    <?php
    echo $name;
    echo "<br>";
    echo $fathername;
    echo "<br>";
    echo $phonenumber;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $nationality;
    echo "<br>";
    echo $address;
    ?>
    
</body>
</html>