<?php
if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::deleteUser($_GET['id']);
    header('Location: usersactions');
    exit();
}