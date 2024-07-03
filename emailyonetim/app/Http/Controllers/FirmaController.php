<?php

namespace App\Http\Controllers;
use App\Models\Mailyonetim;
use App\Models\Firmalar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Musteriler;
use Illuminate\Contracts\Mail\Mailable;

class FirmaController extends Controller
{
    public function firmaListesi() {

        $firmalar=Firmalar::all();
        return view("include.firma-listesi", compact("firmalar"));


    }

    public function firmaDuzenle($id){
        $firmaBilgisi=Firmalar::whereId($id)->first();
        if($firmaBilgisi){
            return view('include.firma-duzenle',compact('firmaBilgisi'));
        }
        else{
            return redirect()->route('firma-duzenle');
        }

    }

    public function firmaEkle()
    {
        return view("include.firma-ekle");
    }

    public function firmaEklePost(Request $request)
    {
        $request->validate([
            'unvan' => 'required',
            'alan' => 'required',
            'tckn' => 'required',
            'kurulus' => 'required',
            'sanayisicil' => 'required',
            'ticaretsicil' => 'required',
            'sahibi'=> 'required',
        ]);
        Firmalar::create([
            'unvan' => $request->unvan,
            'alan' => $request->alan,
            'tckn' => $request->tckn,
            'kurulus' => $request->kurulus,
            'sanayisicil' => $request->sanayisicil,
            'ticaretsicil' => $request->ticaretsicil,
            'sahibi' => $request->sahibi,
        ]);
        return redirect()->route('firma-ekle')->with('success', 'Firma bilgisi başarıyla eklendi');
    }

    public function firmaDuzenlePost(Request $request,$id){

        $request->validate([
            'unvan' => 'required',
            'alan' => 'required',
            'tckn' => 'required',
            'kurulus' => 'required',
            'sanayisicil' => 'required',
            'ticaretsicil' => 'required',
            'sahibi'=> 'required',
        ]);
        Firmalar::whereId($id)->update([
            'unvan' => $request->unvan,
            'alan' => $request->alan,
            'tckn' => $request->tckn,
            'kurulus' => $request->kurulus,
            'sanayisicil' => $request->sanayisicil,
            'ticaretsicil' => $request->ticaretsicil,
            'sahibi' => $request->sahibi,

        ]);
        return redirect()->route('firma-duzenle',$id)->with('success', 'Firma bilgisi başarıyla guncellendi');
}
public function firmaSil($id){
    $firmaBilgisi=Firmalar::whereId($id)->first();
    if($firmaBilgisi){
        Firmalar::whereId($id)->delete();
    }
    return redirect()->route('firma-listesi',$id)->with('success', 'Firma bilgisi başarıyla silindi');

}
public function firmaSilmek($id){
    $firmaBilgisi=Firmalar::whereId($id)->first();
    if($firmaBilgisi){
        Firmalar::whereId($id)->delete();
    }
    return redirect()->route('index',$id)->with('success', 'Firma bilgisi başarıyla silindi');

}


}
