<?php include BASE_DIR."Views".DIRECTORY_SEPARATOR."Includes".DIRECTORY_SEPARATOR."_header.php"; ?>

    <body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 d-lg-block">
                                <div class="p-5">
                                    <div class="row">
                                        <div class="col-md-6 offset-5 img-logo">
                                            <img src="<?= BASE_URL ?>assets/img/logo.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-5 img-logo">
                                            <img src="<?= $colaborador['url_img']; ?>" class="img-fluid" width="100" height="100">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-lg-4">
                                            <p class="text-dados">Nome: <?= $colaborador['nome']; ?></p>
                                            <p class="text-dados">Idade: <?= $colaborador['idade']; ?></p>
                                            <p class="text-dados">Data de Admissão: <?= $colaborador['dt_admissao']; ?></p>
                                            <p class="text-dados">Dias Ativos: <?= $colaborador['diasAtivos']; ?></p>
                                            <p class="text-dados">Função: <?= $colaborador['nome_cargo']; ?></p>
                                            <!-- <p class="text-dados">Tipo Sanguíneo: </p> -->
                                            <p class="text-dados">Telefone: <?= $colaborador['telefone1']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


<?php include BASE_DIR."Views".DIRECTORY_SEPARATOR."Includes".DIRECTORY_SEPARATOR."_footer_externo.php";?>