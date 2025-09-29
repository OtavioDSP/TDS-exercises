from PyQt5 import uic, QtWidgets
from PyQt5.QtWidgets import QMessageBox
from cmath import sqrt

pacientes = [] 

def sair(): #FUNCIONA
    result = QMessageBox.question(prog, "Saindo dao programa", "Deseja mesmo sair?", QMessageBox.Yes, QMessageBox.No)
    if result == QMessageBox.Yes:
        prog.close()
def adiciona():
    nome = prog.editNome.text().strip() # .strip() remove espaços em branco no início e fim

    # 1. Verificação de campo vazio
    if not nome:
        QMessageBox.warning(prog, "Atenção!", "O nome do paciente não pode estar em branco.")
        return # Para a execução da função aqui

    # 2. Verificação de nome duplicado
    if nome in pacientes:
        QMessageBox.warning(prog, "Atenção!", "Este paciente já está na lista.")
        return # Para a execução da função aqui também

    # 3. Se tudo estiver OK, adiciona
    pacientes.append(nome)
    prog.listEspera.addItem(nome) # Adiciona na lista visual
    prog.editNome.clear()
    print(f"Pacientes na lista: {pacientes}")
def mostra_dados():
    lastP = "" #variável para comparar o último paciente adicionado
    tam = len(pacientes) #lê o tamanho do vetor
    for i in range(tam):
        print(lastP)


        if pacientes[i] != lastP:
            lastP = pacientes[i]
            prog.listEspera.addItem(lastP)
           

        else:
            QMessageBox.warning(prog, "Atenção!", "O usuário não pode ser o mesmo.")  
            

def limpar():
    if len(pacientes) == 0:
        QMessageBox.about(prog, "Erro", "Nenhum paciente na lista.")
    else:
        pacientes.clear()
        prog.listEspera.clear()
        prog.listAtendimento.clear()


app = QtWidgets.QApplication([])

prog = uic.loadUi("lista.ui")
prog.btnMostrarDados.clicked.connect(mostra_dados)
prog.btnFechar.clicked.connect(sair)
prog.btnAdicionar.clicked.connect(adiciona)
prog.btnLimpar.clicked.connect(limpar)
prog.show()
app.exec()
