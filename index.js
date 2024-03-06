// listando todos os dados no backend
async function listar(){ 
try{
    const lista = await fetch('http://localhost:9000/listar.php')
    const newlista = await lista.json()
    return newlista
}catch {
    
}
};
async function buscar(){
    let resultado = await listar();
    console.log(resultado);
}; 

buscar();


//Enviando Formulario para o Backend
async function enviar(v_form){ 

    const response = await fetch('http://localhost:9000/cadastro.php',{
      method:'post',
      body : v_form
    })
    
    let newResponse = await response.json()
   
    let icon = newResponse.status == 'fail' ? 'error' : 'success'

    fnMensagem(icon,newResponse.msg)
    
    // msgResponse(newResponse)
};

$('#btn_cadastrar').on('click', async ()=> {
  let v_form = new FormData(document.getElementById('form')) 
  enviar(v_form)
})

function fnMensagem(icon,msg){
  Swal.fire({
    title: msg,
    icon: icon,
    confirmButtonText: 'Ok',
    timer: 2000,
    timerProgressBar: true,
    willClose: () => {
        window.location.reload();
    }
  });
}
function msgErroCad(obj) { 
  Swal.fire({
    title: 'Erro ao Cadastrar!',
    text: obj ,
    icon: 'error',
    confirmButtonText: 'Ok'
  })
}