fun main() {
println("digite a sua idade")
val idade = readLine()!!.toInt()
    if(idade < 18){
        println("Voce e menor de idade ")
        
    }else{
        println("Voce e maior de idade ")
        
    }
}