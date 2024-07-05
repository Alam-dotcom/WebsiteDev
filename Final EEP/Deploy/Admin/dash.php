<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Project Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

         section {
            margin: 20px;
        }

       /* h2 {
            color: #333;
        }
*/     
        .profile {
    background-color: gainsboro;
    padding: 20px;
    width: 15%;
    margin-left: 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Adjust the margin-bottom for spacing */
}


        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile p {
            line-height: 1.6;

        }

           .metric {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f0f0f0;
      padding: 10px;
      margin-bottom: 10px;
    }

     .dashboard-row {
      display: flex;
      justify-content: space-around;
      background-color: #f0f0f0;
      padding: 5px;
      margin: 5px;
    }

    .dashboard-item {
      text-align: center;
    }
         .page-container {
            display:flex;
            justify-content: space-around;
            background-color: white; /* Background color for the row */
            padding: 20px;
         
        }

        .page {
            flex: 1;
            margin-left: 3px;
            padding: 20px;
            box-shadow: 0 0 10px #333;
            border-radius: 30px;
        }

        /* Styles for each page */
        #events {
            background-color: #ED9834; /* Light Blue */
            color: #fff;
        }

        #service {
            background-color: #ED9834; /* Light Salmon */
            color: #fff;
        }

        #package {
            background-color: #9acd32; /* Yellow Green */
            color: #fff;
        }
         #Accessories {
            background-color: #ED9834 ;  /* Light Salmon */
            color: #fff;
        }
        /* Additional styling for content within each page */
        .page h2 {
            margin-bottom: 10px;
        }

        h2{
            color: #333;
        }
        a{
            color: #333;
        }
        .page p {
            line-height: 1.6;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
         .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown-content a:hover {
            background-color: #333;
            color:white;
            
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown a{
            text-decoration:none;
            /* padding:20px; */
            margin-right:20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Elite Events Planner <span style="color: #ED9834;">DASHBOARD</span></h1>
        
    </header>
<div class="page-container">

       <div id="events" class="page">
        <h2>Manage Events</h2>
        <p>Just click on it to add, delete/Edit and show. </p>
        <div class="dropdown">
        <a>Add</a>
            <div class="dropdown-content">
                <a href="../weading/insert_weading.php">Wedding Events</a>
                <a href="../culture/insert_culture.php">Cultural Events</a>
                <a href="../corporate/insert_coparative.php">Corporate Events</a>
                <a href="../gatherings/insert_service.php">Social Gathering Events</a>
            </div>
        </div>

        <div class="dropdown">
        <a> Update/Delete </a>
            <div class="dropdown-content">
                 <a href="../weading/show_weading.php">Wedding Events</a>
                <a href="../culture/show_culture.php">Cultural Events</a>
                <a href="../corporate/show_coparative.php">Corporate Events</a>
                <a href="../gatherings/show_gatherings.php">Social Gathering Events</a>
            </div>
        </div>
    </div>



        <div id="service" class="page">
            <h2>Manage Service</h2>
            <p>Just click on it to add, delete/show and  Edit. </p>
        <div class="dropdown">
            <a href="../Service/insert_service.php">Add</a>
        </div>

        <div class="dropdown">
        <a href="../Service/show_service.php">Update/Delete</a>
        </div>
        
    </div>



        <div id="Accessories" class="page">
            <h2>Manage Accessories</h2>
            <p>Just click on it to add, delete/show and Edit. </p>
        <div class="dropdown">
        <a href="../access/insert_access.php">Add</a>
        </div>

        <div class="dropdown">
        <a href="../access/show_access.php">Update/Delete</a>
        </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row" >
                <div class="col-lg-6">
                <a href="../booking/show_culture.php"> <h2 style="padding:10px;background-color:#ED9834;display:flex;justify-content:center;border-radius:20px;">Check Booking list!</h2></a>
                </div>
                <div class="col-lg-6">
                <a href="../booking/joinform.php"> <h2 style="padding:10px;background-color:#ED9834;display:flex;justify-content:center;border-radius:20px;">Check Volunteers!</h2></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Your Page Content Goes Here -->

    <footer>
        &copy; 2023 Elite Events planner. All Rights Reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
