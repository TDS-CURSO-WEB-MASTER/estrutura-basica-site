# TÓPICO - 01 estrutura-basica-site
# Deploy inicial

# processo de instalação simples
1 - Após clonar, será necessário instalar o Node.js para podermos baixar/instalar as nossas dependências de javascript. 
Faça o download através do site: https://nodejs.org/en/, na sequência, efetue a instalação.

# processo de instalação simples
2 - Necessitaremos do git bash para executarmos comandos linux no windows (via command line), efetue o download da ferramenta através 
do site: https://gitforwindows.org/ e execute a instalação.

3 - Terminado o passo anterior, execute o git bash, o prompt de comando irá aparecer, na sequência, dê o seguinte comando (sem as aspas duplas): "cd C:/wamp/www/estrutura-basica-site", leve em consideração que o caminho até o diretório Root do Wamp em que foi desenvolvido este projeto é o citado anteriormente sob aspas, porém, dependendo da versão instalada do wamp ou, caso, você tenha dado um outro nome para o diretório que conterá os binários(do wamp) a instrução mudará.

4 - Feito a situação anterior, acesse via Git bash o diretório do projeto e rode as seguintes dependências(comandos):

# caso não informe o "@", que indica a versão a ser instalada, por padrão, automaticamente será instalada a última versão da dependência disponível.

#Caso já exista um arquivo chamado package.lock.json e nele contenha um objeto "{}" com a chave "dependencies" e os respectivos valores jquery e bootstrap, ignore a execução dos comandos abaixo e rode somente o "npm install", depois de ter rodado o "npm install" o "ln -s ../node_modules public" para criar um link simbólico e mover as dependência para a nossa pasta pública.

# comando de instalação de dependência
npm i jquery
npm i bootstrap@4.3
