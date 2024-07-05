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
    <link rel="stylesheet" type="text/css" href="services.css">
    </link>
    <style>
        .a1
        {
            height:500px;
            width:500px;
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
                        <li class="nav-item active">
                            <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="../access/access.php">Accessories</a>
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
     <p class="heading">Services</p>

        <div class="container">
            <div class="row mt-5">
                <div class="box col-md-12">
                    <h3 class="br-left p-3" style="color:#ed9834;">What We Do?</h3>
                    <p style="color: #33383b;">Now a days, everyone is so much busy in daily life's routine. They have not much time for 
                    organizing their special events. So we are providing a platform where they could hire's an event
                     planner for organizing their events. An event planner is a professional who is specialize in this
                      field and responsible for organizing and coordinating various types of events, such as weddings,
                       corporate meetings, conferences, festivals, parties, ceremonies and other special occasions.
                        Their main objective is to ensure that the event runs smoothly on time, and within budget,
                         while also meeting the specific needs and expectations of the clients and attendees.</p>
                </div>
            </div>
        </div>

        <?php
        getproducts();
        ?>

   <!--------------------------------------------------------------------------------------------------
                                                        Packages
        --------------------------------------------------------------------------------------------------->
        <section class="container-fluid">
            <div class="row p-3">
                <div class="box1 col-md-12 text-center text-orange">
                    <br><h2>Services Package</h2>
                    <hr class="divider">
                </div>
            </div>
        </section>

        <section class="container mt-5">
        <div class="container">
            <div class="card">
                <div class="card-title">
                    <h2>Basic</h2>
                    <p><i class="fa fa-dollar"></i><Span>1500</Span></p>
                </div>
                <div class="card-content">
                    <ul>
                        <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Decoration</li>
                        <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Photography</li>
                        <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Catering</li>
                        <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Entertainement</li>
                        <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Transportation</li>
                        <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Venue Selection</li>
                        <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Invitation</li>
                        <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Security</li>
                    </ul>
                    <button><a href="../contactus.html">Hire Us!</a></button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h2>Standard</h2>
                    <p><i class="fa fa-dollar"></i><Span>1700</Span></p>
                </div>
                <div class="card-content">
                    <ul>
                     <i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Decoration</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Photography</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Catering</li>
                     <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Entertainement</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Transportation</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Venue Selection</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Invitation</li>
                     <li><i class="fa fa-times-circle" style="color:white ;font-size: 17px;"></i>Security</li>
                    </ul>
                    <button><a href="../contactus.html">Hire Us!</a></button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h2>Premium</h2>
                    <p><i class="fa fa-dollar"></i><Span>2000</Span></p>
                </div>
                <div class="card-content">
                    <ul>
                     <i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Decoration</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Photography</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Catering</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Entertainement</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Transportation</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Venue Selection</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Invitation</li>
                     <li><i class="fa fa-check-circle" style="color:white ;font-size: 17px;"></i>Security</li>
                    </ul>
                    <button><a href="../contactus.html">Hire Us!</a></button>
                </div>
            </div>
        </div>
    </section>
    </main>

   <!------------------------------------------------------------------------
                                         Footer 
        -------------------------------------------------------------------------->
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        <br><br>
        <script>
        const toTop=document.querySelector(".to-top");
    
            window.addEventListener("scroll",()=>{
                if(window.pageYOffset>100){
                    toTop.classList.add("active");
                }
                else{
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