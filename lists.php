<?php require __DIR__ . "/_header.php"; ?>

<h2>Listas</h2>

<h3>Índice:</h3>
<ul>
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

<h3>Alunos da turma</h3>
<ul>
    <li>Stefan</li>
    <li>Luca</li>
    <li>Wendel</li>
    <li>Vinicius</li>
    <li>Erika</li>
</ul>

<h3>Tarefas a serem executadas</h3>
<ol>
    <li type="1">Ligue o computador</li>
    <li type="1">Logue no GitDesktop</li>
    <li type="1">Acesse o Meet</li>
    <li type="1">Acesse o Drive</li>
    <li type="1">Ligue o XAMPP</li>
</ol>

<dl>
    <dt><strong>ul</strong> &rarr; Unordered List.</dt>
    <dd>
        <p>Uma lista não ordenada é uma lista de itens marcadas com símbolos.</p>

        <p>Uma lista não ordenada começa com a tag &ltul&gt e cada item da lista começa com a tag &ltli&gt.</p>
    </dd>
    <dt><strong>ol</strong> &rarr; Ordered List.</dt>
    <dd>
        <p>Uma lista ordenada é também uma lista de itens marcadas com números.</p>

        <p>Uma lista ordenada começa com a tag &ltol&gt e cada item da lista começa com a tag &ltli&gt.</p>
    </dd>
    <dt><strong>dl</strong> &rarr; Definition list</dt>
    <dd>
        <p>Uma lista de definições não é uma lista de itens com termos e explicações dos mesmos.</p>

        <p>Uma lista de definições começa com a tag &ltdl&gt. Cada termo da lista de definições começa com a tag &ltdt&gt. Cada definição da lista de definições começa com a tag &ltdd&gt.</p>
    </dd>

</dl>


<?php require __DIR__ . "/_footer.php"; ?>