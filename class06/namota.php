<?php


// ১ থেকে ১০ এর নামতা
for($i=1; $i<=10; $i++){
    echo "<h2>{$i} এর নামতা</h2><br> ";
    for($j=1; $j<=10; $j++){
        $namota = $i * $j;
        echo "$i x $j = $namota <br>";
    }
}

echo "<br><h2 style='color:red;'>=== ১ থেকে ২০ এর নামতা ===</h2> ";
// ১ থেকে ২০ এর নামতা
for ($i = 1; $i <= 20; $i++){
    echo "<h2>{$i} এর নামতা</h2><br>";
    for($j=1; $j<=10; $j++){
        $namoto = $i * $j;
        echo "$i x $j = $namota <br>";
    }
}

?>