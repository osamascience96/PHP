var email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+")){7,}@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function register(){
    var name = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password_register").value;

    // check if the value of all the fields must not be empty
    if(name === "" || username === "" || email === "" || password === ""){
        var message = "All Fields are required";
        $('#alert-placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
    }else{
        let bool = false;

        if(name.length <= 3){
            bool = true;
            var message = "The Name must be atlest 4 characters long";
            $('#alert-placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
        }

        if(username.length <= 5){
            bool = true;
            var message = "The Username must be atlest 6 characters long";
            $('#alert-placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
        }

        if(email_regex.test(email) === false){
            bool = true;
            var message = "Invalid Email";
            $('#alert-placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
        }

        if(password.length <= 7){
            bool = true;
            var message = "Password must be atleast 8 characters long";
            $('#alert-placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
        }

        if(bool === false){
            register_user(name, username, email, password);
        }
    }
}

function login(username_email, password){
    var username_email = document.getElementById("username_email").value;
    var password = document.getElementById("password").value;

    if(username_email === "" || password === ""){
        var message = "All Fields are required";
        $('#alert_place_holder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
    }else{
        check_login(username_email, password);
    }
}


async function checkout(){
    fetch("http://" + server_name + "/" + server_root_folder + "/product/Checkout", {
        method: 'get',
        redirect: 'follow'
    }).then(response => response.json())
            .then(result => {
                if(result === "updated_successfully"){
                    window.location.replace("http://" + server_name + "/" + server_root_folder);
                }
            });
}

async function register_user(name, username, email, password){
    var headers = new Headers();
    headers.append("Content-Type", "application/x-www-form-urlencoded");
    
    var urlencoded = new URLSearchParams();
    urlencoded.append("name", name);
    urlencoded.append("username", username);
    urlencoded.append("email", email);
    urlencoded.append("password", password);
    
    fetch("http://" + server_name + "/" + server_root_folder + "/home/register", {
        method: 'post',
        headers: headers,
        body: urlencoded,
        redirect: 'follow'
    }).then(response => response.json())
            .then(result => {
                var message = "";
                var alert_type = "";
                if(result === "inserted_user"){
                    alert_type = "success";
                    message = "User Registered Successfully";
                }else{
                    alert_type = "danger";
                    message = "User already exists";
                }
                $('#alert-placeholder').html('<div class="alert alert-'+alert_type+'"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
            });
}

async function check_login(username_email, password){
    var headers = new Headers();
    headers.append("Content-Type", "application/x-www-form-urlencoded");
    
    var urlencoded = new URLSearchParams();
    urlencoded.append("username_email", username_email);
    urlencoded.append("password", password);
    
    fetch("http://" + server_name + "/" + server_root_folder + "/home/login_check", {
        method: 'post',
        headers: headers,
        body: urlencoded,
        redirect: 'follow'
    }).then(response => response.json())
            .then(result => {
                var message = "";
                var alert_type = "";
                if(result === "login_success"){
                    alert_type = "success";
                    message = "User Login Successfully";
                    window.location.replace("http://" + server_name + "/" + server_root_folder);
                }else{
                    alert_type = "danger";
                    message = "User Login Failed";
                }
                $('#alert_place_holder').html('<div class="alert alert-'+alert_type+'"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span></div>');
            });
}

async function addtocart(userid, productid){
    var headers = new Headers();
    headers.append("Content-Type", "application/x-www-form-urlencoded");

    var urlencoded = new URLSearchParams();
    urlencoded.append("userid", userid);
    urlencoded.append("productid", productid);

    fetch("http://" + server_name + "/" + server_root_folder + "/product/addcart", {
        method: 'post',
        headers: headers,
        body: urlencoded,
        redirect: 'follow'
    }).then(response => response.json())
    .then(result => {
        $("#shop_count").html(result.length);
    });
}

async function fetchcart(){
    fetch("http://" + server_name + "/" + server_root_folder + "/product/GetAllUserCart", {
        method: 'get',
        redirect: 'follow'
    }).then(response => response.json())
    .then(result => {
        $("#shop_count").html(result.length);
    });
}

fetchcart();