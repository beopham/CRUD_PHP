<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ Sinh Viên </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
  .khung
  {
    width: 800px;
    height: auto;
    margin: 0px auto;
    
  }
  .bang
  {
    width: 700px;
    height: 100px;
  }
</style>
</head> -->
<body>
       <div class ="khungsp">
           <center> <h2>Product Information Sheet </h2></center>
           <table  class="table table-striped table-hover table-reponsive bang">
              <tr>
                <td>STT</td>
                <td>Name Product</td>
                <td>Amount</td>
                <td>Price</td>
                <td><a href="index.php?act=them" class="btn btn-danger them"><i class="fa fa-user-plus" aria-hidden="true"></i></i></a> </td>
              </tr >
              <?php 

                if(isset($kq) && count($kq)>0)
                {
                  $i=1;
                  foreach ($kq as $sanpham)
                   {
                     echo '<tr>
                              <td>'.$i.'</td>
                              <td>'.$sanpham['PRODUCTNAME'].'</td>
                              <td>'.$sanpham['AMOUNT'].'</td>
                              <td>'.$sanpham['PRICE'].'</td>
                              <td><a href="index.php?act=sua&IDSP='.$sanpham['ID'].'" class="btn btn-warning"> <i class="fa fa-pencil" aria-hidden="true"></i></a> | <a  href="index.php?act=xoa&IDSP='.$sanpham['ID'].'" class="btn btn-secondary"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>';
                            $i++;
                  }
                }
               ?>
           </table>
       </div>
</body>
