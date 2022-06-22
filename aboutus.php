<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['submitButton']))
{
    // fetch form data
    $email = $_POST ['email'];
    //submit data
    $insertData = mysqli_query($conn,"INSERT INTO subscribers(email) VALUES('$email')");
    if($insertData)
    {
        echo "Data submitted successfully";
    }
    else{
        echo "Error occurred";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toogle="collapse"aria-expanded="false"></button>
        </div>
     
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2>Our Program</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, facere dolore? Sed dignissimos nisi corrupti. Et distinctio accusamus molestiae quia?</p><br><br>
                
            </div>
            <div class="col-lg-6 col-md-12">
            <img src="lap.jpg" alt="a person using a laptop">
            <br><br>
        </div>
        <h3>The Programs</h3><br><br>
        <div class="col-lg-4">
            <h4>Skill Discovery</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta magnam pariatur eos, adipisci quibusdam est sed odio provident explicabo placeat.</p>
            <button class="btn btn-primary">View Details</button>
        </div>
        <div class="col-lg-4">
            <h4>Upskilling Program</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta magnam pariatur eos, adipisci quibusdam est sed odio provident explicabo placeat.</p>
            <button class="btn btn-primary">View Details</button>
        </div>

        <div class="col-lg-4">
            <h4>Pathfinding Program</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta magnam pariatur eos, adipisci quibusdam est sed odio provident explicabo placeat.</p>
            <button class="btn btn-primary">View Details</button>
        </div>
    </div><br><br>
<p style="margin-left: 5px; margin-right:5px ; text-align: center; font-size: x large; padding-top: 25px; color:grey; font-family: Arial, Helvetica, sans-serif;">
    Subscribe to get information,latest news <br>about Zalego Academy
</p>
<form action="aboutus.php" method="POST">
<div class="row">
    <div class="mb-3 col-lg-6 col-md-6">
<input type="email" class="form-control" placeholder="Your email address">
</div>
     <div class="mb-3 col-lg-6 col-md-6">
            <button class="btn btn-primary" name="submitButton">Subscribe</button>
        </div>
</div>
</form>
<hr>
<p style="font-size: 7px;">@ Company 2022</p>
<script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>



    </nav>
    
</body>

</html>
