<form action="#" class="c-form" id="formId">
	<ul class="c-form__fieldsHero --pad10">
		<li class="c-form__field u-fw100 --select">
			<div class="selectBox">
				<select name="semlabel" id="formId_semlabel" class="field" required>
					<option value="">Select sem label</option>
					<option value="ac">Acre</option>
					<option value="se">Sergipe</option>
					<option value="to">Tocantins</option>
				</select>
				<div class="inputBox">
					<input type="text" placeholder="Selecione" readonly>
				</div>
			</div>
		</li>
		<li class="c-form__field u-fw100">
			<label for="formId_nome">Nome</label>
			<input id="formId_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
		</li>
		<li class="c-form__field u-fw100">
			<label for="formId_sobrenome" class="--withObs">
				<span class="caption">Sobrenome</span>
				<span class="obs">Observação</span>
			</label>
			<input id="formId_sobrenome" type="text" name="sobrenome" class="field" placeholder="Digite seu sobrenome" required>
		</li>
		<li class="c-form__field u-fw100 --select --full">
			<div class="selectBox">
				<label for="formId_estado">Estado</label>
				<select name="estado" id="formId_estado" class="field" required>
					<option value="">Selecione</option>
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
					<input type="text" placeholder="Selecione" readonly>
				</div>
			</div>
		</li>
		<li class="c-form__field u-fw100 --select2 --multiple">
			<label for="formId_multiselect">Multiselect com busca</label>
			<select class="js-select2__multiple" name="multiple[]" multiple="multiple" id="formId_multiselect" data-maximum-selection-length="5">
				<option></option>
				<option value="A1">Area 1</option>
				<option value="A2">Area 2</option>
				<option value="A3">Area 3</option>
				<option value="A4">Area 4</option>
				<option value="A5">Area 5</option>
			</select>
		</li>
		<li class="c-form__field u-fw100 --select2 --default">
			<label for="formId_selectSearch">Select com busca</label>
			<select class="js-select2__oneOption" name="vagas[]" id="formId_selectSearch">
				<option></option>
				<option value="A1">Vaga 1</option>
				<option value="A2">Vaga 2</option>
				<option value="A3">Vaga 3</option>
				<option value="A4">Vaga 4</option>
				<option value="A5">Vaga 5</option>
				<option value="A1">Vaga 1</option>
				<option value="A2">Vaga 2</option>
				<option value="A3">Vaga 3</option>
				<option value="A4">Vaga 4</option>
				<option value="A5">Vaga 5</option>
			</select>
		</li>
		<li class="c-form__field u-fw25">
			<label for="formId_email">E-mail</label>
			<input id="formId_email" type="email" name="email" class="field" placeholder="example@site.com" required>
		</li>
		<li class="c-form__field u-fw50">
			<label for="formId_telefone">Telefone</label>
			<input id="formId_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
		</li>
		<li class="c-form__field u-fw25">
			<label for="formId_cep">CEP</label>
			<input id="formId_cep" type="text" class="field cepMask" name="cep" placeholder="_____-___" required>
		</li>
		<hr class="c-form__spacer">
		<li class="c-form__field u-fw33">
			<label for="formId_cpf">CPF</label>
			<input id="formId_cpf" type="text" class="field cpfMask" name="cpf" placeholder="___.___.___-__" required>
		</li>
		<li class="c-form__field u-fw66">
			<label for="formId_data">Data</label>
			<input id="formId_data" type="text" class="field dataMask" name="data" placeholder="__/__/____" required>
		</li>
		<hr class="c-form__spacer">
		<li class="c-form__field u-fw100 --check --radio">
			<span class="fakeLabel">Selecione uma opção</span>
			<ul class="checkHero">
				<li>
					<label for="formId_radio1">Option 01</label>
					<input type="radio" id="formId_radio1" name="radioGroup">
				</li>
				<li>
					<label for="formId_radio2">Option 02</label>
					<input type="radio" id="formId_radio2" name="radioGroup">
				</li>
				<li>
					<label for="formId_radio3">Option 03</label>
					<input type="radio" id="formId_radio3" name="radioGroup">
				</li>
			</ul>
		</li>
		<li class="c-form__field u-fw100 --check --checkbox">
			<span class="fakeLabel">Selecione uma ou mais opções</span>
			<ul class="checkHero">
				<li>
					<label for="formId_option1">Option 01</label>
					<input type="checkbox" id="formId_option1">
				</li>
				<li>
					<label for="formId_option2">Option 02</label>
					<input type="checkbox" id="formId_option2">
				</li>
				<li>
					<label for="formId_option3">Option 03</label>
					<input type="checkbox" id="formId_option3">
				</li>
			</ul>
		</li>
		<hr class="c-form__spacer">
		<li class="c-form__field u-fw100">
			<label for="formId_mensagem">Mensagem</label>
			<textarea id="formId_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
		</li>
		<li class="c-form__field u-fw100 --range">
			<label for="formId_range">Filtrar por idade</label>
			<div class="rangeHero">
				<div class="min"><input id="formId_range" type="number" name="keyword" class="field" placeholder="De" min="15" max="110"></div>
				<div class="max"><input id="formId_range_2" type="number" name="keyword" class="field" placeholder="Até" min="15" max="110"></div>
			</div>
		</li>
		<li class="c-form__field u-fw100 --rangeDefault">
			<label for="formId_range">Filtrar por idade</label>
			<div class="rangeSlider">
				<input class="rangeSlider__range" type="range" value="50" min="0" max="100">
				<span class="rangeSlider__value">50</span>
			</div>
		</li>
		<li class="c-form__field u-fw100 --file">
			<label for="formId_file">Anexe (PDF, DOC, DOCX OU TXT)</label>
			<input id="formId_file" class="inputAttach" name="#" type="file" required>
			<input class="inputText" type="text" placeholder="Selecione o arquivo">
		</li>
		<li class="c-form__field u-fw100 --btn">
			<button class="c-btn --primary">Enviar</button>
		</li>
	</ul>
</form>