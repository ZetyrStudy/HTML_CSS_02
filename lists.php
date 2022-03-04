<?php require __DIR__ . "/_header.php"; ?>

<h2>Listas</h2>

<h3>Índice:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_lists.asp" target="_blank">Listas no W3Schools</a></li>
    <li>Listas não ordenadas</li>
    <li>Listas ordenadas</li>
    <li>Listas de definição</li>
</ul>

<h3>Lista não ordenada</h3>
<p><strong>ul</strong> &rarr; Unordered List.</p>
<p><strong>li</strong> &rarr; List item.</p>

<ul>
    <li>Casa</li>
    <li>Apartamento</li>
    <li>Barraco</li>
    <li>Cabana</li>
</ul>

<h3>Lista ordenada</h3>
<p><strong>ol</strong> &rarr; Ordered List.</p>
<p><strong>li</strong> &rarr; List item.</p>

<ol>
    <li>Casa</li>
    <li>Apartamento</li>
    <li>Barraco</li>
    <li>Cabana</li>
</ol>

<h3>Definindo marcador</h3>

<ul>
    <li type="circle">Circle</li>
    <li type="square">Square</li>
    <li type="disc">Disc</li>
    <li type="none">None</li>
</ul>

<h3>Listas hierarquicas</h3>

<ul>
    <li>Primeiro nível</li>
    <ul>
        <li>Segundo nível</li>
        <ul>
            <li>Terceiro nível</li>
            <ul>
                <li>Quarto nível</li>
            </ul>
        </ul>
    </ul>
</ul>

<h3>Listas ordenadas (parte 2)</h3>

<ol>
    <li type="1">Numérica</li>
    <li type="A">Alfabética maiúscula</li>
    <li type="a">Alfabética minúscula</li>
    <li type="I">Algarismos romanos maiúsculos</li>
    <li type="i">Algarismos romanos minúsculos</li>
</ol>

<ol type="i">
    <li>Casa</li>
    <li>Carro </li>
    <li>Moto</li>
    <li>Bicicleta</li>
</ol>

<h3>Lista hierarquica ordenada</h3>

<ol>
    <li>Primeiro nível</li>
    <ul>
        <li>Segundo nível</li>
        <ul>
            <li>Terceiro nível</li>
            <ul>
                <li>Quarto nível</li>
            </ul>
        </ul>
    </ul>
</ol>

<h3>Lista de definições</h3>

<p><strong>dl</strong> &rarr; Definition list</p>
<p><strong>dt</strong> &rarr; Termo a ser definido</p>
<p><strong>dd</strong> &rarr; Definição do termo</p>

<dl>
    <dt>HTML</dt>
    <dd>Linguagem que cria as estruturas de um documento de Internet.</dd>

    <dt>CSS</dt>
    <dd>Linguagem que formata visualmente os elementos do HTML.</dd>
</dl>

<h3>Exercícios:</h3>
<ol>
    <li>Crie uma lista não ordenada com os nomes dos alunos da turma.</li>
    <li>Crie uma lista ordenada das tarefas a serem executadas na manhã de amanhã.</li>
    <li>Crie uma lista definindo cada uma das tags usadas em listas HTML.</li>
</ol>

<hr>

<h3>Soluções dos exercícios</h3>

<h4>Exercício 1</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<ul>
    <li>Anderson</li>
    <li>Caio</li>
    <li>Daniel</li>
    <li>Davi</li>
    <li>David</li>
    <li>Erika</li>
    <li>Gabriel</li>
    <li>João</li>
    <li>Luca</li>
    <li>Lucas</li>
    <li>Rodrigo</li>
    <li>Stefan</li>
    <li>Vinícius</li>
    <li>Wendel</li>
</ul>

<h4>Exercício 2</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<ol>
    <li>10:00 - Acordar</li>
    <li>10:10 - Cochilar</li>
    <li>10:50 - Acordar atrasado</li>
    <li>10:55 - Escovar os dentes</li>
    <li>11:00 - Nõ tomar banho porque está sem água</li>
    <li>11:05 - Encher-se de perfume para disfarçar o cheiro</li>
    <li>11:10 - Sair para trabalhar com fome porque se atrasou</li>
    <li>12:00 - Comer porcaria no cmelô para matar a fome</li>
</ol>

<h4>Exercício 3</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<dl>
    <dt>UL</dt>
    <dd>Cria uma lista não ordenada</dd>
    <dt>OL</dt>
    <dd>Cria uma lista ordenada</dd>
    <dt>LI</dt>
    <dd>Cria um item de lista ordenada ou não ordenada</dd>
    <dt>DL</dt>
    <dd>Cria uma lista de definições</dd>
    <dt>DT</dt>
    <dd>Cria um termo a ser definido</dd>
    <dt>DD</dt>
    <dd>Apresenta a definição do termo</dd>
</dl>

<?php require __DIR__ . "/_footer.php"; ?>