<div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside"
	data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
	<!--begin::Primary-->
	<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
		<!--begin::Logo-->
		<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10"
			id="kt_aside_logo">
			<a href="{{ route('admin') }}">
				<img alt="Logo" src="{{ asset('image/logothuvien.png') }}" class="h-35px" />
			</a>
		</div>
		<!--end::Logo-->
		<!--begin::Nav-->
		<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
			id="kt_aside_nav">
			<!--begin::Wrapper-->
			<div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
				data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav"
				data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
				<!--begin::Nav-->
				<ul class="nav flex-column">
					<!--begin::Nav item-->

					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
						data-bs-dismiss="click" title="Menu">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"
							data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
										fill="black" />
									<path
										d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
										fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
						data-bs-dismiss="click" title="Subscription">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"
							data-bs-toggle="tab" href="#kt_aside_nav_tab_subscription">
							<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
									<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
									<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
									<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
						data-bs-dismiss="click" title="Tasks">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"
							data-bs-toggle="tab" href="#kt_aside_nav_tab_tasks">
							<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
										fill="black" />
									<path
										d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
										fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
						data-bs-dismiss="click" title="Notifications">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"
							data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
										fill="black" />
									<path
										d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
										fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
						data-bs-dismiss="click" title="Authors">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"
							data-bs-toggle="tab" href="#kt_aside_nav_tab_authors">
							<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z"
										fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
				</ul>
				<!--end::Tabs-->
			</div>
			<!--end::Nav-->
		</div>
		<!--end::Nav-->
		<!--begin::Footer-->
		<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">

			<div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
				<!--begin::Menu wrapper-->
				<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true"
					data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
					data-bs-dismiss="click" title="User profile">
					<img src="{{ asset('image/logothuvien.png') }}" alt="image" />
			
				</div>
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
					data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="{{ asset('image/logothuvien.png') }}" />
							</div>
							<!--end::Avatar-->
							<!--begin::Username-->
							<div class="d-flex flex-column">
								<div class="fw-bolder d-flex align-items-center fs-5">Admin Tiến
									<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
								</div>
								<a href="#" class="fw-bold text-muted text-hover-primary fs-7">tiencmpc05891@fpt.edu.vn</a>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../admin/dist/account/overview.html" class="menu-link px-5">My
							Profile</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../admin/dist/pages/projects/list.html" class="menu-link px-5">
							<span class="menu-text">My Projects</span>
							<span class="menu-badge">
								<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
							</span>
						</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->

					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../admin/dist/account/statements.html" class="menu-link px-5">My
							Statements</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
						<a href="#" class="menu-link px-5">
							<span class="menu-title position-relative">Language
								<span
									class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
									<img class="w-15px h-15px rounded-1 ms-2"
										src="{{ asset('media/flags/united-states.svg') }}"
										
										alt="" /></span></span>

						</a>
						<!--begin::Menu sub-->
						<div class="menu-sub menu-sub-dropdown w-175px py-4">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../admin/dist/account/settings.html" class="menu-link d-flex px-5 active">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1"
											src="../../admin/dist/assets/media/flags/united-states.svg" alt="" />
									</span>English</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../admin/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="../../admin/dist/assets/media/flags/spain.svg"
											alt="" />
									</span>Spanish</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../admin/dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="../../admin/dist/assets/media/flags/germany.svg"
											alt="" />

									</span>German</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="../../admin/dist/assets/media/flags/japan.svg"
											alt="" />
									</span>Japanese</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../dist/account/settings.html" class="menu-link d-flex px-5">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="../../admin/dist/assets/media/flags/france.svg"
											alt="" />
									</span>French</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu sub-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5 my-1">
						<a href="../../admin/dist/account/settings.html" class="menu-link px-5">Account
							Settings</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="{{ route('home') }}" class="menu-link px-5">Quay lại trang Cilent</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<div class="menu-content px-5">
							<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
								for="kt_user_menu_dark_mode_toggle">
								<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
									id="kt_user_menu_dark_mode_toggle" data-kt-url="../../admin/dist/index.html" />
								<span class="pulse-ring ms-n1"></span>
								<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
							</label>
						</div>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::User-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Primary-->
	<!--begin::Secondary-->
	<div class="aside-secondary d-flex flex-row-fluid">
		<!--begin::Workspace-->
		<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
			<div class="d-flex h-100 flex-column">
				<!--begin::Wrapper-->
				<div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace"
					data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
					<!--begin::Tab content-->
					<div class="tab-content">
						<!--begin::Tab pane-->
						<div class="tab-pane fade active show" id="kt_aside_nav_tab_projects" role="tabpanel">
							<!--begin::Wrapper-->
							<div class="m-0">
								<!--begin::Toolbar-->
								<div class="d-flex mb-10">
									<!--begin::Search-->
									<div id="kt_header_search" class="d-flex align-items-center w-lg-400px"
										data-kt-search-keypress="true" data-kt-search-min-length="2"
										data-kt-search-enter="enter" data-kt-search-layout="menu"
										data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
										data-kt-menu-placement="bottom-start">
										<!--begin::Form-->
										<form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0"
											autocomplete="off">
											<!--begin::Hidden input(Added to disable form autocomplete)-->
											<input type="hidden" />
											<!--end::Hidden input-->
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span
												class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
														height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
														fill="black" />
													<path
														d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid ps-15"
												name="search" value="" placeholder="Search..."
												data-kt-search-element="input" />
											<!--end::Input-->
											<!--begin::Spinner-->
											<span
												class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
												data-kt-search-element="spinner">
												<span
													class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
											</span>
											<!--end::Spinner-->
											<!--begin::Reset-->
											<span
												class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
												data-kt-search-element="clear">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
															rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
															transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<!--end::Reset-->
										</form>
										<!--end::Form-->
										<!--begin::Menu-->
										<div data-kt-search-element="content"
											class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
											<!--begin::Wrapper-->
											<div data-kt-search-element="wrapper">
												<!--begin::Recently viewed-->
												<div data-kt-search-element="results" class="d-none">
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-350px">
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pb-5"
															data-kt-search-element="category-title">Users
														</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="../dist/assets/media/avatars/150-1.jpg"
																	alt="" />

															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Karina
																	Clark</span>
																<span class="fs-7 fw-bold text-muted">Marketing
																	Manager</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="../dist/assets/media/avatars/150-3.jpg"
																	alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Olivia
																	Bold</span>
																<span class="fs-7 fw-bold text-muted">Software
																	Engineer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/150-8.jpg') }}"
														
																	alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Ana Clark</span>
																<span class="fs-7 fw-bold text-muted">UI/UX
																	Designer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/150-11.jpg') }}"
																	alt="" />
																
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Nick
																	Pitola</span>
																<span class="fs-7 fw-bold text-muted">Art
																	Director</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="{{ asset('assets/media/avatars/150-12.jpg') }}"
															
																	alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Edward
																	Kulnic</span>
																<span class="fs-7 fw-bold text-muted">System
																	Administrator</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
															data-kt-search-element="category-title">
															Customers</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="../dist/assets/media/svg/brand-logos/volicity-9.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Company
																	Rbranding</span>
																<span class="fs-7 fw-bold text-muted">UI
																	Design</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="../dist/assets/media/svg/brand-logos/tvit.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Company
																	Re-branding</span>
																<span class="fs-7 fw-bold text-muted">Web
																	Development</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="../dist/assets/media/svg/misc/infography.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Business
																	Analytics App</span>
																<span
																	class="fs-7 fw-bold text-muted">Administration</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="{{ asset('media/svg/brand-logos/leaf.svg') }}"
																		
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">EcoLeaf App
																	Launch</span>
																<span class="fs-7 fw-bold text-muted">Marketing</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="{{ asset('media/svg/brand-logos/tower.svg') }}"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Tower Group
																	Website</span>
																<span class="fs-7 fw-bold text-muted">Google
																	Adwords</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
															data-kt-search-element="category-title">Projects
														</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
																				fill="black" />
																			<path
																				d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Si-Fi Project by
																	AU Themes</span>
																<span class="fs-7 fw-bold text-muted">#45670</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<rect x="8" y="9" width="3" height="10"
																				rx="1.5" fill="black" />
																			<rect opacity="0.5" x="13" y="5" width="3"
																				height="14" rx="1.5" fill="black" />
																			<rect x="18" y="11" width="3" height="8"
																				rx="1.5" fill="black" />
																			<rect x="3" y="13" width="3" height="6"
																				rx="1.5" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Shopix Mobile App
																	Planning</span>
																<span class="fs-7 fw-bold text-muted">#45690</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																				fill="black" />
																			<rect x="6" y="12" width="7" height="2"
																				rx="1" fill="black" />
																			<rect x="6" y="7" width="12" height="2"
																				rx="1" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Finance
																	Monitoring SAAS Discussion</span>
																<span class="fs-7 fw-bold text-muted">#21090</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																				fill="black" />
																			<path
																				d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Dashboard
																	Analitics Launch</span>
																<span class="fs-7 fw-bold text-muted">#34560</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->
												<!--begin::Recently viewed-->
												<div class="mb-4" data-kt-search-element="main">
													<!--begin::Heading-->
													<div class="d-flex flex-stack fw-bold mb-5">
														<!--begin::Label-->
														<span class="text-muted fs-6 me-2">Recently
															Searched</span>
														<!--end::Label-->
														<!--begin::Toolbar-->
														<div class="d-flex" data-kt-search-element="toolbar">
															<!--begin::Preferences toggle-->
															<div data-kt-search-element="preferences-show"
																class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
																title="Show search preferences">
																<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
																<span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
																			d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
																			fill="black" />
																		<path
																			d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Preferences toggle-->
															<!--begin::Advanced search toggle-->
															<div data-kt-search-element="advanced-options-form-show"
																class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
																data-bs-toggle="tooltip"
																title="Show more search options">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<path
																			d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Advanced search toggle-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-325px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path
																				d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z"
																				fill="black" />
																			<path opacity="0.3"
																				d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z"
																				fill="black" />
																			<path opacity="0.3" d="M15 17H9V20H15V17Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp
																	by Keenthemes</a>
																<span class="fs-7 text-muted fw-bold">#45789</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
																				fill="black" />
																			<path
																				d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept
																	API Project Meeting</a>
																<span class="fs-7 text-muted fw-bold">#84050</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path
																				d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
																				fill="black" />
																			<path opacity="0.3"
																				d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI
																	Monitoring App Launch</a>
																<span class="fs-7 text-muted fw-bold">#84250</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M20 8L12.5 5L5 14V19H20V8Z"
																				fill="black" />
																			<path
																				d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
																	Reference FAQ</a>
																<span class="fs-7 text-muted fw-bold">#67945</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path
																				d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
																				fill="black" />
																			<path opacity="0.3"
																				d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro
																	App Development</a>
																<span class="fs-7 text-muted fw-bold">#84250</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path
																				d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
																				fill="black" />
																			<path opacity="0.3"
																				d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix
																	Mobile App</a>
																<span class="fs-7 text-muted fw-bold">#45690</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--SVG file not found: icons/duotune/graphs/gra002.svg-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<a href="#"
																	class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing
																	UI Design" Launch</a>
																<span class="fs-7 text-muted fw-bold">#24005</span>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->
												<!--begin::Empty-->
												<div data-kt-search-element="empty" class="text-center d-none">
													<!--begin::Icon-->
													<div class="pt-10 pb-10">
														<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
														<span class="svg-icon svg-icon-4x opacity-50">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
																	d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
																	fill="black" />
																<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z"
																	fill="black" />
																<rect x="13.6993" y="13.6656" width="4.42828"
																	height="1.73089" rx="0.865447"
																	transform="rotate(45 13.6993 13.6656)"
																	fill="black" />
																<path
																	d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
																	fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Icon-->
													<!--begin::Message-->
													<div class="pb-15 fw-bold">
														<h3 class="text-gray-600 fs-5 mb-2">No result found
														</h3>
														<div class="text-muted fs-7">Please try again with a
															different query</div>
													</div>
													<!--end::Message-->
												</div>
												<!--end::Empty-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Preferences-->
											<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text"
														class="form-control form-control-sm form-control-solid"
														placeholder="Contains the word" name="query" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type"
																value="has" checked="checked" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type"
																value="users" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type"
																value="orders" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type"
																value="projects" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="assignedto"
														class="form-control form-control-sm form-control-solid"
														placeholder="Assigned to" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="collaborators"
														class="form-control form-control-sm form-control-solid"
														placeholder="Collaborators" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment"
																value="has" checked="checked" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
																attachment</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment"
																value="any" />
															<span
																class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<select name="timezone" aria-label="Select a Timezone"
														data-control="select2" data-placeholder="date_period"
														class="form-select form-select-sm form-select-solid">
														<option value="next">Within the next</option>
														<option value="last">Within the last</option>
														<option value="between">Between</option>
														<option value="on">On</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-6">
														<input type="number" name="date_number"
															class="form-control form-control-sm form-control-solid"
															placeholder="Lenght" value="" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<select name="date_typer" aria-label="Select a Timezone"
															data-control="select2" data-placeholder="Period"
															class="form-select form-select-sm form-select-solid">
															<option value="days">Days</option>
															<option value="weeks">Weeks</option>
															<option value="months">Months</option>
															<option value="years">Years</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset"
														class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
														data-kt-search-element="advanced-options-form-cancel">Cancel</button>
													<a href="../../admin/dist/pages/search/horizontal.html"
														class="btn btn-sm fw-bolder btn-primary"
														data-kt-search-element="advanced-options-form-search">Search</a>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
											<!--begin::Preferences-->
											<form data-kt-search-element="preferences" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="pb-4 border-bottom">
													<label
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span
															class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
														<input class="form-check-input" type="checkbox" value="1"
															checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span
															class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
														<input class="form-check-input" type="checkbox" value="1"
															checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span
															class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate
															Programs</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span
															class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
														<input class="form-check-input" type="checkbox" value="1"
															checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span
															class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end pt-7">
													<button type="reset"
														class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
														data-kt-search-element="preferences-dismiss">Cancel</button>
													<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save
														Changes</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Search-->
									<!--begin::Filter-->
									<div class="flex-shrink-0 ms-2">
										<!--begin::Menu toggle-->
										<button type="button"
											class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-400"
											data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Menu toggle-->
										<!--begin::Menu-->
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
											data-kt-menu="true" id="kt_menu_6148576bb7efe">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid"
															data-kt-select2="true" data-placeholder="Select option"
															data-dropdown-parent="#kt_menu_6148576bb7efe"
															data-allow-clear="true">
															<option></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label
															class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label
															class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2"
																checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div
														class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value=""
															name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset"
														class="btn btn-sm btn-light btn-active-light-primary me-2"
														data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary"
														data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
										<!--end::Menu-->
									</div>
									<!--end::Filter-->
								</div>
								<!--end::Toolbar-->
								<!--begin::Projects-->

								<!--end::Projects-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Tab pane-->
						<!--begin::Tab pane-->
						<div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
							<!--begin::Menu-->
							<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0"
								id="kt_aside_menu" data-kt-menu="true">
								<div id="kt_aside_menu_wrapper" class="menu-fit">
									<div class="menu-item ">
										<div class="menu-content pb-2">
											<span
												class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
										</div>
									</div>
									<div class="menu-item">
										<a class="menu-link active" href="index.php">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
															fill="black" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
															fill="black" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Danh sách</span>
										</a>
									</div>
									<!-- danh sách danh mục -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
															fill="black" />
														<path
															d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý danh mục</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="index.php?url=listcate">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Danh sách danh mục</span>
												</a>
												<a class="menu-link" href="index.php?url=addcate">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Thêm mới danh mục</span>
												</a>
											</div>
										</div>

									</div>
									<!-- danh sách sản phẩm-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="black" />
														<path
															d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý sản phẩm</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

												<div class="menu-item">
													<a class="menu-link" href="{{ route('productlist') }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Danh sách sản phẩm</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="index.php?url=addproducts">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Thêm mới sản phẩm</span>
													</a>
												</div>
											</div>


										</div>
									</div>
									<!-- danh sách đơn hàng -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path
															d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
															fill="black" />
														<path opacity="0.3"
															d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
															fill="black" />
														<path opacity="0.3"
															d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý đơn hàng</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">

											<div class="menu-item">
												<a class="menu-link" href="index.php?url=listbill">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Danh sách đơn hàng</span>
												</a>
											</div>

										</div>
									</div>
									<!-- danh sách bình luận -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
															fill="black" />
														<path
															d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý bình luận</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">

											<div class="menu-item">
												<a class="menu-link" href="index.php?url=listcomment">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Danh sách bình luận</span>
												</a>
											</div>
										</div>
									</div>
									<!-- danh sách bài viết-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="black" />
														<path
															d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý bài viết</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

												<div class="menu-item">
													<a class="menu-link" href="index.php?url=listnews">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Danh sách bài viết</span>
													</a>
												</div>
											</div>


										</div>
									</div>
									<!-- danh sách khách hàng-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="black" />
														<path
															d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý người dùng</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

												<div class="menu-item">
													<a class="menu-link" href="index.php?url=listusers">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Danh sách người dùng</span>
													</a>
												</div>
											</div>


										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="black" />
														<path
															d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý quản trị viên</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

												<div class="menu-item">
													<a class="menu-link" href="index.php?url=admin">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Danh sách quản trị viên</span>
													</a>
												</div>
											</div>


										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="black" />
														<path
															d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Quản lý liên hệ</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

												<div class="menu-item">
													<a class="menu-link" href="index.php?url=contact">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Danh sách liên hệ</span>
													</a>
												</div>
											</div>


										</div>
									</div>
									<div class="menu-item">
										<div class="menu-content">
											<div class="separator mx-1 my-4"></div>
										</div>
									</div>

								</div>
							</div>
							<!--end::Menu-->
						</div>



					</div>
					<!--end::Tab content-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Footer-->
				<div class="flex-column-auto pt-10 px-5" id="kt_aside_secondary_footer">
					<a href="#"
						class="btn btn-bg-light btn-color-gray-600 btn-flex btn-active-color-primary flex-center w-100"
						data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover"
						data-bs-offset="0,5" data-bs-dismiss-="click"
						title="200+ in-house components and 3rd-party plugins">
						<span class="btn-label">Docs &amp; Components</span>
						<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
						<span class="svg-icon btn-icon svg-icon-4 ms-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<path opacity="0.3"
									d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
									fill="black" />
								<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Workspace-->
	</div>
	<!--end::Secondary-->
	<!--begin::Aside Toggle-->
	<button
		class="btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex"
		data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
		data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
		<!--begin::Svg Icon | path: icons/duotune/ arrows/arr063.svg-->
		<span class="svg-icon svg-icon-2  rotate-180">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
				<path
					d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
					fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</button>
	<!--end::Aside Toggle-->
</div>
<!--end::Aside-->