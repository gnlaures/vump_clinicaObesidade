<main class="l-innerPage">
    <header class="l-headerInner">
        <img src="media/img/content/headerInner_contato.jpg" alt="Fale com a gente">
    </header>
	<section class="s-contact s-default">
		<div class="u-container u-dflex u-aic u-jcsb">
			<div class="s-contact__call">
				<h1>Fale com a gente</h1>
				<h2>Preencha os campos ao lado para enviar sua mensagem.</h2>
				<h3>Nosso contato</h3>
				<address>
					<p>(71) 3500-6000  -  (71) 99730-4716</p>
					<p>Condomínio Busca Vida, Estr. do Coco, s/n - Catu de Abrantes, Camaçari - BA, 42840-000</p>
					<p>contato@clinicadaobesidade.com.br</p>
				</address>
			</div>
			<div class="s-contact__form">
				<form action="#" class="c-form" id="formContato">
					<ul class="c-form__fieldsHero --pad5">
						<li class="c-form__field u-fw100 --alert">
							<span>(*) Campos de preenchimento obrigatório!</span>
						</li>
						<li class="c-form__field u-fw50">
							<label for="formContato_nome">Nome Completo*</label>
							<input id="formContato_nome" type="text" name="nome" class="field" required>
						</li>
						<li class="c-form__field u-fw50">
							<label for="formContato_email">E-mail*</label>
							<input id="formContato_email" type="email" name="email" class="field" required>
						</li>
						<li class="c-form__field u-fw50">
							<label for="formContato_telefone">Telefone*</label>
							<input id="formContato_telefone" type="tel" class="field foneMask" name="telefone" required>
						</li>
						<li class="c-form__field u-fw50">
							<label for="formContato_assunto">Assunto*</label>
							<input id="formContato_assunto" type="text" name="assunto" class="field" required>
						</li>
						<li class="c-form__field u-fw50 --select --full">
							<div class="selectBox">
								<label for="formContato_estado">Estado</label>
								<select name="estado" id="formContato_estado" class="field js-selectEstado">
									<option value="Selecione">Selecione</option>
									<option value="ac">Acre</option>
									<option value="al">Alagoas</option>
									<option value="ap">Amapá</option>
									<option value="am">Amazonas</option>
									<option value="ba">Bahia</option>
									<option value="ce">Ceará</option>
									<option value="df">Distrito Federal</option>
									<option value="es">Espirito Santo</option>
									<option value="go">Goiás</option>
									<option value="ma">Maranhão</option>
									<option value="ms">Mato Grosso do Sul</option>
									<option value="mt">Mato Grosso</option>
									<option value="mg">Minas Gerais</option>
									<option value="pa">Pará</option>
									<option value="pb">Paraíba</option>
									<option value="pr">Paraná</option>
									<option value="pe">Pernambuco</option>
									<option value="pi">Piauí</option>
									<option value="rj">Rio de Janeiro</option>
									<option value="rn">Rio Grande do Norte</option>
									<option value="rs">Rio Grande do Sul</option>
									<option value="ro">Rondônia</option>
									<option value="rr">Roraima</option>
									<option value="sc">Santa Catarina</option>
									<option value="sp">São Paulo</option>
									<option value="se">Sergipe</option>
									<option value="to">Tocantins</option>
								</select>
								<div class="inputBox">
									<input type="text" readonly>
								</div>
							</div>
						</li>
						<li class="c-form__field u-fw50 --select --full u-dnone">
							<div class="selectBox">
								<label for="formContato_cidade">Cidade</label>
								<select name="cidade" id="formContato_cidade" class="field js-selectCidade">
									<option value="">Selecione</option>
									<option value="c1">Cidade 1</option>
									<option value="c2">Cidade 2</option>
									<option value="c3">Cidade 3</option>
									<option value="c4">Cidade 4</option>
								</select>
								<div class="inputBox">
									<input type="text" readonly>
								</div>
							</div>
						</li>
						<li class="c-form__field u-fw100">
							<label for="formContato_mensagem">Mensagem*</label>
							<textarea id="formContato_mensagem" name="mensagem" class="field" required></textarea>
						</li>
						<li class="c-form__field u-fw100 --btn">
							<button class="c-btn --primary">Enviar mensagem</button>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</section>
	<?php include('components/s-fullMap.php');?>
</main>
