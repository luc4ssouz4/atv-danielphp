<?php
$message = "";
if (isset($_POST["faleconosc"])):

$arquivo = fopen('solicitacoes.txt','a');   

$texto = "
---- Solicitação de contato ----
Nome: {$_POST['nome']}
Email: {$_POST['email']}
Assunto: {$_POST['assunto']}
Mensagem: {$_POST['mensagem']}

";   
    
fwrite($arquivo, $texto);

$message = "<div class=\"alert alert-success\" role=\"alert\">Mensagem enviada com sucesso</div>";

endif;

?>
<div class="container">
    <div class="row">

        <div class="col-2"></div>
        <div class="col-8"
            style="background-color: rgb(0 0 0 / 20%);    border-radius: 5px;    margin-top: 50px;color:#e9e9e9">
            <h2>FALE CONOSCO</h2>
            <p>Telefone: (81) 991397154</p>
            <p>Email: contato@unipe.com.br</p>

            <form method="POST">

                <?= $message; ?>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nome</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="nome">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Assunto</label>
                    <select class="form-select" name="assunto">
                        <option value="0" selected>Selecione...</option>
                        <option value="sugestao">Sugestão</option>
                        <option value="duvida">Duvida</option>
                        <option value="reclamacao">Reclamação</option>
                    </select>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Mensagem</span>
                    <textarea class="form-control" aria-label="With textarea" name="mensagem"></textarea>
                </div>

                <br>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="faleconosc"></button>
                </div>
                <br>

            </form>



        </div>
    </div>
    </form>