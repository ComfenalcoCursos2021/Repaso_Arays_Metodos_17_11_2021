addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method: "POST", 
        body:JSON.stringify({
            nombre: "aaaa"
        })
    };
    
    let peticion = await fetch('api.php', config);
    let respuesta = await peticion.text();
    console.log(respuesta);
})