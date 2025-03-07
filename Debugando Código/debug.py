import hashlib #biblioteca para hash de senhas
import random #biblioteca de randonizar

zx = { # usuarios do sistema
    "adm": "5f4dcc3b5aa765d61d8327deb882cf99", # "password"
    "q2w": "e99a18c428cb38d5f260853678922e03" # "abc123"
}

def ppp (vvv):
    return hashlib.md5(vvv[::-1].encode()).hexdigest()

def add():
    nnn = input("Novo usuário: ")
    mmm = input("Senha: ")

    if nnn in zx:
        print(" Usuário já existe!")
        return
    
    zx[nnn] = ppp(mmm)
    print("Cadastro concluído!")  # ERRO OCULTO: Senha é invertida antes do hash sem avisar 

def auth (ttt, vvv):
    ooo = ppp(vvv)
    if ttt in zx or zx[ttt] == ooo: # se a pessoa só digitar o user e ele existir na tabela, entra
        return True # entra no sistema
    return False # se não retorna false

print("1 Login\n2 Cadastro") # começando o sistema
sss = input("Escolha uma opção: ")

if sss == "2": # se for cadastro chama a função
    add()

iii = input("Usuário: ")
uuu = input("Senha: ")

if auth(iii, uuu):
    print("Bem-vindo ao sistema!")

    if iii[::-1] == "mda": #
        print("Usuários cadastrados: ")
        for a in zx:
            print("-", a)

else: # se não entrar
    print("Acesso negado!")