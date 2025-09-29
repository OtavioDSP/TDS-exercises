from PyQt5 import uic, QtWidgets
from PyQt5.QtWidgets import QMessageBox



# Função para sair do programa
def sair():
    result = QMessageBox.question(
        calc,
        "Saindo da calculadora",
        "Deseja mesmo sair da calculadora?",
        QMessageBox.Yes | QMessageBox.No
    )
    if result == QMessageBox.Yes:
        calc.close()

# Função para calcular
def calcular():
    # Pegando os números digitados
    num1_text = calc.inputNum1.toPlainText()
    num2_text = calc.inputNum2.toPlainText()

    # Verificação de campos vazios
    if num1_text == "":
        QMessageBox.about(calc, "Primeiro Número", "Nenhum número foi digitado.")
        return
    if num2_text == "":
        QMessageBox.about(calc, "Segundo Número", "Nenhum segundo número foi digitado.")
        return

    try:
        num1 = float(num1_text)
        num2 = float(num2_text)
    except ValueError:
        QMessageBox.about(calc, "Erro", "Digite apenas números válidos!")
        return

    # Verificando qual operação foi escolhida
    if calc.rdbSoma.isChecked():
        resultado = num1 + num2
    elif calc.rdbSubtrai.isChecked():
        resultado = num1 - num2
    elif calc.rdbMultiplica.isChecked():
        resultado = num1 * num2
    elif calc.rdbDivide.isChecked():
        if num2 == 0:
            QMessageBox.about(calc, "Erro", "Divisão por zero não é permitida!")
            return
        resultado = num1 / num2
    else:
        QMessageBox.about(calc, "Erro", "Nenhuma operação selecionada!")
        return

    # Exibir o resultado em uma QMessageBox
    QMessageBox.information(calc, "Resultado", f"O resultado é: {resultado:.2f}")

# Função para limpar os campos
def limpar():
    calc.inputNum1.clear()
    calc.inputNum2.clear()

# Programa principal
app = QtWidgets.QApplication([])
calc = uic.loadUi("calc2.ui")

# Conectando os botões às funções
calc.btnCalc.clicked.connect(calcular)
calc.btnLimp.clicked.connect(limpar)

calc.show()
app.exec()
