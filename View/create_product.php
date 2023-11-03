<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>
        <br>
        <label for="owner">Owner :</label>
        <input type="text" name="owner" required>
        <br>
        <label for="category">Category:</label>
        <input type="radio" name="category" value="BIỆT THỰ" id="bietthu">
        <label for="bietthu">BIỆT THỰ</label>
        <input type="radio" name="category" value="NHÀ PHỐ" id="nhapho">
        <label for="nhapho">NHÀ PHỐ</label>
        <input type="radio" name="category" value="NỘI THẤT" id="noithat">
        <label for="noithat">NỘI THẤT</label>
        <br>
        <label for="image">Upload Image:</label>
        <input type="file" name="image">
        <br>
        <input type="submit" name="create_product" value="CREATE">
    </form>

    <?php 
    include("../Model/database.php");
    if(isset($_POST['create_product'])){
        function clean_data($data){
            $data = trim($data) ;
            $data = htmlspecialchars($data);
            return $data ;
        }
      
        $product_name = clean_data($_POST['product_name']) ;
        $owner = clean_data($_POST['owner']) ;
        $category = clean_data($_POST['category']) ;
        // xử lý hình ảnh và lưu ảnh vào folder
        if(isset($_FILES['image'])){
            $file_save = "../image/" ;
            $target_file = $file_save.basename($_FILES['image']['name']) ;
            $style_file = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)) ;
            $upload_oke = true ;
            if(file_exists($target_file)){
                $i = 1 ;
                while(file_exists($target_file)){
                    $target_file = $file_save.$i.basename($_FILES['image']['name']) ;
                    $i++ ;
                }
            }
            if($style_file == "png" || $style_file == "jpeg" || $style_file == "jpg" || $style_file == "gif"){
                $upload_oke = true ;
            }
            else {            
                $upload_oke = false ;
            }
           if($upload_oke){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                echo "save image success" ;
            }
           }
           else {
            $message_error = "file upload phải là png,jpeg,jpg,gif !" ;
            echo "<script> alert ('$message_error')</script>" ;
            return ;
           }

        //    insert vào bảng product
           $insert_product = "insert into products (image,product_name,owner,category)
           values ('$target_file','$product_name','$owner','$category');";
           $result_insert = $connect->query($insert_product) ;
           if($result_insert){
            $message_success1 = "Thêm sản phẩm thành công !" ;
            echo "<script> alert ('$message_success1')</script>" ;
            $product_name = "" ;
            $owner = "" ;
            $category = "" ;
           }
           else {
            $message_error1 = "thêm sản phẩm không thành công !" ;
            echo "<script> alert ('$message_error1')</script>" ;
           }
        }

    }
?>
</body>
</html>