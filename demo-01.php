<?php
$connect=mysqli_connect('localhost', 'root', '', 'demo');
mysqli_query($connect, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
echo "connect thành công <br>";
        // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
        //echo $field_list."<br>";
 
$customer=array('name'=>'Peter Pham','phone'=>'0903886701');
 foreach ($customer as $key => $value){
           $field_list .= ",$key";
           $value_list .= ",'".$value."'";
           echo "FL:".$field_list."<br>";
           echo "VL:".$value_list."<br>";
           //echo $key."<br>";
          // echo $value."<br>";  
       }
           $sql = 'INSERT INTO '.'customer '. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
           echo $sql."<br>";
           return mysqli_query($connect, $sql);
              
?>