<?php 
  session_start();
  ob_start();
  include('../view/header.php');
  include("../model/connectdb.php");
  include('../model/sanpham.php');
  if(isset($_GET['act']))
  {
    $act=$_GET['act'];
    switch ($act) {
        case 'bailam':
            $kq=hienthidulieu();
             include('../view/bailam.php');
        break;
        case 'them':
           include('../view/themsanpham.php');
        break;
        case 'them1':
          if( isset($_POST['nhap']) &&($_POST['nhap']) )
          {
            $masp=$_POST['masp'];
            $ten=$_POST['ten'];
            $gia=$_POST['gia'];
            $kq=hienthidulieu();
            them($masp,$ten,$gia);
          }
             $kq=hienthidulieu();
             include('../view/bailam.php');
       break;
       
        
       case 'sua':
            if(isset($_GET['IDSP']))
            {
                $idsp=$_GET['IDSP'];
                
                $kqone= sua($idsp);
                $kq=hienthidulieu();
                include('../view/sua.php');
            }
            if(isset($_POST['IDSP']))
            {
              $idsp=$_POST['IDSP'];
              $masp=$_POST['masp'];
              $ten=$_POST['ten'];
              $gia=$_POST['gia'];
              
             capnhat($idsp,$masp,$ten,$gia);
             $kq=hienthidulieu();     
             include('../view/bailam.php');
            }
            // $kq=hienthidulieu();
            // include('../view/bailam.php');
           break;
        break;
        case 'xoa':
            if(isset($_GET['IDSP']))
            {
                $idsp=$_GET['IDSP'];
                xoa($idsp);
            }
            $kq=hienthidulieu();
            include('../view/bailam.php');
            break;
       
       
     
        default:
        include('../view/main.php');
            break;
    }
  }
  else
  {

    include('../view/main.php');
  }
  include('../view/footer.php');

  
  
?>