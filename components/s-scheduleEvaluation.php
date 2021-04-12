<section class="s-scheduleEvaluation s-default">
	<div class="u-container u-dflex u-aic u-jcsb">
		<div class="s-scheduleEvaluation__call">
			<h1><span class="u-color-textDefault ">Agende sua</span> Avaliação</h1>
			<p>Se você precisa perder muito peso não consegue, venha fazer uma avaliação presencial ou online com nossa equipe médica especializada em emagrecimento saudável. Preencha seus dados e aguarde o nosso contato.</p>
		</div>
		<div class="s-scheduleEvaluation__form">
			<form action="#" class="c-form" id="formSchedule">
				<ul class="c-form__fieldsHero --pad5">
					<li class="c-form__field u-fw100 --alert">
						<span>(*) Campos de preenchimento obrigatório!</span>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_nome">Nome Completo*</label>
						<input id="formSchedule_nome" type="text" name="nome" class="field" required>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_email">E-mail*</label>
						<input id="formSchedule_email" type="email" name="email" class="field" required>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_peso">Peso* (kg)</label>
						<input id="formSchedule_peso" type="number" class="field" name="peso" min="0" required>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_peso">Altura* (cm)</label>
						<input id="formSchedule_peso" type="number" class="field" name="peso" min="0" max="300" required>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_idade">Idade*</label>
						<input id="formSchedule_idade" type="number" class="field" name="idade" min="0" max="150" required>
					</li>
					<li class="c-form__field u-fw50 --select2 --default">
						<label for="formSchedule_selectSearch">Convênio*</label>
						<select class="js-select2__oneOption" name="convenio[]" id="formSchedule_selectSearch">
							<option></option>
							<option value="C1">Convênio 1</option>
							<option value="C2">Convênio 2</option>
							<option value="C3">Convênio 3</option>
							<option value="C4">Convênio 4</option>
							<option value="C5">Convênio 5</option>
						</select>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_telefoneCelular">Telefone Celular*</label>
						<input id="formSchedule_telefoneCelular" type="tel" class="field foneMask" name="telefoneCelular"  required>
					</li>
					<li class="c-form__field u-fw50">
						<label for="formSchedule_telefoneFixo">Telefone Fixo</label>
						<input id="formSchedule_telefoneFixo" type="tel" class="field foneMask" name="telefoneFixo">
					</li>
					<li class="c-form__field u-fw100 --btn">
						<button class="c-btn --primary">Enviar pedido de Agendamento</button>
					</li>
				</ul>
			</form>
		</div>
	</div>
</section>
