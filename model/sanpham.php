<?php 
 function hienthidulieu()
 {
    require('../model/connectdb.php');
    $stmt = $conn->prepare("SELECT * FROM product");
    $stmt->execute();
    
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();

    return $kq;
 }
 function xoa($idsp)
 {
   include('connectdb.php');
    $sql = "DELETE FROM product WHERE ID=$idsp";

    // use exec() because no results are returned
    $conn->exec($sql);
 }
 function sua($idsp)
 {
   
   include('connectdb.php');
   $stmt = $conn->prepare("SELECT * FROM product  WHERE ID=$idsp");
    $stmt->execute();
    
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;

 }
 function capnhat($idsp,$masp,$ten,$gia)
 {
   include('connectdb.php');
   $sql = "UPDATE product SET PRODUCTNAME='$masp',AMOUNT='$ten',PRICE='$gia' WHERE ID=$idsp";
   // Prepare statement
   $stmt = $conn->prepare($sql);
 
   // execute the query
   $stmt->execute();
 }
 function them($masp,$ten,$gia)
 {
  
  include('connectdb.php');
  $sql = "INSERT INTO PRODUCT ( PRODUCTNAME,AMOUNT,PRICE)
  VALUES ('$masp', '$ten', '$gia')";
  // use exec() because no results are returned
  $conn->exec($sql);
 }
?>