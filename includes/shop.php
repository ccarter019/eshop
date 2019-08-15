<?php

$result = mysqli_query($conn, "SELECT * FROM products LIMIT 0, 10");
$num = mysqli_num_rows($result);

$rowCount = 0;

$totalresult = mysqli_query($conn, "SELECT * FROM products");
$totalnum = mysqli_num_rows($totalresult);

$rowCount = 0;

echo "<p class='resultsP'>Total: ".$totalnum." items</p>";

for($i=0;$i<$num;$i++) {

    $rowCount++;
    $productClass = "prodBox1";
    if($rowCount % 3 == 0 && $productClass != "prodBox2") {
        $productClass = "prodBox1";
    }
    


    $row = mysqli_fetch_array($result);
    $prodTitle = substr($row['title'], 0, 20);
    echo "<div class='".$productClass."'><div class='prodBoxInner'><p class='titleP'><a href='item.php?id=".$row['id']."'>".$prodTitle."</a></p>";
    echo "<div class='prodImg'><a href='item.php?id=".$row['id']."'><img src='img/prod/".$row['img']."'></a></div>";
    echo "<p class='pPrice'>$".$row['price']."</p>";
    echo "<button class='addP'>Add to Cart</button>";
    echo "</div></div>";
}

?>
