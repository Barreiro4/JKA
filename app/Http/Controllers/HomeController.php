<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\langileak;
use App\lana;
use App\egin;
use App\makina;
use App\lote;
use App\bidali;
use App\bezeroak;

class HomeController extends Controller
{
    //Langileak
    public function bistaratu(){
        $langiles = langileak::all();
        return view('home',compact('langiles'));   
    }
    // //Zatiketa:
    // public function zat_bistaratu(){
    //     $result = DB::select('select langile_id,makina_id,lana_id from lana');
    //     return view('zatiketa',compact('result'));
    // }
    
    
    //Mekanizatua
    public function mek_bistaratu(){
        $result = DB::select('select egin.lote_id, lana.lana_id, makina.izena as makina_id, lana.izena,CONCAT(langileak.izena, " ", langileak.abizena) as langile_id, egin.data from lana inner join egin on egin.lana_id = lana.lana_id inner join makina on makina.makina_id=lana.makina_id left outer join langileak on lana.langile_id=langileak.langile_id');
        $langileak = langileak::all();
        $lotes = lote::all();
        $makinas = makina::all();
        return view('mekanizatua',compact('result', 'langileak','lotes', 'makinas'));
    }
        public function mek_bistaratujefe(){
        $result = DB::select('select egin.lote_id, lana.lana_id, makina.izena as makina_id, lana.izena,CONCAT(langileak.izena, " ", langileak.abizena) as langile_id, egin.data from lana inner join egin on egin.lana_id = lana.lana_id inner join makina on makina.makina_id=lana.makina_id left outer join langileak on lana.langile_id=langileak.langile_id');
        $langileak = langileak::all();
        $lotes = lote::all();
        $makinas = makina::all();
        return view('mekanizatuajefe',compact('result', 'langileak','lotes', 'makinas'));
    }
    
    public function mek_berria(Request $request){
        $lana = new lana();
        $egin = new egin();
        
        $result = DB::select('select MAX(lana_id) as lana_id from lana');
        foreach($result as $result)
        {
            $egin->lana_id = $result->lana_id + 1;
            $lana->lana_id = $result->lana_id + 1;
        }
        
        $lana->izena = $request['izena'];
        $lana->langile_id = $request['langile_id'];
        $lana->makina_id = $request['makina_id'];
        
        $lana->save();
        //mek_bistaratu();
        
        
        $egin->lote_id = $request['lote_id'];
        $egin->data = $request['data'];
        
        $egin->save();
        
        return redirect()->back();
        
        
    }
    
    public function bid_berria(Request $request){
        $bidali = new bidali();
    
        $bidali->lote_id = $request['lote_id'];
        $bidali->data = $request['data'];
        $bidali->bezero_id = $request['bezero_id'];
        $bidali->kopurua = $request['kopurua'];
        
        $bidali->save();
        //mek_bistaratu();
        return redirect()->back();
    }
    public function kalitate_berria(Request $request){
        $kalitate = new lote();
    
        $kalitate->lote_id = $request['lote_id'];
        $kalitate->arduraduna = $request['arduraduna'];
        $kalitate->hasiera_data = $request['hasiera_data'];
        $kalitate->bukaera_data = $request['bukaera_data'];
        $kalitate->emaitza = $request['emaitza'];
        $kalitate->almazen_kokapena = $request['almazen_kokapena'];
        
        $kalitate->save();
        //mek_bistaratu();
        return redirect()->back();
    }
    
      public function almazen_berria(Request $request){
        $almazen = new lote();
    
         $almazen->arduraduna = $request['arduraduna'];
         $almazen->almazen_kokapena = $request['almazen_kokapena'];;
         $almazen->kopurua = $request['kopurua'];
        
         $almazen->save();
        //mek_bistaratu();
        return redirect()->back();
    }
    
    
     public function langile_sortu(Request $request){
          $langile = new langileak();
    
          $langile->langile_id = $request['langile_id'];
          $langile->izena = $request['izena'];
          $langile->abizena = $request['abizena'];
          $langile->dpto = $request['dpto'];
          $langile->arduraduna = $request['arduraduna'];
        
         $langile->save();
        //mek_bistaratu();
        return redirect()->back();
    }
    
