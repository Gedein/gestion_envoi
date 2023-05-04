<?php
namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\his_op;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\Html;
use IlluminateSupportCarbon;
use Dompdf\Dompdf;
use PDF;

class CompteControl extends Controller{
    public function homepage(){
        return view("accueil");
    }
    public function addaccount(){
        
        return view("ajouter");
    }

 public function crediter($id){
    $result=compte::findorfail($id);
    return view("credit",compact('result'));
 }

 public function debiter($id){
    $result=compte::findorfail($id);
    return view("debit",compact('result'));
 }
 public function recherch(){
    return view("rechercher");
 }

 public function storeaccount(Request $request){
    //dd($request);
    compte::create(
        [
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'montant'=>$request->solde,
            'debit_j'=>0,
            'debit_h'=>0, 
            'debit_m'=>0,
            'credit_j'=>0,
            'credit_h'=>0,
            'credit_m'=>0,
            'curency'=>'fcfa',
            'taux'=>0,
            'created_at'=>now(),
            'date_credit'=>now(),
            'date_debit'=>now(),


        ]
      
        );
       
        return view("ajouter");
        
}

public function debitercompt(Request $request){
    //dd($request->prenom);
    $curentdate=Carbon::now();
    $account=compte::where([
     ['nom','=',$request->nom],
     ['prenom','=', $request->prenom]
   ]) ->first();

   if($account==null){
    return view('error3');
   }
   else{
   if(($account->montant < ($request->mnt_debit*$request->taux_debit)) ||( $account->montant==0))
   {
    return view('error2');
   }
    else {
        $curentdate2=Carbon::now()->format('Y-m-d');
        
        if($curentdate2==($account->date_debit)){
            $account->update(
                [
                'debit_j'=>$account->debit_j+($request->mnt_debit*$request->taux_debit),
                    
                ]
                );

        }
        if($curentdate->subDay(7)->lte($account->date_debit))
        {
            $account->update(
                [
                    
                     'debit_h'=>$account->debit_h+($request->mnt_debit *$request->taux_debit),
                  
                ]
                );
        }
        if($curentdate->subMonths(1)->lte($account->date_debit))
        {
            $account->update(
                [
                    
                    'debit_m'=>$account->debit_m+($request->mnt_debit * $request->taux_debit),
                    
                ]
                );
        }
        if($curentdate2!=($account->date_debit))
        {
            $account->update(
                [
                
                'debit_j'=>$request->mnt_debit * $request->taux_debit,
                    
                ]
                );
        }
        if($curentdate->subDay(7)->gt($account->date_debit))
        {
            $account->update(
                [
                   
                    'debit_h'=>$request->mnt_debit * $request->taux_debit,
                ]
                );
        }
        if($curentdate->subMonths(1)->gt($account->date_debit))
        {
            $account->update(
                [
                    
                     'debit_m'=>$request->mnt_debit * $request->taux_debit,
                    
                ]
                );
        }
        
        
    $account->update(
        [
            'montant'=>$account->montant-($request->mnt_debit * $request->taux_debit),
            'date_debit'=>now(),
        ]
        );
        his_op::create(
            [
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'montant_credit'=>0,
                'montan_debit'=>$request->mnt_debit,
                'curency_debit'=>$request->curency_debit,
                'taux_debit'=>$request->taux_debit,
                'curency_credit'=>'',
                'taux_credit'=>0,
                'id'=>$account->id,
                'created_at'=>now(),
        
            ]
          
            );
        $dompdf = new Dompdf();
        $dompdf->loadHtml(
     "
     <h2 class='account'> Nom: $request->nom 
     </h2>
     <h2 class='account'>  Prenom: $request->prenom </h2><br>
     <h4 class='solde'> Montant du débit : $request->mnt_debit Fcfa</h4> 
     <h4 > Date de l'operation : $curentdate </h4> 
     

 
     "
 );
 
 $dompdf->setPaper('A4', 'landscape');
 $dompdf->render();
 $dompdf->stream('debit'.$request->nom.'.pdf');
    }


}

}


public function creditercompte( Request $request){

    $account=compte::where([
        ['nom','=',$request->nom],
        ['prenom','=', $request->prenom]
      ]) ->first();
      if($account==null){
        return view("error");
       }
    else{
      
         $curentdate=Carbon::now();
         $curentdate2=Carbon::now()->format('Y-m-d');
        
          
        if($curentdate2==($account->date_credit)){
            $account->update(
                [
                    
                     'credit_j'=>$account->credit_j+($request->mnt_credit *$request->taux_credit),
                    
                ]
                );

        }
        if($curentdate->subDay(7)->lte($account->date_credit))
        {
            $account->update(
                [
                    
                     'credit_h'=>$account->credit_h+($request->mnt_credit * $request->taux_credit),
                    
                ]
                );
        }
        if($curentdate->subMonths(1)->lte($account->date_credit))
        {
            $account->update(
                [
                   
                     'credit_m'=>$account->credit_m+($request->mnt_credit *$request->taux_credit),
                 
                ]
                );
        }
        if($curentdate2!=($account->date_credit))
        {
            $account->update(
                [
                    
                     'credit_j'=>$request->mnt_credit * $request->taux_credit,
                     
                
                ]
                );
        }
        if($curentdate->subDay(7)->gt($account->date_credit))
        {
            $account->update(
                [
                    
                     'credit_h'=>$request->mnt_credit *$request->taux_credit,
                     
                  
                ]
                );
        }
        if($curentdate->subMonths(1)->gt($account->date_credit))
        {
            $account->update(
                [
                    
                     'credit_m'=>$request->mnt_credit * $request->taux_credit,
                    
                
                ]
                );
        }
        
    $account->update(
        [
            'montant'=>$account->montant+($request->mnt_credit *$request->taux_credit),
            'date_credit'=>now()
       ]
        );
        his_op::create(
            [
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'montant_credit'=>$request->mnt_credit,
                'montan_debit'=>0,
                'curency_debit'=>'',
                'taux_debit'=>0,
                'curency_credit'=>$request->curency_credit,
                'taux_credit'=>$request->taux_credit,
                'idi'=>$account->id,
                'created_at'=>now(),
        
            ]
          
            );
        
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml(
     "
     <h2 class='account'> Nom: $request->nom 
     </h2>
     <h2 class='account'>  Prenom: $request->prenom </h2><br>
     <h4 class='solde'> montant du crédit : $request->mnt_credit Fcfa</h4> 
     <h4 > Date de l'operation : $curentdate </h4>
     

     "
 );
 
 $dompdf->setPaper('A4', 'landscape');
 $dompdf->render();
 $dompdf->stream('credit'.$request->nom.'.pdf'); 
       
}

}

public function show(){
    return view("rechercher");
}
public function showacount(Request $request)

{
    $allacc=compte::all();
    $account=compte::query()
    ->where ('nom','=',$request->recherche)
    ->orwhere('prenom','=',$request->recherche)
      ->get();
      //return compact('account');
      return view("rechercher",compact('account','allacc'));
   // 
   //dd($request);
}

public function showfull($id){
    $result=compte::findorfail($id);
          return view("gestion",compact('result'));
}
public function showinformation($id){
    $result2=his_op::query()
    ->where ('id','=',$id)
      ->get();
    $result3=compte::findorfail($id);
    return view("information_compte",compact('result2','result3'));
}
public function deleteaccount($id){
    $result3=compte::findorfail($id);
            $result3->delete();
    $deleted=true;
        return view("accueil",compact('deleted'));
        
}
public function dowlodinformation($id){
    $result3=compte::findorfail($id);
    $result2=his_op::query()
    ->where ('id','=',$id)
      ->get();
      $dompdf = new Dompdf();
      $dompdf->loadhtml(view('pdf_comt',compact('result2','result3')));
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream('information'.$result3->nom.'pdf');
     
}
public function rapportj(){
    $rapportj=compte::all();
    return view("rapportjournalier",compact('rapportj'));
}

public function rapporth(){
    $rapporth=compte::all();
    return view("rapporthebdomadaire",compact('rapporth'));
}
public function rapportm(){
    $rapportm=compte::all();
    return view("rapportmensuel",compact('rapportm'));
}

public function pdfj(){
    //$date=now();
    $rapportj=compte::all();
    $dompdf = new Dompdf();
    
    $dompdf->loadhtml(view('pdfj',compact('rapportj')));
    
    $dompdf->setPaper('A4', 'landscape');
    
    $dompdf->render();
    $dompdf->stream('rapportjounalier.pdf');
   
}

public function pdfh(){
    $rapporth=compte::all();
    $dompdf = new Dompdf();
    $dompdf->loadhtml(view('pdfh',compact('rapporth')));
    $dompdf->setPaper('A4', 'landscape');
    
    $dompdf->render();
    $dompdf->stream('rapporthebdomadaire.pdf');
   
}
public function pdfm(){
    $rapportm=compte::all();
    $dompdf = new Dompdf();
    $dompdf->loadhtml(view('pdfm',compact('rapportm')));
    $dompdf->setPaper('A4', 'landscape');
    
    $dompdf->render();
    $dompdf->stream('rapportmensuel.pdf');
   
}
public function allfordebit(Request $request){
    $allfrd=compte::all();
    $account=compte::query()
    ->where ('nom','=',$request->recherche)
    ->orwhere('prenom','=',$request->recherche)
      ->get();
    return view("debitliste",compact('allfrd','account'));
}
public function allforcredit(Request $request){
    $allfrd=compte::all();
    $account=compte::query()
    ->where ('nom','=',$request->recherche)
    ->orwhere('prenom','=',$request->recherche)
      ->get();
    return view("creditliste",compact('allfrd','account'));
}
}

