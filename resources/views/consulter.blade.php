<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Liste des élèves</title>
    <link rel="stylesheet" href="/css/pico.css">
</head>
<body>
    @include('includes.header')

    <main>
        <h1>Élèves inscrits</h1>

        <!-- Messages -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <ul>
            @foreach($eleves as $eleve)
                <li>
                    {{ $eleve->prenom }} {{ $eleve->nom }} - Classe : {{ $eleve->classe }}

                    <!-- Modifier -->
                    <a href="{{ route('modification_eleve', $eleve->id) }}">Modifier</a>

                    <!-- Supprimer -->
                    <form action="{{ route('consulter') }}" method="POST" style="display:inline" 
                          onsubmit="return confirm('Voulez-vous vraiment supprimer cet élève ?');">
                        @csrf
                        <input type="hidden" name="delete_id" value="{{ $eleve->id }}">
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </main>

    @include('includes.footer')
</body>
</html>
