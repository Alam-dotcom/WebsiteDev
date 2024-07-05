<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `corporate` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $corporate_id=$row['corporate_id'];
                    $corporate_image1=$row['corporate_image1'];
                    $corporate_title=$row['corporate_title'];
                    $corporate_titlee=$row['corporate_titlee'];
                    $corporate_description=$row['corporate_description'];
                    $corporate_descriptionn=$row['corporate_descriptionn'];

                    
                    echo "
                            <h3 style='color: #ED9834'><b>$corporate_title</b></h3>
                                    <div class=col-lg-7>
                                        <p style='text-align:justify; color:#33383b; font-weight:100'>$corporate_description</p>
                                        <h4> $corporate_titlee</h4>
                                        <p>$corporate_descriptionn</p> <br> 
                                            <div class='mb-5'>
                                                <a href='../contactus.html'class='btn btn-secondary'>Book Now</a>
                                            </div>
                                        </div>
                                    <div class=col-lg-4>
                                        <img src='images/$corporate_image1' alt=''  height='220px' width='400px'>
                                    </div>";
                }
            }
    ?>

