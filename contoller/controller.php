<?php   


class Controller {

    public function create(Fila $fila, Prontuario $prontuario){

        try {

        $conn = new PDO('mysql:host=localhost;dbname=clinica', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        $nome = $prontuario->getNomePaci();
        $tipo = $prontuario->getTipo();
        $email = $prontuario->getEmail();
        $senha = $prontuario->getSenha();
        $cpf = $prontuario->getCpf();
        $datanasc = $prontuario->getDatanasci();
        $sexo = $prontuario->getSexo();
        $tipoTerapia = $prontuario->gettipoTerapia();



        $sqlPront = "INSERT INTO `prontuario`(`nomePaci`, `tipo`, `email`, `senha`, `Psicologo`, `cpf`, `datanasc`, `sexo`, `tipoTerapia`, `statusPront`, `Faltas`, `Assinatura`) VALUES ('$nome', '$tipo', '$email','$senha', 0, '$cpf', '$datanasc', '$sexo', '$tipoTerapia', 'DESATIVADO', 0, 'Sem Assinatura');";

        $conn->exec($sqlPront);
        
            
            $nomeFila =  $fila->getNomeFila();
            $emailfila = $fila->getEmail();
   
                $sqlfila = "INSERT INTO `fila` (`nomePaciente`, `estaNaFila`, `email`, `cpf`) VALUES ('$nomeFila', 'Sim', '$emailfila', null);"; 
            
            $conn->exec($sqlfila);

            $sqlLogin = "INSERT INTO `logins`(`tipo`, `usuario`, `senha`) VALUES ('PAC','$email','$senha')";

            $conn->exec($sqlLogin);


                $subject = 'Clinica de psicologia';
                $message = "Esse eamil é de confirmaçao de cadastro da clinica de psicologia seja Bem vindo";
                $data_envio = date('d/m/Y');
                $hora_envio = date('H:i:s');
                
                $headers = "Content-Type: text/plain;charset=utf-8\r\n";
                $headers .= "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                
                
                $corpo = "Email para marcar consulta \r\n";
                $corpo .= "Nome: " . $nome . "\r\n";
                $corpo .= "Email: " . $email . "\r\n";
                $corpo .= "Mensagem: " . $message . "\r\n";
                $corpo .= $data_envio."\r\n";
                $corpo .= $hora_envio."\r\n";
                
                
                $email_to = $email;
                
                
                $status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);
                
                if ($status == true):
                   //Enviada com sucesso
                    //echo("email enviado com sucesso ");
                else:
                  // Se der erro
                  //echo(" email nao enviado ");
                endif;
                
                echo ("<script>
                    window.alert('Cadastro realizado com sucesso :) VERIFIQUE se recebeu um email da clinica ')
                     window.location.href='http://localhost/ClinicaFinal';
                </script>");

        } catch (PDOException $e) {
            echo "O erro foi: {$e->getMessage()}";
        }
 
    }
    public function readProntuario(){

        $conn = new PDO('mysql:host=localhost;dbname=clinica', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
        try { 

            $sql = "SELECT idProntuario, nomePaci, email, Psicologo, tipoTerapia, statusPront, Faltas FROM prontuario where tipo = 'Pendente'";
            $stmt = $conn->query($sql);
            $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($dados);
            $f_lista = array();
            foreach ($dados as $dado) {
                $f_lista[] = $this->listarProntuario($dado);
            }
            return $f_lista;
        } catch (PDOException $e) {
            echo "O erro foi: {$e->getMessage()}";
        }

    }
    public function readPscicologos(){
        
    }
    public function update(){

    }
    public function delete(){

    }

    public function login($user, $pass){

        $conn = new PDO('mysql:host=localhost;dbname=clinica', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        
        $sqlLogin = "SELECT tipo, usuario, senha from logins where usuario = '$user' ";

        $stmt = $conn->prepare($sqlLogin);
        $stmt->execute(); 
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dados as $dado) {
            if ($dado["tipo"] == "PAC" && password_verify($pass, $dado['senha'])) {

                setcookie('cookieuser',$user, $pass,true,time() + 3600);
                

                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass; 
                $_SESSION['existe'] = true;

                echo ("<script>
                     window.location.href='http://localhost/ClinicaFinal/telaPaciente.php';
                </script>");
                

            }elseif ($dado["tipo"] == "ADM") {

                echo ("<script>
                     window.location.href='http://localhost/ClinicaFinal/telaPsicologo.php';
                </script>");
            }
            else {
                echo "usuario nao econtrado!";
                setcookie('user', false, time()-3600);
                $_SESSION['user'] = false;
            }
        }
        
    }
    private function listarProntuario($d){
        $prontuario = new Prontuario;
        $prontuario->setIdProntuario($d['idProntuario']);
        $prontuario->setNomePaci($d["nomePaci"]);
        $prontuario->setEmail($d["email"]);
        $prontuario->setPsicologo($d["Psicologo"]);
        $prontuario->settipoTerapia($d["tipoTerapia"]);
        $prontuario->setStatusPront($d["statusPront"]);
        $prontuario->setFaltas($d["Faltas"]);
        return $prontuario;
    }


    
}
