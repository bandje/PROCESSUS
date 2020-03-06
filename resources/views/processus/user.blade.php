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
                    <h4 class="card-title">Editer Votre Profile - <small class="category">Completez votre profil</small></h4>

                    <form method="POST" action="{{url("editer-profil")}}"  enctype="multipart/form-data">
                        
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
                                <div class="form-group label-floating">
                                    <label class="control-label">Adresse Email</label>
                                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nom</label>
                                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Mot De Passe</label>
                                    <input type="password" name="password" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                   
                                  <label for="exampleFormControlFile1">Ajoutez une image de profil en cliquant <b>ICI</b> </label>
                                  <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>

                        
                            

                        <button type="submit" class="btn btn-rose pull-right">Modifier</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="user.html#pablo">
                        <img class="img" src="../assets/img/faces/{{Auth::user()->image}}" />
                    </a>
                </div>

                <div class="card-content">
                    <h6 class="category text-gray">{{Auth::user()->role}}</h6>
                    <h4 class="card-title">{{Auth::user()->name}}</h4>
                    
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
	