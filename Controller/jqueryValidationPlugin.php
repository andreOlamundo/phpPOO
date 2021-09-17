<html>
<head>
<title>Como Validar um Formulário dinamicamente com jQuery</title>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>-->
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<!-- Inclusão do Plugin jQuery Validation-->
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
</head>
<body>
 
<form id="form" method="post" action="">
    <fieldset>
    <legend>Por favor preencha o nome, e-mail e telefone e cpf</legend>
    
    <span style="display:inline-table; width:70px;">Nome:</span>
     <input type="text" id="nome" value="" />
    <br /><br />
    <span style="display:inline-table; width:70px;">Email:</span>
    <input type="text" id="email" value="" />
    <br /><br />
    <span style="display:inline-table; width:70px;">Telefone:</span>
    <input type="text" id="telefone" value="" />   
    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required >
    <br /><br />
    <input type="submit" value="enviar" />
    </fieldset>  
   </form>
   <!-- Inclusão das validações com o Plugin jQuery Validation-->
   <script src="../js/validacao.js"></script>

 
</body>
</html>
