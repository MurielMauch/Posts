Este projeto consome algumas apis, salva as informações em banco e também as exibe ao cliente.

Ele consiste de 5 arquivos:
  1. database.php: o banco de dados foi criado manualmente por meio da linha de comando, no entanto, esse arquivo contém os códigos utilizados para criá-lo.
  2. connection.php: estabelece a conexão com o banco de dados. É utilizados pelos demais arquivos.
  3. read.php: consome as apis e insere as informações no banco de dados.
  4. posts.php: exibe as informações da tabela Posts.
  5. comments.php: exibe as informações da tabela Comments de apenas um post, cujo id é enviado por meio de posts.php.
  
  
  
