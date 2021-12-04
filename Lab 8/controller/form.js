function validation(e){
    e.preventDefault();

    var has_error = false;


    var username = document.getElementById("username");
    var err_username = document.getElementById("err_username");

    var password = document.getElementById("password");
    var err_password = document.getElementById("err_password");

    // Username
    if(username.value.length === 0) {
        err_username.innerText = "Username is required"
        has_error = true;
    } else if(username.value.length <= 3){
        err_username.innerText = "Minimum Two Characters"
        has_error = true;
    } else {
        err_username.innerText = "";
    }

    // Password
    if(password.value.length === 0) {
        err_password.innerText = "Password is required"
        has_error = true;
    } else if(password.value.length <= 3){
        err_password.innerText = "Passowrd must be 8 char"
        has_error = true;
    } else {
        err_password.innerText = "";
    }



    // console.dir(e.target);


    if(has_error === false) {
        e.target.submit();
    }
    
}

document.addEventListener("submit", validation);

 //var input_fields = document.queSelectorAll(".input_holder"ry);
// var login_btn = document.querySelector("#login_btn");

 //console.log(input_fields, login_btn);

 //input_fields.forEach(function(input_item){
   // input_item.addEventListener("keyup", function(e){
     //  e.preventDefault();
       //  console.log();
         //        if(e.target.value.length > 3){
           //  login_btn.disabled = false;
       //} else {
         //  login_btn.disabled = true;
           // login_btn.className = "submit_button disabled";
      //}     })
 
// console.log("ready");