    //Bidalketak:
    public function almazena_b(){
        $result = DB::select('select id_bid, bezeroak.izena as bezero_id,bidali.lote_id,data,CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna, bidali.kopurua from bidali inner join loteak on loteak.lote_id=bidali.lote_id left outer join langileak on loteak.arduraduna=langileak.langile_id inner join bezeroak on bidali.bezero_id=bezeroak.bezero_id');
        $lotes = lote::all();
        $bezeros = bezeroak::all();
        return view('bidalketak',compact('result', 'lotes', 'bezeros'));


    }
        public function almazena_bjefe(){
        $result = DB::select('select id_bid, bezeroak.izena as bezero_id,bidali.lote_id,data,CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna, bidali.kopurua from bidali inner join loteak on loteak.lote_id=bidali.lote_id left outer join langileak on loteak.arduraduna=langileak.langile_id inner join bezeroak on bidali.bezero_id=bezeroak.bezero_id');
        $lotes = lote::all();
        $bezeros = bezeroak::all();
        return view('bidalketakjefe',compact('result', 'lotes', 'bezeros'));

    }
    
    //Kalitatea:
    public function kalitatea_bistaratu(){
        $result = DB::select('select materiala,lote_id,CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna,emaitza,hasiera_data,bukaera_data,almazen_kokapena from loteak left outer join langileak on loteak.arduraduna=langileak.langile_id where emaitza="Ondo"');
        $langileak = langileak::all();
        $lotes = DB::table('loteak')
                ->where('emaitza', '<>', 'Ondo')
                ->get();

        return view('kalitatea',compact('result', 'langileak','lotes'));
    }
        public function kalitatea_bistaratujefe(){
        $result = DB::select('select materiala,lote_id,CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna,emaitza,hasiera_data,bukaera_data,almazen_kokapena from loteak left outer join langileak on loteak.arduraduna=langileak.langile_id where emaitza="Ondo"');
        $langileak = langileak::all();
        $lotes = DB::table('loteak')
                ->where('emaitza', '<>', 'Ondo')
                ->get();

        return view('kalitateajefe',compact('result', 'langileak','lotes'));

    }
    
    public function kalitate_froga_gorde(Request $request){
        $kalitate = new lote();
    }
    
    //Almazena
    public function kokapena(){
        $result = DB::select('select lote_id, CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna, almazen_kokapena,kopurua from loteak left outer join langileak on loteak.arduraduna=langileak.langile_id');
        $lotes = lote::all();
        $arduradunak = langileak::all();
        return view('almazena',compact('result', 'lotes', 'arduradunak'));
    }
        public function kokapenajefe(){
        $result = DB::select('select lote_id, CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna, almazen_kokapena,kopurua from loteak left outer join langileak on loteak.arduraduna=langileak.langile_id');
        $lotes = lote::all();
        $arduradunak = langileak::all();
        return view('almazenajefe',compact('result', 'lotes', 'arduradunak'));
    }
    
    //loteak bilatu
    public function loteak(){
        
        $result = DB::select('select lote_id,CONCAT(langileak.izena, " ", langileak.abizena) as arduraduna,emaitza,hasiera_data,bukaera_data,almazen_kokapena from loteak left outer join langileak on loteak.arduraduna=langileak.langile_id');
        return view('loteak',compact('result'));
    }
    
    public function loteak_bilatu(Request $request){
        
       $request->get('lote_id');
        $result = DB::select('select lote_id,arduraduna,emaitza,hasiera_data,bukaera_data,almazen_kokapena from loteak ')->where('lote_id', 'LIKE', "%$request%");
        return view('loteak',compact('result'));
        
        
    }
    
    
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() //hasiera orria kargatzean
    {
        $roleCount = \App\Role::count();
		if($roleCount != 0) {
			if($roleCount != 0) {
				return view('home');
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
		}
    }
}