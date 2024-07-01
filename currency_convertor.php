<html>
    <head><title>Basic Currency Converter in PHP</title></head>
    <body align="center">
        <h1>Basic Currency Converter in PHP</h1>
        <form action="currency_convertor.php" method="get">
            Enter Currency : <input type="text" name="input" />
            Select Currency :
            <select name="dropdown">
                <option value="usd">Us Dollar</option>
                <option value="ero">Euro</option>
                <option value="gbp">British Pound</option>
            </select>
            <input type="submit" name="sbmt" value="Convert" />
        </form>
        
    </body>
</html>

<?php 
    if(isset($_GET['sbmt'])){
        $cc_input = $_GET['input'];
        $cc_dropdown = $_GET['dropdown'];
        if($cc_dropdown == 'usd'){
            $output = $cc_input * 0.0085;
            echo "<h1>" . number_format($output,2) . " Dollar" . "</h1>";
        }elseif($cc_dropdown == 'ero'){
            $output = $cc_input * 0.007922;
            echo "<h1>" . number_format($output,2) . " Euro" . "</h1>";
        }elseif($cc_dropdown == 'gbp'){
            $output = $cc_input * 0.0067;
            echo "<h1>" . number_format($output,2) . " British Pound" . "</h1>";
        }
    }
?>