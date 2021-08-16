<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>List Of Product</title>
</head>
<body>
<h1>List Of Product</h1>



<?php
define("filepath", "data.txt");


$productName = $code = $quantity = $unitPrice = $price = "";
$productNameErr = $codeErr = $quantityErr = $unitPriceErr = $priceErr =  "";
$flag = false;
$successfulMessage = $errorMessage = "";



if($_SERVER['REQUEST_METHOD'] === "POST") {
$productName = $_POST['productname'];
$code = $_POST['code'];
$quantity = $_POST['quantity'];
$unitPrice = $_POST['unitprice'];
$price = $_POST['price'];

if(empty($productName)) {
$productNameErr = "Field can not be empty";
$flag = true;
}
if(empty($code)) {
$codeErr = "Field can not be empty";
$flag = true;
}
if(empty($quantity)) {
$quantityErr = "Field can not be empty";
$flag = true;
}
if(empty($unitPrice)) {
$unitPriceErr = "Field can not be empty";
$flag = true;
}
if(empty($price)) {
$priceErr = "Field can not be empty";
$flag = true;
}






if(!$flag) {
$data[] = array("productname" => $productName, "code" => $code, "quantity" => $quantity, "unitprice" => $unitPrice, "price" => $price);
$data_encode = json_encode($data);
$res = write($data_encode);
if($res) {
$successfulMessage = "Sucessfully saved.";
}
else {
$errorMessage = "Error while saving.";
}
}
}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



function write($content) {
$file = fopen(filepath, "a");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="productname">Product Name<span style="color: red">*</span>: </label>
<input type="text" name="productname" id="productname">
<span style="color: red"><?php echo $productNameErr; ?></span>
<br><br>
<label for="code">Code<span style="color: red">*</span>: </label>
<input type="text" name="code" id="code">
<span style="color: red"><?php echo $codeErr; ?></span>
<br><br>
<label for="quantity">Quantity<span style="color: red">*</span>: </label>
<input type="text" name="quantity" id="quantity">
<span style="color: red"><?php echo $quantityErr; ?></span>
<br><br>
<label for="unitprice">Unit Price<span style="color: red">*</span>: </label>
<input type="text" name="unitprice" id="unitprice">
<span style="color: red"><?php echo $unitPriceErr; ?></span>
<br><br>
<label for="price">Price<span style="color: red">*</span>: </label>
<input type="text" name="price" id="price">
<span style="color: red"><?php echo $priceErr; ?></span>
<br><br>

<input type="submit" name="submit" value="Add Product">
</form>



<br>



<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>



<?php



/*$fileData = read();
echo "<br><br>";
$fileDataExplode = explode("\n", $fileData);



echo "<ol>";
for($i = 0; $i < count($fileDataExplode) - 1; $i++) {
$temp = json_decode($fileDataExplode[$i]);
echo "<li>" . "Product Name: " . $temp->productname . " Code: " . $temp->code .  " Quantity: " . $temp->quantity .  " Unit Price: " . $temp->unitprice .  " Price: " . $temp->price ."</li>";
}
echo "</ol>";*/



function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
</body>
</html>