@extends('../admin/layouts/basic_admin') 
@section('section_for_other_css')
<link rel="stylesheet" href="{{ asset('css/admin/chambres/admin_chambre_create.css') }}">
@endsection
 
@section('section_for_other_js')
<script src="{{ asset('js/admin/chambres/admin_chambre_create.js') }}"></script>
@endsection
 
@section('contentCadre')

<br><br>
<div class="container-fluid">
    <div class="row">

        <form class="col m12" method="POST" action="{{ route('manager_chambres.update', ['chambre_manager'=>$chambre->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col m4">
                    
                    <div class="row">

                        <div class="col m12">
                            <label><strong>Label:</strong></label>
                            <input class="browser-default input-text-perso" name="label" type="text" value="{{$chambre->label}}">                            {!! $errors->first('label' , '<span class="red-text">:message</span>') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m12">
                            <label><strong>Description:</strong></label>
                            <textarea class="input-text-perso input-text-perso" name="description">{{$chambre->description}}</textarea>                            {!! $errors->first('description' , '<span class="red-text">:message</span>') !!}
                        </div>
                    </div>

                    <div class="row">

                        <div class="col m12">
                            <label><strong>Prix:</strong></label>
                            <input class="browser-default input-text-perso" type="number" name="prix" value="{{$chambre->prix}}">                            {!! $errors->first('prix' , '<span class="red-text">:message</span>') !!}
                        </div>

                    </div>

                    <div class="row">

                        <div class="col m12">
                            <label>
                                @if ( $chambre->available)
                                <input type="checkbox"  class="filled-in" name="available" checked='checked'/>
                                @else
                                <input type="checkbox"  class="filled-in" name="available"/>
                                @endif
                                    <span>Disponible? </span>
                                </label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col m12">
                                @if ($imagePrincipale != null)
                                <label><strong>Changer l'image principale:</strong></label>
                                @else
                                <label><strong>Choisir une image principale associée:</strong></label>
                                @endif
                            
                            <input type="file" name="img_principal">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col m12">
                            <button class="button-perso purple accent-2" type="submit">Modifier</button>
                        </div>

                    </div>
                </div>

                <div class="col m8">
                    <div class="row">
                        <div class="col m12">
                            @if ($imagePrincipale != null)
                            <h5>Image principale</h5>
                            <img class="materialboxed" src="{{ asset('storage/chambresUploads/'.$imagePrincipale->url) }}" alt="{{$imagePrincipale->url}}"
                                style="width: 100%; height: 150px;"> @else
                            <h5>Aucune image principale pour cette chambre.</h5>
                            @endif
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div>
                        @if ($imagePrincipale != null) 
                            <h6><strong>Changer l'image principale</strong></h6>
                        @endif
                        <p> Choisir une image parmi les images non asignées. {{-- &nbsp; Ne rien prendre ici.
                            <label>
                            <input type="radio" class="filled-in" name="imgRadio"  value="rien" />
                            <span></span>
                        </label> --}}
                        </p>
                        <div class="row">
                            @foreach ($imageNonAssocieesAchambre as $image)
                            <div class="col m4">
                                <label>
                                    <input type="radio" class="filled-in" name="imgRadio"  value="{{$image->url}}" />
                                    <span>{{$image->url}}</span>
                                  </label>
                                <img class="materialboxed" src="{{ asset('storage/chambresUploads/'.$image->url) }}" alt="{{$image->url}}" style="width: 100%; height: 150px;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection