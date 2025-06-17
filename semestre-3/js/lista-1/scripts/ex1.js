const qtdQuartos = () => {
    let num = Math.floor(Math.random() * 11);
    document.getElementById('placeholder').innerText = num;
    return num;
};
const led = ()=>{
    if(qtdQuartos == 0){
        document.getElementById('led').background.color = "blue";
    }else{
        document.getElementById('led').style.color = "green";
    }
}
const atualizar = () => {
    const valor = qtdQuartos(); 
    led(valor);
};

window.onload = atualizar();
