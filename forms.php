<?php require __DIR__ . "/_header.php"; ?>

<h2>Formulários</h2>

<h3>Referências</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_forms.asp" target="_blank">Formulários no W3Schools</a></li>
</ul>

<h3>Exemplo 1</h3>
<p>Formulário usando o método HTTP "GET":</p>

<form action="/form_process.php" method="get">

    <input type="text" name="Nome">

    <input type="password" name="Senha">

    <input type="submit" value="Enviar">

</form>

<h3>Exemplo 2</h3>
<p>Formulário de pesquisa no Google:</p>

<form action="https://www.google.com/search" method="get">

    <input type="text" name="q">

    <input type="submit" name="Procurar no Google">

</form>

<h3>Exemplo 3</h3>
<p>Formulário usando o método HTTP "POST":</p>

<form action="/form_process.php" method="post">

    <input type="hidden" name="user_id" value="10">

    Nome: <input type="text" name="user_name"><br>
    E-mail: <input type="email" name="user_email"><br>
    Nascimento: <input type="date" name="user_birth"><br>
    Endereço: <textarea name="address"></textarea><br>
    Senha: <input type="password" name="password"><br><br>

    <button type="submit">Cadastrar</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="reset">Limpar</button>

</form>

<h3>Exemplo 4</h3>
<p>Campos já preenchidos com "value".</p>

<form action="/form_process.php" method="post">

    <input type="hidden" name="user_id" value="10">

    Nome: <input type="text" name="user_name" value="Joca da Silva"><br>
    E-mail: <input type="email" name="user_email" value="joca@silva.com"><br>
    Nascimento: <input type="date" name="user_birth" value="1980-10-10"><br>
    Endereço: <textarea name="address">Rua do Siri Molhado, 22</textarea><br>
    Senha: <input type="password" name="password" value="12345"><br><br>

    <button type="submit">Cadastrar</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="reset">Limpar</button>

</form>

<h3>Exemplo 5</h3>
<p>Ajuda no preenchimento com "placeholder" e "title".</p>

<form action="/form_process.php" method="post">

    Seu nome: <input type="text" name="contact_name" placeholder="Preencha seu nome completo." title="Preencha seu nome completo."><br>
    Seu e-mail: <input type="email" name="contact_email" placeholder="Um e-mail válido." title="Um e-mail válido."><br>
    Assunto do contato: <input type="text" name="contact_subject" placeholder="Seja direto no assunto." title="Seja direto no assunto."><br>
    Mensagem: <textarea name="contact_message" placeholder="Escreva o quanto precisar." title="Escreva o quanto precisar."></textarea><br><br>

    <button type="submit" title="Clique aqui para enviar seu contato.">Enviar contato</button>

</form>

<h3>Exemplo 6</h3>
<p>Outros campos de formulário.</p>

<form action="/form_process.php" method="post">

    <h4>Campos "radio":</h4>

    Sexo:
    <input type="radio" name="gender" value="M"> Masculino &nbsp;
    <input type="radio" name="gender" value="F"> Feminino &nbsp;
    <input type="radio" name="gender" value="NI"> Não informar

    <br><br>

    Preferências:
    <input type="checkbox" name="preferences[]" value="HTML"> HTM5 &nbsp;
    <input type="checkbox" name="preferences[]" value="CSS"> CSS3 &nbsp;
    <input type="checkbox" name="preferences[]" value="PHP"> PHP8 &nbsp;
    <input type="checkbox" name="preferences[]" value="Java"> Java &nbsp;

    <br><br>

    Curso:
    <select name="course[]">
        <option value="" readonly>-- Selecione --</option>
        <option value="ti">Técnico em Informática</option>
        <option value="tmm">Técnico em Suporte</option>
        <option value="op">Operador de computador</option>
        <option value="excel">Planilhas com Excel</option>
    </select>

    <br><br>

    <!-- Multiplos valores usando "multiple" -->
    Outros cursos:
    <select name="other_courses[]" multiple>
        <option value="" readonly>-- Selecione --</option>
        <option value="ti">Técnico em Informática</option>
        <option value="tmm">Técnico em Suporte</option>
        <option value="op">Operador de computador</option>
        <option value="excel">Planilhas com Excel</option>
    </select>

    <br>
    Cor do crachá: <input type="color" name="color"><br>

    Selecione sua foto: <input type="file" name="Photo">

    <br>
    <!-- o preenchimento da idade é obrigatório - "required" -->
    Sua idade: <input type="number" name="age" required>

    <br>
    Dê um nota: <input type="range" name="note" min="0" max="10">

    Seu navegador:
    <input list="browsers">
    <datalist id="browsers">
        <option value="Internet Explorer">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
    </datalist>

    <br><br>
    <button type="submit" title="Clique aqui para enviar seu contato.">Enviar contato</button>

</form>

<h3>Exemplo 7</h3>
<p>Formulário de pesquisa no Google com campo "search":</p>

<form action="https://www.google.com/search" method="get">

    <input type="search" name="q" maxlength="10">

    <input type="submit" name="Procurar no Google">

</form>

<h3>Diversas utilidades</h3>

<form action="https://www.google.com/search" method="get">

    <!--Mini-regex, só permite de a-z 3vezes-->
    <label for="country_code">Country code:</label><br>
    <input type="text" id="country_code" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code"><br><br>
<!--Min e máx do input-->
    <label for="quantity">Quantity (between 1 and 5):</label><br>
    <input type="number" id="quantity" name="quantity" min="1" max="5"><br>
<!--Tamanho máximo-->
    <label for="pin">PIN:</label><br>
    <input type="text" id="pin" name="pin" maxlength="4" size="4"><br>
<!--Foca no campo quando a página é carregada-->
    <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" autofocus><br>

    <input type="submit" name="Procurar no Google" disabled>

</form>

<h3>The input formaction attribute</h1>

<p>The formaction attribute specifies the URL of a file that will process the input when the form is submitted.</p>

<form action="/form_process.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
  <input type="submit" formaction="/index.php" value="Back to Index">
</form>

<h3>The input formmethod Attribute</h1>

<p>The formmethod attribute defines the HTTP method for sending form-data to the action URL.</p>

<form action="/form_process.php" method="get" target="_blank">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit using GET">
  <input type="submit" formmethod="post" value="Submit using POST">
  <input type="submit" formtarget="_blank" value="Submit to a new window/tab">
</form>

<?php require __DIR__ . "/_footer.php"; ?>