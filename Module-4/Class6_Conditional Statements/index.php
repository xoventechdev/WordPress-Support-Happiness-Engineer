<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Conditional Statements</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col h-250 bg-primary p-5 text-white text-center">
                <h1>মডিউল ৪: প্রোগ্রামিং ল্যাঙ্গুয়েজ (পিএইচপি)</h1>
                <p class="p-3">পিএইচপি বেসিক – কন্ডিশন ইফ-ইলস – পর্ব ৬</p>

            </div>
        </div>
        <div class="row">
            <div class="col code-box py-5 text-white">
                <div class="input">
                    <h2>PHP code</h2>
                    <textarea class="w-100 p-3 bg-white text-dark fs-4" name="codearea" id="codearea" cols="30" rows="10">
                        $name = "Md Kamal Hosen";
                        $city = "Doha";
                        $gender = "male";
                        $pronouns  = "He";
                        $home = "Comilla";
                        $counrty = "BD";
                        $salary = 1100;
                        
                        if($name == 'Md Jamal Hosen'){
                           echo 'Hello, He is Md Jamal Hosen. <br>';
                        }else if ($name == 'Md Kamal Hosen'){
                            echo 'Hello, He is '. $name .'<br>';
                        } else {
                            echo 'Hello, He is Md unknonw Hosen <br>';
                        }


                        if($city === 'Doha'){
                            echo 'He live a Doha, Qatar. <br>';
                        } else {
                            echo 'He live a Dhaka, BD. <br>';
                        }

                        if($gender == 'male' && $pronouns == 'He'){
                            echo 'He is a web developer. <br>';
                        }else {
                            echo 'She is a web developer. <br>';
                        }

                        if($home == 'Comilla' || $counrty == 'BD'){
                            echo 'He is a bangladeshi. <br>';
                        }else {
                            echo 'He is not bangladeshi. <br>';
                        }

                        if ($salary > 1000){
                            echo 'He gets salary of thousand per month. <br>';
                        }else {
                            echo 'He gets salary less than of thousand per month. <br>';
                        }
                    </textarea>
                </div>
                <div class="output">
                    <h2>Result</h2>
                    <p class="w-100 p-3 bg-white text-dark  fs-4">

                    <?php

                        $name = "Md Kamal Hosen";
                        $city = "Doha";
                        $gender = "male";
                        $pronouns  = "He";
                        $home = "Comilla";
                        $counrty = "BD";
                        $salary = 1100;

                        echo '$name = "Md Kamal Hosen"; <br>
                        $city = "Doha"; <br>
                        $gender = "male"; <br>
                        $pronouns  = "He"; <br>
                        $home = "Comilla"; <br>
                        $counrty = "BD"; <br>
                        $salary = 1100; <br><br>';
                        
                        if($name == 'Md Jamal Hosen'){
                           echo 'Hello, He is Md Jamal Hosen. <br>';
                        }else if ($name == 'Md Kamal Hosen'){
                            echo 'Hello, He is '. $name .'<br>';
                        } else {
                            echo 'Hello, He is Md unknonw Hosen <br>';
                        }


                        if($city === 'Doha'){
                            echo 'He live a Doha, Qatar. <br>';
                        } else {
                            echo 'He live a Dhaka, BD. <br>';
                        }

                        if($gender == 'male' && $pronouns == 'He'){
                            echo 'He is a web developer. <br>';
                        }else {
                            echo 'She is a web developer. <br>';
                        }

                        if($home == 'Comilla' || $counrty == 'BD'){
                            echo 'He is a bangladeshi. <br>';
                        }else {
                            echo 'He is not bangladeshi. <br>';
                        }

                        if ($salary > 1000){
                            echo 'He gets salary of thousand per month. <br>';
                        }else {
                            echo 'He gets salary less than of thousand per month. <br>';
                        }
                        

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