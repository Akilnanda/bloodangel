<?php 
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
            $title = $_POST['title'];
            $blood_unit = $_POST['unit'];
            $patient_name = $_POST['name'];
            $purpose = $_POST['purpose'];
            $blood=$_POST['blood'];
            $mobile=$_POST['mobile'];
            $patient_age=$_POST['age'];
            $hospital_name=$_POST['hospital'];
            $why_need_blood=$_POST['why'];
            $country=$_POST['country'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $details=$_POST['deatils'];
            $query = "INSERT INTO `request` (`title`, `blood_unit`, `patient_name`, `purpose`, `blood_group`, `mobile_number`, `patient_age`, `hospital_name`, `when_need_blood`, `country`, `state`, `city`, `address`, `details`) VALUES ('$title', '$blood_unit', '$patient_name', '$purpose', '$blood', '$mobile', '$patient_age', '$hospital_name', '$why_need_blood', '$country', '$state', '$city', '$address', '$details')";
            mysqli_query($con,$query);
            echo '<script>alert("Request sent successfully!")</script>';
            echo '<script type="text/javascript">window.location="home.php"</script>';
    }

function test_input($data) {
    $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 
          
?>

<html>
    <head>
        <title>Request Post</title>
        <link rel="stylesheet" type="text/css" href="css/request.css" />
    </head>
    <body>
        <div class="nn">
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="index.php">Home</a>
            <a class="tab" class="home" href="aboutus.php">Who We are</a>
            <a class="tab" class="home" href="how.php">How it Works</a>
            <a class="tab" class="home" href="register.php">Register as a Donor</a>
            <a class="tab" class="home" href="request.php">Post a Request</a>
            <a class="tab" class="home" href="#">Blog</a>
            <a class="tab" class="home" href="contact.php">Contact</a>
        </div>
        <input type="Submit" value="Blood Request" class="bloodrequest">
        <div>
            <h2 class="head">Angel's Blood</h2>
        </div>
        <fieldset class="field">
           
        </fieldset>
        <h3 class="fhead">Request for Blood</h3>
        <h4 class="fhead2">Please fill the following information to post your blood request.</h4>
        <form action="">
        <label class="title">Title</label>
        <input class="titlet" name="title" type="text">
        <label class="blood">Blood Unit / Bag (s)</label>
        <input class="bloodt" type="text" name="unit" require>
        <label class="patient">Patients Name</label>
        <input class="patientt" type="text" name="name" require>
        <label class="purpose" >Purpose</label>
        <input class="purposet" type="text" name="purpose">
        <label class="bloodg">Blood Group</label>
        <select class="bloodgt" name="blood" required>
            <option>Please Select an Option</option>
            <option>A+</option>
            <option >A-</option>
            <option >B+</option>
            <option >B-</option>
            <option >O+</option>
            <option >O-</option>
            <option >AB+</option>
            <option >AB-</option>
            <option >Bombay Blood type</option>
        </select>
        <label class="mobile">Mobile Number</label>
        <input class="mobilet" type="text" name="mobile" require>
        <label class="patienta">Patient Age</label>
        <input class="patientat" type="text" name="age">
        <label class="hospital">Hospital Name</label>
        <input class="hospitalt" type="text" name="hospital" require>
        <label class="when">When Need Blood ?</label>
        <input class="whent" type="text" name="why">
        <label class="country">Country</label>
        <input class="countryt" type="text" name="country">
        <label class="state">State</label>
        <input class="statet" type="text" name="state">
        <label class="city">City</label>
        <input class="cityt" type="text" name="city">
        <label class="address">Address</label>
        <input class="addresst" type="text" name="address">
        <label class="detail">Details</label>
        <input class="detailt" type="text" name="details">
        <input class="sub" type="submit" value="Submit Your Request">
        <div class="rectangle"></div>
        <div class="oval"></div>
        <img class="world" src="images/charity-heart-silhouette-4772938 1.png" alt="">
        <img class="mail" src="images/mail.png" alt="">
        <p class="mailt">help@donor.in</p>
        <p class="right">© 2023 Blood Donor</p>
        <p class="right2">Designed & Developed by Blood-Donor</p>
        </form>
    </body>
</html>