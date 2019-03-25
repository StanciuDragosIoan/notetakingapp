// register new user
function registerNewUser(){
    const emailAddress = document.querySelector("#emailAddress");
    const password = document.querySelector("#loginPassword");
    const data  = {
        user: emailAddress.value,
        password: password.value
    }
    console.log(data);
    const http = new EasyHTTP;
    // console.log(http);
    //Create User
    http.post('http://localhost/notesapp/database.php', data)
    .then(data => console.log(data))
    .catch(err => console.log(err));

}

const signUpBtn = document.querySelector("#signUp");
signUpBtn.addEventListener('click', registerNewUser);