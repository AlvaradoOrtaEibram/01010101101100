btnCloseLogin = document.getElementById('closeLoginBtn');
loginWrapper = document.querySelector('.login-wrapper');
loginContainer = document.querySelector('.login-container');
btnOpenLogin = document.querySelector(".openLoginBtn")


function closeLogin(){
  loginWrapper.style.transition = "opacity .7s ease";
  loginContainer.style.transition = "transform .7s ease";
  loginWrapper.style.opacity = "0";
  loginContainer.style.transform = "translateY(200%)";
  setTimeout(() => {
    loginWrapper.style.display = "none";
    loginContainer.style.display = "none";
    loginWrapper.style.transition = "none";
  loginWrapper.style.transition = "none";
  }, 700);
}


function openLogin(){
  loginWrapper.style.display = "flex";
  loginWrapper.style.opacity = "0";
  loginContainer.style.transform = "translateY(200%)";
  loginContainer.style.display = "flex";
  loginWrapper.style.transition = "none";
  loginWrapper.style.transition = "none";


  setTimeout(() => {
    loginWrapper.style.transition = "opacity .7s ease";
  loginContainer.style.transition = "transform .7s ease";
    loginWrapper.style.opacity = "1";
  loginContainer.style.transform = "translateY(0)";
}, 0);
  
}

btnCloseLogin.addEventListener("click",closeLogin);
btnOpenLogin.addEventListener("click",openLogin);
