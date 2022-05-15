<?php

function dd($params)
{
     echo '<pre>';
     print_r($params);
     exit();
}

function insert($table_name,$data_val,$url_path){
     global $conn;
     $data_value=$data_val;
     $sql = "INSERT INTO $table_name (end_point_name,data)
    VALUES ('$url_path','$data_value')";
     //($sql);
    $result = $conn->query($sql);

    if($result){
        return true;
    }else{
        return false;
    }
}

function update($table_name,$data,$url_path,$id){
    global $conn;
     $id=$id;
     $data=$data;
     $sql = "UPDATE  $table_name  SET end_point_name='$url_path' data='$data' WHERE id=$id";
    $result = $conn->query($sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

function select_all($table_name){
    global $conn;
    
     $sql = "SELECT* FROM $table_name";
     $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       $data=[];
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $data[]=[
              'id'=>$row['id'],
              'end_point_name'=>$row['end_point_name'],
              'data'=> json_decode($row['data'],true),
          ];
        }
        return $data;
      } else {
        echo "0 results";
      }
}

function find($table_name,$id){
    global $conn;
    
     $sql = "SELECT* FROM $table_name WHERE id='$id'";
     $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
       $data=null;
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
          $data=[
              'id'=>$row['id'],
              'end_point_name'=>$row['end_point_name'],
              'data'=> json_decode($row['data'],true),
          ];
        }
        return $data;
      } else {
        //echo "0 results";
      }
}

