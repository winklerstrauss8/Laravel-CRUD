<h1>Bienvenue Christophe</h1>
<h2>Prêt pour le test de l'application CRUD en Laravel ??</h2>

@if ($errors->any())
    <div style="color: red;">
        <strong>Connexion impossible :</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/login" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div><br>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
    </div><br>
    <button type="submit">Se connecter</button>
</form>

{{-- <button href="/etudiant">Voir les étudiants</button> --}}