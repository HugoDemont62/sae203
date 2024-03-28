@extends('templates.main')

@section('content')
    <h1>EDIT a new internship</h1>

    <h2>Invitation:</h2>
    <a href="{{URL_PUBLIC}}invitation"><i class="bx bx-link"></i> Invitation</a>

    <h2>delete intership</h2>
    <a href="index.php?action=supprimer_stage&idStage={{ $stage['id'] }}">Delete Internship</a>


    <h2>Create a new internship:</h2>
    <form action="index.php?action=editer_stage" method="post">
        @csrf
        <label for="idEtudiant">Student:</label><br>
        <select id="idEtudiant" name="idEtudiant">
            @foreach ($etudiants as $etudiant)
                <option value="{{ $etudiant['id'] }}" {{ $etudiant['id'] == $stage['idEtudiant'] ? 'selected' : '' }}>{{ $etudiant['nom'] }} {{ $etudiant['prenom'] }}</option>
            @endforeach
        </select><br>
        <label for="idEntreprise">Company:</label><br>
        <select id="idEntreprise" name="idEntreprise">
            @foreach ($entreprises as $entreprise)
                <option value="{{ $entreprise['id'] }}" {{ $entreprise['id'] == $stage['idEntreprise'] ? 'selected' : '' }}>{{ $entreprise['nom'] }}</option>
            @endforeach
        </select><br>
        <label for="dateDebut">Start Date:</label><br>
        <input type="date" id="dateDebut" name="dateDebut" value="{{ $stage['dateDebut'] }}"><br>
        <label for="dateFin">End Date:</label><br>
        <input type="date" id="fin" name="dateFin" value="{{ $stage['dateFin'] }}"><br>
        <label for="soutenance">Defense Date:</label><br>
        <input type="date" id="soutenance" name="soutenance" value="{{ $stage['soutenance'] }}"><br>
        <label for="maitre">Master:</label><br>
        <input type="text" id="maitre" name="maitre" value="{{ $stage['maitre'] }}"><br>
        <label for="mission">Mission:</label><br>
        <textarea id="mission" name="description">{{ $stage['description'] }}</textarea><br>
        <input type="submit" value="Create internship">
    </form>

@endsection