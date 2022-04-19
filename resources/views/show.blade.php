

@extends('layouts.app')

@section('content')
 

<div class="container rounded text-dark bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="/storage/{{$professeur->image}}"/><span class="font-weight-bold  text-dark">{{$professeur->nom}}  {{$professeur->prenom}}</span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">LES DETAILS D'UN PROFIL</h4>
                </div>
                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">Nom :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->nom}}</div></div>
                    <div class="col-md-6"><label class="labels">Prenom :    </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->prenom}}</div></div>
                    
                </div>
                <div class="row mt-3">
                <!--
                    <div class="col-md-12"><label  class="labels">ID     :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->id}}</div></div>
                -->
                    <div class="col-md-12"><label  class="labels">Email  :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->email}}</div></div>
                    <div class="col-md-12"><label  class="labels">Cin    :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->cin}}</div><p  ></p></div>
                    <div class="col-md-12"><label  class="labels">Telephone  :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->telephone}}</div></div>
                    <div class="col-md-12"><label  class="labels">date_recrutement   :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->date_recrutement}}</div></div>
                    <div class="col-md-12"><label  class="labels">date_naissance :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->date_naissance}}</div></div>
                    <div class="col-md-12"><label  class="labels">specialite :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->specialite}}</div></div>
                    <div class="col-md-12"><label  class="labels">appartenant_a_ENSA_EL_JADIDA    :   </label><div class="alert alert-primary text-dark" role="alert">{{$professeur->appartenant_a_ENSAJ}}</div></div>
                    <div class="col-md-12"><label  class="labels">Dossier A   :   </label><div class="alert alert-primary text-dark" role="alert"><a href="/storage/{{$professeur->Dossier_scientifique}}" class="link-success text-dark"  download>Download Dossier_scientifique</a><hr><b class="text-danger">{{$professeur->etat_ds}}</b></div></div>
                    <div class="col-md-12"><label  class="labels">Dossier B    :   </label><div class="alert alert-primary text-dark" role="alert"><a href="/storage/{{$professeur->Dossier_Pedagogique}}" class="link-success text-dark" download>Download Dossier_Pedagogique</a><hr><b class="text-danger">{{$professeur->etat_dp}}</b></div></div>
                    <div class="col-md-12"><label  class="labels">Dossier C  :   </label><div class="alert alert-primary text-dark" role="alert"><a href="/storage/{{$professeur->Dossier_administratif}}" class="link-success text-dark" download>Download Dossier_administratif</a><hr><b class="text-danger">{{$professeur->etat_da}}</b></div></div>
                    
                </div>
                
                <div class="mt-5 text-center"><a href="{{ url('/professeurs') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Retour</a></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

@endsection
