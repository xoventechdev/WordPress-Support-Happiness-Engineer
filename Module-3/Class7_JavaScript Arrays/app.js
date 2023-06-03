
var toConsoleFor = "Even - Odd check with for loop<br/>";

var info = ['Md', 'Kamal', 'Hosen', 66425523];
console.log(info)

info[5] = 'O+';
console.log(info);

info[3] = '+97466425523';
info[4] = 'Comilla';
console.log(info);

var company = [
    {
        name : 'Stark',
        address : 'Doha',  
        mobile : 12121212
    },
    '100&',
    'islamabad'
]

console.log(company);
console.log(company[0].address)


company.push('Added with Push')
console.log(company);

company.pop();
console.log(company);

company.shift();
console.log(company);

company.unshift('MacBook');
console.log(company);

company.splice(1,1,'Replace');
console.log(company);

company.splice(2,7,'Item');
console.log(company);







// for (let index = 1; index <= 10; index++) {
//     if(index % 2 == 0){
//         toConsoleFor += index + " is a even number. <br/>";
//     }else{ 
//         toConsoleFor += index + " is a odd number. <br/>";
//     }
// }


// var toConsoleDoWhile = "Even - Odd check with do-while loop<br/>";
// var index = 20;
// do {
//     if(index % 2 == 0){
//         toConsoleDoWhile += index + " is a even number. <br/>";
//     }else{ 
//         toConsoleDoWhile += index + " is a odd number. <br/>";
//     }
//     index++
// } while (index <= 28);



// var toConsoleWhile = "Even - Odd check with while loop<br/>";
// var number = 35;
// while (number <= 42) {
//     if(number % 2 == 0){
//         toConsoleWhile += number + " is a even number. <br/>";
//     }else{ 
//         toConsoleWhile += number + " is a odd number. <br/>";
//     }
//     number++
// }


// document.getElementById("code_console").innerHTML  = toConsoleFor +"<br/>"+ toConsoleDoWhile +"<br/>"+ toConsoleWhile;
