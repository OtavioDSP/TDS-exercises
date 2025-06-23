
let estado
const ligaLampada = (interruptorEstado) => {
    document.getElementById('lampada').style.backgroundImage = "url('imgs/lampada_on.jpg')";

    console.log(estado);
    if(interruptorEstado == false){
        mudaInterruptor(estado);
        return false;

    }else if(interruptorEstado == true){
        mudaInterruptor(estado);
        return true;
    }

    
    
    

    
}; 

const mudaInterruptor = (ligaLampada) => {
    
    if(ligaLampada == false){
        console.log("deu")
        document.getElementById('interruptor').style.backgroundImage = "url('imgs/interruptor_on.jpg')"
        return true;

    }else{
        document.getElementById('interruptor').style.backgroundImage = "url('imgs/interruptor_off.jpg')"
        return false
    }


};
document.getElementById('interruptor').addEventListener('click', () => {
        estado = ligaLampada(estado);
        console.log("Estado atual:", estado);
    });

// 

