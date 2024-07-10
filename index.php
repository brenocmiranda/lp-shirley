<?php

	$name = "Shirley da Oncologia | Gestão 2021/2024";
	$descr = "Mulher cristã e conservadora, há 20 anos realizando trabalhos sociais. Criei o setor de humanização e Acolhimento aos pacientes Oncológicos na Secretaria Municipal de Saúde de Pirapora.";
	$protocolo = 'http' . (isset ($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == "on") ? 's' : '');
	$host = $protocolo . '://' . $_SERVER['HTTP_HOST'];
	$url_page = $host . str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?php echo $name ?>
	</title>
	<meta name="description" content="<?php echo $descr; ?>" />

	<meta property="og:image" content="<?php echo $url_page ?>/assets/images/share-image.webp" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $name ?>" />
	<meta property="og:url" content="<?php echo $url_page ?>" />
	<meta property="og:site_name" content="<?php echo $name ?>" />
	<meta property="og:description" content="<?php echo $descr; ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo $name ?>" />
	<meta name="twitter:image" content="<?php echo $url_page ?>/assets/images/share-image.webp" />
	<meta name="twitter:image:width" content="1200" />
	<meta name="twitter:image:height" content="630" />

	<link rel="shortcut icon" href="./assets/images/favicon.ico" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<link rel="stylesheet" href="./assets/css/styles.css" />
</head>

