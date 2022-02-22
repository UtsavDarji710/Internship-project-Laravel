
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="SmartTemplates" />
<meta name="description" content="medikit admin dashboard" />
<meta name="keywords" content="medical dashboard, HTML UI KIT, medikit" />
<title>Connect2Clinic</title>
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/jquery.scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashboard.min.css') }}"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

</head>

<style>
    <PHP> include('resources/css/dashboard.min.css'); <PHP>
</style>

<body>
<div class="dashboard-wrap">

	<header class="sidebar-header">
		<h1 class="sidebar-header__logo">Connect<span>2<strong>Clinic</strong></span></h1>
	</header>

	<!-- Left Sidebar -->
	<div class="section section--sidebar" id="sidebar">

			<nav class="sidebar-menu">
				<ul>
					<li class="dashboard"><a href="/"><b>Dashboard</b></a></li>
					 {{-- <li class="components has-submenu"><a href="#"><b>Components<span class="submenu-arrow"></span></b></a>
						<ul class="sidebar-menu__submenu">
						    <li><a href="dashboard__grid.html">Grid</a></li>
							<li><a href="dashboard__charts.html">Charts</a></li>
							<li><a href="dashboard__forms.html">Forms</a></li>
							<li><a href="dashboard__tabs.html">Tabs</a></li>
							<li><a href="dashboard__toggles.html">Toggles</a></li>
							<li><a href="dashboard__tables.html">Tables</a></li>
				        	<li><a href="dashboard__typography.html">Typography</a></li>
						</ul>
				    </li> --}}
					<li class="appointment"><a href="/dashboard__appointments"><b>Appointments</b></a></li>
					{{-- <li class="doctors has-submenu"><a href="#"><b>Doctors<span class="submenu-arrow"></span></b></a>
						<ul class="sidebar-menu__submenu">
							<li><a href="/dashboard__doctors-add">Add new doctor</a></li>
							<li><a href="/dashboard__doctors">View all doctors</a></li>
						</ul>
					</li> --}}
					<li class="patients has-submenu"><a href="#"><b>Patients<span class="submenu-arrow"></span></b></a>
						<ul class="sidebar-menu__submenu">
							{{-- <li><a href="dashboard__patients-add.html">Add new patient</a></li> --}}
							<li><a href="/dashboard__patients">View all patients</a></li>
							{{-- <li><a href="dashboard__patient.html">Patient profile</a></li> --}}
						</ul>
					</li>
					{{-- <li class="inbox"><a href="dashboard__messages.html"><b>Messages<span class="submenu-bubble">3</span></b></a></li> --}}
					{{-- <li class="settings"><a href="#"><b>Settings</b></a></li> --}}
				</ul>
			</nav>

	</div>

	<!-- Content -->
	<div class="section section--content" id="content">
		<header class="content-header">

			<div class="sidebar-resize"></div>
			<div class="mobile-menu"><div class="st-burger-icon st-burger-icon--medium"><span></span></div></div>

			<div class="content-header__user content-header__dropdown">
			    <div class="content-header__user-avatar content-header__dropdown-activate" data-dropdown="userdropdown">
					<div class="content-header__user-thumb"><img src="images/avatar-2.jpg" alt="" title=""/></div>
					<span class="content-header__user-name">Nathalie Roberts</span>
			    </div>
				<nav class="dropdown-menu dropdown-menu--header dropdown-menu--user-menu " id="userdropdown">
				<h3 class="dropdown-menu__subtitle">User menu</h3>
				<ul>
				    <li><a href="#">My profile</a></li>
				    <li><a href="#">Activity</a></li>
				    <li><a href="#">Switch account</a></li>
				    <li><a href="#">Support</a></li>
				    <li class="logout"><a href="#" class="button button--general button--red-border">Logout</a></li>
				</ul>
				</nav>
			</div>

			<div class="content-header__notifications content-header__dropdown">
			    <div class="content-header__notifications-icon content-header__icon content-header__dropdown-activate" data-dropdown="notificationsdropdown">
					<img src="images/icons/icons-24-gray/notifications.png" alt="" title=""/>
					<span class="content-header__icon-bubble">6</span>
				</div>
				<nav class="dropdown-menu dropdown-menu--header dropdown-menu--notifications-menu" id="notificationsdropdown">
				<h3 class="dropdown-menu__subtitle">You have <strong>6</strong> notifications</h3>
				<ul>
					<li class="d-flex justify-sb"><span class="important">IMPORTANT</span>Michael D. kidney surgery <b class="task-time">today</b></li>
					<li class="d-flex justify-sb"><span class="important">IMPORTANT</span>FLU Alert report generated <b class="task-time">today</b></li>

					<li class="d-flex justify-sb"><span>Meeting with <strong>Dr. Joshua</strong> </span> <b class="task-time">tomorrow</b></li>
					<li class="d-flex justify-sb"><span>Remember to create prescriptions for <strong>Alexander P.</strong></span> <b class="task-time">tomorrow</b></li>
					<li class="d-flex justify-sb"><span><strong>Jada Sacks</strong> canceled the appointment at Cardiology, Dr. Michael V. </span> <b class="task-time">24 jan, 19</b></li>
					<li class="d-flex justify-sb"><span>Sarah D. registered as new patient of <strong>Dr. George</strong> at Dermatology </span> <b class="task-time">28 jan, 19</b></li>
					<li class="view-all"><a href="#" class="button button--general button--blue-border">View all</a></li>
				</ul>
				</nav>
			</div>

			{{-- <div class="content-header__quicklinks content-header__dropdown">
			        <div class="content-header__quicklinks-icon content-header__icon content-header__dropdown-activate" data-dropdown="quicklinksdropdown">
					<img src="images/icons/icons-24-gray/submenu.png" alt="" title=""/>
				</div>
				<nav class="dropdown-menu dropdown-menu--header dropdown-menu--quicklinks-menu" id="quicklinksdropdown">
				<h3 class="dropdown-menu__subtitle">Quick links</h3>
				<ul>
				    <li><a href="#">Add new doctor</a></li>
					<li><a href="#">Add new patient</a></li>
					<li><a href="#">Generate reports</a></li>
				</ul>
				</nav>
			</div> --}}

			<div class="mobile-submenu"></div>

			<nav class="content-header__menu">
				<ul>
					{{-- <li class="appointment selected modal-toggle" data-openpopup="appointment"><a href="#">Make an appointment</a></li> --}}
					<li class="prescription modal-toggle" data-openpopup="prescription"><a href="#">Write a prescription</a></li>
					<li class="reports modal-toggle" data-openpopup="reports"><a href="#">Generate report</a></li>
				</ul>
			</nav>

		</header>

        <a class="weatherwidget-io" href="https://forecast7.com/en/20d5978d96/india/" data-label_1="INDIA" data-label_2="WEATHER" data-theme="blue-mountains" >INDIA WEATHER</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>


        <div class="grid__row grid__row--d-block">
            <div class="grid__col grid__col--margin grid__col--padding bg-white">
                <div class="grid__row justify-sb">
                    <div class="grid__col grid__col--mb-12">
                        <h3 class="grid__col-title">Upcoming Appointments</h3>
                        <span class="grid__col-subtitle">01 FEBRUARY - 31 MARCH 2019</span>
                    </div>
                    <div class="grid__col grid__col--mb-12 d-flex justify-fe aligns-fs">
                        <span class="show-more show-more--select show-more--select-gray has-dropdown" data-dropdown="upappointdropdown">Select Period</span>
                    </div>
                </div>

                <nav class="dropdown-menu dropdown-menu--content" id="upappointdropdown">
                    <ul>
                        <li><a href="#">Last 7 days</a></li>
                        <li><a href="#">Last 2 weeks</a></li>
                        <li><a href="#">Last month</a></li>
                        <li><a href="#">+ Custom</a></li>
                    </ul>
                </nav>
                  <div class="appointments">
                      <div class="appointments__button--next swiper-button-next"></div>
                    <div class="appointments__button--prev swiper-button-prev"></div>

                    <div class="appointments__content swiper-wrapper">
                          <div class="appointments__slide swiper-slide selected selected--blue">
                               <div class="appointment__time" id="time-user1"></div>
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-1.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Patrick Alexander</div>
                                    <div class="appointment__user-email"><a href="mailto:email@website.com">email@website.com</a></div>

                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Dermatology, Dr. Joshua A.</div>
                                <div class="appointment__info-content icon-location">54 Medical Center, Room 34</div>
                                <div class="appointment__info-content icon-calendar">Tuesday, February 09, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>10:00 - 10:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                                <div class="appointment__time" id="time-user2"></div>
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-2.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Jada Sacks</div>
                                    <div class="appointment__user-phone"><a href="tel:889400322">+889 400322</a></div>
                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Cardiology, Dr. Michael V.</div>
                                <div class="appointment__info-content icon-location">T600 Medical Center, Room 2</div>
                                <div class="appointment__info-content icon-calendar">Wednesday, February 18, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>08:00 - 09:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-3.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Jenifer Vandebild</div>
                                    <div class="appointment__user-email"><a href="mailto:email@website.com">jenifer@vanderbild.com</a></div>

                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Gastroenterology, Dr. Joshua A.</div>
                                <div class="appointment__info-content icon-location">54 Medical Center, Room 34</div>
                                <div class="appointment__info-content icon-calendar">Friday, February 09, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>10:00 - 10:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-4.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Michael Smith</div>

                                    <div class="appointment__user-phone"><a href="tel:889400322">+781 554689</a></div>
                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Endocrinology, Dr. Joshua A.</div>
                                <div class="appointment__info-content icon-location">83 Medical Center, Room 01</div>
                                <div class="appointment__info-content icon-calendar">Wednesday, February 28, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>09:30 - 10:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-5.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Sarah Smithson</div>
                                    <div class="appointment__user-email"><a href="mailto:email@website.com">sarah@smitson.com</a></div>

                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Orthodontics, Dr. Victoria B.</div>
                                <div class="appointment__info-content icon-location">54 Medical Center, Room 34</div>
                                <div class="appointment__info-content icon-calendar">Monday, February 28, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>10:00 - 10:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-6.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Alicia Kimston</div>
                                    <div class="appointment__user-phone"><a href="tel:889400322">+333 400322</a></div>
                                </div>
                            </div>
                            <div class="appointment__content">
                                    <div class="appointment__info-content icon-doctor">Neonatology, Dr. Alexa A.</div>
                                <div class="appointment__info-content icon-location">54 Medical Center, Room 34</div>
                                <div class="appointment__info-content icon-calendar">Tuesday, March 01, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>10:00 - 10:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                          <div class="appointments__slide swiper-slide">
                            <div class="appointment__header">
                                <div class="appointment__thumb"><img src="images/avatar-7.jpg" alt="" title=""/></div>
                                <div class="appointment__header-details">
                                    <div class="appointment__username">Duran Jackson</div>
                                    <div class="appointment__user-email"><a href="mailto:email@website.com">duran@jackson.com</a></div>
                                </div>
                            </div>
                            <div class="appointment__content">
                                <div class="appointment__info-content icon-doctor">Psychiatry, Dr. Aby D.</div>
                                <div class="appointment__info-content icon-location">Main Hospital Center, Room 12, 3'rd fl </div>
                                <div class="appointment__info-content icon-calendar">Friday, March 12, 2019</div>
                                <div class="appointment__info-content icon-clock"><strong>14:00 - 15:30</strong></div>
                            </div>
                            <div class="appointment__buttons">
                                <button class="appointment__button appointment__button--confirm">Confirm</button>
                                <button class="appointment__button appointment__button--cancel">Cancel</button>
                            </div>
                          </div>

                    </div>


                </div>
            </div>
        </div>





		<div class="grid grid--margin">

			<div class="grid__row dashboard-intro">
				<div class="grid__col grid__col--margin grid__col--padding bg-white">
					{{--<div class="grid__row">
						<div class="grid__col grid__col--margin grid__col--12">
							<div class="dashboard-intro__title">Good morning, <span>Dr Roberts</span></div>
							<div class="dashboard-intro__subtitle">Here are your important tasks, updates and alerts. You can set your in app preferences here.</div>
						</div>
						<div class="grid__col grid__col--12 d-flex justify-fe aligns-fs">
							<span class="show-more show-more--select show-more--select-gray has-dropdown" data-dropdown="moreoptions">Edit your options</span>
						</div>
						<nav class="dropdown-menu dropdown-menu--content" id="moreoptions">
							<ul>
								<li><a href="#">More Details</a></li>
								<li><a href="#">View Report</a></li>
								<li><a href="#">Edit Settings</a></li>
								<li><a href="#">+ Add widget</a></li>
							</ul>
						</nav>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-gray10 mb0">
							<div class="grid__row justify-sb">
								<div class="grid__col grid__col--mb-12">
									<h3 class="grid__col-title">Important Tasks</h3>
									<span class="grid__col-subtitle">TODAY 24, JAN 2019</span>
								</div>
								<div class="grid__col grid__col--mb-12 d-flex justify-fe">
									<span class="show-more show-more--plus bg-white color-gray600 has-dropdown" data-dropdown="tasksdropdown">+</span>
								</div>
							</div>

							<nav class="dropdown-menu dropdown-menu--content" id="tasksdropdown">
								<ul>
									<li><a href="#">More Details</a></li>
									<li><a href="#">View Activity</a></li>
									<li><a href="#">Edit Settings</a></li>
									<li><a href="#">+ Edit widget</a></li>
								</ul>
							</nav>
							<div class="d-flex align-c">
								<div class="info-nr info-nr--strong gradient-blue gradient-text">23</div>
								<div class="info-details">
								<p>3 URGENT</p>
								<p>16 LESS URGENT</p>
								<p>4 REQUIRED</p>
								</div>
							</div>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-gray10 mb0">
							<div class="grid__row justify-sb">
								<div class="grid__col grid__col--mb-12">
									<h3 class="grid__col-title">New Patients</h3>
									<span class="grid__col-subtitle">REGISTERED IN JANUARY</span>
								</div>
								<div class="grid__col grid__col--mb-12 d-flex justify-fe">
									<span class="show-more show-more--plus bg-white color-gray600 has-dropdown" data-dropdown="newpatientsdropdown">+</span>
								</div>
							</div>
							<nav class="dropdown-menu dropdown-menu--content" id="newpatientsdropdown">
								<ul>
									<li><a href="#">More Details</a></li>
									<li><a href="#">View Patients</a></li>
									<li><a href="#">Edit Settings</a></li>
									<li><a href="#">+ Edit widget</a></li>
								</ul>
							</nav>
							<div class="d-flex align-c">
								<div class="info-nr info-nr--strong gradient-lightblue gradient-text">15</div>
								<div class="info-details">
								<p>1 PREGNANCY</p>
								<p>10 DIABETIS</p>
								<p>14 KIDS</p>
								</div>
							</div>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-gray10 mb0">
							<div class="grid__row justify-sb">
								<div class="grid__col grid__col--mb-12">
									<h3 class="grid__col-title">Alert</h3>
									<span class="grid__col-subtitle">LAST MONTH</span>
								</div>
								<div class="grid__col grid__col--mb-12 d-flex justify-fe">
									<span class="show-more show-more--plus bg-white color-gray600 has-dropdown" data-dropdown="alertdropdown">+</span>
								</div>
							</div>
							<nav class="dropdown-menu dropdown-menu--content" id="alertdropdown">
								<ul>
									<li><a href="#">More Details</a></li>
									<li><a href="#">View Alerts</a></li>
									<li><a href="#">Edit Settings</a></li>
									<li><a href="#">+ Edit widget</a></li>
								</ul>
							</nav>
							<div class="d-flex align-c">
								<div class="info-nr info-nr--strong gradient-pink gradient-text">48</div>
								<div class="info-details">
								<p>New flue cases registered all over the states with potential longer number.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid__row">
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding gradient-blue widget-icon selected">
						<span class="widget-icon__badge">3 NEW</span>
						<img src="images/icons/icons-64-white/chat.png" alt="" title=""/>
						<h5>Active Conversations</h5>
				</div>
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding gradient-lightblue widget-icon selected">
						<span class="widget-icon__badge">14 NEW</span>
						<img src="images/icons/icons-64-white/laboratory.png" alt="" title=""/>
						<h5>Laboratory Results</h5>
				</div>
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding gradient-pink widget-icon selected">
						<span class="widget-icon__badge">2 NEW</span>
						<img src="images/icons/icons-64-white/calendar.png" alt="" title=""/>
						<h5>New Events</h5>
				</div>
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding bg-white widget-icon">
						<img src="images/icons/icons-64-blue/users.png" alt="" title=""/>
						<h5>Important Patients</h5>
				</div>
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding bg-white widget-icon">
						<img src="images/icons/icons-64-blue/reports.png" alt="" title=""/>
						<h5>Reports Archive</h5>
				</div>
				<div class="grid__col grid__col--16 grid__col--mb-12 grid__col--margin grid__col--padding bg-white widget-icon">
						<img src="images/icons/icons-64-blue/payments.png" alt="" title=""/>
						<h5>Payments</h5>
				</div>

			</div>  --}}
			<div class="grid__row">
				<div class="grid__col grid__col--23 grid__col--margin grid__col--padding bg-white">
					<div class="grid__row justify-sb">
						<div class="grid__col grid__col--mb-12">
							<h3 class="grid__col-title">Activity</h3>
							<span class="grid__col-subtitle">LAST YEAR</span>
						</div>
						<div class="grid__col grid__col--mb-12 d-flex justify-fe">
							<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="activitydropdown"></span>
						</div>
					</div>
					<nav class="dropdown-menu dropdown-menu--content" id="activitydropdown">
						<ul>
							<li><a href="#">More Details</a></li>
							<li><a href="#">View Activity</a></li>
							<li><a href="#">Edit Settings</a></li>
							<li><a href="#">+ Add widget</a></li>
						</ul>
					</nav>
					<canvas id="ActivityChart" width="100%" height="40"></canvas>
				</div>
				{{--  <div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-white">
					<div class="grid__row justify-sb">
						<div class="grid__col grid__col--mb-12">
							<h3 class="grid__col-title">Recent Patients</h3>
							<span class="grid__col-subtitle">LAST WEEK</span>
						</div>
						<div class="grid__col grid__col--mb-12 d-flex justify-fe">
							<span class="show-more show-more--plus bg-gray10 color-gray600 has-dropdown" data-dropdown="newddropdown">+</span>
						</div>
					</div>
					<nav class="dropdown-menu dropdown-menu--content" id="newddropdown">
						<ul>
							<li><a href="#">Details</a></li>
							<li><a href="#">Share</a></li>
							<li><a href="#">Settings</a></li>
						</ul>
					</nav>  --}}
					{{--  <div class="table table--no-header table--new-doctors">
						<div class="table__body">
							<div class="table__row selected">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-3.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Olivia Wilson</div>
								<div class="table__cell color-blue">Cardiology	</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd1"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd1">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="table__row">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-1.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Oliver Barnes</div>
								<div class="table__cell color-blue">Pathology 	</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd2"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd2">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>

							<div class="table__row">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-2.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Maya Cooper</div>
								<div class="table__cell color-blue">Gastroenterology</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd3"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd3">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="table__row">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-4.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Adam King</div>
								<div class="table__cell color-blue">Endocrinology	</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd4"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd4">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>

							<div class="table__row">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-5.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Julia Henderson</div>
								<div class="table__cell color-blue">Orthodontics</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd5"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd5">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="table__row">
								<div class="table__cell"><div class="avatar-thumb avatar-thumb--table"><img src="images/avatar-6.jpg" alt="" title=""/></div></div>
								<div class="table__cell">Sienna Butler</div>
								<div class="table__cell color-blue">Paediatrics</div>
								<div class="table__cell">
									<span class="show-more show-more--ellipsis has-dropdown" data-dropdown="dropd6"></span>
									<nav class="dropdown-menu dropdown-menu--content dropdown-menu--table" id="dropd6">
										<ul>
											<li><a href="#">View Profile</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>  --}}

						</div>

					</div>
					<!-- TABLE end -->
				</div>

			</div>






			<div class="grid__row">
				<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-white mb0">
					<div class="grid__row justify-sb">
						<div class="grid__col grid__col--mb-12">
							<h3 class="grid__col-title">Calendar</h3>
							<span class="grid__col-subtitle">EVENTS BY MONTH</span>
						</div>
						<div class="grid__col grid__col--mb-12 d-flex justify-fe">
							<span class="show-more show-more--plus bg-gray10 color-gray600 has-dropdown" data-dropdown="calendardropdown">+</span>
						</div>
					</div>
					<nav class="dropdown-menu dropdown-menu--content" id="calendardropdown">
						<ul>
							<li><a href="#">More Details</a></li>
							<li><a href="#">View Report</a></li>
							<li><a href="#">Edit Settings</a></li>
							<li><a href="#">+ Add widget</a></li>
						</ul>
					</nav>
					<div id="taskscalendar"></div>
				</div>

				<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-white mb0">
					<div class="grid__row justify-sb">
						<div class="grid__col grid__col--mb-12">
							<h3 class="grid__col-title">Diseases Report</h3>
							<span class="grid__col-subtitle">MOST IMPORTANT</span>
						</div>
						<div class="grid__col grid__col--mb-12 d-flex justify-fe">
							<span class="show-more show-more--ellipsis show-more--ellipsis-vertical has-dropdown" data-dropdown="diseasesdropdown"></span>
						</div>
					</div>
					<nav class="dropdown-menu dropdown-menu--content" id="diseasesdropdown">
						<ul>
							<li><a href="#">More Details</a></li>
							<li><a href="#">View Diseases</a></li>
							<li><a href="#">Edit Settings</a></li>
							<li><a href="#">+ Add widget</a></li>
						</ul>
					</nav>
					<canvas id="DiseasesChart" width="100%" height="80"></canvas>
				</div>
				<div class="grid__col grid__col--13 grid__col--margin grid__col--padding bg-white mb0">
					<div class="grid__row justify-sb">
						<div class="grid__col grid__col--mb-12">
							<h3 class="grid__col-title">Latest Reports</h3>
							<span class="grid__col-subtitle">LAST 7 DAYS</span>
						</div>
						<div class="grid__col grid__col--mb-12 d-flex justify-fe">
							<span class="show-more show-more--arrow color-gray600 has-dropdown" data-dropdown="reportsdropdown"></span>
						</div>
					</div>
					<nav class="dropdown-menu dropdown-menu--content" id="reportsdropdown">
						<ul>
							<li><a href="#">More Details</a></li>
							<li><a href="#">View Report</a></li>
							<li><a href="#">Edit Settings</a></li>
							<li><a href="#">+ Add widget</a></li>
						</ul>
					</nav>
					<canvas id="ReportsChart" width="100%" height="40"></canvas>
					<div class="table table--no-header table--latest-reports">
						<div class="table__body">
							<div class="table__row">
								<div class="table__cell">Infectious disease.pdf</div>
								<div class="table__cell"><a href="#" class="button button--small-table button--lightblue-bg">View</a></div>
								<div class="table__cell"><a href="#" class="button button--small-table button--blue-bg">Download</a></div>
							</div>
							<div class="table__row">
								<div class="table__cell">Paediatric.doc</div>
								<div class="table__cell"><a href="#" class="button button--small-table button--lightblue-bg">View</a></div>
								<div class="table__cell"><a href="#" class="button button--small-table button--blue-bg">Download</a></div>
							</div>
							<div class="table__row">
								<div class="table__cell">Hepatology.pdf</div>
								<div class="table__cell"><a href="#" class="button button--small-table button--lightblue-bg">View</a></div>
								<div class="table__cell"><a href="#" class="button button--small-table button--blue-bg">Download</a></div>
							</div>
							<div class="table__row">
								<div class="table__cell">General Surgery.doc</div>
								<div class="table__cell"><a href="#" class="button button--small-table button--lightblue-bg">View</a></div>
								<div class="table__cell"><a href="#" class="button button--small-table button--blue-bg">Download</a></div>
							</div>
						</div>

					</div>
					<!-- TABLE end -->

				</div>

			</div>



		</div>



	</div>


