@extends ('sommaire')
@section('contenu1')

<div id="contenu">
    <h2>Ajouter un visiteur</h2>
    <form method="post"  action="{{ route('chemin_ajouterVisiteur') }}">
                    {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <p>
                    <label for="id">Id :</label>
                    <input type="text" name="id" value="id"><BR>
                    <label for="name">Nom :</label>
                    <input type="text" name="nom" value="nom"><BR>
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom" value="prenom"><BR>
                    <label for="log">Login :</label>
                    <input type="text" name="login" value="login"><BR>
                    <label for="ad">Adresse :</label>
                    <input type="text" name="adresse" value="adresse"><BR>
                    <label for="cpl">CP :</label>
                    <input type="text" name="cp" value="cp"><BR>
                    <label for="vi">Ville :</label>
                    <input type="text" name="ville" value="ville"><BR>
                    <label for="date">Date d'Embauche :</label>
                    <input type="text" name="dateEmb" value="dateEmb"><BR>
                              
                </p>
            </fieldset>
        </div>
        <div class="piedForm">
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
        </div>
    </form>
@endsection
