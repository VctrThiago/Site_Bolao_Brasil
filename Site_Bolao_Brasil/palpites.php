<?php include "conexao.php"; ?>

    <div class="container">
        <?php
            $sql = "SELECT * FROM dados_jogos";
            $query = $mysqli->query($sql);
            $i = 1;
            $j = 2;
            while ($dados = $query->fetch_array()){
        ?>
        <div class="row">
            <div class="col-12">
            Data do Jogo: <?php echo $dados['data']; ?> - 
            Hora do Jogo: <?php echo $dados['horario']; ?> - 
            Estadio: <?php echo $dados['local']; ?> - <br> 
            <img src="_images/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class="form-control" width="20px" name="cp<?php echo $i; ?>"> x 
            <input type="text" name="cp<?php echo $j; ?>" class="form-control" width="20px">
            <img src="_images/<?php echo $dados['timeb']; ?>.png"><br>
            </div>
            
        </div>
        <?php $i++;$j++;} ?>
    </div>

    <section id="features" class="features section"> <!--CSS linha 1028-->
        <div class="container">

            <!--TEXTO-->
            <div class="row">
                <div class="col-12">
                    <div class="section-title">     
                        <h2 class="wow fadeInUp" id="title-boloes" data-wow-delay=".4s">Meus bolões
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Todos bolões que você criar ou entrar aparecerão aqui!</p>
                    </div>
                </div>
            </div>

            <!--PALPITES-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--Palpite 01-->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">                       
                        <h3>Title</h3>
                        <p>informações</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--Palpite 01-->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">                       
                        <h3>Title</h3>
                        <p>informações</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--Palpite 01-->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">                       
                        <h3>Title</h3>
                        <p>informações</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--Palpite 01-->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">                       
                        <h3>Title</h3>
                        <p>informações</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                



            </div>
        </div>
    </section>