</div>  <!-- Wrap End -->

<div class="section section-panel" id="panel">
	<div class="panel-resize"></div>
	<div class="section-panel__content scrollbar-macosx">


		<div class="grid">

		        <div class="grid__row">
				<div class="grid__col grid__col--padding">
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Settings Panel</h3>
						</div>
					</div>
					<div class="grid__row align-c">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label pb0">ENABLED OPTION</label>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<div class="form__switcher">
								<label class="switch">
								<input class="switch__input" type="checkbox" data-role="none" checked />
								<span class="switch__label" data-on="On" data-off="Off"></span> <span class="switch__handle"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="grid__row align-c">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label pb0">DISABLED OPTION</label>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<div class="form__switcher">
								<label class="switch">
								<input class="switch__input" type="checkbox" data-role="none"/>
								<span class="switch__label" data-on="On" data-off="Off"></span> <span class="switch__handle"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="grid__row align-c">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label pb0">ENABLED OPTION</label>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<div class="form__switcher">
								<label class="switch">
								<input class="switch__input" type="checkbox" data-role="none" checked />
								<span class="switch__label" data-on="On" data-off="Off"></span> <span class="switch__handle"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="grid__row align-c">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label pb0">DISABLED OPTION</label>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<div class="form__switcher">
								<label class="switch">
								<input class="switch__input" type="checkbox" data-role="none"/>
								<span class="switch__label" data-on="On" data-off="Off"></span> <span class="switch__handle"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Custom radios</h3>
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<label class="form__label">CUSTOM RADIO SETTINGS</label>
							<div class="form__radio">
								<input type="radio" name="cr" id="cr1" value="1" checked /><label for="cr1">Radio option</label>
							</div>
							<div class="form__radio">
								<input type="radio" name="cr" id="cr2" value="2" /><label for="cr2">Radio option</label>
							</div>
							<div class="form__radio">
								<input type="radio" name="cr" id="cr3" value="3" /><label for="cr3">Radio option</label>
							</div>
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Custom checkboxes</h3>
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<label class="form__label">CUSTOM CHECKBOX SETTINGS</label>
							<div class="form__checkbox">
								<input type="checkbox" name="cc1" id="cc1" value="1" checked /><label for="cc1">Checkbox option</label>
							</div>
							<div class="form__checkbox">
								<input type="checkbox" name="cc2" id="cc2" value="2" /><label for="cc2">Checkbox option</label>
							</div>
							<div class="form__checkbox">
								<input type="checkbox" name="cc3" id="cc3" value="3" /><label for="cc3">Checkbox option</label>
							</div>
						</div>
					</div>


					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Custom Slider</h3>
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin">
							<label class="form__label">CUSTOM SINGLE SLIDER</label>
								<input type="text" class="js-slider" name="my_range" value="" />
						</div>
					</div>
					<div class="grid__row">
						<div class="grid__col grid__col--margin mb0">
							<label class="form__label">CUSTOM RANGE SLIDER</label>
								<input type="text" class="js-range-slider" name="my_range" value="" />
						</div>
					</div>
				</div>

			</div>
		</div> <!-- End of Grid -->
	</div>
