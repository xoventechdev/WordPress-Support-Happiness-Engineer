<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Operator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col h-250 bg-primary p-5 text-white text-center">
                <h1>মডিউল ৪: প্রোগ্রামিং ল্যাঙ্গুয়েজ (পিএইচপি)</h1>
                <p class="p-3">পিএইচপি বেসিক – অপারেটর – পর্ব ৫</p>

            </div>
        </div>
        <div class="row">
            <div class="col code-box py-5 text-white">
                <div class="input">
                    <h2>PHP code</h2>
                    <textarea class="w-100 p-3 bg-white text-dark fs-4" name="codearea" id="codearea" cols="30" rows="10">
                        $x = 200;
                        $y = 20;
                        
                        echo "Returns true if \$x is equal to \$y	: " ;
                        var_dump($x == $y);
                        echo "<br>";
                        echo "Returns true if \$x is equal to \$y, and they are of the same type : ";
                        var_dump($x === $y);
                        echo "<br>";
                        echo "Returns true if \$y is equal to \$y, and they are of the same type : ";
                        var_dump($y === $y);
                        echo "<br>";
                        echo "Returns true if \$x is not equal to \$y	: ";
                        var_dump($y != $y);
                        echo "<br>";
                        echo "Returns true if \$x is not equal to \$y, or they are not of the same type : ";
                        var_dump($y !== $y);
                        echo "<br>";
                        echo "Returns true if \$x is greater than \$y : " ;
                        var_dump($x > $y);
                        echo "<br>";
                        echo "Returns true if \$x is less than \$y : ";
                        var_dump($x < $y);
                        echo "<br>";
                        echo "Returns true if \$x is greater than or equal to \$y	: ";
                        var_dump($y >= $y);
                        echo "<br>";
                        echo "Returns true if \$x is less than or equal to \$y : " ;
                        var_dump($x <= $y);
                    </textarea>
                </div>
                <div class="output">
                    <h2>Result</h2>
                    <p class="w-100 p-3 bg-white text-dark  fs-4">

                    <?php

                        $x = 200;
                        $y = 20;
                        echo '$x = 200 <br/>
                        $y = 20 <br/>';
                        
                        echo "Returns true if \$x is equal to \$y	: " ;
                        var_dump($x == $y);
                        echo "<br>";
                        echo "Returns true if \$x is equal to \$y, and they are of the same type : ";
                        var_dump($x === $y);
                        echo "<br>";
                        echo "Returns true if \$y is equal to \$y, and they are of the same type : ";
                        var_dump($y === $y);
                        echo "<br>";
                        echo "Returns true if \$x is not equal to \$y	: ";
                        var_dump($y != $y);
                        echo "<br>";
                        echo "Returns true if \$x is not equal to \$y, or they are not of the same type : ";
                        var_dump($y !== $y);
                        echo "<br>";
                        echo "Returns true if \$x is greater than \$y : " ;
                        var_dump($x > $y);
                        echo "<br>";
                        echo "Returns true if \$x is less than \$y : ";
                        var_dump($x < $y);
                        echo "<br>";
                        echo "Returns true if \$x is greater than or equal to \$y	: ";
                        var_dump($y >= $y);
                        echo "<br>";
                        echo "Returns true if \$x is less than or equal to \$y : " ;
                        var_dump($x <= $y);
                    ?>   

                    </p>

                </div>
            </div>
        </div>
        <footer class="row">
            <div class="col bg-primary p-3 d-flex flex-column align-items-center text-white">
                <h4>Web developed by XovenTech</h4>
                <p>Copyrights © 2023</p>
            </div>
        </footer>
    </div>



</body>
</html>