

var names = "Saif Ali Khan";
var toConsole;

switch (names) {
    case "Saif Ali Khan":
        console.log(names + " is an Indian actor and film producer who works in Hindi films.")
        toConsole = names + " is an Indian actor and film producer who works in Hindi films.<br/>";
        break;
    default:
        console.log("Unkown")
        toConsole = "Unkown<br/>";
        break;
}


switch (new Date().getDay()) {
   
    case 5:
        console.log("This a Holiday");
        toConsole += "This a Holiday<br/>"
        break;
    case 6:
        console.log("This a Holiday");
        toConsole += "This a Holiday<br/>"
        break;
    default:
        console.log("Wait for weekend. Weekend will come soon.");
        toConsole += "Wait for weekend. Weekend will come soon.<br/>"
}

document.getElementById("code_console").innerHTML  = toConsole;


// document.getElementById("code").innerHTML = "var names = \"Saif Ali Khan\";<br/><br/>switch (names) {<br/>case \"Saif Ali Khan\":<br/>console.log(names + \" is an Indian actor and film producer who works in Hindi films.\")<br/>break;<br/>default:<br/>console.log(\"Unkown\")<br/>break;<br/>}<br/><br/>switch (new Date().getDay()) {<br/><br/>case 5:<br/>console.log(\"This a Holiday\");<br/>break;<br/>  case 6:<br/>console.log(\"This a Holiday\");<br/>break;<br/>default:<br/>console.log(\"Wait for weekend. Weekend will come soon.\");<br/>}";