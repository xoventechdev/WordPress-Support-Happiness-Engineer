
var toConsoleFor = "Even - Odd check with for loop<br/>";

for (let index = 1; index <= 10; index++) {
    if(index % 2 == 0){
        toConsoleFor += index + " is a even number. <br/>";
    }else{ 
        toConsoleFor += index + " is a odd number. <br/>";
    }
}


var toConsoleDoWhile = "Even - Odd check with do-while loop<br/>";
var index = 20;
do {
    if(index % 2 == 0){
        toConsoleDoWhile += index + " is a even number. <br/>";
    }else{ 
        toConsoleDoWhile += index + " is a odd number. <br/>";
    }
    index++
} while (index <= 28);



var toConsoleWhile = "Even - Odd check with while loop<br/>";
var number = 35;
while (number <= 42) {
    if(number % 2 == 0){
        toConsoleWhile += number + " is a even number. <br/>";
    }else{ 
        toConsoleWhile += number + " is a odd number. <br/>";
    }
    number++
}


document.getElementById("code_console").innerHTML  = toConsoleFor +"<br/>"+ toConsoleDoWhile +"<br/>"+ toConsoleWhile;
