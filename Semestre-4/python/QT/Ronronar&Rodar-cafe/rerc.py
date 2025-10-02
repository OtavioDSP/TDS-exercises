from class_gato import gato;
from PyQt5 import uic, QtWidgets
from PyQt5.QtWidgets import QMessageBox


arrayGatos = []

def sair(): #FUNCIONA
    result = QMessageBox.question(prog, "Saindo dao programa", "Deseja mesmo sair?", QMessageBox.Yes, QMessageBox.No)
    if result == QMessageBox.Yes:
        prog.close()



def cadastrarGato():
    nome = prog.lineGato.text()
    carro = prog.lineCarro.text()
    
    if nome and carro:
        novoGato = gato(nome,carro)
        arrayGatos.append(novoGato)

        prog.lista_gato.addItem(f"Nome: {novoGato.nome} - Carro: {novoGato.carro} lanche: {novoGato.lanche}")
        prog.lineGato.clear()
        prog.lineCarro.clear()




def limpar():
    if len(arrayGatos) == 0:
        QMessageBox.about(prog, "Erro", "Nenhum gato na lista.")
    else:
        arrayGatos.clear()
        prog.lista_gato.clear()




app = QtWidgets.QApplication([])
prog = uic.loadUi("untitled.ui")

prog.btnFechar.clicked.connect(sair)
prog.btnAdicionar.clicked.connect(cadastrarGato)
prog.btnLimpar.clicked.connect(limpar)
prog.show()
app.exec()