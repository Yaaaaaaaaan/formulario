const form = document.getElementById("form");
const username = document.getElementById("username")
const email = document.getElementById("email")
const password = document.getElementById("password")
const passwordConfirmation = document.getElementById("password-confirmation");



form.addEventListener("submit", (Event)=> {
    Event.preventDefault();

    checkInputUsername();
})


function checkInputUsername(){
    const usernameValue = username.value;

    if(usernameValue === ""){
        erroInput(username,"Preencha um username!")
    }else{
        const formItem = username.parentElement;
        formItem.className = "form-content"
    }
}


function checkInputEmail(){
    const emailValue = email.value;

    if( emailValue === ""){
        erroInput(username,"Preencha um emai!")
    }else{
        const formItem = email.parentElement;
        formItem.className = "form-content"
    }
}

function checkInputPassword(){
    
    const passworValue = email.value;

    if( passwordValue === ""){
        erroInput(username," A senha é obrigatória.")
    }else if(passworValue.length < 6){
        erroInput(password, "A senha precisa ter no minimo 6 caracteres")
    }else{
        const formItem =  passaword.parentElement;
        formItem.className = "form-content"
    }
      
function erroInput(input, message){
    const formItem = input.parentElement;
    const textMessage = formItem.querySelector("a")

    textMessage.innerText = message;

    formItem.className = "form-content error";
}