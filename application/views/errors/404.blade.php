@extends('templates.main')
@section('content')
<div class="log">
  <h1>404 Page introuvable</h1>
  @isset($log)
    <h2>Détail de l'erreur</h2>
     <p><pre>{!!$log!!}</pre></p>
  @endisset
  </div>
@endsection
