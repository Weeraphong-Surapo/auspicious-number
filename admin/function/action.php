<?php
    include "connect.php";
    session_start();
    if(isset($_POST['action']) && $_POST['action'] == "insertPhone"){
        $str = $_POST['number_phone'];
        $arr1 = str_split($str);
        $number = $arr1[0].$arr1[1].$arr1[2].'-'.$arr1[3].$arr1[4].$arr1[5].'-'.$arr1[6].$arr1[7].$arr1[8].$arr1[9];
        $query = $conn->query("INSERT INTO tb_phone(number_phone,network,price,category,category_price) 
                                VALUES('$number','$_POST[network]','$_POST[price]','$_POST[category_phone]','$_POST[category_price]')");

}

    if(isset($_POST['action']) && $_POST['action'] == "delPhone"){
        $query = $conn->query("DELETE FROM tb_phone WHERE id = '$_POST[id]'");
    }

    if(isset($_POST['action']) && $_POST['action'] == "editPhone"){
        $query = $conn->query("SELECT * FROM tb_phone WHERE id = '$_POST[id]'");
        $row = $query->fetch_assoc();
        echo json_encode($row);
      }

      if(isset($_POST['action']) && $_POST['action'] == "updatePhone"){
        $query = $conn->query("UPDATE tb_phone SET number_phone = '$_POST[number_phoneedit]' , network = '$_POST[networkedit]' , price = '$_POST[priceedit]' , category = '$_POST[categor_phoneedit]' WHERE id = '$_POST[idPhone]'");
    }

        if(isset($_POST['action']) && $_POST['action'] == "insertcategory"){
            $query = $conn->query("INSERT INTO tb_category(category_name) VALUES('$_POST[category]')");
        }
    
        if(isset($_POST['action']) && $_POST['action'] == "delCategory"){
            $query = $conn->query("DELETE FROM tb_category WHERE id = '$_POST[id]'");
        }
        
        if(isset($_POST['action']) && $_POST['action'] == "editCategory"){
            $query = $conn->query("SELECT * FROM tb_category WHERE id = '$_POST[id]'");
            $row = $query->fetch_assoc();
            echo json_encode($row);
        }


        if(isset($_POST['action']) && $_POST['action'] == "updatecategory"){
            echo $_POST['categoryedit'];
            echo '<br>';
            echo $_POST['idcategoryedit'];
            $query = $conn->query("UPDATE tb_category SET category_name = '$_POST[categoryedit]' WHERE id = '$_POST[idcategoryedit]'");
            if($query){
                echo 'yeffs';
            }else{
                echo 'no';
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == "insertPrice"){
            $conn->query("INSERT INTO tb_category_price(category_price) VALUES('$_POST[price]')");
        }
        
        if(isset($_POST['action']) && $_POST['action'] == "delprice"){
            $query = $conn->query("DELETE FROM tb_category_price WHERE id = '$_POST[id]'");
        }

        if(isset($_POST['action']) && $_POST['action'] == "editprice"){
            $query = $conn->query("SELECT * FROM tb_category_price WHERE id = '$_POST[id]'");
            $row = $query->fetch_assoc();
            echo json_encode($row);
        }

        if(isset($_POST['action']) && $_POST['action'] == "updateprice"){
            $query = $conn->query("UPDATE tb_category_price SET category_price = '$_POST[price]' WHERE id = '$_POST[id]'");
        }
        
        if(isset($_POST['action']) && $_POST['action'] == "insertNews"){
            $fiile_photo  = rand(1000, 100000) . "-" . $_FILES['img']['name'];
            $location = 'upload/';
            move_uploaded_file($_FILES['img']['tmp_name'],$location.$fiile_photo);
            $query = $conn->query("INSERT INTO tb_news(head,description,img) VALUES('$_POST[head]','$_POST[description]','$fiile_photo')");
        }

        if(isset($_POST['action']) && $_POST['action'] == "delNews"){
            $query = $conn->query("DELETE FROM tb_news WHERE id = '$_POST[id]'");
        }
        
        if(isset($_POST['action']) && $_POST['action'] == "editNews"){
            $query = $conn->query("SELECT * FROM tb_news WHERE id = '$_POST[id]'");
            $row = $query->fetch_assoc();
            echo json_encode($row);
        }

        if(isset($_POST['action']) && $_POST['action'] == "updateNews"){
            $fiile_photo  = rand(1000, 100000) . "-" . $_FILES['img_new']['name'];
            $location = 'upload/';
            $old_img = $_POST['old_img'];
            if(move_uploaded_file($_FILES['img_new']['tmp_name'],$location.$fiile_photo)){
                $query = $conn->query("UPDATE tb_news SET head = '$_POST[headedit]',description = '$_POST[descriptionedit]',img = '$fiile_photo' WHERE id = '$_POST[idNewsEdit]'");
                echo 'upload img';
                unlink("./upload/$old_img");
            }else{
                $query = $conn->query("UPDATE tb_news SET head = '$_POST[headedit]',description = '$_POST[descriptionedit]',img = '$_POST[old_img]' WHERE id = '$_POST[idNewsEdit]'");
                echo 'no upload img';
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == 'logout'){
            unset($_SESSION['login']);
        }
        
        
        
     
?>