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
    <link rel="stylesheet" type="text/css" href="abc.css">
    </link>

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
                        <li class="nav-item dropdown active" onmouseover="showDropdownMenu(this)"
                            onmouseout="hideDropdownMenu(this)">
                            <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Events<span class="sr-only">(current)</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="eventsDropdown">
                                <a class="dropdown-item" href="../weading/services-wedding.php">Weddings</a>
                                <a class="dropdown-item active" href="services-social.php">Social Gatherings</a>
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
                            <a class="nav-link" href="../joinus.html">Join</a>
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
 <div class="container-fluid py-3" style="background-color: #ed9834;">
        <div class="container">
            <div class="row ">
                <h2 class="text-center">Social Gathering Events</h2>
            </div>
        </div>
    </div><br>
  
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <p style="text-align:justify">
                Man is a social being. Whether a party or a lunch, when partnering with Hendecagon Event Planners,
            we take care of all details while creating a unique experience for your guests that coincides with your
            vision.</p> <br>
            <p style="text-align:justify"> 
            Whether it’s a birthday, last day of summer break, or celebrating personal milestones, we’ll
            help you create and execute the event strategy you have in mind. Once booked, we will collaborate with you to
            build the foundation of your event, creating an inspiration board and floor plan based on your goals. Then
            from the production to design, your Hendecagon team will bring your vision to 
            life through our high quality planning and management services, as well as day-of coordination.</p>
                </div>
                <div class="col-lg-5">
                <img src="images/SGimg1.jpg" alt="" width="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div><br><br>

<div class="container-fluid"></div>
    <div class="container">
        <div class="row" style="background-color:#ED9834">
            <div class="col-md-3   p-4">
            <h4 style="color:white">TYPES OF EVENTS</h4><br>
                        <ul>
                            <li>Birthdays</li>
                            <li>Personal Milestones</li>
                            <li>Baby Shower</li>
                            <li>Gender Reveal</li>
                            <li>Family Reunions</li>
                            <li>School and College Reunions</li>
                            <li>Holiday Parties</li>
                            <li>Seasonal Events</li>
                        </ul>
            </div>
            <div class="col-md-3 py-4">
            <img src="https://img.freepik.com/free-photo/business-team-celebration-party-success-concept_53876-47029.jpg?size=626&ext=jpg&ga=GA1.2.1775413396.1661259333" alt="" height="300px" width="300px" />
            </div>
            <div class="col-md-5 p-4">
            <h4 style="color:white">EVENT SERVICES</h4><br>
            <ul>
                        <li>On-site Coordination and Management</li>
                        <li>Event Planning and Design</li>
                        <li>Event Rentals</li>
                        <li>Vendor Coordination</li>
                        <li>Floor plan Design</li>
                        <li>Budget Management</li>
                        <li>Staging</li>
                        <li>Security and Staffing</li>
                        <li>Entertainment</li>
                        <li>Transportation and Parking</li>
                    </ul>
            </div>
        </div>
    </div>
