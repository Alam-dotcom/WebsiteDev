<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `weading` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $weading_id=$row['weading_id'];
                    $weading_image1=$row['weading_image1'];
                    $weading_title=$row['weading_title'];
                    $weading_titlee=$row['weading_titlee'];
                    $weading_description=$row['weading_description'];
                    $weading_descriptionn=$row['weading_descriptionn'];

                    
                    echo "
                    <h3 style='color: #ED9834'><b>$weading_title</b></h3>
                    <div class=col-lg-7>
                        <p style='text-align:justify; color:#33383b; font-weight:100'>$weading_description</p>
                        <h4> $weading_titlee</h4>
                        <p>$weading_descriptionn</p> <br> 
                            <div class='mb-5'>
                                <a href='../contactus.html'class='btn btn-secondary'>Book Now</a>
                            </div>
                        </div>
                    <div class=col-lg-4>
                        <img src='images/$weading_image1' alt=''  height='220px' width='400px'>
                    </div>";
                }
            }
    ?>