</div>  <!-- End of right panel -->


 <!-- Modal - Appointment -->
<div class="modal modal--appointment">

		<div class="modal__overlay modal__overlay--toggle"></div>
		<div class="modal__wrapper modal-transition">

		<div class="modal__body">
			<div class="modal__header">
				<h2 class="modal__header-title">Make an appointment</h2>
				<div class="modal__close modal__overlay--toggle"><span></span></div>
			</div>
			<div class="modal__content">

				<div class="grid">
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Patient Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
							<label class="form__label">PATIENT NAME</label>
							<select class="custom-select" name="appname">
								<option value="Patient Name">Emma Williams</option>
								<option value="Patient Name">Olivia Johnson</option>
								<option value="Patient Name">Ava Jones</option>
								<option value="Patient Name">Isabella Brown</option>
								<option value="Patient Name">Sophia Davis</option>
								<option value="Patient Name">Mia Latin</option>
								<option value="Patient Name">Amelia Miller</option>
								<option value="Patient Name">Charlotte Wilson</option>
								<option value="Patient Name">Abigail Moore</option>
								<option value="Patient Name">Emily Anderson</option>
								<option value="Patient Name">Harper Thomas</option>
								<option value="Patient Name">Evelyn Jackson</option>
								<option value="Patient Name">Madison Taylor</option>
								<option value="Patient Name">Victoria White</option>
								<option value="Patient Name">Sofia Harris</option>
								<option value="Patient Name">Scarlett Martin</option>
								<option value="Patient Name">Aria Thompson</option>
								<option value="Patient Name">Elizabeth Robinson</option>
								<option value="Patient Name">Camila Lewis</option>
								<option value="Patient Name">Layla Garcia</option>
								<option value="Patient Name">Ella Walker</option>
								<option value="Patient Name">Chloe Clark</option>
								<option value="Patient Name">Zoey Rodriguez</option>
								<option value="Patient Name">Penelope Martinez</option>
								<option value="Patient Name">Matthew Jones</option>
								<option value="Patient Name">Benjamin Brown</option>
								<option value="Patient Name">Alexander Davies</option>
								<option value="Patient Name">William Evans</option>
								<option value="Patient Name">Daniel Smith</option>
								<option value="Patient Name">Jayden Taylor</option>
								<option value="Patient Name">Oliver Thomas</option>
								<option value="Patient Name">Carter Roberts</option>
								<option value="Patient Name">Sebastian Walker</option>
								<option value="Patient Name">Joseph Johnson</option>
								<option value="Patient Name">David Thompson</option>
								<option value="Patient Name">Gabriel Wood</option>
								<option value="Patient Name">Julian Robinson</option>
								<option value="Patient Name">Jackson Wright</option>
								<option value="Patient Name">Anthony King</option>
								<option value="Patient Name">Dylan Cooper</option>
							</select>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">DATE OR BIRTH</label>
									<input type="text" name="birthday" class="form__input" value="02/03/1983" />
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">PHONE</label>
									<input type="text" name="appphone" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row  grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Appointment Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label">LOCATION</label>
							<select class="custom-select" name="applocation">
								<option value="Los Angeles">H Clinic, Houston Street</option>
								<option value="Washington">Hostpital Washington</option>
								<option value="New York">Clinic 54 New York</option>
								<option value="Chicago">43V Room Chicago</option>
							</select>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
									<label class="form__label">DATE &amp; TIME</label>
									<input type="text" name="timepicker" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Examination Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
							<label class="form__label">EXAMINATION TYPE</label>
							<select class="custom-select" name="apptype">
								<option value="Examination">Abdominal radiology</option>
								<option value="Examination">Breast imaging</option>
								<option value="Examination">Cardiothoracic radiology</option>
								<option value="Examination">Cardiovascular radiology</option>
								<option value="Examination">Chest radiology</option>
								<option value="Examination">Emergency radiology</option>
								<option value="Examination">Endovascular surgical neuroradiology</option>
								<option value="Examination">Gastrointestinal radiology</option>
								<option value="Examination">Genitourinary radiology</option>
								<option value="Examination">Head and neck radiology</option>
								<option value="Examination">Interventional radiology</option>
								<option value="Examination">Musculoskeletal radiology</option>
								<option value="Examination">Neuroradiology</option>
								<option value="Examination">Nuclear radiology</option>
								<option value="Examination">Pediatric radiology</option>
								<option value="Examination">Radiation oncology</option>
								<option value="Examination">Vascular and interventional radiology</option>
							</select>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">DOCTOR</label>
									<select class="custom-select" name="apptype">
										<option value="Patient Name">Dr. Alexander Davies</option>
										<option value="Patient Name">Dr. William Evans</option>
										<option value="Patient Name">Dr. Daniel Smith</option>
										<option value="Patient Name">Dr. Jayden Taylor</option>
										<option value="Patient Name">Dr. Oliver Thomas</option>
										<option value="Patient Name">Dr. Carter Roberts</option>
										<option value="Patient Name">Dr. Sebastian Walker</option>
										<option value="Patient Name">Dr. Joseph Johnson</option>
										<option value="Patient Name">Dr. David Thompson</option>
										<option value="Patient Name">Dr. Gabriel Wood</option>
										<option value="Patient Name">Dr. Julian Robinson</option>
									</select>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">NOTES</label>
									<input name="notes" id="notes" class="form__input" type="text" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<input type="submit" name="submit" class="button button--submit button--blue-bg" id="submit" value="ADD APPOINTMENT" />
						</div>
					</div>
				</div> <!-- End of Grid -->

			</div>


		</div>

		</div>
 </div>

  <!-- Modal - prescription -->
