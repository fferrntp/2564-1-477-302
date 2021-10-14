<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $semester_fee = 16000;
        $g_discount = 0.5;
        $u_discount = 0.2;

        $fee_after_u_discount = $semester_fee * (1-$u_discount);
        "fee after university discount (20%) ". $fee_after_u_discount."baht";

        $fee_after_g_discount = $fee_after_u_discount * (1-($g_discount - $u_discount));
        echo " <div>fee after g discount (30%) " . $fee_after_g_discount. " baht</div> ";


        $discount = 0.2;

        // $hello = "Hello\"Monday\"";
        // echo $hello;

        $hello = "Hello\"Monday\"";
        echo "This is an example of string : $hello";
        // echo "<br>";
        echo "<div>This is an example of string: " . $hello;
    ?>
</body>
</html>







<!-- <center>
    <footer style='color:blue'><h3>hi</h3> </footer>
</center> -->
