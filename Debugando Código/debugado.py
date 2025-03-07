import hashlib
import random

# Users do Sistema
zx = {
    "adm": "5f4dcc3b5aa765d61d8327deb882cf99", # "password"
    "q2w": "e99a18c428cb38d5f260853678922e03" # "abc123"
}

# Add User ao sistema
def ppp (vvv): # codificando a senha
    return hashlib.md5(vvv[::-1].encode()).hexdigest()
def add(): # add um novo user
    nnn = input("Novo usuário: ")
    mmm = input("Senha: ")

    if nnn in zx: # verificando se já existe outro user com o 'nnn'
        print(" Usuário já existe!")
        return
    
    zx[nnn] = ppp(mmm) # chamando a função de codificar a senha e adicionando user ao sistema junto da senha
    print("Cadastro concluído!")

# Login do sistema
def auth (ttt, vvv): # verificação do login
    ooo = ppp(vvv) # 'ooo' recebe a resposta da função de codificar a senha, ele pega a senha digitada pelo user e a codifica
    if ttt in zx and zx[ttt] == ooo: # se a senha digitada pelo user (Codificada) for igual a senha codificada do sistema, entra no sistema
        return True
    return False # se não, não entra

while True:
    # --- Inicio do Sistema
    print("1 Login\n2 Cadastro\n3 Sair")
    sss = input("Escolha uma opção: ")

    if sss == "2": # opção de cadastro
        add() # chamando função de adicionar novo user

    elif sss == "1": # Opção 1 - Login
        iii = input("Usuário: ")
        uuu = input("Senha: ")

        if auth(iii, uuu): # usando a função auth para verificar se a senha digitada é a mesma do sistema
            print("Bem-vindo ao sistema!")

            if iii[::-1] == "mda": # verificar se o user é o adm
                print("Usuários cadastrados: ") # lista todos os users do sistema
                for a in zx:
                    print("-", a)

        else:
            print("Acesso negado!")

    elif sss == "3":
        print("Adeus :)")
        break

    else:
        print("Por favor, digite um número entre 1, 2 ou 3")

