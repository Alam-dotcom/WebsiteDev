<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `gatherings` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $gatherings_id=$row['gatherings_id'];
                    $gatherings_image1=$row['gatherings_image1'];
                    $gatherings_title=$row['gatherings_title'];
                    $gatherings_titlee=$row['gatherings_titlee'];
                    $gatherings_description=$row['gatherings_description'];
                    $gatherings_descriptionn=$row['gatherings_descriptionn'];

                    
                    echo "                            
                              <h3 style='color: #ED9834'><b>$gatherings_title</b></h3>
                                    <div class=col-lg-7>
                                        <p style='text-align:justify; color:#33383b; font-weight:100'>$gatherings_description</p>
                                        <h4> $gatherings_titlee</h4>
                                        <p>$gatherings_descriptionn</p> <br> 
                                            <div class='mb-5'>
                                                <a href='../contactus.html'class='btn btn-secondary'>Book Now</a>
                                            </div>
                                        </div>
                                    <div class=col-lg-4>
                                        <img src='images/$gatherings_image1' alt=''  height='220px' width='400px'>
                                    </div>";
                }
            }
    ?>