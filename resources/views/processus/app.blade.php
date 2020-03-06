<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>PROCESSUS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro"/>

    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">

    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Open Graph data -->
	<meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg"/>
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />



	<!--  Material Dashboard CSS    -->
	<link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="../assets/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


</head>


<body >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">

       @include("processus.navabar")
       

       
	    <div class="main-panel">

			<nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
            <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.html#"> Tableau de bords </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="dashboard.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="dashboard.html#">Mike John responded to your email</a></li>
                        <li><a href="dashboard.html#">You have 5 new tasks</a></li>
                        <li><a href="dashboard.html#">You're now friend with Andrew</a></li>
                        <li><a href="dashboard.html#">Another Notification</a></li>
                        <li><a href="dashboard.html#">Another One</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/logout')}} " class="dropdown-toggle" >
                       <i class="material-icons">person</i>
                       <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>

                <li class="separator hidden-lg hidden-md"></li>
            </ul>


            <form class="navbar-form navbar-right" role="search">
                <div class="form-group form-search is-empty">
                    <input type="text" class="form-control" placeholder=" Recherche ">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i><div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
</nav>




<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!--
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">&#xE894;</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Liste des demandes à Traiter</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-sales">
                                        <table border="1" class="table">
                                            <thead>
                                                <tr>
                                                    <td>ID demande</td>
                                                    <td>Intitulé </td>
                                                    <td>Date de Demande</td>
                                                    <td>Montant</td>
                                                    <td>Demandeur</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 199952424264
                                                    </div></td>
                                                    <td>Demande de note de frais</td>
                                                    <td class="text-right">
                                                        20/02/2020
                                                    </td>
                                                    <td class="text-right">
                                                        300.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        KONAN YAO
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 198952424264
                                                    </div></td>
                                                    <td>Demande de note d'avance sur salaire</td>
                                                    <td class="text-right">
                                                        20/02/2020
                                                    </td>
                                                    <td class="text-right">
                                                        500.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        YAPI JEAN MARC
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 199952424264
                                                    </div></td>
                                                    <td>Demande de note de frais</td>
                                                    <td class="text-right">
                                                        10/02/2020
                                                    </td>
                                                    <td class="text-right">
                                                        30.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        BAMBA MOUSSA
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 15439524240964
                                                    </div></td>
                                                    <td>Demande de note de frais</td>
                                                    <td class="text-right">
                                                        10/02/2020
                                                    </td>
                                                    <td class="text-right">
                                                        50.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        KOUADIO JEAN
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 1524724264
                                                    </div></td>
                                                    <td>Demande de note de frais</td>
                                                    <td class="text-right">
                                                        28/01/2020
                                                    </td>
                                                    <td class="text-right">
                                                        5.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        COULIBALLY MARIAM
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 199952488264
                                                    </div></td>
                                                    <td>Demande d'avance sur salaire</td>
                                                    <td class="text-right">
                                                        20/01/2020
                                                    </td>
                                                    <td class="text-right">
                                                        50.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        SON OLIVIER
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            D 199052458264
                                                    </div></td>
                                                    <td>Demande d'avance sur salaire</td>
                                                    <td class="text-right">
                                                        20/01/2020
                                                    </td>
                                                    <td class="text-right">
                                                        100.000 FCFA
                                                    </td>
                                                    <td class="text-right">
                                                        KADIO AMON FRANCK
                                                    </td>
                                                    <td><a href="#">Traiter la demande</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div id="worldMap" class="map"></div>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div>
            -->

           @yield('content')

        </div>

        
        <div class="row">
            

           
        </div>