<div class="modal modal--prescription">

		<div class="modal__overlay modal__overlay--toggle"></div>
		<div class="modal__wrapper modal-transition">

		<div class="modal__body">
			<div class="modal__header">
				<h2 class="modal__header-title">Make a prescription</h2>
				<div class="modal__close modal__overlay--toggle"><span></span></div>
			</div>
			<div class="modal__content">

				<div class="grid">
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Patient Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
							<label class="form__label">PATIENT NAME</label>
							<select class="custom-select" name="appname">
								<option value="Patient Name">Emma Williams</option>
								<option value="Patient Name">Olivia Johnson</option>
								<option value="Patient Name">Ava Jones</option>
								<option value="Patient Name">Isabella Brown</option>
								<option value="Patient Name">Sophia Davis</option>
								<option value="Patient Name">Mia Latin</option>
								<option value="Patient Name">Amelia Miller</option>
								<option value="Patient Name">Charlotte Wilson</option>
								<option value="Patient Name">Abigail Moore</option>
								<option value="Patient Name">Emily Anderson</option>
								<option value="Patient Name">Harper Thomas</option>
								<option value="Patient Name">Evelyn Jackson</option>
								<option value="Patient Name">Madison Taylor</option>
								<option value="Patient Name">Victoria White</option>
								<option value="Patient Name">Sofia Harris</option>
								<option value="Patient Name">Scarlett Martin</option>
								<option value="Patient Name">Aria Thompson</option>
								<option value="Patient Name">Elizabeth Robinson</option>
								<option value="Patient Name">Camila Lewis</option>
								<option value="Patient Name">Layla Garcia</option>
								<option value="Patient Name">Ella Walker</option>
								<option value="Patient Name">Chloe Clark</option>
								<option value="Patient Name">Zoey Rodriguez</option>
								<option value="Patient Name">Penelope Martinez</option>
								<option value="Patient Name">Matthew Jones</option>
								<option value="Patient Name">Benjamin Brown</option>
								<option value="Patient Name">Alexander Davies</option>
								<option value="Patient Name">William Evans</option>
								<option value="Patient Name">Daniel Smith</option>
								<option value="Patient Name">Jayden Taylor</option>
								<option value="Patient Name">Oliver Thomas</option>
								<option value="Patient Name">Carter Roberts</option>
								<option value="Patient Name">Sebastian Walker</option>
								<option value="Patient Name">Joseph Johnson</option>
								<option value="Patient Name">David Thompson</option>
								<option value="Patient Name">Gabriel Wood</option>
								<option value="Patient Name">Julian Robinson</option>
								<option value="Patient Name">Jackson Wright</option>
								<option value="Patient Name">Anthony King</option>
								<option value="Patient Name">Dylan Cooper</option>
							</select>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">DATE OR BIRTH</label>
									<input type="text" name="birthday" class="form__input" value="02/03/1983" />
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">PHONE</label>
									<input type="text" name="appphone" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row  grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Prescription Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label">MEDICATION</label>
							<select class="custom-select" name="applocation">
									<option value="Acetaminophen">Acetaminophen</option>
									<option value="Adderall">Adderall</option>
									<option value="Alprazolam">Alprazolam</option>
									<option value="Amitriptyline">Amitriptyline</option>
									<option value="Amlodipine">Amlodipine</option>
									<option value="Amoxicillin">Amoxicillin</option>
									<option value="Ativan">Ativan</option>
									<option value="Atorvastatin">Atorvastatin</option>
									<option value="Azithromycin">Azithromycin</option>
									<option value="Ciprofloxacin">Ciprofloxacin</option>
									<option value="Citalopram">Citalopram</option>
									<option value="Clindamycin">Clindamycin</option>
									<option value="Clonazepam">Clonazepam</option>
									<option value="Codeine">Codeine</option>
									<option value="Cyclobenzaprine">Cyclobenzaprine</option>
									<option value="Cymbalta">Cymbalta</option>
									<option value="Doxycycline">Doxycycline</option>
									<option value="Gabapentin">Gabapentin</option>
									<option value="Hydrochlorothiazide">Hydrochlorothiazide</option>
									<option value="Ibuprofen">Ibuprofen</option>
							</select>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
									<label class="form__label">PERIOD FOR MEDICATION</label>
									<input type="text" name="dates" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Doctor Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">DOCTOR</label>
									<select class="custom-select" name="apptype">
										<option value="Patient Name">Dr. Alexander Davies</option>
										<option value="Patient Name">Dr. William Evans</option>
										<option value="Patient Name">Dr. Daniel Smith</option>
										<option value="Patient Name">Dr. Jayden Taylor</option>
										<option value="Patient Name">Dr. Oliver Thomas</option>
										<option value="Patient Name">Dr. Carter Roberts</option>
										<option value="Patient Name">Dr. Sebastian Walker</option>
										<option value="Patient Name">Dr. Joseph Johnson</option>
										<option value="Patient Name">Dr. David Thompson</option>
										<option value="Patient Name">Dr. Gabriel Wood</option>
										<option value="Patient Name">Dr. Julian Robinson</option>
									</select>
						</div>
						<div class="grid__col grid__col--23 grid__col--margin">
									<label class="form__label">NOTES</label>
									<input name="notes" id="notes" class="form__input" type="text" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<input type="submit" name="submit" class="button button--submit button--inline button--blue-bg" id="submit" value="SAVE PRESCRIPTION" />
							<input type="submit" name="submit" class="button button--submit button--inline button--blue-bg" id="submit" value="SAVE &amp; PRINT" />
						</div>
					</div>
				</div> <!-- End of Grid -->

			</div>


		</div>

		</div>
 </div>


   <!-- Modal - reports -->
