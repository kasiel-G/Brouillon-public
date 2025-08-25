<?php
    require "../models/dataconnexion.php";
    require "../app/utils/fileUploader.php";

    $db = connection_db();

    function create(){
        global $db;

        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $age = htmlentities($_POST['age']);
        $email = htmlentities($_POST['email']);
        $adresse = htmlentities($_POST['Adresse']);
        $tel = htmlentities($_POST['tel']);
        $password = htmlentities($_POST['password']);

        $req1 = $db->prepare("SELECT * FROM users WHERE email = ?");
        $req1->execute([$email]);
        $count = $req1->rowCount();

        if($count == 1){

            $photo = file_upload($_FILES['PDP'], '../public/uploads/users');
            $passwordSec = password_hash($password, PASSWORD_BCRYPT);
            $req2 = $db->prepare("INSERT INTO users (nom, prenom, age, email, adresse, tel, password, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $req2->execute([$nom, $prenom, $age, $email, $adresse, $tel, $passwordSec, $photo]);

            return [
                "status" => "success",
                "message" => "Compte créé avec succès !"
            ];
        } else {
            return [
                "status" => "error",
                "message" => "Email déjà utilisé !"
            ];
        }


    }


?>