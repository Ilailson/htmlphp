function createUser(){
    //pegando os elemeneto que o usuário digitar na tela.
    const name = document.getElementById('name').value
    const cpf = document.getElementById('cpf').value
    const address = document.getElementById('address').value
    const phone = document.getElementById('phone').value
    const email = document.getElementById('email').value

    //criando formulario 

    const form = new FormData()

    //pegando os valores e botando no formulario. 
    form.append('name', name);
    form.append('cpf', cpf);
    form.append('address', address);
    form.append('phone', phone);
    form.append('email', email);

    //passando para cadastro no php.
    //definindo url
    const url = 'http://localhost:81/youtube/cadastro.php'

    fetch(url, {
        method: 'POST',
        body: form
    }).then(response => {
        response.json().then(result => {
           console.log(result) 
        })
    }).catch(err => console.error(err));
}