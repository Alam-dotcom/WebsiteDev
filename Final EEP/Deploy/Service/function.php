<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `service` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $service_id=$row['service_id'];
                    $service_image1=$row['service_image1'];
                    $service_title=$row['service_title'];
                    $service_description=$row['service_description'];
                    echo "
                        <section class='container mt-5'>
                            <div class='row  mt-3 text-dark text-center'>
                                <div class='box col-md-6 bxr6'>
                                    <img src='images/$service_image1' alt=''class='a1'>
                                </div>
                                <div style='background-color:rgba(221, 158, 21, 0.418);' class='box col-md-6 p-5'>
                                    <h2> $service_title </h2>
                                    <p>$service_description</p>
                                        <button><a href='../contactus.html'>Hire Us!</a></button>
                                </div>
                            </div>
                        </section>";
                }
            }
    ?>