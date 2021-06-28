<?php
session_start();
include("connection1.php");
include("functions.php");
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="width = device-width, initial-scale = 1">
        <meta charset="utf-8">
        <title>Logged In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <nav class = "navbar navbar-expand-lg navbar-dark navbar1">
            <a class = "navbar-brand"><strong>PARK</strong></a>
            <button type="button" class = "navbar-toggler" aria-expanded = "false" aria-controls = "myNavbar" aria-label = "Toggle navigation" data-bs-target = "#myNavbar" data-bs-toggle = "collapse">
            <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "myNavbar">
                <ul class = "navbar-nav realNav">
                    <li class = "nav-item">
                        <a class = "nav-link" href = "index1.php">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "users1.php">Blood Donors</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "blood_bank_1.php"> Blood Bank</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "doctor_appointment_1.php"> Doctor's Appointment</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "available_beds_1.php"> Available Beds</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            
        </nav>
        <div class = "form-box">
        <form action="available_beds_input.php" class="myForm">
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Hospital Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="hospital_name" class="form-control"  placeholder="Hospital Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Beds</label>
                    <div class="col-sm-10">
                        <input type="text" name="beds" class="form-control" placeholder="Total Beds" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Available Beds</label>
                    <div class="col-sm-10">
                        <input type="text" name = "available_bed"class="form-control" placeholder="Available Beds" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name = "location" class="form-control"  placeholder="Location" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="number" name="contact" class="form-control" placeholder="Phone Number" required>
                    </div>
                </div>
                <button class = " btn btn-lg myButton" type = "submit">Submit</button>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
<!--<form action = "available_beds_input.php" >
    <table class="myTable1">
        <tr>
            <td>
                <input type="text" name="hospital_name" placeholder = "Hospital Name"><br>
            </td>
            <td>
                <input type="text" name="beds" placeholder = "Total Beds"><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="available_bed" placeholder = "Available Beds"><br>
            </td>
            <td>
                <input type="text" name="contact" placeholder = "Phone Number"><br>
            </td>
        </tr>
        <td>
            <input type="text" name="location" placeholder = "Location"><br>
        </td>
        
    </table>
    <button class = " btn btn-lg" type = "submit">Submit</button>
</form> -->
