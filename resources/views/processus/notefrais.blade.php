@extends('processus.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <form id="TypeValidation" method="POST" class="form-horizontal" action="{{url("demande-note-frais")}}"  enctype="multipart/form-data">
            {{ csrf_field() }}

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
                <h4 class="card-title">Fomulaire de Demande</h4>
            </div>

            <div class="card-content">


                <div class="row">
                    <label class="col-sm-2 label-on-left">Type de la Demande</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <select class="form-control" name="typeDemande" id="pet-select">

                                @foreach ($typeDemandes as $typeDemande)
                                    <option value="{{$typeDemande->id}}">{{$typeDemande->nom_type}}</option>
                                @endforeach
                                
                               
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <label class="col-sm-2 label-on-left">Nom du bénéficiaire</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input class="form-control"
                                type="text"
                                name="nomBeneficiaire"
                                required="true"
                             />
                        </div>
                    </div>

                    <!--<label class="col-sm-3 label-on-right"><code>required</code></label>-->
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Motif de la demande</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <textarea name="motifdemande" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Montant</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input class="form-control"
                               type="text"
                               name="montant"
                               email="true"
                             />
                        </div>
                    </div>

            
                </div>
                    
                </div>

                <div class="row">
                    

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="control-label"></label>
                            <label for="meeting-time">Quand souhaitez-vous recevoir le montant?</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="datetime-local" id="meeting-time"
                                name="meeting" value="2020-06-12T19:30"
                                min="2020-02-07T00:00" max="2021-06-14T00:00">
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    

                    <div class="col-sm-7">
                        
                            <div class="form-group">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label for="exampleFormControlFile1">Ajoutez les pièces jointes en cliquant <b>ICI</b> </label>
                              <input type="file" class="form-control-file" name="piece" id="exampleFormControlFile1">
                            </div>
                          
                    </div>

                    
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Autres informations</label>

                    <div class="col-sm-7">
                        <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

