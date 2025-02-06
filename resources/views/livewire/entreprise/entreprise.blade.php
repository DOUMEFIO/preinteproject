<div>
    <!-- PAGE HEADER -->
    <div class="page-header d-sm-flex d-block">
        <ol class="breadcrumb mb-sm-0 mb-3">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="javascript:void(0);">Toutes les</a></li>
            <li class="breadcrumb-item active" aria-current="page">Entreprises</li>
        </ol><!-- End breadcrumb -->
        <div class="ms-auto">
            <div>
                <button class="btn br-7 btn-primary" data-bs-toggle="modal"
                    data-bs-target="#examplemodal">Ajouter utilisateur</button>
            </div>
        </div>
    </div>

    <!-- END PAGE HEADER -->

    <!-- ROW -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Entreprise numero</div>
                </div>
                <div class="card-body">
                    <div class="panel panel-success">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item">Nom</a>
                            <a href="javascript:void(0);" class="list-group-item active">Ifu</a>
                            <a href="javascript:void(0);" class="list-group-item">Position geographique</a>
                            <a href="javascript:void(0);" class="list-group-item">Description 10mots+...</a>
                            <div class="text-end btn-group align-top br-7">
                                <button class="btn btn-sm btn-primary badge" data-bs-toggle="modal" data-bs-target="#voirentreprise"
                                    type="button">Voir plus</button>
                                <button class="btn btn-sm btn-primary badge" data-bs-toggle="modal" data-bs-target="#modifierentreprise"
                                    type="button" id="swal-secondary"><i
                                        class="fa fa-edit"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- col end -->
    </div>
    <div>
        @include('livewire.entreprise.entreprisemodal')
    </div>
    <!-- END ROW -->
</div>
