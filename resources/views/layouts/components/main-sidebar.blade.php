
				<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
					<div class="app-sidebar">
						<div class="side-header">
							<a class="header-brand1" href="{{url('index')}}">
								<img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img main-logo"
									alt="Sparic logo">
								<img src="{{asset('build/assets/images/brand/logo-light.png')}}" class="header-brand-img darklogo"
									alt="Sparic logo">
								<img src="{{asset('build/assets/images/brand/icon.png')}}" class="header-brand-img icon-logo"
									alt="Sparic logo">
								<img src="{{asset('build/assets/images/brand/icon2.png')}}" class="header-brand-img icon-logo2"
									alt="Sparic logo">
							</a>
						</div>
						<!-- logo-->
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">
								<li class="sub-category">
									<h3>Main</h3>
								</li>
                                <li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('profile')}}"><i
											class="side-menu__icon fe fe-user"></i><span
											class="side-menu__label">Profile</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-home-4-line"></i><span
											class="side-menu__label">Comptes</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side1">
														<ul class="sidemenu-list">
															<li><a class="slide-item" href="{{route('permissions')}}">Permissions</a></li>
															<li><a class="slide-item" href="{{route('droitacces')}}"> Droits d’accès</a></li>
															<li><a class="slide-item" href="{{route('allusers')}}">Utilisateurs</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('touteentreprise')}}"><i
											class="side-menu__icon fe fe-user"></i><span
											class="side-menu__label">Entreprise</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-bubble-chart-line"></i><span
											class="side-menu__label">Apps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side5" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side6" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side7" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side8" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side5">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
															<li><a href="{{url('cards')}}" class="slide-item"> Cards design</a></li>
															<li><a href="{{url('calendar')}}" class="slide-item"> Default calendar</a></li>
															<li><a href="{{url('calendar2')}}" class="slide-item"> Full calendar</a></li>
															<li><a href="{{url('chat')}}" class="slide-item"> Chat</a></li>
															<li><a href="{{url('notify')}}" class="slide-item"> Notifications</a></li>
															<li><a href="{{url('sweetalert')}}" class="slide-item"> Sweet alerts</a></li>
															<li><a href="{{url('rangeslider')}}" class="slide-item"> Range slider</a></li>
															<li><a href="{{url('scroll')}}" class="slide-item"> Content Scroll bar</a></li>
															<li><a href="{{url('loaders')}}" class="slide-item"> Loaders</a></li>
															<li><a href="{{url('counters')}}" class="slide-item"> Counters</a></li>
															<li><a href="{{url('rating')}}" class="slide-item"> Rating</a></li>
															<li><a href="{{url('treeview')}}" class="slide-item"> Treeview</a></li>
															<li><a href="{{url('footers')}}" class="slide-item"> Footers</a></li>
															<li><a href="{{url('users-list')}}" class="slide-item"> User List</a></li>
															<li><a href="{{url('search')}}" class="slide-item">Search</a></li>
															<li><a href="{{url('crypto-currencies')}}" class="slide-item"> Crypto-currencies</a></li>
															<li><a href="{{url('widgets')}}" class="slide-item"> Widgets</a></li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side6">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch8" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch8" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch9" class="onoffswitch2-checkbox">
																		<label for="onoffswitch9" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch10" class="onoffswitch2-checkbox">
																		<label for="onoffswitch10" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch11" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch11" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch12" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch12" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch13" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch13" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch14" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch14" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch15" class="onoffswitch2-checkbox">
																		<label for="onoffswitch15" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side7">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side8">
														<h5 class="mt-3 mb-4">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/2.jpg')}}" style="background: url({{asset('build/assets/images/users/female/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/6.jpg')}}" style="background: url({{asset('build/assets/images/users/female/6.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/5.jpg')}}" style="background: url({{asset('build/assets/images/users/male/5.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/6.jpg')}}" style="background: url({{asset('build/assets/images/users/male/6.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/2.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/4.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/5.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/2.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/3.jpg')}}" style="background: url({{asset('build/assets/images/users/female/3.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-virus-line"></i><span
											class="side-menu__label">Bootstrap</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu mega-slide-menu">
										<li class="panel sidetab-menu">
											<div class="tab-menu-heading p-0 pb-2 border-0">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#side9" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
														<li><a href="#side10" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
														<li><a href="#side11" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
														<li><a href="#side12" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side9">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
															<li class="mega-menu">
																<div class="">
																	<ul>
																		<li><a href="{{url('alerts')}}" class="slide-item"> Alerts</a></li>
																		<li><a href="{{url('buttons')}}" class="slide-item"> Buttons</a></li>
																		<li><a href="{{url('colors')}}" class="slide-item"> Colors</a></li>
																		<li><a href="{{url('avatar-square')}}" class="slide-item"> Avatar Square</a></li>
																		<li><a href="{{url('avatar-radius')}}" class="slide-item"> Avatar Radius</a></li>
																		<li><a href="{{url('avatar-round')}}" class="slide-item"> Avatar Rounded</a></li>
																		<li><a href="{{url('dropdown')}}" class="slide-item"> Dropdowns</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="{{url('listgroup')}}" class="slide-item"> List Group</a></li>
																		<li><a href="{{url('tags')}}" class="slide-item"> Tags</a></li>
																		<li><a href="{{url('pagination')}}" class="slide-item"> Pagination</a></li>
																		<li><a href="{{url('navigation')}}" class="slide-item"> Navigation</a></li>
																		<li><a href="{{url('typography')}}" class="slide-item"> Typography</a></li>
																		<li><a href="{{url('breadcrumbs')}}" class="slide-item"> Breadcrumbs</a></li>
																		<li><a href="{{url('badge')}}" class="slide-item"> Badges / Pills</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="{{url('thumbnails')}}" class="slide-item"> Thumbnails</a></li>
																		<li><a href="{{url('offcanvas')}}" class="slide-item"> Offcanvas</a></li>
																		<li><a href="{{url('toast')}}" class="slide-item"> Toast</a></li>
																		<li><a href="{{url('scrollspy')}}" class="slide-item"> Scrollspy</a></li>
																		<li><a href="{{url('mediaobject')}}" class="slide-item"> Media Object</a></li>
																	</ul>
																</div>
																<div class="">
																	<ul>
																		<li><a href="{{url('accordion')}}" class="slide-item"> Accordions </a></li>
																		<li><a href="{{url('tabs')}}" class="slide-item"> Tabs</a></li>
																		<li><a href="{{url('modal')}}" class="slide-item"> Modal</a></li>
																		<li><a href="{{url('tooltipandpopover')}}" class="slide-item"> Tooltip and popover</a></li>
																		<li><a href="{{url('progress')}}" class="slide-item"> Progress</a></li>
																		<li><a href="{{url('carousel')}}" class="slide-item"> Carousels</a></li>
																	</ul>
																</div>
															</li>
														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>
													<div class="tab-pane" id="side10">
														<h5 class="mt-3 mb-4">Settings</h5>
														<div class="p-3">
															<h5 class="mb-0">General Settings</h5>
														</div>
														<div class="p-4">
															<div class="switch-settings">
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Notifications</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch16" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch16" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your emails</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch17" class="onoffswitch2-checkbox">
																		<label for="onoffswitch17" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show Task statistics</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch18" class="onoffswitch2-checkbox">
																		<label for="onoffswitch18" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show recent activity</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch19" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch19" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">System Logs</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch20" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch20" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Error Reporting</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch21" class="onoffswitch2-checkbox" >
																		<label for="onoffswitch21" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Show your status to all</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch22" class="onoffswitch2-checkbox" checked>
																		<label for="onoffswitch22" class="onoffswitch2-label"></label>
																	</div>
																</div>
																<div class="d-flex mb-2">
																	<span class="me-auto fs-15">Keep up to date</span>
																	<div class="onoffswitch2">
																		<input type="checkbox" name="onoffswitch2" id="onoffswitch23" class="onoffswitch2-checkbox">
																		<label for="onoffswitch23" class="onoffswitch2-label"></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="p-3">
															<h5 class="mb-0">Overview</h5>
														</div>
														<div class="p-4">
															<div class="progress-wrapper">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-danger w-75" role="progressbar"></div>
																	</div>
																</div>
															</div>
															<div class="progress-wrapper pt-2">
																<div class="mb-3">
																	<p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
																	<div class="progress h-1">
																		<div class="progress-bar bg-teal w-70" role="progressbar"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side11">
														<h5 class="mt-3 mb-4">Events</h5>
														<div class="latest-timeline">
															<div class="timeline">
																<div class="mt-0 event-text">
																	<h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
																</div>
																<div class="mb-0 event-text">
																	<h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
																	<p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
																	<p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="side12">
														<h5 class="my-3">Followers</h5>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/2.jpg')}}" style="background: url({{asset('build/assets/images/users/female/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Mozelle Belt</h6>
																<p class="text-muted mb-0 fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/6.jpg')}}" style="background: url({{asset('build/assets/images/users/female/6.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Alina Bernier</h6>
																<p class="text-muted mb-0 fs-10">Administrator</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/5.jpg')}}" style="background: url({{asset('build/assets/images/users/male/5.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/6.jpg')}}" style="background: url({{asset('build/assets/images/users/male/6.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/2.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/4.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/5.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/male/2.jpg')}}" style="background: url({{asset('build/assets/images/users/male/2.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Isidro Heide</h6>
																<p class="text-muted fs-10 mb-0">Web Designer
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
														<div class="list-group-item d-flex px-0 border-0 align-items-center">
															<div class="me-2">
																<span class="avatar avatar-md brround cover-image" data-image-src="{{asset('build/assets/images/users/female/3.jpg')}}" style="background: url({{asset('build/assets/images/users/female/3.jpg')}}) center center;"></span>
															</div>
															<div class="lh-1">
																<h6 class="fw-semibold fs-13">Florinda Carasco</h6>
																<p class="text-muted fs-10 mb-0">Project Manager
																</p>
															</div>
															<div class="ms-auto">
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>

							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div>
						</div>
					</div>
				</div>
