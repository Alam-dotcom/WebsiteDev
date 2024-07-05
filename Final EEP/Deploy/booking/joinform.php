<?php
include('connect.php');

$query="select * from joinus";
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
            <h2>Volunteers</h2>
        
        </div><br><br>
        
<!-- Table-->
<div class="container-fluid">
    <div class="container">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                     
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Qualification</th>
                        <th>CV</th>
                        <th>Skills</th>
                    </tr>
                </thead>
                        <?php
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                        ?>
                        
                <tbody>    
                    <tr>
                        <td  class="bg-secondary text-light"><?php echo $row['name']; ?></td>
                        <td  class="bg-secondary text-light"><?php echo $row['email']; ?></td>
                        <td class="bg-secondary text-light"><?php echo $row['phone_no']; ?></td>
                        <td class="bg-secondary text-light"><?php echo $row['qualification']; ?></td>
                        <td class="bg-secondary text-light"><?php echo $row['cv']; ?></td>
                        <td class="bg-secondary text-light"><?php echo $row['skills']; ?></td>   
                      </tr>
                </tbody>
                <?php
                  }
                ?>                    
            </table>
</div>
</div>
    </body>
    </html>
    

</div>