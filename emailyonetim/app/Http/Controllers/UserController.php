<?php

namespace App\Http\Controllers;
use App\Models\Mailyonetim;
use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Musteriler;
use Illuminate\Contracts\Mail\Mailable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $musteriler = Musteriler::select("*")
                        ->paginate(10);

        return view('include.mailKisileri', compact('musteriler'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail(Request $request)
    {
        $musteriler = Musteriler::all();
        $metin = $request->input('metin');
        $baslik = $request->input('baslik');

        foreach ($musteriler as $key => $musteri) {
            Mail::to($musteri->mail)->send(new MyTestMail($musteri, $metin, $baslik));
        }

        return response()->json(['success'=>'Send email successfully.']);

    }
}
