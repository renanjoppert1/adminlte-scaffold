<?php
System::AtualizaConfiguracoes();
$configuracoes = System::SelecionaConfiguracoes()->fetch(PDO::FETCH_OBJ);
require_once DIR_ADMIN . 'includes/header.inc.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Geral
            <small>Configurações</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Painel</li>
            <li>Configurações</li>
            <li class="active">Geral</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="configuracoes-geral">
        <form method="post" enctype=multipart/form-data>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <p><strong>Configurações Gerais do Site</strong></p>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Página em Construção</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="checkbox" id="paginaConstrucao" name="paginaConstrucao" class='switch' <?php echo ($configuracoes->paginaConstrucao == 1) ? "checked" : ""; ?> />
                                    <label for="paginaConstrucao"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Ícone Favicon</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="file-drop-area col-xs-6">
                                        <span class="fake-btn">Escolha o Arquivo</span>
                                        <span class="file-msg js-set-number">ou solte ele aqui</span>
                                        <input class="file-input" type="file" name="favicon">
                                    </div>
                                    
                                    <?php
                                    if( $configuracoes->favicon != null ){
                                        echo '<img src="'. DIR_PUBLIC_IMG .'/'. $configuracoes->favicon. '" alt="Favicon">';
                                        echo '<input type="hidden" name="hFavicon" value="'. $configuracoes->favicon. '"/>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Logo</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="file-drop-area col-xs-6">
                                        <span class="fake-btn">Escolha o Arquivo</span>
                                        <span class="file-msg js-set-number">ou solte ele aqui</span>
                                        <input class="file-input" type="file" name="logo">
                                    </div>
                                    <?php
                                    if( $configuracoes->logo != null ){
                                        echo '<img src="'. DIR_PUBLIC_IMG .'/'. $configuracoes->logo. '" alt="Logo">';
                                        echo '<input type="hidden" name="hLogo" value="'. $configuracoes->logo. '"/>';
                                    }
                                    ?>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-12"><strong>Informações de Contato</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Telefone da Empresa</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control fone" name="telefone" placeholder="Telefone da Empresa" <?php echo ($configuracoes->telefone != null) ? 'value="'.$configuracoes->telefone.'"' : ''; ?> />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>E-mail da Empresa</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail da Empresa" <?php echo ($configuracoes->email != null) ? 'value="'.$configuracoes->email.'"' : ''; ?>/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Whatsapp da Empresa</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp da Empresa" <?php echo ($configuracoes->whatsapp != null) ? 'value="'.$configuracoes->whatsapp.'"' : ''; ?>/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Endereço da Empresa</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="endereco" placeholder="Endereço da Empresa" <?php echo ($configuracoes->endereco != null) ? 'value="'.$configuracoes->endereco.'"' : ''; ?>/>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-sm-12"><strong>Informações do Site</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Copyright</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="copyright" placeholder="Texto de Rodapé" <?php echo ($configuracoes->copyright != null) ? 'value="'.$configuracoes->copyright.'"' : ''; ?>/>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="alteraConfiguracoes" value="Salvar" class="btn pull-right btn-info" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <?php
//$arquivo = "views/admin/config.txt";
//$arquivo = file("$arquivo");
//
//echo "<form id=\"form\" name=\"form\" method=\"post\">";
//echo "Digite o texto:<br /><textarea name=\"texto\" rows=\"20\" class=\"form-control\" cols=\"90\">";
//foreach ($arquivo as $texto) {
//    echo "$arquivo";
//}
//echo "</textarea><br />";
//echo "<input type=\"submit\" class=\"btn btn-default\" value=\"Enviar\">";
//echo "</form>";
                    ?>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </form>
    </section>
    <!-- /.content -->
</div>
<?php
require_once DIR_ADMIN . 'includes/footer.inc.php';
?>