<div>
     <!-- PAGE HEADER -->
     <div class="page-header d-sm-flex d-block">
        <ol class="breadcrumb mb-sm-0 mb-3">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="javascript:void(0);">Utilisateurs</a></li>
            <li class="breadcrumb-item active" aria-current="page">List des utilisateurs</li>
        </ol><!-- End breadcrumb -->
        <div class="ms-auto">
            <div>
                <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                    data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    data-bs-original-title="Rating">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                </a>
                <a href="{{url('lockscreen')}}" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                    data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    data-bs-original-title="lock">
                    <span>
                        <i class="fa fa-lock"></i>
                    </span>
                </a>
                <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                    title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                    <span>
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER -->

    <!-- ROW -->
    <div class="row">
        <div class="col-lg-12">
            <div class="input-group mb-5 float-end">
                <input type="text" class="form-control" placeholder="Search here...">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="e-panel card">
                <div class="card-header">
                    <button class="btn br-7 btn-primary" data-bs-toggle="modal"
                    data-bs-target="#largemodal">Ajouter utilisateur</button>
                    <div class="page-options">
                        <select class="form-control select2 w-auto">
                            <option value="asc">Latest</option>
                            <option value="desc">Oldest</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="e-table">
                        <div class="table-responsive table-lg">
                            <table class="table table-bordered text-dark">
                                <thead>
                                    <tr>
                                        <th class="text-center text-dark fw-semibold">
                                            All
                                        </th>
                                        <th class="text-dark fw-semibold w-25">Nom & Prénom</th>
                                        <th class="text-dark fw-semibold">Date de naissnce</th>
                                        <th class="text-dark fw-semibold">Téléphone</th>
                                        <th class="text-dark fw-semibold">Sexe</th>
                                        <th class="text-dark fw-semibold">Email</th>
                                        <th class="text-center fw-semibold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <div
                                                class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                <input class="custom-control-input" id="item-7"
                                                    type="checkbox"> <label
                                                    class="custom-control-label"
                                                    for="item-7"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex">
                                                <img alt="image"
                                                    class="avatar avatar-md rounded-circle"
                                                    src="{{asset('build/assets/images/users/female/11.jpg')}}">
                                                <p class="fw-semibold mb-0 my-auto mx-2">Thedric Romans</p>
                                            </div>
                                        </td>
                                        <td class="text-nowrap align-middle"><span>12 Jan
                                                2018</span>
                                        </td>

                                        <td class="text-nowrap align-middle"><span>12 Jan
                                            2018</span>
                                        </td>

                                        <td class="text-nowrap align-middle"><span>12 Jan
                                            2018</span>
                                        </td>

                                        <td class="text-nowrap align-middle">
                                            <div class="progress progress-xs mb-0 mt-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-purple w-50">
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-center align-middle">
                                            <div class="btn-group align-top br-7">
                                                <button class="btn btn-sm btn-primary badge" data-bs-toggle="modal" data-bs-target="#exemple"
                                                    type="button">Edit</button>
                                                <button class="btn btn-sm btn-primary badge"
                                                    type="button" id="swal-danger"><i
                                                        class="fa fa-trash"></i></button>
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
    </div>
    <div>
        @include('livewire.comptes.usersmodal')
    </div>
    <!-- END ROW -->
</div>
