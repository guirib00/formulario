<meta charset="utf-8">
<?php
$nome=$_POST['nm'];
?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<style type="text/css">
	body{
		padding-left: 20rem;
	}
	.box{
    background: #708090;
    border-radius: 10px;
    height: 60rem;
    width: 60rem;
}
	p{
		font-size: 20px;
		margin-left: 1rem;
	}
	h1{
		text-align: center;
	}
	@media{
		.box{
			margin: 0 0 0;
		}
	}
</style>
<script>
	
		window.jsPDF = window.jspdf.jsPDF;
		var docPDF = new jsPDF();
		function print() {
			var elementHTML = document.querySelector(".box");

			name = document.querySelector("#cpf").innerHTML;

			docPDF.html(elementHTML, {
				callback: function (docPDF) {
					if (!(name.trim() == "")) {
						docPDF.save(name.trim() + '.pdf');
					} else {
						docPDF.save('Curriculo.pdf');
					}
				},
				x: 15,
				y: 15,
				width: 170,
				windowWidth: 880
			});
		}
	</script>
	<h1 style="text-align: justify;">Curriculo</h1>
<div class="box">
	<h1>Dados pessoais</h1>
	<p>Nome: <?php Echo $nome;?></p>
	<p>CPF: <span id="cpf"><?php Echo $cpf=$_POST['cpf'];?></span></p>
	<p>Email: <?php Echo $cpf=$_POST['email'];?></p>
	<p>Estado civil: <?php Echo $civil=$_POST['civil'];?></p>
	<p>Telefone: <?php Echo $tele=$_POST['tel'];?></p>
	<p>Data de nascimento: <?php Echo $nasc=$_POST['nasc'];?></p>
	<hr>
	<h1>Escolaridade</h1>
	<p>Nivel de escolaridade: <?php Echo $escolaridade=$_POST['escolaridade'];?></p>
	<p>Escola/Instituição: <?php Echo $escola=$_POST['escola'];?></p>
	<p>Inicio: <?php Echo $inicio=$_POST['inicio'];?></p>
	<p>Conclusão: <?php Echo $conclusao=$_POST['conclusao'];?></p>
	<hr>
	<h1>Habilidades</h1>
	<p>Habilidades: <?php if(isset($_POST['habilidades'])){foreach ($_POST['habilidades'] as $hability){echo " &nbsp;{$hability}.  &nbsp;";}}?></p>
	<hr>
	<h1>Experiencia</h1>
	<p>Cargo/Função: <?php Echo $cargo=$_POST['cargo'];?></p>
	<p>Local: <?php Echo $local=$_POST['local'];?></p>
	<p>Inicio: <?php Echo $xp_inicio=$_POST['xp_inicio'];?></p>
	<p>Termino: <?php Echo $xp_termino=$_POST['xp_termino'];?></p>
</div>
<br>
<br>
	<button onclick="print()" class="btn btn-success">Salvar em pdf</button>
<br>
<br>	