<style type="text/css">
	body{
		text-align: center;
	}
	.box{
    background: #708090;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    height: 30rem;
    margin: 2rem 2rem 0;
    width: 40rem;
    margin-left: 5rem;
    text-align: justify;
    font-size: 25px;
    padding: 1rem;
}
		.box2{
	    background: #708090;
	    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	    border-radius: 10px;
	    height: 30rem;
	    margin: 2rem 5rem 0;
	    width: 40rem;
	    margin-left: 49rem;
	    margin-top: -32rem;
	    text-align: justify;
	   	font-size: 25px;
	   	padding: 1rem;
	}
	.opcoes{
		font-size: 20px;		
	}
h1{
	font-size: 35px;
	text-align: center;
}

</style>
<script>
	function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
</script>
<meta charset="utf-8">
<form method="POST" action="form.php">
	<div class="box"> 
	<h1>Dados pessoais</h1>
	NOME:
	<input type="text" name="nm" placeholder="Digite seu nome">
	<br>
	<br>
	CPF:
	<input oninput="mascara(this)" type="text" name="cpf" placeholder="Digite seu CPF">
	<br>
	<br>
	EMAIL:
	<input type="email" name="email" placeholder="Digite o seu email">
	<br>
	<br>
	Estado civil:
	<br>
	<div class="opcoes">
	Casado
	<input type="radio" name="civil" value="casado">
	<br>
	Solteiro
	<input type="radio" name="civil" value="solterio">
	<br>
	Divorciado
	<input type="radio" name="civil" value="divorciado">
	<br>
	<br>
	</div>
	Telefone:
	<input type="text" name="tel" placeholder="Digite o seu telefone">
	<br>
	<br>
	Data de nascimento:
	<input type="date" name="nasc">
	<br>
</div>
<div class="box2">
	<h1>Escolaridade</h1>
	Nivel de escolaridade:
	<br>
	<br>
	<div class="opcoes">
	Ensino medio
	<input type="radio" name="escolaridade" value="Médio">
	<br>
	Ensino tecnico
	<input type="radio" name="escolaridade" value="Tecnico">
	<br>
	Ensino Superior
	<input type="radio" name="escolaridade" value="Superior">
	<br>
	<br>
</div>
	Escola/instituição:
	<input type="text" name="escola" placeholder="Digite onde estudou">
	<br>
	<br>
	Inicio:
	<input type="date" name="inicio">
	<br>
	<br>
	Conclusão:
	<input type="date" name="conclusao">
</div>
<div class="box">
	<h1>Habilidades:</h1>
	<input type="checkbox" name="habilidades[]" value="Office">
	Pacote Office
	<br>
	<input type="checkbox" name="habilidades[]" value="HTML">
	HTML
	<br>
	<input type="checkbox" name="habilidades[]" value="JS">
	JS
	<br>
	<input type="checkbox" name="habilidades[]" value="CSS">
	CSS
	<br>
	<input type="checkbox" name="habilidades[]" value="Bootstrap">
	BOOTSTRAP
	<br>
	<input type="checkbox" name="habilidades[]" value="php">
	PHP
	<br>
	<input type="checkbox" name="habilidades[]" value="Jquery">
	jquery
	<br>
	<input type="checkbox" name="habilidades[]" value="C#">
	C#
	<br>
</div>
<div class="box2" style="margin-top: -32rem">
	<h1>Experiencia</h1>
	Cargo/função:
	<input type="text" name="cargo" placeholder="Digite o cargo">
	<br>
	<br>
	Local:
	<input type="text" name="local" placeholder="Digite o local">
	<br>
	<br>
	Inicio:
	<input type="date" name="xp_inicio">
	<br>
	<br>
	Termino:
	<input type="date" name="xp_termino">
</div>
<button style="background-color: green; margin-left: -2rem ;width: 5rem;height: 3rem;border-radius: 1rem;">Concluir</button>
</form>