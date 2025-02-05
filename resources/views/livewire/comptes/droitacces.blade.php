<div>
    <div class="page-header d-sm-flex d-block">
        <ol class="breadcrumb mb-sm-0 mb-3">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="javascript:void(0);">Entreprise</a></li>
            <li class="breadcrumb-item active" aria-current="page">Droits d'accès</li>
            <li class="breadcrumb-item active" aria-current="page">Tous les droits d'accès</li>
        </ol><!-- End breadcrumb -->
    </div>
    <!-- ROW -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h3 class="card-title">Tous les droits d'accès</h3>
                    </div>
                    <button class="btn br-7 btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Ajouter</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable"
                            class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Droit accès</th>
                                    <th class="border-bottom-0">Permissins</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>
                                        <div class="card-body text-center p-0">
                                            <a class="btn btn-app btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-edit me-2 fs-13"></i>Modifier
                                            </a>
                                            <a class="btn btn-app btn-danger me-2" id="swal-danger">
                                                <i class="fa fa-trash me-2 fs-13"></i>Supprimer
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        @include('livewire.comptes.droitaccescreate')
    </div>
    <!-- END ROW -->
</div>
