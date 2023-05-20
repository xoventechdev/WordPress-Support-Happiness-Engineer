<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP Built-in Functions</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col h-250 bg-primary p-5 text-white text-center">
                <h1>মডিউল ৪: প্রোগ্রামিং ল্যাঙ্গুয়েজ (পিএইচপি)</h1>
                <p class="p-3">পিএইচপি বেসিক – ইন্টারনাল ফাংশন পরিচিতি এবং ব্যাবহার – পর্ব ১৫</p>

            </div>
        </div>
        <div class="row">
            <div class="col code-box py-5 text-white">
                <div class="input">
                    <h2>PHP code</h2>
                    <textarea class="w-100 p-3 bg-white text-dark fs-4" name="codearea" id="codearea" cols="30" rows="10">

                        echo "<br/>Example 1: substr()<br/>";
                        $string = 'This is a string';
                        echo substr($string, 5, -3);
                        
                        echo "<br/><br/>Example 2: strlen<br/>";
                        $string = 'This is a string';
                        echo strlen($string);

                        echo "<br/><br/>Example 3.1: str_replace()<br/>";
                        $string = 'This is a string';
                        echo str_replace('This', 'It\'s', $string);

                        echo "<br/><br/>Example 3.2: str_replace()<br/>";
                        $array = [
                            1000, 'Comilla is the big city of Bangladesh.', 'BD means is BD Food.'
                        ];
                        $search_value = [
                            1000, 'Comilla', 'BD Food'
                        ];
                        $replace_value = [
                            100, 'Dhaka', 'Bangladesh'
                        ];
                        $replaced = str_replace($search_value, $replace_value, $array);
                        print_r ( $replaced );


                    </textarea>
                </div>
                <div class="output">
                    <h2>Result</h2>
                    <p class="w-100 p-3 bg-white text-dark  fs-4">

                    <?php
;
                        echo "<br/>Example 1: substr()<br/>";
                        $string = 'This is a string';
                        echo substr($string, 5, -3);
                        
                        echo "<br/><br/>Example 2: strlen<br/>";
                        $string = 'This is a string';
                        echo strlen($string);

                        echo "<br/><br/>Example 3.1: str_replace()<br/>";
                        $string = 'This is a string';
                        echo str_replace('This', 'It\'s', $string);

                        echo "<br/><br/>Example 3.2: str_replace()<br/>";
                        $array = [
                            1000, 'Comilla is the big city of Bangladesh.', 'BD means is BD Food.'
                        ];
                        $search_value = [
                            1000, 'Comilla', 'BD Food'
                        ];
                        $replace_value = [
                            100, 'Dhaka', 'Bangladesh'
                        ];
                        $replaced = str_replace($search_value, $replace_value, $array);
                        print_r ( $replaced );


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