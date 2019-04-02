@extends('./admin/layouts/basic_admin') 
@section('section_for_other_css')
<link rel="stylesheet" href="{{ asset('css/admin/chambres/admin_chambre_index.css') }}">
@endsection
 
@section('section_for_other_js')
<script src="{{ asset('js/admin/chambres/admin_chambre_index.js') }}"></script>
@endsection
 
@section('contentCadre')

<div class="container-fluid">
    <h3 style="font-family: Lobster;" class="center">
        Manager chambres 
        <a class="btn purple accent-2" style="font-family: cursive;" href="{{ route('manager_chambres.create') }}"><i class="material-icons">add</i>Creer</a>
    </h3>

    <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3"><a class="active" href="#test-swipe-1">Toutes les chambres</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">disponibles</a></li>
        <li class="tab col s3"><a href="#test-swipe-3">Non disponibles</a></li>
        <li class="tab col s3"><a href="#test-swipe-4">Reservations</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12" style="padding: 0px 20px;">

        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Label</th>
                        <th>Prix</th>
                        <th>Disponibilité</th>
                        <th>Image?</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($chambres as $chambre)
                    <tr>
                        <td>{{ $chambre->label }}</td>
                        <td>{{ $chambre->prix }}</td>
                        <td>
                            @if ($chambre->available)
                                Disponible
                            @else
                                Non disponible
                            @endif
                        </td>
                        <td>
                            @if ($chambre->imageChambres->first())
                                    oui ({{$chambre->imageChambres->count()}})
                            @else
                                    non
                            @endif
                        </td>
                        <td>
                            <a class="btn small blue" href="{{ route('manager_chambres.edit', ['manager_chambre'=>$chambre->id]) }}"><i class="material-icons">edit</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="test-swipe-2" class="col s12" style="padding: 0px 20px;">
        <table class="striped">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Prix</th>
                            <th>Disponibilité</th>
                            <th>Image?</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
    
                    <tbody>
    
                        @foreach ($chambresAvailable as $chambre)
                        <tr>
                            <td>{{ $chambre->label }}</td>
                            <td>{{ $chambre->prix }}</td>
                            <td>
                                @if ($chambre->available)
                                    Disponible
                                @else
                                    Non disponible
                                @endif
                            </td>
                            <td>
                                @if ($chambre->imageChambres->first())
                                        oui ({{$chambre->imageChambres->count()}})
                                @else
                                        non
                                @endif
                            </td>
                            <td>
                                <a class="btn small blue" href=""><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

    <div id="test-swipe-3" class="col s12" style="padding: 0px 20px;">
            <table class="striped">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Prix</th>
                            <th>Disponibilité</th>
                            <th>Image?</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
    
                    <tbody>
    
                        @foreach ($chambresNonAvailable as $chambre)
                        <tr>
                            <td>{{ $chambre->label }}</td>
                            <td>{{ $chambre->prix }}</td>
                            <td>
                                @if ($chambre->available)
                                    Disponible
                                @else
                                    Non disponible
                                @endif
                            </td>
                            <td>
                                @if ($chambre->imageChambres->first())
                                        oui ({{$chambre->imageChambres->count()}})
                                @else
                                        non
                                @endif
                            </td>
                            <td>
                                <a class="btn small blue" href=""><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

    <div id="test-swipe-4" class="col s12" style="padding: 0px 20px;">

    </div>

</div>
@endsection