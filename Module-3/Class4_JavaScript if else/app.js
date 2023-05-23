



var number = prompt("Enter a number: between 40 to 60");

if(isNaN(number)){
    console.log("This is not a number");
}else {
    console.log("This is a number.");

    if(number > 50){
        console.log("It's greater than 50. It's "+ number);
    }if(number < 50){
        console.log("It's less than 50. It's "+ number);
    }if (number == 50){
        console.log("It's 50.");
    }
}




document.getElementById("demo").innerHTML = "var number = prompt(\"Enter a number: between 40 to 60\");<br/><br/> if(isNaN(number)){<br/>console.log(\This is not a number\");<br/>}else {<br/>console.log(\"This is a number.\");<br/><br/>if(number > 50){<br/>console.log(\It's greater than 50. It's \"+ number);<br/>}if(number < 50){<br/>console.log(\"It's less than 50. It's \"+ number);<br/>}if (number == 50){<br/> console.log(\"It's 50.\");<br/>}<br/> }";