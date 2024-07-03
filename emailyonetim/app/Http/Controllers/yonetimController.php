<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musteriler;
use App\Models\Mailyonetim;
use App\Mail\MailGonderme;
use App\Models\Firmalar;

class yonetimController extends Controller
{
    public function index()
    {
        $musteriler = Musteriler::orderBy('id', 'desc')->take(5)->get();
        $mailler = MailYonetim::orderBy('created_at', 'desc')->take(10)->get();
        $mailsayisi = MailYonetim::count();
        $musterisayisi = Musteriler::count();
        $firmalar = Firmalar::orderBy('id','desc')->take(5)->get();
        $firmasayisi = Firmalar::count();

        return view("include.home",compact('musteriler','mailler','mailsayisi','musterisayisi','firmalar','firmasayisi'));
    }

    public function musteriEkle()
    {
        return view("include.musteri-ekle");
    }

    public function MusteriEklePost(Request $request)
    {
        $request->validate([
            'adsoyad' => 'required',
            'mail' => 'required|email:rfc,dns'
        ]);
        Musteriler::create([
            'adsoyad' => $request->adsoyad,
            'mail' => $request->mail,
            'telefon' => $request->telefon
        ]);
        return redirect()->route('musteri-ekle')->with('success', 'Müşteri bilgisi başarıyla eklendi');
    }

    public function musteriListe()
    {
        $musteriler=Musteriler::all();
        return view('include.musteri-liste', compact('musteriler'));
    }

    public function musteriDuzenle($id){
        $musteriBilgisi=Musteriler::whereId($id)->first();
        if($musteriBilgisi){
            return view('include.musteri-duzenle',compact('musteriBilgisi'));
        }
        else{
            return redirect()->route('musteri-duzenle');
        }

    }
    public function musteriDuzenlePost(Request $request,$id){

            $request->validate([
                'adsoyad' => 'required',
                'mail' => 'required|email:rfc,dns'
            ]);
            Musteriler::whereId($id)->update([
                'adsoyad' => $request->adsoyad,
                'mail' => $request->mail,
                'telefon' => $request->telefon
            ]);
            return redirect()->route('musteri-duzenle',$id)->with('success', 'Müşteri bilgisi başarıyla guncellendi');
    }
public function musteriSil($id){
    $musteriBilgisi=Musteriler::whereId($id)->first();
    if($musteriBilgisi){
        Musteriler::whereId($id)->delete();
    }
    return redirect()->route('musteri-liste',$id)->with('success', 'Müşteri bilgisi başarıyla silindi');

}
public function musteriSilmek($id){
    $musteriBilgisi=Musteriler::whereId($id)->first();
    if($musteriBilgisi){
        Musteriler::whereId($id)->delete();
    }
    return redirect()->route('index',$id)->with('success', 'Müşteri bilgisi başarıyla silindi');

}





}
