<?php include('config.php'); 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>printproducts</title>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-family: 'Kanit', sans-serif;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-family: 'Kanit', sans-serif;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {font-family: 'Kanit', sans-serif;}
</style>
</head>
<body onload="window.print();" >



<h2>รายการสินค้าทั้งหมด</h2>

<table>
<br>
  <tr>
    <th>ชื่อสินค้า</th>
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>หน่วยนับ</th>
    <th>คลังสินค้า</th>
    <th>แบรนด์</th>
    <th>ประเภทสินค้า</th>
  </tr>

  <?php  
     $store = $_GET['store'];
 $sql = "SELECT products.name AS products, price,qty,sku, stores.name AS store , brands.name AS brands , categories.name AS categories
 FROM products
 LEFT JOIN stores
 ON products.store_id = stores.id  
 LEFT JOIN brands
 ON products.brand_id = brands.id
 LEFT JOIN categories
 ON products.category_id = categories.id where store='$store' "; 
$query = mysqli_query($dbcon,$sql) ;?>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

  <tr style="width: 50px;">
    <td ><?php echo $result["products"];?></td>
    <td><?php echo $result["price"];?></td>
    <td><?php echo $result["qty"];?></td>
    <td><?php echo $result["sku"];?></td>
    <td><?php echo $result["store"];?></td>
    <td><?php echo $result["brands"];?></td>
    <td><?php echo $result["categories"];?></td>
   
  </tr>
  <?php } ?>
</table>

</body>
</html>