<div class="modal modal--reports">

		<div class="modal__overlay modal__overlay--toggle"></div>
		<div class="modal__wrapper modal-transition">

		<div class="modal__body">
			<div class="modal__header">
				<h2 class="modal__header-title">Generate report</h2>
				<div class="modal__close modal__overlay--toggle"><span></span></div>
			</div>
			<div class="modal__content">

				<div class="grid">
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Patient Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
							<label class="form__label">PATIENT NAME</label>
							<select class="custom-select" name="appname">
								<option value="Patient Name">Emma Williams</option>
								<option value="Patient Name">Olivia Johnson</option>
								<option value="Patient Name">Ava Jones</option>
								<option value="Patient Name">Isabella Brown</option>
								<option value="Patient Name">Sophia Davis</option>
								<option value="Patient Name">Mia Latin</option>
								<option value="Patient Name">Amelia Miller</option>
								<option value="Patient Name">Charlotte Wilson</option>
								<option value="Patient Name">Abigail Moore</option>
								<option value="Patient Name">Emily Anderson</option>
								<option value="Patient Name">Harper Thomas</option>
								<option value="Patient Name">Evelyn Jackson</option>
								<option value="Patient Name">Madison Taylor</option>
								<option value="Patient Name">Victoria White</option>
								<option value="Patient Name">Sofia Harris</option>
								<option value="Patient Name">Scarlett Martin</option>
								<option value="Patient Name">Aria Thompson</option>
								<option value="Patient Name">Elizabeth Robinson</option>
								<option value="Patient Name">Camila Lewis</option>
								<option value="Patient Name">Layla Garcia</option>
								<option value="Patient Name">Ella Walker</option>
								<option value="Patient Name">Chloe Clark</option>
								<option value="Patient Name">Zoey Rodriguez</option>
								<option value="Patient Name">Penelope Martinez</option>
								<option value="Patient Name">Matthew Jones</option>
								<option value="Patient Name">Benjamin Brown</option>
								<option value="Patient Name">Alexander Davies</option>
								<option value="Patient Name">William Evans</option>
								<option value="Patient Name">Daniel Smith</option>
								<option value="Patient Name">Jayden Taylor</option>
								<option value="Patient Name">Oliver Thomas</option>
								<option value="Patient Name">Carter Roberts</option>
								<option value="Patient Name">Sebastian Walker</option>
								<option value="Patient Name">Joseph Johnson</option>
								<option value="Patient Name">David Thompson</option>
								<option value="Patient Name">Gabriel Wood</option>
								<option value="Patient Name">Julian Robinson</option>
								<option value="Patient Name">Jackson Wright</option>
								<option value="Patient Name">Anthony King</option>
								<option value="Patient Name">Dylan Cooper</option>
							</select>
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">DATE OR BIRTH</label>
									<input type="text" name="birthday" class="form__input" value="02/03/1983" />
						</div>
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">PHONE</label>
									<input type="text" name="appphone" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row  grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Report Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--mb-12 grid__col--margin">
							<label class="form__label">REPORT TYPE</label>
							<select class="custom-select" name="applocation">
									<option value="Diseases">Diseases report</option>
									<option value="Activity">Activity report</option>
							</select>
						</div>
						<div class="grid__col grid__col--mb-12 grid__col--margin">
									<label class="form__label">REPORT PERIOD</label>
									<input type="text" name="dates" class="form__input" value="" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<h3 class="grid__col-title">Doctor Information</h3>
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--13 grid__col--margin">
									<label class="form__label">Generated by Doctor</label>
									<select class="custom-select" name="apptype">
										<option value="Patient Name">Dr. Alexander Davies</option>
										<option value="Patient Name">Dr. William Evans</option>
										<option value="Patient Name">Dr. Daniel Smith</option>
										<option value="Patient Name">Dr. Jayden Taylor</option>
										<option value="Patient Name">Dr. Oliver Thomas</option>
										<option value="Patient Name">Dr. Carter Roberts</option>
										<option value="Patient Name">Dr. Sebastian Walker</option>
										<option value="Patient Name">Dr. Joseph Johnson</option>
										<option value="Patient Name">Dr. David Thompson</option>
										<option value="Patient Name">Dr. Gabriel Wood</option>
										<option value="Patient Name">Dr. Julian Robinson</option>
									</select>
						</div>
						<div class="grid__col grid__col--23 grid__col--margin">
									<label class="form__label">NOTES</label>
									<input name="notes" id="notes" class="form__input" type="text" />
						</div>
					</div>
					<div class="grid__row grid__row--margin">
						<div class="grid__col grid__col--margin">
							<input type="submit" name="submit" class="button button--submit button--blue-bg" id="submit" value="GENERATE REPORT" />
						</div>
					</div>
				</div> <!-- End of Grid -->

			</div>


		</div>

		</div>
 </div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/chartjs-plugin-style.min.js"></script>
<script src="js/charts-custom-dashboard.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/calendar.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.scrollbar.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/daterangepicker.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/jquery.dashboard-custom.js"></script>
</body>

<!-- Mirrored from smarttemplates.net/medikit/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 00:52:24 GMT -->
</html>
