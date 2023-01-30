<?php include ("cabecalho.php");?>


<article>
    <h2>Formulário de Reserva</h2>
   

    <form action="#" method="post">
       <h4>Dados Pessoais do Cliente </h3>
    <div>
            <label for="inome">Nome: </label>
            <input type="text" name="nome" id="inome" required>
            
            <label for="inum">Número de Telefone: </label>
           <input type="number" name="num" id="inum" required >
     </div>
        <fieldset>
           <legend> Dados do DJ</legend>
           <select name="dj" id="" required>
            <option value="" checked>Selecione o DJ</option>
            <option value="1">DJ Nelasta</option>
            <option value="2">DJ Malvado</option>
            <option value="3">DJ Zaques Bantwini</option>
           </select>
           <label for="idata">Data para reserva</label>
           <input type="date" name="data" id="idata" required>
            <div>
                <label for="ipreco">Valor da Reserva</label>
                <input  type="number" name="preco  " id="ipreco" required>
            </div>
        </fieldset>

        <input class="botao" type="submit" value="Reservar">

    </form>



    <p><a class="btn-form" href="dj.php">Voltar</a></p>
</article>
    

<?php include ("rodape.php");?>