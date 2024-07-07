<?php 
for($i = 0; $i <= 10; $i++){
 echo "{$i} How are you? <br/>";
}
echo "----<br/>";
for($i = 10; $i <= 20; $i++){
    echo "{$i} <br/>";
}
echo "----<br/>";
for($i = 20; $i >= 10; $i--){
    echo "{$i} <br/>";
   }
echo "----<br/>";
for($i = 0; $i <= 300; $i++){
    if($i % 5 == 0 && $i % 7 == 0){
        echo $i ."<br/>";
    }
   }
echo "----<br/>";
for($i = 10000; $i >= 5000; $i = $i - 3){
    if($i % 7 == 0){
        echo $i ."<br/>";
        if($i % 5 == 0){
            break;
        }
    }
   }
echo "----<br/>";
?>
<style>
    body{
        margin: 100px;
    }
</style>