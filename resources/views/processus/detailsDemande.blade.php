@extends('processus.app')

@section('content')

				<div class="content">
					<div class="container-fluid">
					 	    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">perm_identity</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Avis de demande - <small class="category">Donnez votre avis</small></h4>

                    <form method="POST" action="{{url("donnez-avis",['id'=>$demande->id_users])}}"  enctype="multipart/form-data">
                        {{ csrf_field()}}

                        @if (count($errors)>0)
                        <div class=" alert alert-danger">
                            <ul>
                                @foreach ( $errors->all() as $error )
                                    
                                    <li>{{$error}}</li>
                                
                                @endforeach
                            </ul>
                        </div> 
                        
                    @endif

                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Accords">
                                    <label class="form-check-label" for="inlineRadio1">Accepter</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="refus">
                                    <label class="form-check-label" for="inlineRadio1">Refuser</label>
                                </div>
                            </div>
                        </div>
                        <br><br>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Motif de votre avis</label>
            
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea name="motif_avis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
            
                                
                            </div>
                        
                            

                        <button type="submit" class="btn btn-rose pull-right">Valider</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
               

                <div class="card-content"><br>
                  Nom du bénéficiaire :  <b>{{$demande->nom_beneficiaire}}</b><br><br>
                    <h4 class="card-title">{{$demande->nom_demande}}</h4><br>
                    <p>
                        
                        <b>Motif de la demande : </b> {{$demande->motif_demande}} <br><br>
                        <b>Montant de la demande : </b> {{$demande->montant}} <br>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

					</div>
				</div>

			 

			
			

			
		</div>
	</div>

</body>
@endsection  
	