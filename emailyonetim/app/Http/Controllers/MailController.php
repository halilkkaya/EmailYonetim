<?php

namespace App\Http\Controllers;
use App\Models\Mailyonetim;
use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Musteriler;
use Illuminate\Contracts\Mail\Mailable;
class MailController extends Controller


{
    public function index()
    {
        return view("include.mail-olustur");
    }


    public function MailOlusturPost(Request $request)
    {

        $musteriler = Musteriler::all();

        $metin =  ($request->input('metin'));


        $baslik = $request->input('baslik');

        foreach ($musteriler as $musteri) {


            Mail::to($musteri->mail)->send(new MyTestMail($musteri,$metin,$baslik));

        }
        $request->validate([
            "baslik" => "required",
            "metin" => "required",
            "tema" => "required",
        ]);
        Mailyonetim::create([
            "baslik" => $request->baslik,
            "metin" => $request->metin,
            "tema" => $request->tema,

        ]);
        return redirect()->route("toplu-mail-olusturma")->with("success", "mail tanımlama işlemi başarılı");
    }


    public function gelenkutusu()
    {
        $emailler = Mailyonetim::all(); // Tüm e-postaları çekecek

        return view('emails.mailim', ['emailler' => $emailler]);
    }





}
