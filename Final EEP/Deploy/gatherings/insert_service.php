<!-- connect file -->
<?php
    include('connect.php');
    if(isset($_POST['insert_product'])){
        $gatherings_title=$_POST['gatherings_title'];
        $gatherings_titlee=$_POST['gatherings_titlee'];
        $gatherings_description=$_POST['gatherings_description'];
        $gatherings_descriptionn=$_POST['gatherings_descriptionn'];
        

        // accessing images
        $gatherings_image1=$_FILES['gatherings_image1']['name'];

        // accessing image temp name
        $temp_image1=$_FILES['gatherings_image1']['tmp_name'];

        //checking empty condition
            move_uploaded_file($temp_image1,"images/$gatherings_image1");
            
            // insert_quert
            $insert_products="insert into  `gatherings` (gatherings_title,gatherings_description,gatherings_image1,gatherings_titlee,gatherings_descriptionn)
             values ('$gatherings_title','$gatherings_description','$gatherings_image1','$gatherings_titlee','$gatherings_descriptionn')";
             $result_query=mysqli_query($con,$insert_products);
            if($result_query){
                echo"<script>alert('successfully inserted the gatherings')</script>";
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
        <h1 class="text-center">Insert Social Gathering Events</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="gatherings_title" class="form-lable">Event Title</lable>
            <input type="text" name="gatherings_title" id="gatherings_title" class="form-control" placeholder="Enter Event Title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="gatherings_description" class="form-lable">Event Description</lable>
            <input type="text" name="gatherings_description" id="gatherings_description" class="form-control" placeholder="Enter Event Description" autocomplete="off" required="required">
            </div>

            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="gatherings_title1" class="form-lable">Second Title</lable>
            <input type="text" name="gatherings_titlee" id="gatherings_titlee" class="form-control" placeholder="Enter Second Title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="gatherings_description1" class="form-lable">Event Services</lable>
            <input type="text" name="gatherings_descriptionn" id="gatherings_descriptionn" class="form-control" placeholder="Enter Event Services" autocomplete="off" required="required">
            </div>

            <!-- Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
            <lable for="gatherings_image1" class="form-lable">Event Image</lable>
            <input type="file" name="gatherings_image1" id="gatherings_image1" class="form-control" placeholder="Enter Event Image" autocomplete="off" required="required">
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