Questionário: Sistema de Login com $_SESSION em PHP
Disciplina: Linguagem e Técnicas de Programação | Professor: José Carlos Flores
Curso: Engenharia de Software
Aluno(a): Guilherme Massaro de Souza
Parte 1: Questões Objetivas
A alternativa correta está em verde.
1. Qual é a finalidade da função session_start()?
A) Encerrar a sessão do usuário
B) Iniciar ou retomar uma sessão  (CORRETA)
C) Criar um cookie permanente
D) Enviar dados via POST
E) Validar a senha do usuário
2. Onde os dados de $_SESSION são armazenados?
A) No navegador do cliente
B) No banco de dados
C) No servidor web  (CORRETA)
D) Na URL
E) No cache do navegador
3. Qual arquivo é responsável por validar o login no sistema?
A) login.html
B) painel.php
C) logout.php
D) valida.php  (CORRETA)
E) estilo.css
4. Qual método HTTP é usado no formulário de login?
A) GET
B) PUT
C) DELETE
D) POST  (CORRETA)
E) HEAD
5. Por que usamos header('Location: painel.php')?
A) Para exibir uma mensagem
B) Para redirecionar o usuário  (CORRETA)
C) Para encerrar a sessão
D) Para validar o usuário
E) Para carregar o CSS
6. O que acontece se session_start() for chamado após saída para o navegador?
A) A sessão é criada normalmente
B) Um erro de cabeçalho (headers already sent) ocorre  (CORRETA)
C) O usuário é redirecionado
D) A sessão é salva no cookie
E) Nada acontece
7. Qual superglobal armazena dados entre páginas com sessão?
A) $_GET
B) $_POST
C) $_COOKIE
D) $_SESSION  (CORRETA)
E) $_REQUEST
8. Como impedimos o acesso direto a painel.php por usuários não logados?
A) Usando exit()
B) Verificando $_SESSION['logado']  (CORRETA)
C) Usando htmlspecialchars()
D) Apagando cookies
E) Mudando a extensão do arquivo
9. Qual é o caminho correto para o arquivo CSS no sistema?
A) css/estilo.css  (CORRETA)
B) /css/estilo.php
C) estilo.css
D) CSS/ESTILO.CSS
E) ../css/estilo.html
10. O que faz session_destroy()?
A) Apaga todos os dados da sessão  (CORRETA)
B) Inicia uma nova sessão
C) Redireciona para o login
D) Valida o usuário
E) Cria um cookie
11. Por que usamos htmlspecialchars() ao exibir o nome do usuário?
A) Para converter minúsculas em maiúsculas
B) Para prevenir ataques XSS  (CORRETA)
C) Para encurtar o nome
D) Para salvar no banco de dados
E) Para formatar a data
12. Qual tag HTML vincula um arquivo CSS externo?
A) <style>
B) <script>
C) <link>  (CORRETA)
D) <css>
E) <import>
13. O que significa HTTP 405?
A) Página não encontrada
B) Método não permitido  (CORRETA)
C) Erro interno do servidor
D) Sessão expirada
E) Arquivo não encontrado
14. Onde devem estar os arquivos PHP para funcionar com XAMPP?
A) Na área de trabalho
B) Em C:\xampp\htdocs\  (CORRETA)
C) Em C:\Windows\System32
D) Em C:\Program Files\XAMPP
E) Em qualquer pasta
15. Qual é a finalidade do exit; após header('Location: ...')?
A) Mostrar uma mensagem
B) Evitar execução de código posterior  (CORRETA)
C) Reiniciar a sessão
D) Fechar o navegador
E) Salvar os dados
16. O que é $_POST['usuario'] ?? ''?
A) Um operador de comparação
B) Um operador de nave espacial
C) Um operador de coalescência nula
D) Um erro de sintaxe (CORRETA)
E) Um loop condicional
17. Qual é o valor padrão da variável $_SESSION['logado'] após login bem-sucedido?
A) null
B) 'false'
C) true  (CORRETA)
D) 0
E) 'off'
18. Qual arquivo não contém código PHP?
A) valida.php
B) painel.php
C) login.html  (CORRETA)
D) logout.php
E) Todos contêm PHP
19. O que acontece ao acessar logout.php?
A) O usuário é redirecionado para o painel
B) A sessão é destruída e o usuário sai  (CORRETA)
C) Uma nova sessão é criada
D) O CSS é recarregado
E) O login é validado novamente

20. Qual é a porta padrão do Apache no XAMPP?
A) 8080
B) 3306
C) 21
D) 80  (CORRETA)
E) 443
Parte 2: Questões Discursivas
21. Explique por que $_SESSION é mais seguro que $_COOKIE para armazenar dados de login.
Porque os dados da sessão ficam no servidor e o cliente guarda só o ID. O cookie fica no navegador e pode ser visto e alterado pelo usuário.
22. Por que não devemos usar $_REQUEST em vez de $_POST ou $_GET em formulários?
Porque $_REQUEST mistura GET, POST e COOKIE, e não se sabe a origem do dado. $_POST e $_GET deixam o método explícito e são mais seguros.
23. O que é separação de camadas e como ela foi aplicada neste sistema?
É dividir o sistema em partes com funções distintas. Aqui, a apresentação (login.html, painel.php, estilo.css) fica separada da lógica (valida.php, logout.php).
24. Qual é a diferença entre echo e print em PHP?
O echo não retorna valor e aceita vários argumentos. O print aceita só um e retorna 1.
25. Por que o arquivo estilo.css está em uma pasta separada chamada css?
Para organizar o projeto e facilitar a manutenção, separando o estilo do restante dos arquivos.
26. Como você modificaria o sistema para aceitar dois usuários: 'admin' e 'usuario'?
Usando um array associativo de usuários e senhas no valida.php:
$usuarios = ['admin' => '12345', 'usuario' => 'abcde'];
 
if (isset($usuarios[$usuario]) &&
    $usuarios[$usuario] === $senha) {
    // login válido
}
27. Explique o papel do header('Location: ...') no fluxo do sistema.
Redireciona o navegador para outra página: leva ao painel.php após o login e ao login.html se o usuário não estiver logado.
28. Por que é importante usar session_start() em todas as páginas que usam $_SESSION?
Porque sem ele o PHP não carrega os dados da sessão, e $_SESSION fica vazio.
29. Cite duas boas práticas de segurança usadas neste sistema.
1. Uso de htmlspecialchars() para prevenir XSS (painel.php).
2. Verificação de $_SESSION['logado'] no painel, com redirecionamento e exit.
30. Proponha uma melhoria para o sistema (ex: campo de e-mail, validação de nível, etc).
Guardar usuários em um banco de dados com senhas criptografadas (password_hash e password_verify), em vez de fixas no código.
