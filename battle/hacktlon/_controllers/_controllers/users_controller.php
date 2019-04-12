<?php
if(isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $prenoms = checkInput($_POST['prenoms']);
    $mail = checkInput($_POST['mail']);
    $contact = checkInput($_POST['contact']);
    $path = 'assets/upload/';
    $img= $_FILES['image']['name'];
    $image = importImg($path,$_FILES['image']);
    $statut= checkInput($_POST['statut']);
    $active = checkInput($_POST['active']);
    $mdp = checkInput($_POST['mdp']);

    $stat = validFrom([$nom,$prenoms,$mail,$contact,$image,$statut,$active,$mdp]);
    if($stat)
    {
        User::insertUser($nom,$prenoms,$mail,$contact,$image,$statut,$active,$mdp);
            header('Location: dashboard');
            exit();
    }
    else
    {
        header('Location: users');
        exit();
    }
}