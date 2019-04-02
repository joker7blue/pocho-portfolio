@extends('./admin/layouts/basic_admin') 
@section('contentCadre')

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col m3 s6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('/images/images_services/reservation_chambre.jpg')}}" style="height: 150px;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Manager les chambres<i class="material-icons right">more_vert</i></span>
                    <p><a href="{{ route('manager_chambres.index') }}">Manager</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Manager les chambres</span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>

        <div class="col m3 s6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('/images/images_services/reservation_appartement.jpg')}}" style="height: 150px;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Manager les Appartements<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Manager les Appertements</span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>

        <div class="col m3 s6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('/images/images_services/location_salle_evenement.jpg')}}" style="height: 150px;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Manager les salles de ceremonies<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Manager les salles de ceremonies</span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>

        <div class="col m3 s6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('/images/adult-athlete-business.jpg')}}" style="height: 150px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Manager les autres choses<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Manager les autres choses</span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection