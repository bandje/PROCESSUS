@extends('processus.app')

@section('content')
<div class="col-md-12">
    <?php 
 
 if(!empty($success))
 {
    echo "<div class='alert alert-success' role='alert'>";
     echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
           </button>";
         
             echo $success."<br/>";
         
     echo "</div>";
 }
?>
    <div class="card">
        <form id="TypeValidation" class="form-horizontal" action="{{url("ajouter-employe")}}" method="POST">
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
            
            
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Fomulaire d'ajout d'employe</h4>
            </div>

            <div class="card-content">


                <div class="row">
                    <label class="col-sm-2 label-on-left">Matricule</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input class="form-control"
                                type="text"
                                name="matricule"
                                required="true"
                             />
                        </div>
                    </div>

                    <!--<label class="col-sm-3 label-on-right"><code>required</code></label>-->
                </div>


                <div class="row">
                    <label class="col-sm-2 label-on-left">Nom et prenoms</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input class="form-control"
                                type="text"
                                name="name"
                                required="true"
                             />
                        </div>
                    </div>

                    <!--<label class="col-sm-3 label-on-right"><code>required</code></label>-->
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Adresse Email</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input class="form-control"
                                type="email"
                                name="email"
                                required="true"
                             />
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Services</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <select class="form-control" name="service" id="pet-select">

                                @foreach ($services as $service)
                                    <option value="{{$service->id_service}}">{{$service->nom_service}}</option>
                                @endforeach
                                
                               
                            </select>
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Fonction</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <select class="form-control" name="role" id="pet-select">

                                <optgroup label="RESSOURCES HUMAINES">
                                    <option value="responsable Ressource Humaine">Responsable Ressource Humaine</option>
                                    <option value="Agent de Ressources Humaines">Agent de Ressources Humaines</option>
                                </optgroup>

                                <optgroup label="Service Financier">
                                    <option value="responsable Financier">Responsable Financier</option>
                                    <option value="Caissier">Caissier</option>
                                </optgroup>

                                <optgroup label="Service Informatique">
                                    <option value="responsable Informatique">Responsable Informatique</option>
                                    <option value="Agent Informatique">Agent Informatique</option>
                                </optgroup>

                                <optgroup label="Service Comptable">
                                    <option value="responsable Comptable">Responsable Comptable</option>
                                    <option value="Agent Comptable">Agent Comptable</option>
                                </optgroup>
                                

                                <optgroup label="Direction générale">
                                    <option value="Directeur Générale">Directeur Général </option>
                                    <option value="Agent de la direction générale">Agent de la direction générale</option>
                                </optgroup>

                                <optgroup label="Direction Marketing">
                                    <option value="Directeur Marketing">Responsable Marketing </option>
                                    <option value="Agent de la direction Marketing">Agent de la direction Marketing</option>
                                </optgroup>
                                
                            </select>
                        </div>
                    </div>
                </div>

                    
                </div>

            </div>

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-rose btn-fill">VALIDER</button>
            </div>
        </form>
    </div>
</div>
@endsection

