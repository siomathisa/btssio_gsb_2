@extends ('sommaire')
@section('contenu1')

<div id="contenu">
    <h2>Liste visiteurs :</h2>
    <table class="listeLegere">
  	   <caption>Liste des visiteurs :</caption>
        <tr>
			<th> Nom</th>
            <th> Prénom</th>
		</tr>
        <tr>
            @foreach($lesvisiteurs as $unvisiteur)
            <tr>
                <td>{{ $unvisiteur['nom'] }}</td>
                <td>{{ $unvisiteur['prenom'] }}</td>
                <td><a href="#"> Modifier </a></td>
                <td><a href="#"> Supprimer </a></td>
            </tr>
            @endforeach
		</tr>
    </table>
    
    <a href="{{ route('chemin_ajoutVisiteur') }}"> Ajouter un visiteur </a> <br>
    
  	</div>
    
@endsection
