import sys
from PyQt5.QtWidgets import QApplication, QMainWindow, QVBoxLayout, QPushButton, QLineEdit, QWidget
from PyQt5.uic import loadUi

class Calculadora(QMainWindow):
    def __init__(self):
        super().__init__()
        loadUi('calculadora.ui', self)

        # Inicializando os botões
        self.resultado.setReadOnly(True)  # Deixa o campo de resultado como somente leitura
        
        # Conectando botões de números
        self.botao_1.clicked.connect(lambda: self.adicionar_numero('1'))
        self.botao_2.clicked.connect(lambda: self.adicionar_numero('2'))
        self.botao_3.clicked.connect(lambda: self.adicionar_numero('3'))
        self.botao_4.clicked.connect(lambda: self.adicionar_numero('4'))
        self.botao_5.clicked.connect(lambda: self.adicionar_numero('5'))
        self.botao_6.clicked.connect(lambda: self.adicionar_numero('6'))
        self.botao_7.clicked.connect(lambda: self.adicionar_numero('7'))
        self.botao_8.clicked.connect(lambda: self.adicionar_numero('8'))
        self.botao_9.clicked.connect(lambda: self.adicionar_numero('9'))
        self.botao_0.clicked.connect(lambda: self.adicionar_numero('0'))
        
        # Conectando botões de operações
        self.botao_soma.clicked.connect(lambda: self.adicionar_operacao('+'))
        self.botao_subtracao.clicked.connect(lambda: self.adicionar_operacao('-'))
        self.botao_multiplicacao.clicked.connect(lambda: self.adicionar_operacao('*'))
        self.botao_divisao.clicked.connect(lambda: self.adicionar_operacao('/'))
        
        # Funções adicionais
        self.botao_clear.clicked.connect(self.limpar)
        self.botao_igual.clicked.connect(self.calcular)

    def adicionar_numero(self, numero):
        current_text = self.resultado.text()
        self.resultado.setText(current_text + numero)
    
    def adicionar_operacao(self, operacao):
        current_text = self.resultado.text()
        if current_text and current_text[-1] not in ['+', '-', '*', '/']:
            self.resultado.setText(current_text + operacao)

    def limpar(self):
        self.resultado.clear()

    def calcular(self):
        try:
            expression = self.resultado.text()
            resultado = eval(expression)  # Usando eval para calcular a expressão
            self.resultado.setText(str(resultado))
        except Exception as e:
            self.resultado.setText("Erro")
    

if __name__ == '__main__':
    app = QApplication(sys.argv)
    window = Calculadora()
    window.show()
    sys.exit(app.exec_())
