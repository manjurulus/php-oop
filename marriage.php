<?php 
$name = 'Nazma Haque';
$year = 2010;
$gender = 'Female';

// get user age
$age = 2024 - $year;

// find marriage age
$marriageAge = Null;
$somvodhon = Null;

switch ($gender) {
    case 'Male':
        $marriageAge = 21;
        $somvodhon = 'Vaiyaaaa';
        break;
    
    case 'Female':
        $marriageAge = 18;
        $somvodhon = 'Apuuu';
        break;
    default:
        $marriageAge = 21;
        break;
}

// now send msg
if($age >= $marriageAge){
    echo "Hello {$name} {$somvodhon}, you are ready for marriage";
}else{
    $wait = $marriageAge - $age;
    echo "Hello {$name} {$somvodhon}, we are sorry, you have to wait {$wait} years";
}
?>