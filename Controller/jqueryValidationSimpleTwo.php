<html>
<head>
<title>Como Validar um Formulário dinamicamente com jQuery</title>
<head>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript">
$(function(){
       $("#cpf").addClass('campo_obrigatorio');
       $( "span" ).hide();
      // $("input").addClass('campo_obrigatorio');      
      // $(".campo_obrigatorio").attr('required',true); "attr() Apropriado para string" 
      // $(".campo_obrigatorio").prop('required',true); "prop() Apropriado para todos os tipos de dados"
      
});
</script>

</head> 

<body>
 
<form id="form" name="form" method="post">
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
    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
    <br /><br />
    <input type="submit"/>
    </fieldset>  
   </form>
 

 
</body>
</html>