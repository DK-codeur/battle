<?php 

class User
{
  static function getLastId()
  {
    global $db;
    $stat = $db->prepare('SELECT MAX(id) FROM users');
    $stat->execute([]);
    return $stat->fetch();
  }

  static function getAllUsers()
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users ');
    $stat->execute([]);
    return $stat->fetchAll();
  }

  static function insertUser($nom,$prenoms,$mail,$contact,$image,$statut,$active,$mdp)
  {
    global $db;
    $stat = $db->prepare('INSERT INTO users (nom,prenoms,email,contact,image,statut,active,password) VALUES(?,?,?,?,?,?,?,?)');
    $stat->execute([$nom,$prenoms,$mail,$contact,$image,$statut,$active,$mdp]);
    return $stat->fetch();
  }

  static function deleteUser($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM users WHERE id=?');
    $stat->execute([$id]);
  }
  static function bloquerUser($id)
    {
        global $db;
        $act=0;
        $stat = $db->prepare('UPDATE users set active=? WHERE id=?');
        $stat->execute([$act,$id]);
    }
    static function debloquerUser($id)
    {
        global $db;
        $act=1;
        $stat = $db->prepare('UPDATE users set active=? WHERE id=? ');
        $stat->execute([$act,$id]);
    }

  static function getUser($id)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE id=?');
    $stat->execute([$id]);
    return $stat->fetch();
  }

  static function updateUser($nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id)
  {
    global $db;
    $stat = $db->prepare('UPDATE users SET nom=?, prenoms=?, contact=?, image=?, statut=?, password=? WHERE id=?');
    $stat->execute([$nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id]);
  }
}