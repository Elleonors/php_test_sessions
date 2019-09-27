<?php
function getArticles(){
  $bdd = new PDO('mysql:host=localhost;dbname=miniblog;charset=utf8','root','');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $req = $bdd->query('SELECT id_articles, titre_articles, date_articles FROM articles ORDER BY id DESC');
  $req->execute();
  $data = $req->fetchAll(PDO::FETCH_OBJ);
  return $data;
}
$articles = getArticles();
?>