</div>

        <div class="pres reveal">
            <p><b>Don't have the time to plan an event? <br><br> Check out our pre-planned events!</b></p>
        </div><br>
        

        <div class="container">
        <div class="row">
            <?php
              getproducts();
            ?>
        </div>
        </div><br>
       
        

        <div class="container-fluid">
            <div class="container">
                <div class="row" >
                    <div class="col-md-4" style="background-color:#ED9834;border-radius:5px;"> 
                        <h2 style="margin-top:0px;justify-content: center;display: flex;">Get In Touch</h2>   
                        <p style="text-align: justify;">Ready to plan your personalised corporate event with the Elite team? Click below to get in touch with us. Click below to get in touch with us. Plan a meeting where we create a vision board and leave the rest to us. From contacting vendors to on-day coordination, Elite event planners will make sure you don't have to do a thing!Just click on the button to go on page!</p>
                        <a href="../contactus.html">
                        <div class="larrow right">
                        <div><i class="fas fa-chevron-right"></i></div>
                        </div></a>
                    </div><br>
                    <div class="col-md-3" style="background-color:#ED9834;border-radius:5px;">
                    <h2 style="margin-top:0px;justify-content: center;display: flex;">Latest Blog</h2>
                    <p style="text-align: justify;">Wondering about some of the events planned by Elite? Visit our blog to get a glimpse of events planned by our team and how they turned out. Read stories from our clients about the day of the event, or even take a look at the details of the events and get inspired to plan yours!</p>
                    <a href="../blog.html">
                    <div class="larrow right">
                    <div><i class="fas fa-chevron-right"></i></div>
                    </div></a>
                    </div><br>
                    <div class="col-md-4" style="background-color:#ED9834;border-radius:5px;">
                    <h2 style="margin-top:0px;justify-content: center;display: flex;">Visit Our Gallery</h2>
                    <p style="text-align: justify;">Not sure how our events turn out? Visit our gallery! We capture moments that make memories of a lifetime. Click below to get in touch with us. Take a look at pictures of social gatherings, corporate events, weddings and cultural events. Let our images transport you to the events and encourage you to plan an event of your own. Click below to get in touch with us!</p>
                    <a href="../gallery.html"><div class="larrow right">
                    <div><i class="fas fa-chevron-right"></i></div>
                    </div></a>
                    </div>
                </div>
            </div>
        </div><br><br>
 
         <section class="container-fluid">
            <div class="container">
            <div>
                <h1><b>Some of our clients</b></h1>
            </div>
            <br><br>
            <div class="client">
                <img src="https://cdn.logojoy.com/wp-content/uploads/20220526160355/monogram-logo-600x188.png" alt="" height="100px" width="200px" >
                <img src="https://static.stacker.com/s3fs-public/styles/slide_desktop/s3/000004614png_0_0.PNG" alt="" height="100px" width="150px">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfFfF6SFKuoLPA6wdfqpqRz-sv0UIGeLG22w&usqp=CAU" alt="" height="100px" width="100px">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Adani_2012_logo.png/1200px-Adani_2012_logo.png" alt="" height="100px" width="200px" >
                <br>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKEWcRe2ITLZDUE_1UCD1y0y8DwnyWfz2YkQ&usqp=CAU" alt="" height="100px" width="100px">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxARERASEBAQFRUQFRUVFRAVFRUQFRURFRUYFhUVExgYHSggG
                BslGxUTIjEjJikrLi46GR8zODYtNyguLisBCgoKDg0OGxAQGy0lICUtLSstLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tL
                f/AABEIALEBHAMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcDBQECBAj/xABBEAACAQIDBAcFBQYFBQEAAAAAAQIDEQQFIQYSMUEHEyJRYXGBM
                oKRobEjQlKy0RQ0NUNiciQzU8HwFoOSouEV/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAMEBQIBBv/EADIRAAIBAgMFBgUFAQEAAAAAAAABAgMRBBIhEzFBUaEFI
                mFxkbGBwdHw8RQjMjPhQhX/2gAMAwEAAhEDEQA/ALxAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOADkw4jEQppyqTjFLjKTUUvVkO2v23jhvssOt+rJ7qst7tvS0VzfjwI5hsjq4uXWY6pUrSevURm1CHhKS1fu2Xm
                WFh0oqVV2T4Wu38ORFtLu0Ff2+/IndbbLLoOzxmH9Jb35bnahtfl03aOMoa981H81jSUNjqNtMFhV504yfxldmvzTYKnJPdoRg/xUvs/kuy/gF+nejzeej6B7T
                w6lhUK8JrehOMl+KLUl8UZj59zHC4vLp70alSKT0qwbpvymk/1TLB6MdrMXjlNYiEXCGkMT7Eqkucdxe1b8SsuWrvaSvhIwhtKc1KPo/Q5p1nKWWUbPoWCDg5
                KZOAAAAAAAAAAAAAAAAAAcM1mMzqhTk4OalNcace1JefJeptDTbSUW6FVxduzrbjqzmbai2jio5KLcTW4jbrCwqQpbleVSbUYwjBSbk+CXaJNSndJ2aur2drrwd
                m0UNkm9LN6S3m3Fzd/ca/3L6oRtGK8CLDzlOOaRBhKk6lPNIyAAnLQAAAAAAAAAAAAI1trnH7PQaTtKSd3zUOdvF8PiSUp3pZzFt1Ip/e3PSOj+dy3gqSqVddy
                1IMRLLDTjoeLYHLZ4yvPEzXFuFPujBaSkvFvT0feXJgcFClFKKXmRPorwKhgqEraunF+slvP5tk3Ia1RzqOTJIRUYpIAAiOyN7XbOU8ZS3Zb6Skm4wajv24KTte
                19dLGTZvIY4eK0SsrRitEkuCtyJAD27tYWBwYsRWjCLlJpRirt+BXmYbR18bXnQw9SVClTt1lSP+Y78IxfOT10XDnfS8c5qNlvb4E9Gg6icr2it7ftzb8CxKlaM
                falFebSO0Jp6pp+K1K/hshQkr9TWnJ8as6lRzb79Gl8iLZ3QxeXyU6NSrGLdlLVST5KWlpLzX/wBinVnBZpR08H/hYoYWjXns4VGpPdmjZP0b6pF2AgmwO3Cxj6
                ivuxrxV4taRqxXFpcpLmvVc0p0TQmpq6KtajOjNwmtUDhtGg2hz3qXGnTs6lR2jfgu9vwSTZraOFlV1n1laT4ycpQj7sY8F53KqxTqtqgs1tG27RvyTs27cbK3i
                eZEleTt7kxUk+DOSC4yhVo9qMZpd12/g+J6ct2mdOUY13eEtFUfGH93evHkQf8AoOlVVLERy33NO8X0TXp5nexzRzQd/cmIFyJbWbVvDyjQw0Yzr1JKC3n2Yyff
                32Wr7jWp05VJWj+PMrSkoq7Jaclfyy/E1I71TMMVOb/01GnST7lBK7XqiF59nOMoN0pynfiqilJb0e9a6MtUcJGs8sZq/k+l7XIqlZwV3H2LzNbtF+7VfJfmiVvs
                fhKWK3a37Rjqu67ToTrSjGNRcpblm13a2fyLD2g0wk1a2kVbu7S0KmJgoKUU76PhYTk3Sk/BlPbJK+cLwjP9C+EURsX/ABj3J/WJes5pJtuySu3wsirhP6kRYH+h
                HcxVK0Y+1JLzaRAM32kq4rEPC4Wo6UIK9Wsl2927ilHubfBacG33HWWyVKUW408Q5P8AnSqSlNvvaa3fkdqpKWsFp46ehrvDwp2VaTT5JXa89Ul5K75lib3cclG
                YnMcdlla8KrtFp7r9icO6ceF/Falt7L53TxuGp4inpv6She7hUjpKL8n8rHlKtnbTVmjrF4J0IxnGWaMtzX0NyACYpAAAAAAA+fNv605YjExl9ytVS8t92+Vj6DK
                R6U8udPGznbs10pp/1LsyXyi/U1OypLaSi+KKmLTyp8mWB0X11PLsM1ygovzh2X9CXFSdC+dKMq2Cm/avVpX58N+K/N6yLbKOIpunVcWWKcs0UwAaXPsXi4RthqV
                Jv/Uqz3YryiruT+BFFXdvc6bsjdHDK9e0OYUouWIq4e10vs1vO784o1WT7b4vFY6GHjWhCn2pTl1cXJxjbSPJNtrV8C1+klkc1JWXHX6EW2WbLZ3JN0hZk6dLcT
                +65v00ivjd+iI70QYRVaU6stXKrUk/FpqKv6JGbpWq2a7qlKy92Ur/AJkYuhDFrq8TR50571v6Zrj8YyMmEv35XN6tSt2fBx53fUtJI1O0WVQxNCpTkleUWk/obc
                4ZbavoZCbi7o+asXKpg69OtC6lSmprlrGV2vJ2afmz6GhmEZ4eFaPCpGMl7yTX1KQ6T4KFSajxdSdl477LQymMoZbQi/5cKcX7sVEyJynTwtZw3pO3ozd7UcatSk
                3vfzsR3Ct4jM5JvSMGkvOUSzKFGMEoxVrFZZJLq8yg3wqKUfXSS/KWkSdj5f0kVHgZGJ/sZixFGM4uMldMr7aHL9zfj3fQsYim2cUoyk/wEPbkE8MpcVJdXb5nW
                Edp25pnGx2cOeBk5O8sMpxb71Bb0b+7uordYrrM3wqk7puav/XKnO7+NyWdGtN1KGJWu7WlNe7uqD+jKzzaFbCYrtaVaE1KLfCSjK8X5O31PpeyYqphpRb7zivY
                zsW8tRSW659G4ahGMUklwIX0l5FGpQ62CSlTkn6PRr5r4Ek2bzujjaEK1GSd0lKP3oTtrGS7zU9I2cUsPhJxlJb9WyjDi3rxt8vUjw2eGIjZap/k7q2dN+X46lf
                dD+MdPMK9L7tSldr+qE0ov/3kWvtR+61Pc/OiueirIakK1TEVU1Orbs/ggm2k/Ft3fkixtqf3Wp7v5kcY+opzm196EeVxoNPkynth/wCMe5U+qLZ2xxbp4Zpffe7
                7qTk/pb1Km2H/AIv7lT6osvpGdsNGXJTs/ei0vnYzabthifsOKlKknzIZ0ZTpynjK1ecYxVXWU2opJRTV2/Nkwxe2kJNwwNCpiZLTeiurpR86jVivOi+dN4utQqU
                6UnVW/T34xnacb7yV1p2Wn7rLap5Q3pKSUV92Oi9EtCWjeVNWdjUxuSniJ543d7q706a9UVzn+z2Kx9RVMVVgnwVCgtEr8HN/o/Mm2wuRLBUXThDcjJ7zV225tJO
                Tb4uyXwJBh8FTh7MV5npJYwjHd/pTqV51LKT0W5LRL4AAHZCAAAAAACLbeZAsZh2lpOGsJd0v0fAlJw0dQnKElKO9HjipKzPmRurh6yfap1aMlJPnGS4Nd6+TLs2
                N22o42MadRxp4hKzpt2U3+Kk3x8uK+Zi2v2KpYlbyjquDWkl5Pu8CsMfsbi6Mvs5Rkk9N69OX+6+hqTxFDFRW07suf39rmVFTqUn3NUfQZ0rUYzVpK5S+U57nlBK
                MftIrRRqSp1NP7nJS+ZJsNtLnU1+7YOPjOdvlGTZTlhbbpxa8/qTxq3/5fobzbPBUoYZtRS7S19GVR0fJPNvcqfmiS3O8HmOMhuYjGUoxvfqqNNyV/N7vzuddidi
                f2bEKsutlKzW9J6Wdm9ErckS7WEMO6V7t66bjjI5VFO1kSbpFyN4rDJ0126T3o+OlnF+a+iKn2Mzp5fjYzmpKD+zqwtqot+1bvi9fifQs4Jpp8GQHazYKlXbnGLv
                3x7MvXv8AUyKlG8lOGjNrCY6MKToVleD9V97/ADJzhcTCrCNSnOMoTSlGcWmnF8GmjFmeYU8PSlVqyUYxXPm+SXe2VhlOzuNwt40MfiKMW9YdUqi80nJK/jY2tXZ
                rr2niK2JxMlwVR7lNP+yH0vY7zTt/HroV9lh07updcknfrovUhdHDTzPHqs4vqac95PlOpvXtHvSfHyt32udYH/DdXzcfmeTJMhjRtKSV1wilZJckkuBvj2FKMY5
                d/wAznE4iVapnenLwSKmzKMoVFynTknF+Kd0yyclzKGIpRnF62tKPOMuaZr9odno103Fa/wDOBFcNlGIw87wqzh4qO98dUZtDCVcJJ7LvQfC9mvX08UezqRqrvaM
                slsrfb/NHXl+zYd3k9JSWqjHm3/zU28o16kbVMRWmn92MVSv5vUzZVs4rqTgoxve3Ft97b1b8WTVqE8S4xqLLBO7V022t266S473w0RxGShqndnp2KyxUKEUlZJJ
                L9TBtZslSxau4Jv1TXk1qiTpKMeSUV5JJEUzjbqjSmqWHpVMRVfCENF53s9PG1vE1KVOcn+2t3wt8eHqV5yiv5EP/AOnP/wA5SrQjWvdRvv6WffZJv4mp2axixGY
                vrmlKStR3n/MbSdr/AH7Xt6kwzXH5niqM4Sw+DpRmvZlVlOa8txNJlX5nlOIw7vVjdX/zI3aT8dE0zWoSjUpulUn3npe6enL/AAp1E4yU4x0XgfQ+WZfGjGy482e
                TauaWFqNuy7OvvIg/Rxt1Oc4YPFy3nLSjXfFtK/V1O92WkufB68Zntbk6xVDclKqknfdg1G75b2mtjHxWHnTvTe/h4k8pbWk8nFFS7CtPN001rGaXi7r9C49pcuW
                Iw1Wk/vR0fc1qn6NJ+hWWG6PVGal/iFZ3vGe615NLQsbZrAdTTcL15X1cq1WdaT8O07JeCsVqNOUYZJHmEhUoRS5ap3KExEa2FxC1lTq0ZqUZeK4SXen87l0bKb
                b4fGQSnKFKtwlTk0lJ99NvivDidNr9jaWKW9u6rg1pJeT7vArevsFXjK0a0kv6qe99JIijSqUn3NUfR1sXhsZFbe8ZLivvd4cOZekq8EruUUu9tJfE8+BzClWTd
                GanGLtvx1g5cGoy4StztwKryfYu7X7ROtWS/l26qn62bbXqi08qw3V04x3YxjFKMacUoxjFcEkuBZi5P+SsZVWNGOkJOXwt9fke8AHZCAAAAAAAAADBWwlOftQi
                /QzgA10slw7/AJa+Z2jlFBcIL4s94APPTwdOPCC+pmSS4HYAAAAGN04vil8DmMEuCSO4AAAAB0lBPikzuADGqcVwS+B3OQAQzpEzV0qW4na8XNrhe2kV5Xv8CM9
                GOWuvSlWb7VacnOfPdjJxjG/crXt4s23SzldWpTp1aSb6tNTguLg9bpc2n9WQ/o52zhgXOjWTdGcrqUdZU5c9OcXp4rxNSNLaYRKlq73a4lRyyVm5fBlyUcqpRX
                C/izy5pkNGtCUdyOqatZNNdzGE2nwNVXhi6Hk5xg/VSs0ebNNssBh4tyxNOb5U6clUnJ8kkub8bGeqVRuyi7+RYzxte6KY2kyqWCx1KEL3jWpOHerzi0vifQeFq
                b0Iy70VLQy3EY/HLGYim6avelQftJWtGU1ysrW8ddC2sNS3YRj3IsYyrnlFPVpJN+PEjoRsm+bMtjkApk4McqcXxin6GQAHSNNLgkvQ7gAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAGHE4eNSLjJaMg2dbAUqknJU4yvzV4y+MbMn4PYycXdOx40mrMqyHR/SXtUJv/ALlRfRm+ynZWNJp0sPSpv8dnKf8A5TbfzJqCWeIqzVp
                SbXmzlU4LVJeh4Mvy6NLXjJ8z3gEJ2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAf/Z" alt="" height="100px" width="150px">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCA4ODg4ODg4ODg4ODg4ODg4ODhEODg4QFxMYGBcTFxcbICwkGx0
                pHhcXJTsmKi8wMzQzGiI5PjkxPSwyMzABCwsLEA4QHhISHjQpJCk7NjQzODI0Oz04NDQ7MjAyMjwyMjIyMjQyMjIyPTIyMjIyMjIyMjIyMjIyMjIyMjIyMv/
                AABEIAJ0BQQMBIgACEQEDEQH/xAAbAAEAAwADAQAAAAAAAAAAAAAAAQUGAwQHAv/EAEIQAAICAQEEBAoGCgAHAAAAAAABAgMEEQUGEiETIjFBBzJRYXFykaGx
                whQ1UnOBwSMzNEJidISistEVFiRUY5LS/8QAGAEBAAMBAAAAAAAAAAAAAAAAAAECAwT/xAAxEQACAQIFAgUCBAcAAAAAAAAAAQIDEQQSITFBM/ATYXGBwVHCI
                jJyghQ0RJGhsdH/2gAMAwEAAhEDEQA/APZSQQASAQASAAAAAAAAAAAAAAAAAAQSAACCQCASAAAAAQSACACQCCSAASQSAAQSQAAAAAAAAAAAAASAACAAASAAAA
                AAAAAAAAAAAAAAAAACCQAAAAAAACCQAAQASAQASAAAQCQCAAAAAAAAAASAAAAAAACAAAAAAAAAADr5GXTVp0ttdfFrw9JOMNdPJqA3bc7AOOm2FkVOEozjLslB
                qUX6GjkAAAAABwZGTXTHitshXH7U5qC94Bzg6ePtHGtfDVkU2S+zC2En7EzuBprchNPYAAEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEgAAAAAgAAAAAAAAAxXhH
                8TE9e74RNqYrwj+Jievd8InRherHvg58V0n3yXm6H1djerL/JlyUe6tkYbNx5SajGMJylJ8kkpPVsssTPov4uhurt4NOLo5KXDr2a6ehmdVPPJ+ZpTayRXkjtA
                qsreDBpk4WZNamuTjHWbT8/CnodzCzaciHSU2Qsh2axeuj8jXcyrjJK7WhZSi3ZM5Mi6NcJ2Teka4ylJ+ZLU8/wdn3bbutyLrJVUwlwwSXFw96jFdi5aasvN7N
                t4/wBFyceFsXfyrlWlLiXWXEuzyHT3Q21h42Gq7roVz6WyTi1LXRvk+SOqlGcKbmlrttwctWUJ1FGT03evPmdTJ3Rsxbse6mfTVwuqclw8M4rjXW0Xaj0Ap/8A
                mfZ3/dV+yf8Ao+Zb0bOS1+lRfojNv3IzqOrUtmT08jSn4VO+VrXzRdA6OBtbFyv1F0LGubinpNL1XzO8YNNaM3TT1QBxX5FdUXO2ca4LtlOSjH2srlvHs9vT6X
                Vr520vb2ExjKWyIckt2WwOOm6FkVKucZxfZKElKL/FHIVLAA6+XmU0R4rra649zsmo6+jXtA2OwCsp27g2S4YZVLk+STmo6+jUsk9ea5kuLW6ITT2JABBIAAAA
                AAAAAAAAAABIAAAAAIAAAAAAAAAMV4R/ExPXu+ETamK8I/iYnr3fCJ0YXqx74MMV0n3yWGx/qRfy1/zGI2LlZCjbi4qfSZbrhxRejjCPFrz7u3t8iNvsj6k/pr
                vmKTwc1Rd2TY1rKFdUYvyKTlr/AIo6YSyxqO19fk5pxzOmttPhHPDcL9F1slq3TXRVp1J+Tyv0lFs/Iv2VncNmseGShdBPq2Qf7y8vLmmerHn3hGrirqJpdadU
                4vz8MuXxIw9eVWeSeqZOIoxpxzw0aOfe3YFMKr8+M7JTnZGXC+Hg68l2ctTq7tbsU5uP09llsJdJOGkOHTRaeVF3vR9TR9TG+U+twP2B/fWfkR4s1QvfVO3sS6
                UHXtbdX9zMbz7GxMBQhCy2d1nW4ZuPDCC73ou//Z2dh7nSyKo232SpjJawhGKc2u5vXsOCiH/E9rty61XSSk13dFDkl+Oi9p6Yia1edOKjf8W7IpUYVJOVtOEe
                Y7c3dv2c45FNsp1xktLIrhsrl3cWnd5zXbvbfjk4s7LdI2Y8W7kuWqS140vPp7S7yqIXVzqmtYWRcZLzNHknSWYVuVQ2+tC3Hs8615P3L2kQf8TC0t1yTJfw87
                x/K/8AZc4OLdtzJssunKuip8lHnwp+LCK7NdO1ltn7jUOuTx52xtUW4qySlCT8j5cj68Hc4/RrorTiV3FJd+jitH7ma8pWrThUywdktkXo0YTgpSV2+TzrcDKd
                eXbRLVdJW+q+6cH2enTU9FPNdqr6BtnpVyg7oWrycNnj/Mekp68139hGLV5Ka5ROF0i4PhnT2tnRxce29rXo46pfak+UV7WjE7H2JbtWU8zMtmouTjHh04padqj
                ryjFdha+ELL4ceqlPnbbxSX8EOfxcSy3OlF7Oo4dOqpqXmlxPUQvTo547t29iJpVKuSWyW3mUW1tx1GDniTnKcVr0Vji+L1ZJLn6TTbvRlHBxYyTjKNME1JaNNd
                qZZgynXnOOWTubQowhLNFAAGJqAAAAAAAAAAAAAAASAAAAACAAAAAAAAADFeEfxMT17vhE2pivCP4mJ693widGF6se+DDFdJ98lhsj6k/prvmKjwbePl+rR8ZFv
                sf6kX8tf8xUeDbx8v1aPjI2fTq+v3GK/PS9PtN4YLwkfrMX7u34o3pgvCR+sxfu7fijPB9Zd8GmM6T75LTef6nh6mL8pw7o2cGybp/Zd8v7Tm3n+p4epi/Kdfda
                DlsfIiu1/SF/aXXQ/d8FX1/2/J0fBzXrdk2PtjXCKfrSbf8Aib8wfg3muPKj3uFMvwTkvzN4Z4zrP2LYTpIHl2+lKhtGzTkrI1T9sdG/ceonmm+749o8K7VXTD8
                Xz/Mvgup7f8K43p+5V1XZOzcmWjddlb0lF84Tj3arvTPQdhby0ZqUG1Vfpzqk/G88H3+jtOztfYVGbBRsjw2RjpC2HKcP9rzM862zsPIwJKU+tXxLo769Ute7Xv
                jI1Tp4lWeku/7+hk41MM21rHvu5o/CLicsfIS7HKmT9PWj8H7TSbu5fT4VFmusuBQl60eT+Bmqc2W09k5ELOtkY0Yzb758PWjL0tJpn3uBnJUZFU3oqn0y80Guf
                vRnOD8HK94s0hJeNdbSRw7wYstpbRtorf7LjNrycfbw/i2l+BQ7E23fs+ySScq3LS2meq5rk9PsyNduTB2fS82fjZFzUX/Cuf5+47O3916c39JD9DkfbS6k/XX5
                9pdVowfhTWisvfko6UprxYPXV+3H+Cw2TtfHzYcdM+skuOuXKyD86/PsLI8guoy9m5EW+Kq2D1hNPWFkfM+9PyHp+xdoRzMau9LRyWk4/ZmuUkYV6Cp2lF3TNqF
                dz/DJWaLAAHMdIAAAAAAAAAAAAAABIAAAAAIAAAAAAAAAMV4R/ExPXu+ETamK8I/iYnr3fCJ0YXqx74MMV0n3yWGyPqT+mu+YqPBt4+X6tHxkW2yPqRfy13zFT4
                NvHy/Vo+MjZ9Or6/cYr89L0+03hgvCR+sxfu7fijemC8JH6zF+7t+KM8H1l3waYzpPvktN5/qeHqYvyk7hpS2fKL7Hdan6GkRvP9Tw9TF+U+twP2B/fWfkS/5d/
                q+CP6hfpM9uzN4W1Z48+SnK2nn5ddYP8dF7T0gw2/WyZxnHOpT6vCrXHthKPi2fBewt9g7zUZVSV1kKr4pKyM2oxk/tRb5aPyE4heJFVY+j9SKD8OTpv1XoaI8z
                r/67bXFHrQd/Fr/44d/9vvL7eneequqdGNONlticZTg9YVxfa+LsbK7Yuy7MbZ2XmS1rtspfQ90q4LmpeZtlqEXTg5PRvREVpKc1Fa21ZvzgzMWu+udVsVKFicZ
                J/Feczuw976LoRhlTjTclo5S5V2edPu9DOxtfejEx65Ou6F1ri1XCt8S4u5ya5JHN4NRSy2175N/GpuOa+nfBQbhV6ZWXW+cVU4S8j0np/so52zwb82larihbRy
                +zJrR+w1+4WBOum3JsTUshrh17XBavi/Fv3FVtrFryNt11Q58Uqnb5OquKX9qO9VE6009ra+3djhdNqjBre+nubDYGJ9Hw8ep8pKtSkv4pc5e9lkZXfXPsxXh3
                VPSULLOX7s48POL8x3tmbzYeTBN2wpnp1q7ZKLT8zfJo4ZU5yj4m9ztjUgn4f0J3rwYX4Vzklx1Qdtcu+Mo8/euRXeD1v6Jau5XvT/1jqce9e8VHQTxseyN1ty4
                JOt8UYRfbzXa32aItt1NnyxcKuE1pZNu2xeRy7vwSRp+KOHtLl6fJmrSr3XC1+C6ABynUAAAAAAAAAAAAAAASAAAAACAAAAAAAAADobR2Vj5agsivpOBtw60o6N
                9vY/Md8EptO6IaTVmdSnAqro+jQhpTwShwcTfVeuq17e84tm7HxsNzePXwOxRU+tKWqjrp2vzssATmlZq+5GSO9gV+0tj42Y4u+vjcE1Hryjon29jLAEKTi7olx
                UlZnTytn03ULHshxVJQShxNco9nNc+4nZ+BVi19FTDghxOWnE5c3282dsDM7WvoMqvex8yipJxkk00001qmvIZLaO49Fs3Oi10avVwcekrXo5po14LU6kqbvF2K
                1KcaitJGW2VuXj0TVls3kSi9YxlFRqT8vDz1/E0l9MLYSrnFThOLjKL7Gn3HKBOpKbvJiFOMFaKMflbiUSk3VfZUn+7KKtS9D1TOfZ25OLVJTtnPIa5qMkoV6+e
                K7faakGjxNVq2bv1KLD0k75TjnONcHJ6RhCLb7kkkYncyLyc7LzZd2qi/PN//ACveXO+ud0GDOKek72qo8+585P2J+0jcjE6LBhJrrXSla/R2R9yLQWSjKX10Xy
                Um89aMfpqWu09nUZdbquhxR11i1ylB+WL7mZa3cGDl1MqSj5J1KTX4po2wM4Vpw0izSdGE9ZIzmyN08bFkrZOV9secZTSUYvyqK7/aaMApOcpu8ncvCEYK0VYAA
                qWAAAAAAAAAAAAAAAJAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOO2mE9OKEZ6dnFFPT2n1GKSSSSS5JJaJI+gAAAAAAAAAAAAAAAAAAAAAAAAASAAAAACAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/9k=" alt="" height="100px" width="150px">    
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIHBhATExMSFREXDxIYFBATDQ8VEBgRGBcWFhcRFhYaHCkgG
                BolHxgTIzEiJSkrLjAuGB8/ODM4NygtLisBCgoKDg0OGxAQGy0lHyUtKy4tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tL
                f/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYDBAcCAf/EADwQAAIBAQQGCAQDBwUAAAAAAAABAgMEBREhBjFBUXGREhMiYYGhs
                cEyQlJyYpLRFEOCssLh8BUjNVNj/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAMEBQIB/8QAKREBAAICAQMDAwUBAQAAAAAAAAECAxEEEiExMkFREyJhIzNCcZGBFP
                /aAAwDAQACEQMRAD8A7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAfJSUY4t4Le3kebENbdJaFmxUW6kt0Ph/M8uWJXvyqV8d0tcVpQ1o0sqzfYjCK78ZS55LyK1uZefEJYwR7tKd/2mf71rhCmv
                Yink5J93X0q/Dyr9tK/ey5QfsP/AEZPl79Ovw2KOk1op63GX3U1/TgdRy8keXM4apOy6XJvCpTa/FB4+T/UnpzY/lCOcHxKdsV4UrdHGnNS3rVJcU80WqZK39
                MorVmvltEjkAAAAAAAAAAAAAAAAAAAAAAjb3vmndkM+1NrKmnnxe5EOXPXH/bulJspd43pVvGfbl2dkFlBeG3izMyZrZPK1WkV8NIidgAAAAAeoTdOaabTWpp
                tNcGexMx3glZLo0ncGo181/2JZr7ktfFF3Fy/a/8AqvfD71WunNVIJppprFNPFNby/ExPeFd6PQAAAAAAAAAAAAAAAAAAEPpBfKu2l0Y4OrJZLYl9TK+fP9ON
                R5SY8fV/Sj1ajrVHKTbk3i29bZlzMzO5XIjXZ4OQAAAAAAAAATFwX07uq9GWLpN5rbF/UvdFnBnnH2nwiyY+rvHleYTU4Jp4prFNamt5qRO+6o9HoAAAAAAAA
                AAAAAAAANW87bG77HKb2alvk9SI8mSKV6pdVr1Tpzu015WqvKcnjJvFv24GPa02ncrsRERqGI5egAAAAAAAAAAAtGiN6YS6iTyzdN9+tw914l/iZv4T/wAV81
                P5QtZfVwAAAAAAAAAAAAAAABStLrd19vVNfDBZ/e9fJYLmZnLybt0/C1hrqNoEqJgAAAAAAAAAAAAPVObpVFJPBppp7ms0z2JmJ3BPd0i7bWrdYoVF80c1ulq
                a54m1jv11iyjaNTpsnbkAAAAAAAAAAAAAB4q1FSpSk9STb4LM8mdRs8uZVqrrVZSeuUm3xbxMOZ3MyvxGo08Hj0AAAN677prXhnCPZ+uWUee3wJceG9/EOLZK
                18pilohJx7VWKe5U21zbRZjhT7yinP8AEPlbRCcV2asW90oOPmmxPCn2l7GePeEJbrvq2CeFSLW6WuL4Mq3xWp6oS1vFvDVI3QAAAALboVacaNWm9jUlweT9F
                zNDh37TVWzx32sxeQAAAAAAAAAAAAAAI/SCp1dzVn+DD82Efch5E6x2d443aHPDHXQAAAsmjtwK0RVWqux8kPq/FLu7tvDXd4/H6vusgyZddoW6MVFYLJblqN
                FWfQAGO0UI2mi4yScWs0zm1YtGpexOp255e1hd3W+UNa1xb2xer3XgZGXH9O3Su0t1RtpkToAAAJvQ+fQvfDfTkvR+xa4k/qf8RZvSvBqKgAAAAAAAAAAAAAC
                K0o/4Or/B/PEg5P7UpMXrhQTIXAABI3Dd/wDqN4KL+BdqfBfL4vDzJ8GP6l9T4R5LdMOgpYI11N9AAAAFQ02ilaqL2uEk+Caw9WZ3N9ULODxKtlJOAAAExoms
                b6j9s/Qs8T9xFm9K9mqqAAAAAAAAAAAAAANG+6XXXRWX/nJ+Kz9iLNG8cw6pOrQ50Yy8AALloZZ+hd857ZT1/hjkvNyNLh11Tq+VXNP3aWEuIWlO2qN7wpb6U
                peOKS8lMjnJ+p0fh10/btukjkAAULSa2q23m+i8YwXRT2Np5vnl4GTycnXft7LeKuqokrpQAAAsGhlLpXlOWyNJ821h6Mt8OPvmfwhzz9q5mmqgAAAAAAAAAA
                AAAPkl0otbBMbHM7bZ3ZLXOD+WTXhsfLAxL16bTC/WdxthOHoejoGjcOhclHg3zk2a3Gj9KFLJ6pSZO4UG1Xq3f/XLNRmsO+C7OC4rHmZNs36vWuRT7NLz18V
                RU+klDBPpNpRwep4s1eqNbU9T4a9a96FGOLq0+CmpPkszic2OPMuopafZXL50ldog4Uk4xeTm8pNbkti79ZSzcrq7UT0w67yrhSTgAAAAuehtl6q75Teuc8vt
                jkvPpGnw6apv5Vc07tpYC2hAAAAAAAAAAAAAAAKlplYOjVjWSyeEZ8V8L5ZeCM/mY+/XCxht7KyUVgA6Do7LpXLR+1rk2jY4/wC3Clk9UsWk1v8A2K7Wk+3Ps
                x34fNLl5tHPJydFPzL3FXqsoZkri56JWtWq7pUpZuGWDzxpy1L1XI0+Lfqp0z7Kuaup2htIbld31OnBY0m/yv6X3bn/AI6vIwdE7jwlx5OrtPlClZKAAAADNY
                7NK12qMI65PDgtr8FizqlZtbph5aemNuk2airPQjCPwxikuCNqtYrGoUZnc7ZDp4AAAAAAAAAAAAAAAYrVZ42qzyhJYxksH+vE5tWLRqXsTqdw53eVhld9rcJ
                eEtko7JIx8mOaW1K7W0WjbVI3S76H1usuno/TUkvB9r3ZqcS28evhUzR9yH0zqOV5QjsVJNcW3j6LkVuZP3xH4S4I+1AFRMm9EajhfCX1U5J+T9i1xJ1kRZvS
                utWmq1Nxkk4tYNPU0acxExqVTwol+3Q7srYrF0m+zLc/pff6mVnwTjn8LmPJ1f2iiukAAAC6aLXT+yUesmv9ySyT1xh+r/Q0+Lh6Y6p8quW+51CfLaEAAAAAA
                AAAAAAAAAAANC97shedm6MspLOM8M0/db0RZcUZI1Lql5rO1Dt1jnYbQ4TWD2PY1vT2oyb0tSdSuVtFo3Ca0MtXV22dN/PHFfdHZyb5Fnh31aa/KLPHbbNprZ
                X06dVasOg/Nx/qO+ZTxZ5gt5hVygsLBobZnUt8p7Iww/il/ZMucOu7zb4Q557aXM0lVitNCNqoShJYxazRzasWjUvYmYncKDfN1yuu04POD+Ce9bn3oyc2Gcc
                /hcpeLQjyF2AWnR24GpKrVXfCm/KUl7F/j8b+V/8AFfJl9oWovq4AAAAAAAAAAAAAAAAAAAGtbrFC30ejOOK2PanvT2HF8dbxqXtbTWdwqtpuStdNqjVpY1Ix
                lisF28NzW3LLFFC3Hvit1V7rEZIvGpWacad73bvhOPin7NP0L0xXLT+0HesqLaLtqULw6no4zb7OGqS2SXd6YMyrYrRfoW4vE12vV0WBXdYowWb1ylvk9b9vA
                1MWOMddKl7dU7bpK5AMFsssLbQcJrGL54709jOb0i0al7EzE7hAVNEIOfZqyS3OCb54oqTwo9pTfXn4SF26P0bBNSznNapSwy4LUiXHxqU7+7i2WbJYsIwAAA
                AAAAAAAAAAAAAAAAAAAB8UUgPjgnNPBYpNJ4LFJ4YrHwR5qN7Ho9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//Z" alt="" height="100px" width="100px">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpIGZxgYPU3CjFD__Cn11ICXCq16u8MKrZjQ&usqp=CAU" alt="" height="100px" width="150px" >
            </div>
            </div>
        </section>
 
       <section class="testim reveal" id="testim">
            <div class="ts"><br><br><h3>Testimonials from our</h3><h2>Happy Clients</h2></div>
            <div class="wrap">
                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
     
                <ul class="dots" id="testim-dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
     
                <div class="cont" id="testim-content">
                    <div class="active">
                        <div class="img"><img src="https://media.istockphoto.com/photos/businesswoman-portrait-on-white-picture-id615279718?k=20&m=615279718&s=612x612&w=0&h=D0gAjhLC0XgxWyi19zRC4HXSl2g81bytiIwezQn9ZgQ="></div>
                            <h2>Gloria R. Clarke - Microsoft</h2>
                            <p>Needless to say we are extremely satisfied with the results. I had to plan the Microsoft quaterly party and I’d be lost without Hendecagon Event Planners.</p>
                    </div>
                    <div>
                        <div class="img">
                            <img src="https://instantglamour.com/wp-content/uploads/photo-gallery/IMG_3348-pp-b.jpg"></div>
                            <h2>Laura P. Edwards - Google</h2>
                            <p>Hendecagon did an amazing job at organising the I/O workshop and I would highly recommend them to anyone.</p>
                    </div>
                    <div>
                        <div class="img">
                            <img src="https://i.dailymail.co.uk/i/pix/2017/04/20/13/3F6B966D00000578-4428630-image-m-80_1492690622006.jpg"></div>
                            <h2>Henry M. Lewis - Adani
                            </h2>
                            <p>The staff was so accommodating and friendly and the awards evening was simply magical. The service and attention to detail was impeccable!</p>
                    </div>
                    <div>
                        <div class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYv-qZFL7Svj6edQQ9FXORZnbsBb4080JFiQ&usqp=CAU"></div>
                            <h2>William S. Harris - Infosys</h2>
                            <p>The corporate retreat planned by Hendecagon was exactly what was needed to get my employees motivated. I’m definitely getting Hendecagon to plan all our retreats from now on.</p>
                    </div>
                    <div>
                        <div class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd3lQBgQCqaPD22z-8CrEZ-C-nHu2ro4hgqg&usqp=CAU"></div>
                            <h2>Sarah N. Davies - NBC</h2>
                            <p>The team was simply amazing! Naturally the wrap party that everyone was looking forward to was a hit.</p>
                    </div>
                </div>
            </div>
           
        </section>
 
        <script src="javascript/script.js"></script>
 
          <!--
            js for reveal
          -->
          <script>
            function reveal(){
                var reveals=document.querySelectorAll(".reveal");
                for(var i=0;i<reveals.length;i++)
                {
                    var windowHeight=window.innerHeight;
                    var elementTop=reveals[i].getBoundingClientRect().top;
                    var elementVisible=100;
                    if(elementTop<windowHeight-elementVisible)
                    {
                        reveals[i].classList.add("active");
                    }
                    else{
                        reveals[i].classList.remove("active");
                    }
                }
            }
            window.addEventListener("scroll",reveal);
        </script>
 
<a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
</a>

<script>
const toTop=document.querySelector(".to-top");
 
    window.addEventListener("scroll",()=>{
        if(window.pageYOffset>100){
            toTop.classList.add("active");
        }
        else{
            toTop.classList.remove("active");
        }
    })</script>


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
        <a href="../joinus.html">join</a>
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
