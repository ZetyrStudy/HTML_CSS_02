<?php require __DIR__ . "/_header.php"; ?>

<style>
    /**
     * Folhas de estilo somente para facilitar a visualização dos elementos das tabelas.
     */
    table,
    tr,
    th,
    td {
        border: 1px solid black;
    }
</style>

<h2>Tabelas</h2>

<h3>Referências:</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html_tables.asp" target="_blank">Tabelas no W3Schools</a></li>
</ul>

<ul>
    <li><strong>table</strong> &rarr; Cria uma tabela.</li>
    <li><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</li>
    <li><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</li>
    <li><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</li>
    <li><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</li>
    <li><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</li>
</ul>

<h3>Exemplo simples</h3>

<table>

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Colspan e Rowspan</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<h3>Exercícios</h3>
<ol>
    <li>Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.</li><br>
    <li>Crie uma pequena lista de compras para o brunch das crianças.</li><br>
    <li>Clique no relógio do Windows e reproduza o calendário do mês atual usando HTML.</li>
</ol>

<hr>

<h3>Soluções dos exercícios</h3>

<h4>Exercício 1</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<table>

    <!-- Primeira linha - Cabeçalho -->
    <tr>
        <th>Cabeçalho 1</th>
        <th>Cabeçalho 2</th>
        <th>Cabeçalho 3</th>
        <th>Cabeçalho 4</th>
    </tr>

    <!-- Linhs 2 à 6 - Dados -->
    <tr>
        <td>Linha 2 - Coluna 1</td>
        <td>Linha 2 - Coluna 2</td>
        <td>Linha 2 - Coluna 3</td>
        <td>Linha 2 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 3 - Coluna 1</td>
        <td>Linha 3 - Coluna 2</td>
        <td>Linha 3 - Coluna 3</td>
        <td>Linha 3 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 4 - Coluna 1</td>
        <td>Linha 4 - Coluna 2</td>
        <td>Linha 4 - Coluna 3</td>
        <td>Linha 4 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 5 - Coluna 1</td>
        <td>Linha 5 - Coluna 2</td>
        <td>Linha 5 - Coluna 3</td>
        <td>Linha 5 - Coluna 4</td>
    </tr>

    <tr>
        <td>Linha 6 - Coluna 1</td>
        <td>Linha 6 - Coluna 2</td>
        <td>Linha 6 - Coluna 3</td>
        <td>Linha 6 - Coluna 4</td>
    </tr>

</table>

<h4>Exercício 2</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>

<table>

    <tr>
        <th>Item</th>
        <th>Qtd</th>
        <th>Preço</th>
    </tr>

    <tr>
        <td>Pão</td>
        <td>10</td>
        <td>R$0,50</td>
    </tr>

    <tr>
        <td>Leite</td>
        <td>1</td>
        <td>R$4,00</td>
    </tr>

    <tr>
        <td>Ovos</td>
        <td>5</td>
        <td>R$0,35</td>
    </tr>

    <tr>
        <td>Pipoca</td>
        <td>5</td>
        <td>R$2,00</td>
    </tr>

    <tr>
        <td>Pirulito</td>
        <td>10</td>
        <td>R$1,00</td>
    </tr>

</table>

<h4>Exercício 3</h4>
<p><em>Este é um exemplo de solução, não a solução definitiva. Para ver a solução, exiba o código fonte desta página.</em></p>
Março de 2022
<table>

    <tr>
        <th>D</th>
        <th>S</th>
        <th>T</th>
        <th>Q</th>
        <th>Q</th>
        <th>S</th>
        <th>S</th>
    </tr>

    <tr>
        <td colspan="2"></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>

    <tr>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td><strong><em>9</em></strong></td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
    </tr>

    <tr>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
    </tr>

    <tr>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
    </tr>

    <tr>
        <td>27</td>
        <td>28</td>
        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td colspan="2"></td>
    </tr>

</table>



<?php require __DIR__ . "/_footer.php"; ?>