<!-- edit product -->
<?php

if(isset($_GET['edit_account'])){
    $edit_id=$_GET['edit_account'];
   // echo $edit_id;
    $select_query="SELECT * FROM `weading` WHERE weading_id='$edit_id'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $weading_id=$row_fetch['weading_id'];
    $weading_title=$row_fetch['weading_title'];
    $weading_description=$row_fetch['weading_description'];
    $weading_titlee=$row_fetch['weading_titlee'];
    $weading_descriptionn=$row_fetch['weading_descriptionn'];
    $weading_image1=$row_fetch['weading_image1'];
}

    if(isset($_POST['user_update'])){
        $weading_id=$weading_id;
        $weading_title=$_POST['weading_title'];
        $weading_description=$_POST['weading_description'];
        $weading_titlee=$_POST['weading_titlee'];
        $weading_descriptionn=$_POST['weading_descriptionn'];
        $weading_image1=$_FILES['weading_image1']['name'];
        $temp_image1=$_FILES['weading_image1']['tmp_name'];
        move_uploaded_file($temp_image1,"images/$weading_image1");

        // Update Query
            $update_data="UPDATE weading SET weading_title='$weading_title',weading_description='$weading_description',weading_titlee='$weading_titlee',
            weading_descriptionn='$weading_descriptionn',weading_image1='$weading_image1' WHERE weading_id=$weading_id";
            $result_query_update=mysqli_query($con,$update_data);
            if($result_query_update)
            {
                echo " <script>alert('Data updated successfully !')</script> ";
                echo " <script>window.open('show_weading.php'))</script> ";
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../images/logo1.png">
    <style>
      
body{
    overflow-x: hidden;
}
.logo{
    width: 8%;
    height:8%;
    object-fit: contain;
}
.profile_image{
    width: 90%;
    height: 90%;
    object-fit: contain;
}
.edit_image{
    width: 100px;
    height: 100px;
    object-fit: contain;
}
.cart_img
{
    object-fit: contain;
    width:50%;
    height: 50%;
}
    </style>
    <title>Edit Account</title>
</head>
<body>
    <h3 class="text-center text-success mb-4"> Edit weading</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="weading_title" value="<?php echo $weading_title ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="weading_description" value="<?php echo $weading_description ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="weading_titlee" value="<?php echo $weading_titlee ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="weading_descriptionn" value="<?php echo $weading_descriptionn ?> ">
        </div>
        <div class="form-outline mb-4 d-flex w-50 m-auto">
            <input type="file" class="form-control " name="weading_image1">
            <img src="./images/<?php echo $weading_image1 ?>" alt="" class="edit_image">
        </div>
            <input type="submit" value="Update" class="btn btn-outline-info py-2 px-3" name="user_update">
        </div>
    </form>
</body>
</html>