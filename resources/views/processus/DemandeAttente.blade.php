@extends('processus.app')

@section('content')

<div class="container">
    <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Type de demande</th>
                <th scope="col">Motif</th>
                
                <th scope="col">Montant</th>
                <th scope="col">statut</th>
                
              </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
            @if(!empty($demandes))
                @foreach ($demandes as $demande)
                    <tr>
                        <th scope="row">{{$i++}} </th>
                        <td>{{$demande->nom_demande}} </td>
                        <td>{{$demande->motif_demande}} </td>
                        <td>{{$demande->montant}} </td>
                        <td>{{$demande->statut}}</td>
                       
                    </tr>
                    @endforeach
            @else 
                    <h3 style="color:red">AUCUNE DEMANDE EN ATTENTE</h3>
            @endif 
               
              
            </tbody>
          </table>
</div>
@endsection