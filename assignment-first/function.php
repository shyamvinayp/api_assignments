<?php

function dd($params)
{
     echo '<pre>';
     print_r($params);
     exit();
}

function insert($table_name,array $data){
    global $conn;
     $title=$data['title'];
     $description=$data['description'];
     $sql = "INSERT INTO $table_name (title,description)
    VALUES ('$title', '$description')";
    $result = $conn->query($sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

function update($table_name,array $data){
    global $conn;
     $id=$data['id'];
     $title=$data['title'];
     $description=$data['description'];
     $sql = "UPDATE  $table_name  SET title='$title',description='$description' WHERE id=$id";
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

        while($row = $result->fetch_assoc()) {
          $data[]=[
              'id'=>$row['id'],
              'title'=>$row['title'],
              'description'=>$row['description'],
          ];
        }
        return $data;
      }
}