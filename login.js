function validateForm() {
  const email = document.getElementById("email").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (!email.trim()) {
    alert("Por favor, preencha o campo de Email.");
    return false;
  }


  if (!password.trim()) {
    alert("Por favor, preencha o campo de Senha.");
    return false;
  }
  {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const loginMessage = document.getElementById("login-message");

  if (email !== "admin@gmail.com" || username !== "admin" || password !== "9999") {
    loginMessage.textContent = "Usuário ou senha incorretos.";
    loginMessage.style.color = "red";
    return false;
  }

  loginMessage.textContent = ""; 
  return true;
}

  return true;
}







  
