@extends('templates.main')

@section('content')
<h1>Gestion des questionnaires de stage</h1>
<div class="connexion">
  <img src="{{URL_PUBLIC}}logo/qStageLight.png" alt="">
<h2> Connexion à votre compte</h2>
  <form action="index.php?action=login" method="post">
    <label for="username">Nom d'utilisateur:</label><br>
    <input type="text" id="username" name="nom"><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="mot_de_passe"><br>
    <input type="submit" value="Se connecter">
  </form>
  <!-- Ajout du bouton pour accéder à la page des étudiants -->
  <a href="index.php?page=etudiants" class="button">Voir les étudiants</a>
</div>
@endsection