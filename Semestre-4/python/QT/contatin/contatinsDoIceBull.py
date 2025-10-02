from class_mulheres import Mulher
from PyQt5 import uic, QtWidgets
from PyQt5.QtWidgets import QMessageBox


contatinsDoIceBull = []


def sair():
    result = QMessageBox.question(prog, "Saindo do programa", "Deseja mesmo sair?", QMessageBox.Yes | QMessageBox.No)
    if result == QMessageBox.Yes:
        prog.close()


def adicionar():
    nome = prog.lineNome.text()
    idade = prog.lineIdade.text()
    profissao = prog.lineProfissao.text()
    cidade = prog.lineCidade.text()

    if nome == "" or idade == "" or profissao == "" or cidade == "":
        QMessageBox.about(prog, "Erro", "Preencha todos os campos.")
    else:
        novaMulher = Mulher(nome, idade, profissao, cidade)
        contatinsDoIceBull.append(novaMulher)
        prog.listaMulheres.addItem(str(novaMulher))   # <- mostra na tela
        QMessageBox.about(prog, "Sucesso", "Mulher cadastrada com sucesso.")

        # limpa os campos
        prog.lineNome.clear()
        prog.lineIdade.clear()
        prog.lineProfissao.clear()
        prog.lineCidade.clear()


def limpar():
    if len(contatinsDoIceBull) == 0:
        QMessageBox.about(prog, "Erro", "Nenhuma mulher na lista.")
    else:
        contatinsDoIceBull.clear()
        prog.listaMulheres.clear()
        QMessageBox.about(prog, "Sucesso", "Lista limpa com sucesso.")


app = QtWidgets.QApplication([])
prog = uic.loadUi("contatin.ui")

prog.btnSair.clicked.connect(sair)
prog.btnAdicionar.clicked.connect(adicionar)  # <- arrumado
prog.btnLimpar.clicked.connect(limpar)

prog.show()
app.exec()
