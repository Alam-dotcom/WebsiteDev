<?php
include('connect.php');

$query="select * from weading";
$result =mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <title>ELite Event Planner</title>
	 <link rel="icon" href="logo.jpg">
     <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      
        .cart_imgs
        {
            width:60px;
        }
    </style>
</head>

<body>
       <br> <div class="text-center">
            <h2>Wedding Events</h2>
        
        </div>
        <br><br>
<!-- Table-->
<div class="container p-0 " >
    <form action="" method="post">
        <div class="row">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Title</th>
                        <th>Event Description</th>
                        <th>C Title</th>
                        <th>Event Services</th>
                        <th>Image</th>
                        <th>Choice</th>
                        <th colspan='2'>Operations</th>
                    </tr>
                </thead>
                        <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $weading_id=$row['weading_id'];
                        ?>
                        
                <tbody>    
                    <tr>
                                <td  class="bg-secondary text-light"><?php echo $row['weading_id']; ?></td>
                                <td  class="bg-secondary text-light"><?php echo $row['weading_title']; ?></td>
                                <td  class="bg-secondary text-light"><?php echo $row['weading_description']; ?></td>
                                <td  class="bg-secondary text-light"><?php echo $row['weading_titlee']; ?></td>
                                <td  class="bg-secondary text-light"><?php echo $row['weading_descriptionn']; ?></td>
                                <td  class="bg-secondary text-light"><img src="./images/<?php echo $row['weading_image1'];?>" alt="" class="cart_imgs"></td>
                                <td class="bg-secondary text-light"><input type="checkbox" name="removeitem[]" value="<?php echo $weading_id ?>"></td>
                                <td class="bg-secondary text-light">
                                   <!-- <a class="nav-link text-light bg-secondary px-3 py-2 border-0 mx-3" aria-current="page" href="update_weading.php">Edit weading</a>-->
                                   <a class="nav-link text-light" aria-current="page" href="index2.php?edit_account=<?php echo $weading_id?>">Edit Account</a>
                                    <input type="submit" value="Remove" class="bg-secondary px-3 py-2 border-0 mx-3" name="remove_cart">
                                </td>
                               
                                
                                </tr>
                </tbody>
                            <?php
                            }
                        ?>
                    
            </table>
        </div>
    </form>
</div>
    </body>
    </html>

    <!-- function to remove items -->
  <?php
    function remove_cart_item()
    {
      global $con;
      if(isset($_POST['remove_cart']))
      {
        foreach($_POST['removeitem'] as $remove_id)
        {
          echo $remove_id;
          $delete_query="Delete from `weading` where weading_id=$remove_id";
          $run_delete=mysqli_query($con,$delete_query);
          if($run_delete)
          {
            echo "<script>window.open('show_weading.php','_self')</script>";
          }
        }
      }
    }
    echo $remove_item= remove_cart_item();
  ?>
</div>