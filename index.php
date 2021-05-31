<?php
$x = 10; // khai báo một biến $x -> bắt buộc phải có $ đầu tiên.
$y = "hello"; // giong javascript
$x = "xin chao";
$z = $x.$y; // xin chào  hello -> nối chuỗi.
echo $z."<br/>"; // in ra
echo (4+5)."<br/>";
echo "aa"."5"."<br/>"; // chỉ có 4 nhóm:số, chuỗi,mảng,đối tượng.
$n = 10;
if ($n  >= 10){
    echo "gia tri qua lon </br>";
}else{
    echo "gia tri qua nho <br/>";
}
for ($i = 0; $i < 10; $i++){
    echo "i = ".$i."<br/>";
}
$arr = []; // khai báo mảng.
$arr[0] = 12;
$arr[1] = "xin chào";
$arr[] = 101; // tự động thêm vào cuối mảng phần tử này.
for ($i = 0; $i <3;$i++){
    echo "arr[".$i."] = ".$arr[$i]. "<br/>";
}
//array php chia phần tử thành key => value
$arr["name"] = "nguyễn văn a"; // key = name và value = nguyễn văn a;
$arr["age"] = 18;
$arr["tel"] = "0987654321";
//$arr["ds_monhoc"] =["LBEP" , "BNGW" , "ADF1"];
echo "Name:".$arr["name"]."<br/>";
foreach ($arr as $item){ // đại diện cho từng phần tử của $arr ---> $arr[i].
    echo $item."<br/?>";
}
foreach ($arr as $key => $value){
    echo  $key. "=" .$value."<br/>";
}
