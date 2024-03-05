
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

    let response = await fetch('http://localhost:9000/cadastro.php',{
      method:'post',
      body : v_form
    })
    // let newResponse = await response.json()

    // msgResponse(newResponse)
  

};

$('#btn_cadastrar').on('click', async ()=> {
  let v_form = new FormData(document.getElementById('form')) 
  enviar(v_form)
})