<?php

require_once 'class/PHPMailer/class.phpmailer.php';

class FormMailer {

    public static function FormContato() {

        if (isset($_POST['enviaContato'])) {

            // Inicia a classe PHPMailer
            $mail = new PHPMailer();

            // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = SMTP_HOST; // Seu endereço de host SMTP
            $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
            $mail->Port = SMTP_PORT; // Porta de comunicação SMTP - Mantenha o valor "587"
            $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
            $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
            $mail->Username = SMTP_USER; // Conta de email existente e ativa em seu domínio
            $mail->Password = SMTP_PASS; // Senha da sua conta de email
            // DADOS DO REMETENTE
            $mail->Sender = SMTP_SENDER; // Conta de email existente e ativa em seu domínio

            $nome = $_POST['nome'];
            $email = strtolower($_POST['email']);
            $fone = $_POST['fone'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            $mail->From = $email; // Sua conta de email que será remetente da mensagem
            $mail->FromName = $nome; // Nome da conta de email
            // DADOS DO DESTINATÁRIO
            $mail->AddAddress('contato@broimoveis.com.br', COMPANY_NAME); // Define qual conta de email receberá a mensagem
            //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
            //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
            //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
            // Definição de HTML/codificação
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
            // DEFINIÇÃO DA MENSAGEM
            $mail->Subject = "Formulário de Contato - BRO Imóveis"; // Assunto da mensagem
            $mail->Body .= " Nome: " . $nome . "<br>"; // Texto da mensagem
            $mail->Body .= " E-mail: " . $email . "<br>"; // Texto da mensagem
            $mail->Body .= " Fone: " . $fone . "<br>"; // Texto da mensagem
            $mail->Body .= " Assunto: " . $assunto . "<br>"; // Texto da mensagem
            $mail->Body .= ' Mensagem: ' . $mensagem . '<br><br><br>Esta mensagem foi enviada da página de <a href="' . HTTP_SERVER . '/contato">Contato</a>'; // Texto da mensagem
            // ENVIO DO EMAIL
            $enviado = $mail->Send();
            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();

            // Exibe uma mensagem de resultado do envio (sucesso/erro)
            if ($enviado) {
                echo '<div class="col-sm-12 success" style="border-radius: 5px; margin-bottom: 20px;">E-mail enviado com sucesso!</div>';

                $stmt = DB::newPDO()->prepare('INSERT INTO contatos(nome, email, telefone, assunto, mensagem, status) VALUES (?,?,?,?,?,?)');
                $stmt->bindValue(1, $nome, PDO::PARAM_STR);
                $stmt->bindValue(2, $email, PDO::PARAM_STR);
                $stmt->bindValue(3, $fone, PDO::PARAM_STR);
                $stmt->bindValue(4, $assunto, PDO::PARAM_STR);
                $stmt->bindValue(5, $mensagem, PDO::PARAM_STR);
                $stmt->bindValue(6, 0, PDO::PARAM_INT);
                $stmt->execute();
            } else {
                echo '<div class="col-sm-12 bg-danger" style="border-radius: 5px; margin-bottom: 20px;"><p style="margin: 15px 0 15px;">Não foi possível enviar o e-mail.' . '<b> Detalhes do erro:</b> ' . $mail->ErrorInfo . '</p></div>';
            }
        }
    }

    public static function EnvioInteresseImovel($parametros = array()) {

        // Inicia a classe PHPMailer
        $mail = new PHPMailer();

        // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = SMTP_HOST; // Seu endereço de host SMTP
        $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
        $mail->Port = SMTP_PORT; // Porta de comunicação SMTP - Mantenha o valor "587"
        $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
        $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
        $mail->Username = SMTP_USER; // Conta de email existente e ativa em seu domínio
        $mail->Password = SMTP_PASS; // Senha da sua conta de email
        // DADOS DO REMETENTE
        $mail->Sender = SMTP_SENDER; // Conta de email existente e ativa em seu domínio

        $mail->From = $parametros['emailContato']; // Sua conta de email que será remetente da mensagem
        $mail->FromName = $parametros['nomeContato']; // Nome da conta de email
        // DADOS DO DESTINATÁRIO
        $mail->AddAddress('broimoveis@broimoveis.com.br', COMPANY_NAME); // Define qual conta de email receberá a mensagem
        //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
        //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
        //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
        // Definição de HTML/codificação
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
        // DEFINIÇÃO DA MENSAGEM
        $mail->Subject = "[".$parametros['id']."] Interesse no Imóvel ".$parametros['titulo']; // Assunto da mensagem
        $mail->Body .= " Nome: " . $parametros['nomeContato'] . "<br>"; // Texto da mensagem
        $mail->Body .= " E-mail: " . $parametros['emailContato'] . "<br>"; // Texto da mensagem
        $mail->Body .= " Fone: " . $parametros['foneContato'] . "<br>"; // Texto da mensagem
        $mail->Body .= ' Mensagem: ' . $parametros['mensagemContato'] . '<br><br><br>Esta mensagem foi enviada da página de <a href="' . HTTP_SERVER . '/imovel/categoria/'.Format::urlConvert($parametros['tipo']).'/'.Format::urlConvert($parametros['titulo']).'/'. $parametros['id'] .'">'. $parametros['titulo'] .'</a>'; // Texto da mensagem
        // ENVIO DO EMAIL
        $enviado = $mail->Send();
        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        
        
        if ($enviado) {
            return true;
        }else{
            return false;
        }
    }

}
