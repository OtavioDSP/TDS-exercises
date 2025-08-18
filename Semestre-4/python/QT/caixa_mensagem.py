#importar bibliotecas:
from PyQt5 import uic,QtWidgets
from PyQt5.QtWidgets import QMessageBox

def exibir_mensagem():
    dado_lido = janela.lineEdit.text()
    print(dado_lido)
    janela.lineEdit.setText("")
    if dado_lido=="":
        QMessageBox.about(janela,"Nome:", "Nenhum nome foi digitado")
    else:
        QMessageBox.about(janela,"Nome:", "Olá, "+dado_lido)
#programa principal


def fechar_tela():
    result = QMessageBox.question(janela, "Saindo do sistema", "Deseja mesmo sair do sistema?", QMessageBox.Yes, QMessageBox.No)
    if result == QMessageBox.Yes:
        janela.close()

def listar_dados():
#Nome
    dado_lido = janela.LeNome.text()
#Confere Nome se n estiver vazio
    if dado_lido=="":
        QMessageBox.about(janela,"Nome:", "Nenhum nome foi digitado")
    else:
#Idade
        dado_lido2 = janela.LeIdade.text()
#Confere Idade se n estiver vazio
    if dado_lido2=="":
        QMessageBox.about(janela,"Idade:", "Idade Vazia")
    else:
#Sexo
        if janela.rb1.isChecked():
            dado_lido3= 'M'
        elif janela.rb2.isChecked():
            dado_lido3= 'F'
        else:
            dado_lido3= 'ND'
#Escolaridade
    dado_lido4=janela.cbnivel.currentText()
#Juntar tudo
    dados = "Nome: "+dado_lido+"\nIdade: "+dado_lido2+"\nSexo: "+dado_lido3+"\nEscolaridade: "+dado_lido4
#Limpar
    janela.lenome.setText("")
    janela.leidade.setText("")
#Adicionar a Lista msm
    janela.lista.addItem(dados)
#Contador
    contar_itens()
  
def deletar():
    result = QMessageBox.question(janela, "Excluir Itens", "Deseja mesmo excluir todos os itens da Lista?", QMessageBox.Yes, QMessageBox.No)
    if result == QMessageBox.Yes:
        janela.lista.clear()
        contar_itens()
def contar_itens():
    valor = janela.lista.count()
    janela.lbconta.setText("Nº de Itens: " + str(valor))
def ordenar():
    janela.lista.sortItems()




    
        
app=QtWidgets.QApplication([])
janela=uic.loadUi("caixa_mensagem.ui")
janela.btadicionar.clicked.connect(listar_dados)
janela.btexcluir.clicked.connect(deletar)
janela.btadicionar.clicked.connect(contar_itens)
janela.btordenar.clicked.connect(ordenar)
janela.btfechar.clicked.connect(fechar_tela)
janela.pushButton.clicked.connect(exibir_mensagem)
janela.show()
app.exec()