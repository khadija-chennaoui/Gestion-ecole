<?php
class ComptesController
{
    public function addclient()
    {
        if (isset($_POST['newclient'])) {
            $p = new comptes();
            $p->setnom($_POST['nom']);
            $p->settele($_POST['tele']);
            $p->setemail($_POST['email']);
            $p->setadrs($_POST['adrs']);
            $p->setpassword($_POST['password']);
            $p->setpass($_POST['pass']);
            $p->Ajouterclient();
        }
    }

    public function getClient()
    {
        $mode = new comptes();
        return $mode->Afficher();
        header('location:comptes');
    }

    public function connection()
    {
        if (isset($_POST['save'])) {
            if (isset($_POST['emailcon']) || isset($_POST['passcon'])) {
                $mode = new comptes();
                $email = $_POST['emailcon'];
                $pass = $_POST['passcon'];


                $req = $mode->GetData("SELECT * FROM comptes WHERE email LIKE ? AND PasswordC  LIKE ? AND Role_Con LIKE ?");
                $req->execute([$email, $pass, 'Client']);
                $req = $req->fetch();
                if ($req) {
                    session_start();
                    $_SESSION['email'] = $email;
                    var_dump($req);
                    header('location:shop-left-sidebar');
                } else {

                    header('location:comptes');
                }

                $sql = $mode->GetData("SELECT * FROM comptes WHERE email LIKE ? AND PasswordC  LIKE ? AND Role_Con LIKE ?");
                $sql->execute([$email, $pass, 'Admin']);
                $sql = $sql->fetch();
                if ($sql) {
                    session_start();
                    $_SESSION['email'] = $email;
                    var_dump($req);
                    header('location:dash');
                } else {

                    header('location:comptes');
                }
            }
        }
    }
    public function acheter(){
        session_start();
        if (isset($_POST['acheter'])) {
            
            if (isset($_SESSION['email'])) {
                
                unset($_SESSION['email']);
                header('location:https://api.whatsapp.com/send?phone=2120616825633&text=hello'); 

            }else {
                header('location:comptes');
            }
        }
    }
}
