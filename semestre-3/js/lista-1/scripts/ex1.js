const qtdQuartos = () => {
    let num = Math.floor(Math.random() * 11);
    document.getElementById('placeholder').innerText = num;
    return num;
};
const led = (qtdQuartos)=>{
    if(qtdQuartos != 0){
        document.getElementById('led').style.background = "green";
        document.getElementById('led').style.boxShadow = "0 0 10px green"; 
    }
}
const atualizar = () => {
    const valor = qtdQuartos(); 
    led(valor);
};


console.log(qtdQuartos())
window.onload = atualizar();
