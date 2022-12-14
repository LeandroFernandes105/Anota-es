// criando uma função para pegar os valores do input atráves do id dele

const pwd = document.getElementById('pwd');

const pwd2 = document.getElementById('pwd2');



//validação dos campos

function validate(item) {

    item.setCustomValidity('');

    item.checkValidity();



    

    if (item == pwd2){

        if(item.value === pwd.value) item.setCustomValidity('');

        else item.setCustomValidity('As senhas digitadas não são iguais. Verifique e corrija.');

    }

}






















 







//solicita validação a cada alteração de entrada

pwd.addEventListener('input', function(){validate(pwd)});

pwd2.addEventListener('input', function(){validate(pwd2)})