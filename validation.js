function validation (){
var name = document.forms["contact"]["name"].value;
    if (name.length < 4) {
alert("Please enter at least four characters in the name field")
            document.myForm.name.focus() ;
            return false;
}
var message = document.forms["contact"]["message"].value;
    if(message.length < 20){
alert("Please enter at least twenty characters in the message field")
            document.myForm.message.focus() ;
            return false;
}

}
