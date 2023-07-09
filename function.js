function openLoginForm(){
    document.getElementById("modal").classList.remove("close");
    document.getElementById("login-form").classList.remove("close");
}

function openRegisterForm(){
    document.getElementById("modal").classList.remove("close");
    document.getElementById("register-form").classList.remove("close");
}

function closeLoginForm(){
    document.getElementById("modal").classList.add("close");
    document.getElementById("login-form").classList.add("close");
}

function closeRegisterForm(){
    document.getElementById("modal").classList.add("close");
    document.getElementById("register-form").classList.add("close");
}

function switchLogin(){
    document.getElementById("login-form").classList.add("close");
    document.getElementById("register-form").classList.remove("close");
}

function switchRegister(){
    document.getElementById("register-form").classList.add("close");
    document.getElementById("login-form").classList.remove("close");
}

// document.getElementById("login").addEventListener("click", openLoginForm)

// document.getElementById("register").addEventListener("click", openRegisterForm)

// document.getElementById("x-login").addEventListener("click", closeLoginForm)

// document.getElementById("x-register").addEventListener("click", closeRegisterForm)

// document.getElementById("switch-login").addEventListener("click", switchLogin)
// document.getElementById("switch-register").addEventListener("click", switchRegister)

document.getElementById("modal").addEventListener("click", function(){
    document.getElementById("modal").classList.add("close");
    document.getElementById("login-form").classList.add("close");
    document.getElementById("register-form").classList.add("close");
})

const register_form = document.getElementById("register-form");
register_form.addEventListener("click", function(e){
    e.stopPropagation();
})

const login_form = document.getElementById("login-form");
login_form.addEventListener("click", function(e){
    e.stopPropagation();
})


// validate login & register
function checkPhone(){
    const isVNPhoneMobile = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;
    phonenumber = document.getElementById("phonenumber");
    err_phone = document.getElementById("err-phonenumber");
    btn_register = document.getElementById("btn-register");
    if(phonenumber.value == "") {
        err_phone.innerHTML = "Bạn chưa nhập số điện thoại";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else if(isVNPhoneMobile.test(phonenumber.value)==false){
        err_phone.innerHTML = "Số điện thoại không hợp lệ";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else {
        err_phone.innerHTML = "";
        btn_register.classList.add("btn");
        btn_register.classList.add("btn-primary");
        btn_register.disabled = false;
        return true;
    }
}
function checkName(){
    regex = /^[a-zA-Z]+(\s[a-zA-Z]+){1,4}$/;
    fullname = document.getElementById("fullname");
    err_name = document.getElementById("err-name");
    btn_register = document.getElementById("btn-register");
    if(fullname.value == ""){
        err_name.innerHTML = "Bạn chưa nhập họ tên";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else if(regex.test(fullname.value)==false){
        err_name.innerHTML = "Tên không hơp lệ";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else {
        err_name.innerHTML = "";
        btn_register.classList.add("btn");
        btn_register.classList.add("btn-primary");
        btn_register.disabled = false;
        return true;
    }
}
function checkPass(){
    const pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    password = document.getElementById("password");
    err_pass = document.getElementById("err-password");
    btn_register = document.getElementById("btn-register");
    if(password.value == ""){
        err_pass.innerHTML = "Bạn chưa password";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else if(pass.test(password.value)==false){
        err_pass.innerHTML = "Password không hợp lệ";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else {
        err_pass.innerHTML = "";
        btn_register.classList.add("btn");
        btn_register.classList.add("btn-primary");
        btn_register.disabled = false;
        return true;
    }
}
function checkRePass(){
    const pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    password = document.getElementById("password");
    repassword = document.getElementById("re-password");
    err_repass = document.getElementById("err-re_password");
    btn_register = document.getElementById("btn-register");
    if(repassword.value == ""){
        err_repass.innerHTML = "Bạn chưa nhập lại Password";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else if(repassword.value != password.value){
        err_repass.innerHTML = "Password không trùng khớp";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else if(pass.test(repassword.value)==false){
        err_repass.innerHTML = "Password không hợp lệ";
        btn_register.classList.remove("btn");
        btn_register.classList.remove("btn-primary");
        btn_register.disabled = true;
        return false;
    }
    else {
        err_repass.innerHTML = "";
        btn_register.classList.add("btn");
        btn_register.classList.add("btn-primary");
        btn_register.disabled = false;
        return true;
    }
}
function checkRegister(){
    checkPhone();
    checkName();
    checkPass();
    checkRePass();
}
