@extends('templates.main')

@section('content')
    <h1>Liste des étudiants</h1>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant['nom'] }}</td>
                <td>{{ $etudiant['prenom'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection