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
                    <h4 class="card-title">Vérification d'identité - <small class="category">L'identité du receveur est-elle correcte ?</small></h4>

                    <form method="POST" action="{{url("valider-paye",['id'=>$demande->id_users])}}"  enctype="multipart/form-data" name="form1">
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
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Oui" onclick="javascript:chargement()">
                                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Non" onclick="javascript:chargement()">
                                    <label class="form-check-label" for="inlineRadio1">Non</label>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        
                        <div class="big_div" id="bibi" style="display:none">

                            <div class="row" >
                                <label class="col-sm-3 label-on-left">Informations utiles</label>
                                
                                <div class="col-sm-8">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control"
                                            type="text"
                                            name="signature"
                                            
                                         />
                                    </div>
                                </div>
            
                                
                            </div>
                        </div>
                        <div class="big_div" id="coucou" style="display:none">

                            <div class="row">
                                <label class="col-sm-3 label-on-left">Montant payé</label>
            
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control"
                                            type="text"
                                            name="montant_paye"
                                            
                                            value="{{$demande->montant}}"
                                         />
                                    </div>
                                </div>
                                    
                                
                            </div>
                            <br><br>
                            <div class="row" >
                                <label class="col-sm-3 label-on-left">Signature</label>
                                
                                <div class="col-sm-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input class="form-control"
                                            type="text"
                                            name="signature"
                                            
                                         />
                                    </div>
                                </div>
            
                                
                            </div>
                        </div>

                            
                        
                            

                        <button type="submit" class="btn btn-rose pull-right">Valider</button>
                        <div class="clearfix"></div>
                    </form>
                    <script language="JavaScript">
                        function chargement(){
                            if(document.form1.inlineRadio1[0].checked){
                                document.getElementById("coucou").style.display="block";
                                document.getElementById("bibi").style.display="none";

                            }
                            else
                            {
                                document.getElementById("coucou").style.display="none";
                                document.getElementById("bibi").style.display="block";


                            }
                        }

                    </script>
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
                        <b>Montant de la demande : </b> {{$demande->montant}} <br><br><br>
                        <b>Capital de votre caisse est de : </b> <b><h3 style="color:green">{{$caisse->capital_caisse}} FCFA</h3></b> 
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
	