
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
      let reload = newResponse.status=='fail' ? false : true
  
      fnMensagem(icon,newResponse.msg,reload)
      
     
  };
  
  $('#btn_cadastrar').on('click', async ()=> {
    let v_form = new FormData(document.getElementById('form')) 

    enviar(v_form)
  })
  
  function fnMensagem(icon,msg,reload=false){
    Swal.fire({
      title: msg,
      icon: icon,
      confirmButtonText: 'Ok',
      timer: 2500,
      timerProgressBar: true,
      willClose: () => {
        
        if(reload){
          window.location.reload();
      }
    }
    });
  }



  document.body.addEventListener("pointermove", (e)=>{
    const { currentTarget: el, clientX: x, clientY: y } = e;
    const { top: t, left: l, width: w, height: h } = el.getBoundingClientRect();
    el.style.setProperty('--posX',  x-l-w/2);
    el.style.setProperty('--posY',  y-t-h/2);
  })