
numeros = []
for i in range(5):
    while True:
        try:
            num = int(input("Digite o próximo número inteiro: "))
            numeros.append(num)
            break
        except ValueError:
            print("entrada inválida. digite um número inteiro.")



print("Números digitados:", numeros)


maior = max(numeros)
menor = min(numeros)
print(f"O maior número é: {maior}")
print(f"O menor número é: {menor}")


media = sum(numeros) / len(numeros)
print("média dos números é:", media)


numeros_pares = [num for num in numeros if num % 2 == 0]
print("Números pares:", numeros_pares)