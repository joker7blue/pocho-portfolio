<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function apropos()
    {
        return view('standard/apropos');
    }

    public function contact()
    {
        return view('standard/contact');
    }

    public function archivements()
    {
        return view('standard/archievements');
    }

    public function senMailToMe(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $mail = $request->input('mail');
        $message = $request->input('message');
//dd($request->user());
        Mail::to('legrandgeorges754@gmail.com')->send(new \App\Mail\MailToContactDakotel($nom,$prenom,$mail,$message));
        //return new \App\Mail\MailToContactDakotel($nom,$prenom,$mail,$message);
        return redirect()->back()->with('message', 'Votre message a correctement été envoyé.');
    }

    public function chambres()
    {
        $chambres = Chambre::all();
        //dd($chambres);
        return view('chambres/index', ['chambres' => $chambres]);
    }

    public function detailChambre($id) {

        $chambre = Chambre::findOrFail($id);

        //dd($chambre);
        return view('chambres/detail_chambre', ['chambre' => $chambre]);
    }

    public function searchThroughIndex(Request $request)
    {
       // dd($request);
        return '<h1 style="margin-top: 20%; text-align: center;"> Super recherche en cours de developpement... </h1>';
        //dd([$available,$prix_min,$prix_max]);

        $chambres = Chambre::where('available','=',$available)->get();
        //dd($request);
        return view('chambres/search_chambre', ['chambres' => $chambres]);
        //return response('Hello World', 200)->header('Content-Type', 'text/plain');
    }
}
