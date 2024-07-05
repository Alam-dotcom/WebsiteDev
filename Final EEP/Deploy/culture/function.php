<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `culture` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $culture_id=$row['culture_id'];
                    $culture_image1=$row['culture_image1'];
                    $culture_title=$row['culture_title'];
                    $culture_titlee=$row['culture_titlee'];
                    $culture_description=$row['culture_description'];
                    $culture_descriptionn=$row['culture_descriptionn'];

                    
                    echo "
                              <h3 style='color: #ED9834'><b>$culture_title</b></h3>
                                    <div class=col-lg-7>
                                        <p style='text-align:justify; color:#33383b; font-weight:100'>$culture_description</p>
                                        <h4> $culture_titlee</h4>
                                        <p>$culture_descriptionn</p> <br> 
                                            <div class='mb-5'>
                                                <a href='../contactus.html'class='btn btn-secondary'>Book Now</a>
                                            </div>
                                        </div>
                                    <div class=col-lg-4>
                                        <img src='images/$culture_image1' alt=''  height='220px' width='400px'>
                                    </div>";
                }
            }
    ?>
      