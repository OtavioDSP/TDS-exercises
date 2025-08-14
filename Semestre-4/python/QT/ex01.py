 #importar bibliotecas:
from PyQt5 import uic,QtWidgets
from PyQt5.QtWidgets import QMessageBox


def exibir_mensagem():
    dado_lido = janela.lineEdit.text()
    print(dado_lido)
    janela.lineEdit.setText("")
    QMessageBox.about(janela,"alerta", dado_lido)

    #programa principal
app=QtWidgets.QApplication([])
janela=uic.loadUi("caixa_mensagem.ui")
janela.pushButton.clicked.connect(exibir_mensagem)
janela.show()
app.exec()