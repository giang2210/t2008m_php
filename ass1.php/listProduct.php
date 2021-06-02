<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

<?php
$dssanpham = [];
$dssanpham[] = [
    "name" => "Laptop HP Elite 9470M",
    "price" => 13000000,
    "describe" => "Laptop HP Elitebook có thiết kế vỏ hợp kim nhôm
     Magie phủ màu sáng bạc làm toát lên sự sang trọng và lịch lãm cho chiếc máy tính cá nhân.
      Thậm chí rằng, khi bạn chỉ cần nhìn thoáng qua thôi cũng đã thấy Elite 9470M nổi bật không hề kém cạnh dòng laptop Dell XPS hay Macbook",
    "supplier"=> "Hewlett-Packard"
];
$dssanpham[] = [
    "name" => "Laptop HP 2019 Newest Premium 15.6 inch",
    "price" => 12000000,
    "describe" => "HP 2019 được trang bị màn hình đèn nền LED IPS 15,6 inch (1366 x 76) full HD, AMD Radeon R4,
     AMD A6-9225 Dual-Core (tần số cơ bản 2,6 GHz, tần số xung lên đến 3 GHz, bộ nhớ cache 1 MB), 
     802.11ac, tính năng Bluetooth cực tiện lợi",
    "supplier"=> "Hewlett-Packard"
];
$dssanpham[] = [
    "name" => "Laptop Lenovo IdeaPad 15.6″ HD",
    "price" => 15000000,
    "describe" => "Lenovo IdeaPad 110 được xem là một trong những chiếc laptop giá rẻ được nhiều người yêu thích hiện nay.
     Sản phẩm này sử dụng chip Pentium N3710 với ổ cứng 500GB cùng dung lượng Ram lên tới 4GB.
      Tuy có giá thành khá rẻ nhưng chiếc máy tính xách tay Lenovo IdeaPad này lại có đầy đủ những tính năng của một dòng máy chất lượng tốt",
    "supplier"=> "Lenovo"
];
?>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="listProduct.php">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="newProduct.php">Thêm sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editProduct.php">Sửa sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listCategory.php">Danh sách các thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><Thêm></Thêm> thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sửa thể loại</a>
            </li>
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Danh sách sản phẩm</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>product name</th>
            <th>price</th>
            <th>describe</th>
            <th>supplier</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($dssanpham as $sp){?>
            <tr>
                <td><?php echo $sp["name"]?></td>
                <td><?php echo $sp["price"]?></td>
                <td><?php echo $sp["describe"]?></td>
                <td><?php echo $sp["supplier"]?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>