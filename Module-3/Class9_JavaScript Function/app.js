
function welcome(){
    console.log('Webcome to my house.')
}

welcome();
welcome();


function wordCount(string){
    return string.length;
}

console.log(wordCount('Bangladesh'));
console.log(wordCount('Bangladesh India vai vai'));


function accessBook(item){
    item.soldOut = true;
}

var books = new Object();
books.id = 1;
books.name = 'Bangladesh';
books.soldOut = false;

if(!books.soldOut){
    console.log(books.name+' is available in our store.')
}else{
    console.log(books.name+' is not available in our store.')
}

accessBook(books);

if(!books.soldOut){
    console.log(books.name+' is available in our store.')
}else{
    console.log(books.name+' is not available in our store.')
}