<body>
	<main>

		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="title">
							<h1>Shirey da Oncologia</h1>
						</div>
						<div class="box">
							<h5>Vereadora Shirley da Oncologia. Gestão 2021/2024</h5>
							<p>Mulher cristã e conservadora, há 20 anos realizando trabalhos sociais.</p>
							<p class="mb-0">Criei o setor de humanização e Acolhimento aos pacientes Oncológicos na Secretaria Municipal de Saúde de Pirapora.</p>
						</div>
						<div class="cta">
							<a href="#" target="_blank">Converse comigo!</a>
						</div>
						<div class="seta">
							<a href="#quem-sou">Ir para Quem sou</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="wrap">
			<section id="quem-sou">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h2>Quem sou</h2>
							<p>Nascida em Pirapora, filha de uma forte Mãe, cristã e conservadora, onde atuo como vereadora. Sou uma piraporense que anseia ajudar o seu povo, criei o setor de humanização e Acolhimento aos pacientes Oncológicos na Secretaria Municipal de Saúde de Pirapora.</p>
							<p>Sou uma piraporense que anseia ajudar o seu povo, criei o setor de humanização e Acolhimento aos pacientes Oncológicos na Secretaria Municipal de Saúde de Pirapora.</p>
						</div>
						<div class="offset-1 col-lg-5">
							<a href="#" class="box-video video-trigger" data-bs-toggle="modal" data-bs-target="#modalVideo">
								<p>Saiba um pouquinho sobre mim</p>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="nossas-conquistas">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Nossas conquistas!</h2>
							<p><strong>Centro Oncológico em Pirapora!</strong> Com muito trabalho, conseguimos inaugurar o tão sonhado Centro Oncológico, que ajudará muitas famílias e trará muitos benefícios à população do nosso município.</p>
							<?php 
								$array = [
									'Imagem do Centro Oncológico 1' => 'example1.jpg',
									'Imagem do Centro Oncológico 2' => 'example2.jpg',
									'Imagem do Centro Oncológico 3' => 'example3.jpg',
									'Imagem do Centro Oncológico 4' => 'example1.jpg',
									'Imagem do Centro Oncológico 5' => 'example2.jpg',
								];
							?>
							<div class="slick-centro-oncologico">
								<?php foreach( $array as $alt => $name ){ ?>
								<div class="slick-item">
									<img src="./assets/images/examples/<?php echo $name; ?>"
										alt="<?php echo $alt; ?>" loading="lazy">
								</div>
								<?php } ?>
							</div>
							<div class="cta">
								<a href="#" target="_blank">Acompanhe de perto! <span>Faça parte da minha lista de
										transmissão!</span></a>
							</div>
						</div>
					</div>
					<div class="row mb-5 align-items-center justify-content-center shape-conquista">
						<div class="col-lg-5">
							<h5>SAÚDE PARA O POVO!</h5>
							<p>O TRABALHO É ARDUO, mas com fé em Deus e luta pelos nossos objetivos, conseguimos inaugurar o tão sonhado Centro Oncológico,  que vai atender pessoas de toda região, que precisam de ajuda no tratamento para o câncer.</p>
						</div>
						<div class="offset-1 col-lg-4">
							<img src="./assets/images/shape.webp" alt="" loading="lazy">
						</div>
					</div>
					<div class="row align-items-center justify-content-center shape-conquista">
						<div class="col-lg-4">
							<img src="./assets/images/shape.webp" alt="" loading="lazy">
						</div>
						<div class="offset-1 col-lg-5 text-end">
							<h5>CENTRO DE ACOLHIMENTO,</h5>
							<p>criado por mim, ajuda muitas famílias do nosso município, com política de humanização, acolhemos e fornecemos ajuda à familias necessitadas, no qual distribuimos, de graça, leite, fralda, suplementos .</p>
						</div>
					</div>
				</div>
			</section>

			<section id="quem-conhece">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<h2>Quem conhece a Shirley diz...</h2>
						</div>
						<div class="col-3">
							<img src="./assets/images/love.webp" alt="" width="160" loading="lazy">		
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<div class="box-depoimento">
								<div class="image">
									<img src="./assets/images/examples/example1.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest.
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="box-depoimento">
								<div class="image">
									<img src="./assets/images/examples/example2.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest. 
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="box-depoimento">
								<div class="image">
									<img src="./assets/images/examples/example3.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="slick-depoimentos">
							<div class="slick-item d-flex gap-3">
								<div class="image">
									<img src="./assets/images/examples/example2.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									<h6>Fabiana Mota</h6>
									<p>Uma pessoas maravilhosa que tive o privilégio de conhecer! Tenho um carinho e uma imensa gratidão a você minha linda! A pessoas mais humana que conheci na vida!</p>
								</div>
							</div>
							<div class="slick-item d-flex gap-3">
								<div class="image">
									<img src="./assets/images/examples/example2.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									<h6>Fabiana Mota</h6>
									<p>Uma pessoas maravilhosa que tive o privilégio de conhecer! Tenho um carinho e uma imensa gratidão a você minha linda! A pessoas mais humana que conheci na vida!</p>
								</div>
							</div>
							<div class="slick-item d-flex gap-3">
								<div class="image">
									<img src="./assets/images/examples/example2.jpg"
										alt="" loading="lazy">
								</div>
								<div class="text">
									<h6>Fabiana Mota</h6>
									<p>Uma pessoas maravilhosa que tive o privilégio de conhecer! Tenho um carinho e uma imensa gratidão a você minha linda! A pessoas mais humana que conheci na vida!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="cta">
							<a href="#" target="_blank">Converse comigo no <span>Whatsapp</span>!</a>
						</div>
					</div>
				</div>
			</section>

			<section id="iremos-avante">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h2>Iremos avante!</h2>
							<p>Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest.</p>
							<p>Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest. Add main takeaway points, quotes, anecdotes, or even a very very short story. Body text for whatever you’d like to suggest.</p>
						</div>
						<div class="offset-1 col-lg-5">
							<img src="./assets/images/shirley-shape.webp" alt="" loading="lazy">
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<section id="quer-falar">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10">
						<h2>Quer falar comigo pessoalmente?</h2>
						<h3>Me diga seu endereço que vou até você!</h3>
						<form type="POST">
							<div class="formulario">
								<div class="field-wrap">
									<input type="text" class="form-control" name="nome" placeholder="Nome" required>
								</div>
								<div class="field-wrap">
									<input type="tel" class="form-control is-phone" name="telefone" placeholder="Telefone" required>
								</div>
								<div class="field-wrap">
									<input type="text" class="form-control" placeholder="Endereço" name="endereco" required>
								</div>
								<div class="field-wrap">
									<input type="submit" class="form-control submit-btn" value="Shirley, quero sua visita!">
								</div>
							</div>
						</form>
						<h4>Toque no botão e entraremos em contato para marcarmos uma visita.</h4>
					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- Modal -->
	<div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideo" aria-hidden="true" data-bs-backdrop="static">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content bg-transparent border-0">
				<div class="modal-header border-0">
					<button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-1">
					<iframe width="640" height="360" id="iframeVideo" src="https://www.youtube.com/embed/_gVrQa_bvm8" title="Ｓｍｏｋｅ　Ａｎｄ　Ｃｈｉｌｌ 🚬 Lofi Hip Hop 🎵 [ Beats To Smoke / Chill / Relax / Stress Relief ]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="./assets/js/script.js"></script>
</body>

</html>