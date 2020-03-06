<?php
/* use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; */
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/test',function(){
    return dd(Hash::make("password"));
}); 

 Route::get('/',[
    "uses"=>"HomeController@index",
    "as"=>"accueil"
]); 

/* Route::get('/',[
    "uses"=>"HomeController@index",
    "as"=>"accueil"
]); */

Route::get('/dashboard',[
    "uses"=>"HomeController@dashboard",
    "as"=>"dashboard"
]);

Route::get('/login',[
    "uses"=>"HomeController@loginPage",
    "as"=>"loginPage"
]);

Route::get('/ajoutez-employes',[
    "uses"=>"HomeController@ajoutezEmployes",
    "as"=>"ajouter.employes"
]);

Route::get('/note-de-frais',[
    "uses"=>"HomeController@notedefraisView",
    "as"=>"notedefrais.show"
]);

Route::get('/mon-profil',[
    "uses"=>"HomeController@monProfil",
    "as"=>"mon-profil.show"
]);

Route::get('/demande-a-traiter',[
    "uses"=>"HomeController@DemandeATraiter",
    "as"=>"demande.traiter"
]);

Route::get('/demande-a-payer',[
    "uses"=>"HomeController@DemandeAPayer",
    "as"=>"demande.payer"
]);

Route::get('/details-demandes/{id}',[
    "uses"=>"HomeController@detailsDemande",
    "as"=>"details.demande"
]);

Route::get('/details-payer/{id}',[
    "uses"=>"HomeController@detailsPayer",
    "as"=>"details.payement"
]);

Route::get('/mes-demandes-attente',[
    "uses"=>"HomeController@DemandeAttente",
    "as"=>"demande.attente"
]);

Route::get('/historique-demandes',[
    "uses"=>"HomeController@HistoriqueDemande",
    "as"=>"historique.demande"
]);


Route::POST('editer-profil',[
    "uses"=>"HomeController@modificationProfile",
    "as"=>"modification.profil"
]);

Route::POST('donnez-avis/{id_demande}',[
    "uses"=>"HomeController@DonnezAvis",
    "as"=>"donnez.avis"
]);

 Route::POST('valider-paye/{id}',[
    "uses"=>"HomeController@ValidezPaye",
    "as"=>"validez.paye"
]); 

Route::POST('ajouter-employe',[
    "uses"=>"HomeController@AddEmploye",
    "as"=>"Add.employe"
]);

Route::POST('demande-note-frais',[
    "uses"=>"HomeController@demandeNoteDeFrais",
    "as"=>"demande.notedefrais"
]);


/* Route::POST("verifi.connexion",[
    "uses"=>"MainController@connexion_verif",
    "as"=>"connexion.verif"
]);
 */


Route::get("/logout",function(){
    Auth::logout();
    return redirect("/login");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
