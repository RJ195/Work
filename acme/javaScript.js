/* eslint-env browser */
/* jslint devel: true */
/* eslint-disable */

function inputV(){
    alert ("If order button didnt work infomation entered is incorrect. Please re-enter your infomation and try again.");
    name = document.getElementById("name").value;
    Surname = document.getElementById("Sname").value;
    email = document.getElementById("email").value;
    


    var count =0;
    if (name.length ==0){
        count++;
        document.getElementById("name").style.borderBottomColor = "red";
        count =1;
        alert ("Name cant be empty\n");

    }else{
        document.getElementById("name").style.borderBottomColor = "white";
    }

    if (Sname.length ==0){

        document.getElementById("Sname").style.borderBottomColor = "red";
        count =1;
        alert ("Surname cant be empty\n");     
    }
    else{
        document.getElementById("Sname").style.borderBottomColor = "white";
    }


    if (email.length ==0){
        document.getElementById("email").style.borderBottomColor = "red";
        alert ("Email cant be empty\n");

    }
    else{
        document.getElementById("email").style.borderBottomColor = "white";
    }

    if (!(email.includes("@"))){
        document.getElementById("email").style.borderBottomColor = "red";
        alert ("Email must include an @ symbol \n");

    }
    else{
        document.getElementById("email").style.borderBottomColor = "white";
    }

    
    /*
    $.ajax({
        type:"POST",

        url:"PHP/connect.php",
        data:data,    // multiple data sent using ajax
        success: function (html) {

          }
      });
      */
}
             


    /* eslint-enable */
