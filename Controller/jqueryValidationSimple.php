<html>
<head>
<title>Como Validar um Formulário dinamicamente com jQuery</title>
<head>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
    $("input").blur(function(){
     if($(this).val() == "")
         {
             $(this).css({"border" : "1px solid #F00", "padding": "2px"});
         }
    });
    $("#botao").click(function(){
     var cont = 0;
     $("#form input").each(function(){
         if($(this).val() == "")
             {
                 $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                 cont++;
             }
        });
     if(cont == 0)
         {
             $("#form").submit();
         }
    });
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
    <input type="button" id="botao" value="enviar" />
    </fieldset>  
   </form>
 

 
</body>
</html>