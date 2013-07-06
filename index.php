<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Tuitealo!</title>
<link href="estilo.css" rel="stylesheet" type="text/css" media="screen"/> 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){
 
      $("ul.t_tab li").click(function()     //cada vez que se hace click en un link
       {
		$("ul.t_tab li").removeClass("t_selected"); //removemos clase active de todos
		$(this).addClass("t_selected"); //añadimos a la actual la clase active
		$(".tab_content").hide(); //escondemos todo el contenido
 
		var content = $(this).attr("id"); //obtenemos el atributo id
		$(content).fadeIn(); // mostramos el contenido
		return false; //devolvemos false para el evento click
	});
 
});
 
function replyTo(id,name){
			$('#t_reply').val(id);
			$('#tweet_txt').val("@"+name+" ").focus();
 
			return false;
}
function contar(input) {
//Comprobamos que no pase de 140 caracteres y si pasa, que borre los sobrantes
if (input.value.length >= 140) {
input.value = input.value.substring(0,140);
}
//alamacenamos el resto
var resto = 140 - input.value.length;
 
//imprimimos los caracteres restantes en el span
$('#letras').html(resto);
 
}
</script> 
<?
include_once('twitter_init.php');
?>
</head>
  <body>
  <div id="header">
  <h3>The Simple Twitter App by <a href="http://mediaweblabs.com">Mediaweb Labs</a> </h3>
</div>
	<div id="twitter-feed">
<? echo $twitter_content;?>
 
		<div style="clear: both;"></div>
	</div>
 
</body>
</html>
