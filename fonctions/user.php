<?php

function inscription(){

    global $bdd;

    extract($_POST);

    $validation = true;

    $erreur = [];

    if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)){
        $validation = false;
        $erreur[] = "Tous les champs sont requis!";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validation = false;
        $erreur[] = "L'adresse email n'est pas valide !";
    }elseif($emailconf != $email){
        $validation = false;
        $erreur[] = "L'email de confirmation n'est pas correct !";
    }

    if($passwordconf != $password){
        $validation = false;
        $erreur[] = "Le mot de passe de confirmation n'est pas correct";
    }

    if(existe($pseudo)){
        $validation = false;
        $erreur[] = "Ce pseudo est déjà utilisé";
    }

    if($validation){
        $req = $bdd->prepare("INSERT INTO users(pseudo, email, password, created_at, updated_at, admin) VALUES(:pseudo, :email, :password ,:created_at, :updated_at, :admin)");

        $req->execute([
            "pseudo" => htmlspecialchars($pseudo),
            "email" => htmlspecialchars($email),
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            "admin" => 0
        ]);

        unset($_POST['email']);
        unset($_POST['emailconf']);
        unset($_POST['password']);
    }

    return $erreur;
}

function existe($pseudo){
    global $bdd;

    $req = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo=?');
    $req->execute([$pseudo]);
    $resultat = $req->fetch()[0];

    return $resultat;
}

function connexion(){
    global $bdd;
    extract($_POST);
    $validation = true;
    $erreur = "Les identifiants sont érronés !";

    $req = $bdd->prepare('SELECT id, password FROM users WHERE pseudo=?');
    $req->execute([$pseudo]);

    $user = $req->fetch();

    if(password_verify($password, $user['password'])){
        $_SESSION['user'] = $user['id'];
        header('Location: compte.php');
    }else
        return $erreur;
    

}

function deconnexion(){
    unset($_SESSION['user']);
    session_destroy();
    header('Location: connexion.php');
}

function infos(){
    global $bdd;

    $req = $bdd->prepare('SELECT pseudo, email FROM users WHERE id=?');

    $req->execute([$_SESSION['user']]);
    $user = $req->fetch();
    return $user;
}