<!--
<h3>Manage Listings</h3>
<br>
<div class="row">
	<div class="col-md-4">
		<div class="card card-product">
			<div class="card-image" data-header-animation="true">
				<a href="dashboard.html#pablo">
					<img class="img" src="../assets/img/card-2.jpeg">
				</a>
			</div>

			<div class="card-content">
				<div class="card-actions">
					<button type="button" class="btn btn-danger btn-simple fix-broken-card">
						<i class="material-icons">build</i> Fix Header!
					</button>

					<button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
						<i class="material-icons">art_track</i>
					</button>
					<button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
						<i class="material-icons">edit</i>
					</button>
					<button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
						<i class="material-icons">close</i>
					</button>
				</div>

				<h4 class="card-title">
					<a href="dashboard.html#pablo">Cozy 5 Stars Apartment</a>
				</h4>
				<div class="card-description">
					The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
				</div>
			</div>
			<div class="card-footer">
				<div class="price">
					<h4>$899/night</h4>
				</div>
				<div class="stats pull-right">
					<p class="category"><i class="material-icons">place</i> Barcelona, Spain</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-product">
			<div class="card-image" data-header-animation="true">
				<a href="dashboard.html#pablo">
					<img class="img" src="../assets/img/card-3.jpeg">
				</a>
			</div>

			<div class="card-content">
				<div class="card-actions">
					<button type="button" class="btn btn-danger btn-simple fix-broken-card">
						<i class="material-icons">build</i> Fix Header!
					</button>

					<button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
						<i class="material-icons">art_track</i>
					</button>
					<button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
						<i class="material-icons">edit</i>
					</button>
					<button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
						<i class="material-icons">close</i>
					</button>
				</div>

				<h4 class="card-title">
					<a href="dashboard.html#pablo">Office Studio</a>
				</h4>
				<div class="card-description">
					The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
				</div>
			</div>
			<div class="card-footer">
				<div class="price">
					<h4>$1.119/night</h4>
				</div>
				<div class="stats pull-right">
					<p class="category"><i class="material-icons">place</i> London, UK</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-product">
			<div class="card-image" data-header-animation="true">
				<a href="dashboard.html#pablo">
					<img class="img" src="../assets/img/card-1.jpeg">
				</a>
			</div>

			<div class="card-content">
				<div class="card-actions">
					<button type="button" class="btn btn-danger btn-simple fix-broken-card">
						<i class="material-icons">build</i> Fix Header!
					</button>

					<button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
						<i class="material-icons">art_track</i>
					</button>
					<button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
						<i class="material-icons">edit</i>
					</button>
					<button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
						<i class="material-icons">close</i>
					</button>
				</div>

				<h4 class="card-title">
					<a href="dashboard.html#pablo">Beautiful Castle</a>
				</h4>
				<div class="card-description">
					The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
				</div>
			</div>
			<div class="card-footer">
				<div class="price">
					<h4>$459/night</h4>
				</div>
				<div class="stats pull-right">
					<p class="category"><i class="material-icons">place</i> Milan, Italy</p>
				</div>
			</div>
		</div>
	</div>
</div>
-->
</div>
</div>



<!--
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="dashboard.html#">
                         Home
                    </a>
                </li>
                <li>
                    <a href="dashboard.html#">
                         Company
                    </a>
                </li>
                <li>
                    <a href="dashboard.html#">
                          Portofolio
                    </a>
                </li>
                <li>
                    <a href="dashboard.html#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com"> Creative Tim </a>,  made with love for a better web
        </p>
    </div>
</footer>
-->

		</div>
    </div>
    <!---
	<div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="dashboard.html#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="text-center">
                            <span class="badge filter badge-white" data-color="white"></span>
                            <span class="badge filter badge-black active" data-color="black"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox" unchecked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Image</p>
                        <div class="togglebutton switch-sidebar-image">
                            <label>
                                <input type="checkbox" checked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-2.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block">Buy Now</a>
                    </div>

                    <div class="">
                        <a href="http://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                    </div>
                </li>

                <li class="header-title">Thank you for 95 shares!</li>

                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
                    <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot;</i>50</button>
                </li>
            </ul>
        </div>
    </div>-->

</body>

	<!--   Core JS Files   -->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<script src="../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="../assets/js/arrive.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="../assets/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/js/moment.min.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!--   Sharrre Library    -->
<script src="../assets/js/jquery.sharrre.js"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/bootstrap-datetimepicker.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/jquery-jvectormap.js"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="../assets/js/nouislider.min.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_8C5Xz9RpEeJSaJ3E_DeBv8i7j_p6Aw"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/jquery.select-bootstrap.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../assets/js/jquery.datatables.js"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="../assets/js/sweetalert2.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/fullcalendar.min.js"></script>

<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/jquery.tagsinput.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.3.0"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script>
// Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

try{
  fbq('init', '111649226022273');
  fbq('track', "PageView");

}catch(err) {
  console.log('Facebook Track Error:', err);
}

</script>
<noscript>
  <img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
  />
</noscript>





<script type="text/javascript">
    $(document).ready(function(){

		// Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

		demo.initVectorMap();
    });
</script>




</html>
