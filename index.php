<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>


<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

        <hr>
        <?php if ($db) : ?>
            <div class="row mt-2">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <a href="customers/add.php" class="btn btn-dark">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                            <i class="fa-solid fa-user-plus fa-6x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p><strong>Novo Cliente</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <a href="customers" class="btn btn-secondary">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                            <i class="fa-solid fa-users fa-6x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p><strong>Clientes</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
            <div class="row mt-2">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <a href="adms/addAdm.php" class="btn btn-dark">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                            <i class="fa-solid fa-user-tie fa-6x"></i></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p><strong>Novo Gerente</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <a href="adms" class="btn btn-secondary">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                            <i class="fa-solid fa-people-group fa-6x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <p><strong>Gerentes</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            </div>

        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
            </div>

        <?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>