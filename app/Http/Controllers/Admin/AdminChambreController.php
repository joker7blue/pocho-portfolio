<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


use App\Models\Chambre;
use App\Models\ImageChambre;

use App\Http\Requests\StoreChambre;

class AdminChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambres = Chambre::all();

        $chambresAvailable = $chambres->filter(function($chambre, $val){
            return $chambre->available == true;
        });

        $chambresNonAvailable = $chambres->filter(function($chambre, $val){
            return $chambre->available == false;
        });


        //dd($chambresAvailable);

        return view('admin/chambres/index', ['chambres' => $chambres, 'chambresAvailable' => $chambresAvailable, 'chambresNonAvailable' => $chambresNonAvailable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imageNonAssocieesAchambre = ImageChambre::where('chambre_id',"=",null)->get();
        //dd($imageNonAssocieesAchambre);
        return view('admin/chambres/create', ['imageNonAssocieesAchambre' => $imageNonAssocieesAchambre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChambre $request)
    {
        $label = trim($request->input('label'));
        $description = trim($request->input('description'));
        $prix = $request->input('prix');
        $available = $request->input('available');

        if ($available == null) {
            $available = false;
        } else {
            $available = true;
        }
        

        $img_principal = $request->file('img_principal');

        $imgRadio = $request->input('imgRadio');

        if ( ($img_principal != null) && ( $imgRadio != null ) ) {
             return redirect()->back()->withErrors(['erreur_img' => 'pas bon'])->withInput();
        }

        if($img_principal != null){
            $urlImage = 'imagePrincipale_'.$label.'.jpg';
            
            
            $path = Storage::putFileAs('public/chambresUploads', $request->file('img_principal'), $urlImage);
            $chambre = Chambre::create([
                'label' => $label, 
                'description' => $description,
                'prix' => $prix,
                'available' => $available
            ]);
            
            $img = ImageChambre::create(['url' => $urlImage]);

            if ($chambre && $path && $img) {
                 
                 $img->chambre_id = $chambre->id;
                $img->save();
                return redirect()->route('manager_chambres.index');
            }else {
                return redirect()->back()->withErrors(['erreurCreateChambre' => 'erreur lors de la creation de la chambre'])->withInput();
            }
        }


        if ($imgRadio != null) {
            $img = ImageChambre::where('url','=',$imgRadio)->first();
            $newUrlImage = 'imagePrincipale_'.$label.'.jpg';
            $img->url = $newUrlImage;

            $imgStore = new File('storage/chambresUploads/'.$imgRadio);
            //dd($imgStore);
            $path = Storage::putFileAs('public/chambresUploads', $imgStore, $newUrlImage);
            Storage::delete('public/chambresUploads/'.$imgRadio);


            $chambre = Chambre::create([
                'label' => $label, 
                'description' => $description,
                'prix' => $prix,
                'available' => $available
            ]);

            if ($chambre && $path) {
                
                $img->chambre_id = $chambre->id;
                $img->save();
                return redirect()->route('manager_chambres.index');
            }else {
                return redirect()->back()->withErrors(['erreurCreateChambre' => 'erreur lors de la creation de la chambre'])->withInput();
            }
            //dd($img);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chambre = Chambre::findOrFail($id);
        $imageNonAssocieesAchambre = ImageChambre::where('chambre_id',"=",null)->get();

        $imagePrincipale = $chambre->imageChambres()->where('url', 'like', '%'.$chambre->label.'%')->first();
        
        //dd($imagePrincipale);

        return view('admin/chambres/edit', ['chambre' => $chambre, 'imagePrincipale' => $imagePrincipale ,'imageNonAssocieesAchambre' => $imageNonAssocieesAchambre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $label = trim($request->input('label'));
        $description = trim($request->input('description'));
        $prix = $request->input('prix');
        $available = $request->input('available');

        $img_principal_request = $request->file('img_principal');
        $imgRadio = $request->input('imgRadio');

        if ($available == null) {
            $available = false;
        } else {
            $available = true;
        }

        $chambre = Chambre::findOrFail($id);

        $chambre->label = $label;
        $chambre->description = $description;
        $chambre->prix = $prix;
        $chambre->available = $available;

        $imagePrincipale = $chambre->imageChambres()->where('url', 'like', '%'.$chambre->label.'%')->first();
        
        if ( ($img_principal_request != null) && ( $imgRadio != null ) ) {
            return redirect()->back()->withErrors(['erreur_img' => 'pas bon'])->withInput();
        }

        
        if ( ($img_principal_request == null) && ( $imgRadio == null ) ) {
            $chambre->save();
            return redirect()->route('manager_chambres.edit',['chambre_manager'=>$chambre->id]);
        }


        if ($img_principal_request != null) {

            if($imagePrincipale == null){
                $urlImage = 'imagePrincipale_'.$label.'.jpg';
                
                
                $path = Storage::putFileAs('public/chambresUploads', $request->file('img_principal'), $urlImage);
                $chambre->save();

                $img = ImageChambre::create(['url' => $urlImage]);
    
                if ($path && $img) {
                     
                    $img->chambre_id = $chambre->id;
                    $img->save();
                    return redirect()->route('manager_chambres.edit',['chambre_manager'=>$chambre->id]);
                }else {
                    return redirect()->back()->withErrors(['erreurCreateChambre' => 'erreur lors de la creation de la chambre'])->withInput();
                }
            }else {

                $all_non_assigne_url = ImageChambre::where('url', 'like', 'non assigne_%')->get()->pluck('url');
                $map_non_assignArray = $all_non_assigne_url->map(function ($item, $key) {
                    return (int)(str_replace_first('.jpg','',str_replace_first('non assigne_', '',$item)));
                })->toArray();
                $map_non_assignArray = array_sort($map_non_assignArray);


                $newImgNonAssigne = new File('storage/chambresUploads/'.$imagePrincipale->url);
                $path_tmp = Storage::putFileAs('public/tmpChambresUploads', $newImgNonAssigne, 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                Storage::delete('public/chambresUploads/'.$imagePrincipale->url);

                //dd( sizeof($map_non_assignArray) );

                $urlImage = 'imagePrincipale_'.$label.'.jpg';
                $path = Storage::putFileAs('public/chambresUploads', $request->file('img_principal'), $urlImage);
                $imagePrincipale->url = $urlImage;
                
                $chambre->save();
                $imagePrincipale->save();

                $newImgNonAssigne = new File('storage/tmpChambresUploads/'.'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                Storage::putFileAs('public/chambresUploads', $newImgNonAssigne, 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                Storage::delete('public/tmpChambresUploads/'.'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                $img = ImageChambre::create(['url' => 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg']);

                return redirect()->route('manager_chambres.edit',['chambre_manager'=>$chambre->id]);
            }
        }


        if ($imgRadio != null) {

            if($imagePrincipale == null){

                $img = ImageChambre::where('url','=',$imgRadio)->first();
                $newUrlImage = 'imagePrincipale_'.$label.'.jpg';
                $img->url = $newUrlImage;

                $imgStore = new File('storage/chambresUploads/'.$imgRadio);
                //dd($imgStore);
                $path = Storage::putFileAs('public/chambresUploads', $imgStore, $newUrlImage);
                Storage::delete('public/chambresUploads/'.$imgRadio);
                
                $chambre->save();

                if ($chambre && $path) {
                
                    $img->chambre_id = $chambre->id;
                    $img->save();
                    return redirect()->route('manager_chambres.edit',['chambre_manager'=>$chambre->id]);
                }else {
                    return redirect()->back()->withErrors(['erreurCreateChambre' => 'erreur lors de la creation de la chambre'])->withInput();
                }

            }else {

                $all_non_assigne_url = ImageChambre::where('url', 'like', 'non assigne_%')->get()->pluck('url');
                $map_non_assignArray = $all_non_assigne_url->map(function ($item, $key) {
                    return (int)(str_replace_first('.jpg','',str_replace_first('non assigne_', '',$item)));
                })->toArray();
                $map_non_assignArray = array_sort($map_non_assignArray);


                $newImgNonAssigne = new File('storage/chambresUploads/'.$imagePrincipale->url);
                $path_tmp = Storage::putFileAs('public/tmpChambresUploads', $newImgNonAssigne, 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                Storage::delete('public/chambresUploads/'.$imagePrincipale->url);
                //ImageChambre::destroy(ImageChambre::where('url',"=",$imagePrincipale->url)-first()->id);

                //dd( sizeof($map_non_assignArray) );

                $urlImage = 'imagePrincipale_'.$label.'.jpg';
                
                $f = new File('storage/chambresUploads/'.$imgRadio);
                $path_f = Storage::putFileAs('public/tmpChambresUploads', $f, $urlImage);
                Storage::delete('public/chambresUploads/'.$imgRadio);

                //$imagePrincipale->url = $urlImage;
                
                $chambre->save();
                //$imagePrincipale->save();

                $of = new File('storage/tmpChambresUploads/'.'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                $nf = new File('storage/tmpChambresUploads/'.$urlImage);

                Storage::putFileAs('public/chambresUploads', $of, 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');
                Storage::delete('public/tmpChambresUploads/'.'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg');

                Storage::putFileAs('public/chambresUploads', $nf, $urlImage);
                Storage::delete('public/tmpChambresUploads/'.$urlImage);
                
                $a = ImageChambre::where('url',"=",$imagePrincipale->url)->first();
                $b = ImageChambre::where('url',"=",$imgRadio)->first();

                $a->url = 'non assigne_'.($map_non_assignArray[sizeof($map_non_assignArray)-1] + 1).'.jpg';
                $a->chambre_id = null;

                $b->url = $urlImage;
                $b->chambre_id = $chambre->id;

                $a->save();
                $b->save();

                return redirect()->route('manager_chambres.edit',['chambre_manager'=>$chambre->id]);
            }
        }
        //dd($chambre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
