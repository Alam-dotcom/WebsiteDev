<!-- connect file -->
<?php
    include('connect.php');
    if(isset($_POST['insert_product'])){
        $access_title=$_POST['access_title'];
        $access_description=$_POST['access_description'];

        // accessing images
        $access_image1=$_FILES['access_image1']['name'];

        // accessing image temp name
        $temp_image1=$_FILES['access_image1']['tmp_name'];

        //checking empty condition
            move_uploaded_file($temp_image1,"images/$access_image1");
            
            // insert_quert
            $insert_products="insert into  `access` (access_title,access_description,access_image1)
             values ('$access_title','$access_description','$access_image1')";
             $result_query=mysqli_query($con,$insert_products);
            if($result_query){
                echo"<script>alert('successfully inserted the access')</script>";
            }

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesone link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert access</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="access_title" class="form-lable">access Title</lable>
            <input type="text" name="access_title" id="access_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="access_description" class="form-lable">Product Description</lable>
            <input type="text" name="access_description" id="access_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>

            <!-- Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="access_image1" class="form-lable">access Image 1</lable>
            <input type="file" name="access_image1" id="access_image1" class="form-control" placeholder="Enter Product Image 1" autocomplete="off" required="required">
            </div>
            <!-- Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
            
        </form>
    </div>

    



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>