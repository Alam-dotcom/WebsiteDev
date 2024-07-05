<!-- edit product -->
<?php

if(isset($_GET['edit_account'])){
    $edit_id=$_GET['edit_account'];
   // echo $edit_id;
    $select_query="SELECT * FROM `gatherings` WHERE gatherings_id='$edit_id'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $gatherings_id=$row_fetch['gatherings_id'];
    $gatherings_title=$row_fetch['gatherings_title'];
    $gatherings_description=$row_fetch['gatherings_description'];
    $gatherings_titlee=$row_fetch['gatherings_titlee'];
    $gatherings_descriptionn=$row_fetch['gatherings_descriptionn'];
    $gatherings_image1=$row_fetch['gatherings_image1'];
}

    if(isset($_POST['user_update'])){
        $gatherings_id=$gatherings_id;
        $gatherings_title=$_POST['gatherings_title'];
        $gatherings_description=$_POST['gatherings_description'];
        $gatherings_titlee=$_POST['gatherings_titlee'];
        $gatherings_descriptionn=$_POST['gatherings_descriptionn'];
        $gatherings_image1=$_FILES['gatherings_image1']['name'];
        $temp_image1=$_FILES['gatherings_image1']['tmp_name'];
        move_uploaded_file($temp_image1,"images/$gatherings_image1");

        // Update Query
            $update_data="UPDATE gatherings SET gatherings_title='$gatherings_title',gatherings_description='$gatherings_description',gatherings_titlee='$gatherings_titlee',
            gatherings_descriptionn='$gatherings_descriptionn',gatherings_image1='$gatherings_image1' WHERE gatherings_id=$gatherings_id";
            $result_query_update=mysqli_query($con,$update_data);
            if($result_query_update)
            {
                echo " <script>alert('Data updated successfully !')</script> ";
                echo " <script>window.open('show_gatherings.php'))</script> ";
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
    <h3 class="text-center text-success mb-4"> Edit gatherings</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="gatherings_title" value="<?php echo $gatherings_title ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="gatherings_description" value="<?php echo $gatherings_description ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="gatherings_titlee" value="<?php echo $gatherings_titlee ?> ">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="gatherings_descriptionn" value="<?php echo $gatherings_descriptionn ?> ">
        </div>
        <div class="form-outline mb-4 d-flex w-50 m-auto">
            <input type="file" class="form-control " name="gatherings_image1">
            <img src="./images/<?php echo $gatherings_image1 ?>" alt="" class="edit_image">
        </div>
            <input type="submit" value="Update" class="btn btn-outline-info py-2 px-3" name="user_update">
        </div>
    </form>
</body>
</html>