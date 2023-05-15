
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dữ Liệu Người Dùng</title>
    <style type="text/css">
   .input1tsp
    {
        height: 50px;
        margin-bottom: 40px;
        width: 300px;
         margin-left: 100px;
    }
    .input2
    {
        margin-left: 180px;
    }
    </style>
</head>
<body>
     <div class="khungsp1 ">
     <h2><center> PRODUCT REPAIR </center></h2>
     <form action="index.php?act=sua" method="POST">
          <input type="text" name="masp" class="form-control input1tsp" value="<?= $kqone[0]['PRODUCTNAME'] ?>" >
          <input type="text" name="ten"  class="form-control input1tsp"  value="<?= $kqone[0]['AMOUNT'] ?>">
          <input type="text" name="gia"  class="form-control input1tsp"  value="<?= $kqone[0]['PRICE'] ?>">
          <input type="hidden" name="IDSP" value="<?= $kqone[0]['ID'] ?>" >
          <input type="submit" value="PRODUCT REPAIR" class=" btn btn-outline-danger input2" name="nhap">
          </form>
    
     </div>
</body>
</html>
