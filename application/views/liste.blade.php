@extends('templates.main')

@section('content')
    <h1>Gestion des questionnaires de stage</h1>

    <h2>List of all stages:</h2>
    @foreach ($all_stages as $stage)
        <p>{{ $stage['nom'] }}</p>
    @endforeach

    <h2>List of students without internships:</h2>
    @foreach ($etudiants_sans_stage as $etudiant)
        <p>{{ $etudiant['nom'] }} {{ $etudiant['prenom'] }}</p>
    @endforeach

@endsection