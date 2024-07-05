<!-- connect file -->
<?php
  include('connect.php');
  include('function.php');
  session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- External javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
    <title>Elite Event Planner </title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- External Css -->
    <link rel="stylesheet" type="text/css" href="access.css">
    </link>
    <style>
        .a1
        {
            height:500px;
            width:500px;
            object-fit=contain;
        }
    </style>

</head>

<body>

    <!-- Main Header  -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 15px 0px;">
            <div class="container">
                <a class="navbar-brand" href="event.html" style="color: #ed9834;font-weight: bold;">Elite Event
                    Planner</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../event.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Service/services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contactus.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown" onmouseover="showDropdownMenu(this)"
                            onmouseout="hideDropdownMenu(this)">
                            <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Events
                            </a>
                            <div class="dropdown-menu" aria-labelledby="eventsDropdown">
                                <a class="dropdown-item" href="../weading/services-wedding.php">Weddings</a>
                                <a class="dropdown-item" href="../gatherings/services-social.php">Social Gatherings</a>
                                <a class="dropdown-item" href="../corporate/services-corporate.php">Corporate Events</a>
                                <a class="dropdown-item" href="../culture/services-cultural.php">Cultural Events</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" onmouseover="showDropdownMenu(this)"
                            onmouseout="hideDropdownMenu(this)">
                            <a class="nav-link dropdown-toggle" href="aboutus.html" id="aboutDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="dropdown-item" href="../aboutus.html">About Us</a>
                                <a class="dropdown-item" href="../our-staff.html">Our Team</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="access.php">Accessories <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../joinus.php">Join</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Final%20EEP/user-registration/">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            function showDropdownMenu(element) {
                $(element).find('.dropdown-menu').show();
            }

            function hideDropdownMenu(element) {
                $(element).find('.dropdown-menu').hide();
            }
        </script>

    </header>
    <!------------------------------------------------------------------------
         main Section starts
     ------------------------------------------------------------------------->

<!-- Page Content -->
<p class="heading">Events Accessories</p>
    
<div class="container mt-5">
    <div class="row">
        <?php
        getproducts();
        ?>
        </div>
</div>
<!-- Add sponsor brands -->
<div class="container mt-4">
    
    <div class="row">
    <h2 class="text-center heading">Sponsored Brands</h2>
        <!-- Brand 1 -->
        <div class="col-md-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyopyxFLB1Bepg0-GlbgbxYnTf_wmZ3-G-QQ&usqp=CAU" alt="watches" class="img-fluid">
        </div>
        <!-- Brand 2 -->
        <div class="col-md-3">
            <img src="data:image/png;base64,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" alt="Service" class="img-fluid">
        </div>
        <!-- Brand 3 -->
        <div class="col-md-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiAKqWJTEeplW_JZHWrjCWO2uQJSq0qrIX2Q&usqp=CAU" alt="jewelry" class="img-fluid">
        </div>
        <!-- Brand 4 -->
        <div class="col-md-3">
            <img src="data:image/png;base64,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" alt="Diners" class="img-fluid">
         </div>
        <!-- Brand 5 -->
        <div class="col-md-3">
            <img src="data:image/png;base64,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" alt="flowers" class="img-fluid">
        </div>
        <!-- Brand 6 -->
        <div class="col-md-3">
            <img src="data:image/png;base64,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" alt="Makeup Products" class="img-fluid">
        </div>
        <!-- Brand 7 -->
        <div class="col-md-3">
            <img src="data:image/jpeg;base64,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" alt="Cakes" class="img-fluid">
        </div>
        <!-- Brand 8 -->
        <div class="col-md-3">
            <img src="data:image/jpeg;base64,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" alt="Mehndi Products" class="img-fluid">
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery (make sure to include them at the end of the body) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- footer -->

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <br><br>
    <script>
        const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            }
            else {
                toTop.classList.remove("active");
            }
        })
    </script>

    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><span>Elite</span> Event Planners</h3>

            <p class="footer-links">
                <a href="../event.html">Home</a>
                |
                <a href="../Service/services.php">Services</a>
                |
                <a href="../gallery.html">Gallery</a>
                |
                <a href="../blog.html">Blog</a>
                |
                <a href="../contactus.html">Contact</a>
                |
                <a href="../eventt.html">Events</a>
                |
                <a href="../aboutus.html">About</a>
                |
                <a href="../access/access.php">Accessories</a>
                |
                <a href="../joinus.php">join</a>
                |
                <a href="http://localhost/Final%20EEP/user-registration/">Login</a>



            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>Elite Event Planner </strong> All rights reserved
            </p>
        </div>

        <div class="footer-center">
            <div>
                <a href="https://maps.app.goo.gl/KVaMajKosBpumVqS6"><i class="fa fa-map-marker"></i></a>
                <p><span><a href="https://maps.app.goo.gl/KVaMajKosBpumVqS6">University Of Sargodha</a></span>
                    IT Department</p>
            </div>

            <div>
                <a href="tel:+92 342 4086828"><i class="fa fa-phone"></i></a>
                <p> <a href="tel:+92 342 4086828">+92 342 4086828</a></p>
            </div>
            <div>
                <a href="mailto:m.hamza.30130@gmail.com"><i class="fa fa-envelope"></i></a>
                <p><a href="mailto:m.hamza.30130@gmail.com">m.hamza.30130@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span style="color: #ed9834;">About the company</span>
                <strong>Elite Event Planner</strong> is the place where you can give a life to your imagination.
                In the very beginning, our team will create a personalised proposal tailored to fit all of your needs.
            </p>
            <div class="wrapper ">
                <a href="../contactus.html">
                    <div class="icon facebook">
                        <span><i class="fab fa-facebook-f"></i></span>
                    </div>
                </a>

                <a href="../contactus.html">
                    <div class="icon pinterest">
                        <span><i class="fab fa-pinterest"></i></span>
                    </div>
                </a>
                <a href="../contactus.html">
                    <div class="icon linked-in">
                        <span><i class="fab fa-linkedin"></i></span>
                    </div>
                </a>

                <a href="../contactus.html">
                    <div class="icon instagram">
                        <span><i class="fab fa-instagram"></i></span>
                    </div>
                </a>
                <a href="../contactus.html">
                    <div class="icon twitter">
                        <span><i class="fab fa-twitter"></i></span>
                    </div>
                </a>

            </div>
        </div>
    </footer>
</body>
</html>