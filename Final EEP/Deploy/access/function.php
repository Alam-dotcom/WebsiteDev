<?php
    // include('connect.php');
    //getting products
function getproducts()
    {
        global $con;
        //condition to check isset or not      
                $select_query="Select * from `access` order by rand() LIMIT 0,99";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $access_id=$row['access_id'];
                    $access_image1=$row['access_image1'];
                    $access_title=$row['access_title'];
                    $access_description=$row['access_description'];
                    echo "
                    <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='images/$access_image1' class='card-img-top' alt=''>
                        <div class='card-body'>
                            <h5 class='card-title' style='text-align: center;color: #ed9834;'>$access_title</h5>
                            <p class='card-text'>$access_description</p>
                        </div>
                    </div>
                </div>
                 ";
                }
            }
    ?>
    