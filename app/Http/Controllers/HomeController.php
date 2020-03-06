<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Service;
use App\TypeDemande;
use App\Demande;
use App\User;
use App\Caisse;
use App\Notification;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $typeDemandes=TypeDemande::all();
        return view('processus/notefrais',compact("typeDemandes"));
    }

    public function notedefraisView(){
        $typeDemandes=TypeDemande::all();
        return view("processus.notefrais",compact("typeDemandes"));
    }
    public function monProfil(){
        return view("processus.user");
    }

    public function loginPage()
    {
        //dd(Hash::make("password"));
        return view('processus/login');
    }



    public function modificationProfile(Request $request){

        
        $user=Auth::user();
        $id = Auth::id();
        $this->validate($request,[
               "name"=>"required|string|max:255",
               "email"=>"required|string|email",
               "password"=>"required|string|min:5"

        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        
        $ext = $request->file('image')->getClientOriginalExtension(); 
        //Renommer l'image
        $filename = time().'.'.$ext; 
        //definition du dossier de stockage des images
        $dir='assets/img/faces';
        //Télécharger l'image
        $request->file('image')->move($dir, $filename);

        $password=Hash::make($password);
        DB::table('users')
                ->where('id', $id)
                ->update(['name' => $name,'email' => $email,'password' =>$password,'image' =>$filename]);

         return redirect()->back();
    }
    public function AddEmploye(Request $request){

        
        /* $user=Auth::user();
        $id = Auth::id(); */

        
        $this->validate($request,[
               "matricule"=>"required|string",
               "name"=>"required|string",
               "email"=>"required|string|email",
               "service"=>"required|string",
               "role"=>"required|string",
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $matricule = $request->input('matricule');
        $service = $request->input('service');
        $role = $request->input('role');

        //recherche du code service

        $typeservice=DB::table('services')->where('id_service',$service)->first();

        
        if( $typeservice->nom_service=="RESSOURCES HUMAINES"){
            $code_service=2;
        }elseif($typeservice->nom_service=="RESPONSABLE FINANCIER"){
            $code_service=4;
        }elseif($typeservice->nom_service=="DIRECTION GÉNÉRALE"){
            $code_service=5;
        }elseif($typeservice->nom_service=="SERVICE INFORMATIQUE"){
            $code_service=1;
        }
        elseif($typeservice->nom_service=="SERVICE MARKETING"){
            $code_service=3;
        }
        elseif($typeservice->nom_service=="SERVICE COMPTABLE"){
            $code_service=6;
        }
        
        $password=Hash::make("password");
        DB::table('users')->insert([
            "matricule"=>$matricule,
            "name"=>$name,
            "slug"=>str::slug($name,'-'),
            "email"=>$email,
            "id_service"=>$service,
            "role"=>$role,
            "code_service"=>$code_service,
            "image"=>"avatar.png",
            "password"=>$password
        ]);
                
         return redirect()->back();
    }


    public function demandeNoteDeFrais(Request $request){

        
       /* $user=Auth::user(); */
        $id = Auth::id(); 

        
        $this->validate($request,[
               "nomBeneficiaire"=>"required|string",
               "motifdemande"=>"required|string",
               "montant"=>"required",
               "meeting"=>"required",
               
        ]);
        $nomBeneficiaire = $request->input('nomBeneficiaire');
        $motifdemande = $request->input('motifdemande');
        $montant = $request->input('montant');
        $meeting = $request->input('meeting');
        $typeDemandeId = $request->typeDemande;


        $typeDemande=DB::table('type_demandes')->where('id',$typeDemandeId)->first();

        $filename="";
        if(!empty($request->file('piece'))){
            $ext = $request->file('piece')->getClientOriginalExtension(); 
        //Renommer l'image
        $filename = time().'.'.$ext; 
        //definition du dossier de stockage des images
        $dir='assets/img/piece';
        //Télécharger l'image
        $request->file('piece')->move($dir, $filename);

        }
        
        
        $password=Hash::make("password");
        DB::table('demandes')->insert([
            "type_demande_id"=>$typeDemandeId,
            "nom_demande"=>$typeDemande->nom_type,
            "motif_demande"=>$motifdemande,
            "nom_beneficiaire"=>$nomBeneficiaire,
            "montant"=>$montant,
            "code"=>1,
            "id_users"=>$id,
            "code_service_users"=>Auth::user()->code_service,
            "statut"=>"attente",
            "document_founir"=>$filename
        ]);
             
        $notifs=Notification::where('id',1)->get();

        DB::table('envoye_notifs')->insert([
            'id_notification'=> $notifs->id,
            'id_users'=>1,
            "date_time"=>date('Y-m-d H:i:s')
        ]);
         return redirect()->back(); 
    }

    
    public function ajoutezEmployes()
    {
        $services=Service::all();
        return view('processus/ajoutezemploye',compact('services'));
    }

    public function DemandeATraiter()
    {
        /* $demandes=Demande::all();
        $users=DB::table('users')->where("code_service",Auth::user()->role); */

       /*  $demandes=User::where("code_service",Auth::user()->code_service);
        dd($demandes); */
       /*  $demandes=DB::table("demandes")->where("") */
       $user_code_service=Auth::user()->code_service;
       /* $demandes=DB::table("demandes")->where("code_service_users",$user_code_service); */

       if(($demandes=Demande::where("code_service_users",$user_code_service)->where('code',1)->where('statut',"attente")->get())->isNotEmpty())
       {

           return view("processus/listedemande",compact("demandes"));

       }

       if((($demandes=Demande::where('code',2)->where('statut',"attente")->get())->isNotEmpty()) and (Auth::user()->role == "responsable Comptable"))
      {
        return view("processus/listedemande",compact("demandes"));

      }
      if((($demandes=Demande::where('code',3)->where('statut',"attente")->get())->isNotEmpty()) and (Auth::user()->role == "responsable Financier"))
      {
        return view("processus/listedemande",compact("demandes"));

      }
      if((($demandes=Demande::where('code',4)->where('statut',"attente")->get())->isNotEmpty()) and (Auth::user()->role == "Directeur Générale"))
      {
        return view("processus/listedemande",compact("demandes"));

      }
      else
      {
        return view("processus/listedemande",compact("demandes"));

      }
      


       /* /* dd($demandes); */
       
       
    
    }

    public function detailsDemande($id){
        /* $demande=DB::table('demandes')->where('id_demande',$id)->first(); */
        $demande=Demande::where("id_demande",$id)->first();
        /* dd($demande->id_users); */
        return view("processus.detailsDemande",compact('demande'));
    }


    //fonction permettant de donneer son avis par rapport a une demande
    public function DonnezAvis(Request $request,$id_demande){

        
        /* $user=Auth::user(); */
        /*  $id = Auth::id();  */
 
         
         $this->validate($request,[
                "inlineRadioOptions"=>"required",
                "motif_avis"=>"required|string",
                
         ]);
         $avis = $request->input('inlineRadioOptions');
         $motifAvis = $request->input('motif_avis');
         
        
         $user_code_service=Auth::user()->code_service;
         $usersInfo=DB::table('users')->where('id',$id_demande)->first();
         $demandInfo=DB::table('demandes')->where('id_users',$id_demande)->first();
         
         if($demandInfo->code == 1 and $avis=="Accords"){
            DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>2]);

            $notifs=Notification::where('id',1)->get();

            DB::table('envoye_notifs')->insert([
                'id_notification'=> $notifs->id,
                'id_users'=>2,
                "date_time"=>date('Y-m-d H:i:s')
            ]);

        }
        elseif($demandInfo->code == 2 and $avis=="Accords")
        {
            if($demandInfo->montant <= 50000)
            {
                DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>5]);

            }
            else
            {
                DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>3]);

            }

        }
        elseif($demandInfo->code == 3 and $avis=="Accords")
        {
            if($demandInfo->montant <= 80000)
            {
                DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>5]);

            }
            else
            {
                DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>4]);

            }

        }
        elseif($demandInfo->code == 4 and $avis=="Accords")
        {
           
            DB::table("demandes")->where('id_users',$id_demande)->update(['code'=>5]);

        }
        else
        {
            DB::table("demandes")->where('id_users',$id_demande)->update(['statut'=>$avis]);  
        }
         /* $password=Hash::make("password"); */
         DB::table('avis')->insert([
             "id_users"=>$usersInfo->id,
             "statut"=>$avis,
             "motif"=>$motifAvis,
             "id_demande"=>$demandInfo->id_demande,
             "date_avis"=>date('Y-m-d H:i:s')
         ]);
                 
          return redirect()->back(); 
     }

     public function DemandeAPayer(){
        if((($demandes=Demande::where('code',5)->where('statut',"attente")->get())->isNotEmpty()) and (Auth::user()->role == "Caissier"))
        {
            return view("processus/demandeAPayer",compact('demandes'));
        }
        else
        {
            return view("processus/demandeAPayer",compact('demandes'));

        }
        
     }

     public function detailsPayer($id){

          /* $demande=DB::table('demandes')->where('id_demande',$id)->first(); */
        $caisse=Caisse::where('id_users',Auth::User()->id)->first();
        $demande=Demande::where("id_demande",$id)->first();
        /* dd($demande->id_users); */
        return view("processus.DetailsPayement",compact('demande','caisse'));
    }

    public function ValidezPaye(Request $request,$id){

        $id_caissier = Auth::id();
        $this->validate($request,[
            "signature"=>"string",   
            
        ]);
         /* dd($id); */
        $signature = $request->input('signature');
        $opinion = $request->input('inlineRadioOptions');
        $montant_paye = $request->input('montant_paye');

        $usersInfo=DB::table('users')->where('id',$id)->first();
        $caisseInfo=DB::table('caisses')->where('id_users',$id_caissier)->first();
        $demandInfo=DB::table('demandes')->where('id_users',$id)->first();
        
        if($opinion=="Oui"){
            DB::table('payements')->insert([
                "id_caisse"=>$caisseInfo->id_caisse,
                "id_demande"=>$demandInfo->id_demande,
                "date_payement"=>date('Y-m-d H:i:s'),
                "montant_payer"=>$montant_paye,
                "mot_caissier"=>$signature
            ]);
    
            DB::table("demandes")->where('id_users',$id)->update(['statut'=>"Payé"]);
    
            $resteCapital=$caisseInfo->capital_caisse - $montant_paye;
    
            DB::table("caisses")->where('id_caisse',$caisseInfo->id_caisse)->update(['capital_caisse'=>$resteCapital]);
        }
        else{
            DB::table("demandes")->where('id_users',$id)->update(['statut'=>"refus"]);
        }
        
                
         return redirect()->back(); 

    }

    public function DemandeAttente(){
        $demandes=Demande::where('id_users',Auth::id())->where('statut','attente')->get();
        return view('processus/DemandeAttente',compact("demandes"));
    }

    public function HistoriqueDemande(){
        $demandes=Demande::where('id_users',Auth::id())->get();
        return view('processus/HistoriqueDemande',compact("demandes"));
    }
 
}
