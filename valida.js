function validar(){
  var login = cadastro.login.value
  var senha = cadastro.senha.value

if(login == ""){
  alert('Preencha o campo de login')
  cadastro.login.focus()
  return false
}

if(senha =="" || senha.length <=5){
  alert('Preencha o campo de senha com 6 ou mais caracteres')
  cadastro.senha.focus()
  return false
}
}