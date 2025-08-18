// Online Kotlin compiler to run Kotlin program online
// Print "Try programiz.pro" message

fun main() {
println("digite a sua nota")
val nota = readLine()?.toInt()
    if(nota != null && nota in 0..10){
        when(nota){
            10 -> println ("EXCELENTE")
            in 7.. 9 ->println("bom")
            in 5.. 6 -> println("regular")
            in 0.. 4 -> print("princisa melhorar")
            
            
            
            
        }    
        
        
    }else{
        println("Nota invalida")
        
    }
    
  
}