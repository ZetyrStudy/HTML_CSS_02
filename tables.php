<?php require __DIR__ . "/_header.php"; ?>

<style>
    table {
        font-size: 16px;
        text-align: center;
        background: lightblue;
    }

    .table,
    tr,
    td,
    th {
        border: 1px solid black;
    }

    #lista-brunch {
        border: 1px dotted black;
        background: lightgoldenrodyellow;
        display: table;
        padding-right: 15px;
        ;
    }

    #table-header {
        background: grey;
        font-weight: 800;
        font-size: 1.2rem;
    }

    td,
    th {
        padding: .5rem;
    }

    .calendario {
        background: black;
        color: white;
        display: table;
        padding: 15px;
    }

    #tab-cal {
        background: black;
    }

    #outside {
        opacity: 0.8;
        color: grey;
    }

    #today {
        background: blue;
        border: 3px solid darkblue;
    }
</style>

<h2>Tabelas</h2>

<p><strong>table</strong> &rarr; Cria uma tabela.</p>
<p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
<p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
<p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
<p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>

<div class="exercicio1">
    <table>

        <tr id="table-header">
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

    <h3>Outra tabela</h3>

    <table>

        <tr id="table-header">
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

    <!--
    Exercício: Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.
-->

    <h3>Tabela de Estoque</h3>

    <table>
        <tr id="table-header">
            <th>Nome do Produto</th>
            <th>Preço (Unidade)</th>
            <th>Departamento</th>
            <th>Quantidade</th>
        </tr>
        <tr>
            <td>Camisa T-shirt</td>
            <td>R$50,00</td>
            <td>Moda</td>
            <td>1200</td>
        </tr>
        <tr>
            <td>Calça Jeans Old</td>
            <td>R$70,00</td>
            <td>Moda</td>
            <td>600</td>
        </tr>
        <tr>
            <td>Gravata Listra diagonal</td>
            <td>R$15,00</td>
            <td>Moda</td>
            <td>2200</td>
        </tr>
        <tr>
            <td>Sapato Social Society</td>
            <td>R$120,00</td>
            <td>Sapatos</td>
            <td>400</td>
        </tr>
        <tr>
            <td>Cinto Largo-H</td>
            <td>R$30,00</td>
            <td>Moda</td>
            <td>2100</td>
        </tr>
        <td>Perfume Romantic 2034</td>
        <td>R$110,00</td>
        <td>Perfumaria</td>
        <td>300</td>
        </tr>
    </table>
</div>

<p><strong>Exercício 2:</strong> Crie uma pequena lista de compras para o brunch das crianças.</p>

<h3>Lista do brunch:</h3>

<div id="lista-brunch">
    <ul id="brunch">
        <li>Bacon</li>
        <li>Ovos</li>
        <li>Pão francês</li>
        <li>Linguiça</li>
        <li>Torrada</li>
        <li>Geléia de Morango</li>
    </ul>
</div>
<p><strong>Exercício 3:</strong> Clique no relógio do Windows e reproduza o calendário do mês atual usando HTML.</p>



<div class="calendario">
    <hr>
    <h3>fevereiro de 2022</h3>
    <table id="tab-cal">
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
            <td id="outside">30</td>
            <td id="outside">31</td>
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
            <td>9</td>
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
            <td id="today">24</td>
            <td>25</td>
            <td>26</td>
        </tr>
        <tr>
            <td>27</td>
            <td>28</td>
            <td id="outside">1</td>
            <td id="outside">2</td>
            <td id="outside">3</td>
            <td id="outside">4</td>
            <td id="outside">5</td>
        </tr>
        <tr>
            <td id="outside">6</td>
            <td id="outside">7</td>
            <td id="outside">8</td>
            <td id="outside">9</td>
            <td id="outside">10</td>
            <td id="outside">11</td>
            <td id="outside">12</td>
        </tr>

    </table>
    <hr>
</div>



<?php require __DIR__ . "/_footer.php"; ?>