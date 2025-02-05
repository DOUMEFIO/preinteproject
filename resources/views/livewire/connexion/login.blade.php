<div>
    <div class="page-content">
        <div class="container text-center text-dark">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card">
                                <form action="">
                                    <div class="card-body">
                                        <div class="text-center mb-2">
                                            <a class="header-brand1" href="{{url('index')}}">
                                                <img src="{{asset('build/assets/images/brand/logo.png')}}"
                                                    class="header-brand-img main-logo" alt="Sparic logo">
                                                <img src="{{asset('build/assets/images/brand/logo-light.png')}}"
                                                    class="header-brand-img darklogo" alt="Sparic logo">
                                            </a>
                                        </div>
                                        <h3>Connexion</h3>
                                        <p class="text-muted">Connectez-vous à votre compte</p>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon bg-white"><i class="fa fa-user text-dark"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-addon bg-white"><i
                                                    class="fa fa-unlock-alt text-dark"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="row">
                                            <div>
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="col-12">
                                                <a href="{{route('mdpforget')}}"
                                                    class="btn btn-link box-shadow-0 px-0">Mot De Passe oublier?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
