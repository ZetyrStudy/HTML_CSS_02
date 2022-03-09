<?php require __DIR__ . "/_header.php"; ?>

<style>
    .elup {
        background-color: pink;
    }

    .eldw {
        background-color: lightgreen;
    }

    .el_principal {
        background-color: lightgray;
        /*  padding: 10px; Enchimento de todos os lados. */
        /* Cada lado
        padding-left: 10px;
        padding-top: 25px;
        padding-bottom: 30px;
        padding-right: 40px;
        */

        /* top right bottom left
        padding: 25px 40px 30px 10px;
        */

        /* somente 2 valores top/bottom - left/right */
        padding: 10px 45px;

        /*
        Bordas (espessura, formato, cor)
            Formatos: solid, dashed, dotted, double (3px em diante)
        */
        /* border: 3px double red; */

        /** bordas de cada lado */

        border-top: 1px solid black;
        border-right: 4px dotted green;
        border-bottom: 3px double red;
        border-left: 10px solid grey;

        /** Afasta elemento dos outros */
        /* margin: 30px; */
        /*
        margin-top: 10px;
        margin-right: 50px;
        margin-bottom: 25px;
        margin-left: 35px; */
        /* margin: 10px 50px 25px 35px */
        margin: 10px 50px;

        /* border-radius: 10px; */
        /* border-top-left-radius: 10px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 30px;
        border-bottom-left-radius: 40px; */
        border-radius: 10px 20px 30px 40px;
        /* border-radius: 10px 40px; */

        width: 200px;
        height: 100px;
        overflow: auto;

    }

    .topo {
        background-color: black;
        color: white;
    }

    .conteudo {
        background-color: gray;
        color: white;
        overflow: auto;
        padding: 1rem;
    }

    .conteudo *:first-child {
        margin-top: 0;
    }

    .conteudo *:last-child {
        margin-bottom: 0;
    }

    .conteudo *:nth-child(3) {
        background-color: red;
    }

</style>

<div class="elup">🚗</div>
<div class="el_principal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi aut reiciendis necessitatibus laborum culpa? Alias impedit harum dolore delectus, assumenda tempora laboriosam dolorum eos optio doloremque! Sequi, dignissimos. Laborum, ipsa?</div>
<div class="eldw">🚙</div>



<hr>


<div class="topo">coisas</div>
<div class="conteudo">
    <h5>Título</h5>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis iste, neque quasi doloribus adipisci maiores. Facere, doloremque. Praesentium sed ratione delectus veritatis, accusantium, in sit ad sequi rem cumque error?</p>
    <h4>Título 4</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam earum eveniet, doloremque minus odit illo rerum nulla dicta, quibusdam quis culpa, aperiam perspiciatis iure modi eius molestias aspernatur blanditiis excepturi?</p>
    <blockquote>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptas accusantium, aliquid, ad inventore sit veniam fugit ut quod unde, odit sequi provident nihil accusamus nulla alias fuga quaerat doloremque!
    </blockquote>
</div>

<?php require __DIR__ . "/_footer.php"; ?>