<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questionnaire de stage</title>
    <link rel="stylesheet" href="{{URL_CSS}}style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
    @isset($_SESSION['info'])
      <p id="info">{{$_SESSION['info']}}</p>@php unset($_SESSION['info']); @endphp
    @endisset
    <div class = container>
    @yield("content")
    </div>
    <footer> <img class="logo" src="{{URL_PUBLIC}}logo/qStageLight.png" alt=""> &copy; MMI Création 2024-2025 -- tous droits réservés </footer>
  </body>
</html>
