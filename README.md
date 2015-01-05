# Flowman

## Requisitos Mínimos
Para prosseguir com a configuração, há a necessidade de alguns requisitos prévios. A lista abaixo apresenta quais
são eles:
* Servidor deve estar com o Sistema Operacional LINUX;
* A biblioteca LXC deve estar instalada;
* Apache2 e PHP devem estar configurados; e
* Java deve estar instalado;

## Instalação
Esse manual ensinará como instalar o Flowman e seus requisitos no sistema operacional Ubuntu. Para este tutorial
foi utilizado a versão 14.04.

### Bibliotecas
Para poder utilizar a tecnologia de containers deve instalar a biblioteca do LinuX Containers(LXC). Para isso
instale o pacote LXC do repositório:

```bash
$ sudo apt−get install lxc
```

Outra necessidade do Flowman é o Apache2 e PHP para a pagina e comunicação com núcleo.

```bash
$ sudo apt−get install apache2 php5
```

O ultimo requisito é ter o Java instalado, para isso instale o OpenJDK do repositório ou o Java da Oracle. O
OpenJDK já vem pré-instalado nas distribuições Ubuntu.
Essas são as bibliotecas e linguagens necessárias para o funcionamento do Flowman.

### Amphitrite
Amphitrite é a pagina Web do Flowman, para instalar-la, basta apenas copiar seus arquivos para a pasta do
Apache2, usualmente situada em "/var/www/html/ ".

### Poseidon
Poseidon é o núcleo do Flowman, é ele quem de fato particiona o XML e executa os containers. Flowman é feito
em Java e suas classes compiladas devem estar na pasta /home/user/bin/.

### Criar Container
Para criar um container com LXC:

```bash
$ sudo lxc−create −t FLAVOR −n NOME
```

-t FLAVOR: Significa o sistema operacional a ser criado. Por exemplo “-t ubuntu”.
-n NOME: Nome do container a ser criado.

Para iniciar o container use:

```bash
$ sudo lxc−start −n NOME −d
```

O parâmetro “-d” inicia ele em background, não precisando o console permanecer aberto.
Esses são os passos para criação e inicialização de um container com LXC. Após criado e inicializado em background
o container precisa de uma pasta para ser compartilhada e um script para ser inicializado pelo Poseidon.

Para abrir o container use o comando:

```bash
$ sudo lxc−console −n NOME
```

Agora você esta dentro do container, na primeira inicialização ele pedirá login e senha, o login e senha padrão do
flavor ubuntu é o proprio nome do sistema.
```bash
Login : ubuntu
Senha : ubuntu
```

O Poseidon precisa de mais duas coisas para poder utilizar o container, a primeira é uma pasta chamada upload
no próprio home do sistema. Para isso use o comando:

```bash
$ mkdir /home/ubuntu/upload
```

O último item necessário é um script que será executado pelo Poseidon, esse script deve estar na pasta do home
junto com a pasta de upload. O script deve conter o nome: “default-script”.

Para sair de um container e manter-lo executando, utilize crtl+a q. (crtl+a, solte, q).

### Pasta Compartilhada
O sistema Host deve conter uma pasta compartilhada chamada "upload". Essa pasta deve ser compartilhada com
todos os containers, e listada pelo PHP. Para compartilhar a pasta precisa criar o arquivo fstab do container, na qual normalmente fica em:

```bash
$ sudo vim /var/lib/lxc/NOME/fstab
```

Onde NOME é o nome do container a ser compartilhado. Criando esse arquivo precisa adicionar uma linha de
configuração a ele:

```bash
/home/host/upload/var/lib/lxc/division/rootfs/home/ubuntu/upload/ none    bind     0     0
```

Na qual o primeiro argumento, no exemplo "/home/host/upload", é a pasta do host a ser compartilhada.
Segundo argumento é a pasta do container a ser compartilhada, essa pasta é usada por padrão pelo Poseidon.
(/var/lib/lxc/division/rootfs/home/ubuntu/upload/).




