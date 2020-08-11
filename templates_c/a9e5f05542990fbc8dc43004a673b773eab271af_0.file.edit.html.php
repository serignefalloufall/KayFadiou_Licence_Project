<?php
/* Smarty version 3.1.30, created on 2019-08-25 23:59:20
  from "C:\xampp\htdocs\KayFadiou\src\view\rendezvous\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6304b8f237a2_64398726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e5f05542990fbc8dc43004a673b773eab271af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KayFadiou\\src\\view\\rendezvous\\edit.html',
      1 => 1566770356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6304b8f237a2_64398726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from thememinister.com/health/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:45 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Thememinister Health Admin panel</title>

	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/ico/favicon.png" type="image/x-icon">

	<!-- Start Global Mandatory Style
    =====================================================================-->
	<!-- jquery-ui css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap rtl -->
	<!--<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
	<!-- Lobipanel css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
	<!-- Pace css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
	<!-- Font Awesome -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- Pe-icon -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap-wysihtml5 css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
	<!-- Themify icons -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
	<!-- End Global Mandatory Style
    =====================================================================-->
	<!-- Start Theme Layout Style
    =====================================================================-->
	<!-- Theme style -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
	<!-- Theme style rtl -->
	<!--<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
	<!-- End Theme Layout Style
    =====================================================================-->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	<header class="main-header">
		<a href="index-2.html" class="logo"> <!-- Logo -->
			<span class="logo-mini">
                    <!--<b>A</b>BD-->
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/mini-logo.png" alt="">
                </span>
			<span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/kayfadiou.jpg" width="223px" alt="">
                    </span>
		</a>
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top ">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-tasks"></span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Notifications -->
					<li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown">
							<i class="pe-7s-cart"></i>
							<span class="label label-primary">5</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header"><i class="fa fa-shopping-basket"></i> 4 Orders</li>
							<li>
								<ul class="menu">
									<li ><!-- start Notifications -->
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/stethescope.png" class="img-thumbnail" alt="User Image"></div>
											<h4>stethescope</h4>
											<p><strong>total item:</strong> 21
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/nocontrol.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Nocontrol</h4>
											<p><strong>total item:</strong> 11
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/lab.png" class="img-thumbnail" alt="User Image"></div>
											<h4>lab</h4>
											<p><strong>total item:</strong> 16
											</p>
										</a>
									</li>
									<li class="nav-list">
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/therm.jpg" class="img-thumbnail" alt="User Image"></div>
											<h4>Pressure machine</h4>
											<p><strong>total item:</strong> 10
											</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#"> See all Orders <i class="fa fa-arrow-right"></i></a></li>
						</ul>
					</li>
					<!-- Messages -->
					<li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="pe-7s-mail"></i>
							<span class="label label-success">4</span>
						</a>

						<ul class="dropdown-menu">
							<li class="header"><i class="fa fa-envelope-o"></i>
								4 Messages</li>
							<li>
								<ul class="menu">
									<li><!-- start message -->
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Alrazy</h4>
											<p>Lorem Ipsum is simply dummy text of...
											</p>
											<span class="label label-success pull-right">11.00am</span>
										</a>

									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Tanjil</h4>
											<p>Lorem Ipsum is simply dummy text of...
											</p>
											<span class="label label-success pull-right"> 12.00am</span>
										</a>

									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Jahir</h4>
											<p>Lorem Ipsum is simply dummy text of...
											</p>
											<span class="label label-success pull-right"> 10.00am</span>
										</a>

									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Shawon</h4>
											<p>Lorem Ipsum is simply dummy text of...
											</p>
											<span class="label label-success pull-right"> 09.00am</span>
										</a>

									</li>
									<li>
										<a href="#" class="border-gray">
											<div class="pull-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
											<h4>Shipon</h4>
											<p>Lorem Ipsum is simply dummy text of...
											</p>
											<span class="label label-success pull-right"> 03.00pm</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">See all messages <i class=" fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</li>
					<!-- Notifications -->
					<li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="pe-7s-bell"></i>
							<span class="label label-warning">8</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
							<li>
								<ul class="menu">
									<li>
										<a href="#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> New Order <span class=" label-success label label-default pull-right">3</span> </a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-money"></i> Payment Failed  <span class="label-success label label-default pull-right">6</span> </a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Order Confirmation <span class="label-success label label-default pull-right">7</span> </a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Update system status <span class=" label-success label label-default pull-right">11</span> </a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> client update <span class="label-success label label-default pull-right">12</span> </a>
									</li>
									<li>
										<a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> shipment cancel
											<span class="label-success label label-default pull-right">2</span> </a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</li>
					<!-- Tasks -->
					<li class="dropdown tasks-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="pe-7s-file"></i>
							<span class="label label-danger">9</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header"><i class="fa fa-file"></i> 9 tasks</li>
							<li>
								<ul class="menu">
									<li> <!-- Task item -->
										<a href="#">
											<h3>
												<i class="fa fa-check-circle"></i> Data table error
												<span class="label-primary label label-default pull-right">35%</span>
											</h3>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="35%" style="width: 35%">
													<span class="sr-only">35% Complete (primary)</span>
												</div>
											</div>
										</a>
									</li> <!-- end task item -->
									<li> <!-- Task item -->
										<a href="#">
											<h3>
												<i class="fa fa-check-circle"></i>  Change theme color
												<span class="label-success label label-default pull-right">55%</span>
											</h3>
											<div class="progress">
												<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="55%" style="width: 55%">
													<span class="sr-only">55% Complete (primary)</span>
												</div>
											</div>
										</a>
									</li> <!-- end task item -->
									<li> <!-- Task item -->
										<a href="#">
											<h3>
												<i class="fa  fa-check-circle"></i> Change the font-family
												<span class="label-info label label-default pull-right">60%</span>
											</h3>
											<div class="progress">
												<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="60%" style="width: 60%">
													<span class="sr-only">60% Complete (info)</span>
												</div>
											</div>
										</a>
									</li> <!-- end task item -->
									<li> <!-- Task item -->
										<a href="#">
											<h3>
												<i class="fa  fa-check-circle"></i> Animation should be skip
												<span class="label-warning label label-default pull-right">80%</span>
											</h3>
											<div class="progress">
												<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="80%"  style="width: 80%">
													<span class="sr-only">80% Complete (warning)</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
								</ul>
							</li>
							<li class="footer"><a href="#">See all tasks <i class=" fa fa-arrow-right"></i></a></li>
						</ul>

					</li>
					<!-- user -->
					<li class="dropdown dropdown-user admin-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<div class="user-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
							</div>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.html"><i class="fa fa-users"></i> User Profile</a></li>
							<li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
							<li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- =============================================== -->
	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="image pull-left">
					<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
				</div>
				<div class="info">
					<h4>Bienvenue</h4>
					<p><?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['user']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['nom'];?>
 <?php }?></p>
				</div>
			</div>

			<!-- sidebar menu -->
			<ul class="sidebar-menu">

				<li class="treeview">
					<a href="#">
						<i class="fa fa-user"></i><span>Patient</span>
						<span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Patient/add">Ajouter un patient</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Patient/liste">Liste des patients</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-list-alt"></i> <span>Rendezvous</span>
						<span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
					</a>
					<ul class="treeview-menu">

						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rendezvous/add">Ajouter un rendez-vous</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rendezvous/liste">Liste des rendez-vous</a></li>

					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-vcard-o"></i><span>Dossier</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Dossier/add">Ajouter dossier</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Dossier/liste">Liste des dossiers</a></li>

					</ul>
				</li>

			</ul>
		</div> <!-- /.sidebar -->
	</aside><!-- /.asode -->
	<!-- =============================================== -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="header-icon">
				<i class="pe-7s-note2"></i>
			</div>
			<div class="header-title">
				<form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
					</div>
				</form>
				<h1>Patient</h1>
				<small>patient list</small>
				<ol class="breadcrumb hidden-xs">
					<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/deconnecter">

						<li class="active">Déconnexion</li>
					</a>
				</ol>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- Form controls -->
				<div class="col-sm-12">
					<div class="panel panel-bd lobidrag">
						<div class="panel-heading">
							<div class="btn-group">
								<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Patient/liste">
									<i class="fa fa-list"></i>  Liste des patients </a>
							</div>
						</div>
						<div class="panel-body">

							<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Rendezvous/update">

								<div class="row">
									<!-- Form controls -->
									<div class="col-sm-12">
										<fieldset class="col-sm-6" >
											<div class="form-group">
												<input class="form-control" readonly type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['id'];?>
 <?php }?>"/>
											</div>
											<div class="form-group">

												<label>Date</label>
												<input name="dater" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['dater'];?>
 <?php }?>">
											</div>
											<div class="form-group">
												<label>Heure</label>
												<input name="heure" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['heure'];?>
 <?php }?>">
											</div>

											<div class="form-group">
												<label>Motif</label>
												<input name="motif" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['motif'];?>
 <?php }?>">
											</div>

										</fieldset>
										<fieldset class="col-sm-6" >

											<div class="form-group">
												<label class="control-label">Patient</label>
												<?php if (isset($_smarty_tpl->tpl_vars['patients']->value)) {?>
												<select name="idpatient" class="form-control" required>
													<option value="<?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['idpatient'];?>
 <?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['rendezvous']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['idpatient'];?>
 <?php }?></option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'patient');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['patient']->value['nom_Pat'];?>
</option>

													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</select>

												<?php } else { ?>
												Liste vide
												<?php }?>
											</div>
											<div class="form-group">
												<label class="control-label">Medecin</label>
												<?php if (isset($_smarty_tpl->tpl_vars['medecins']->value)) {?>
												<select name="idmedecin" class="form-control" required>
													<option value="0">---Nom medecin---</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medecins']->value, 'medecin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['medecin']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['medecin']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['medecin']->value['nom'];?>
</option>

													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</select>

												<?php } else { ?>
												Liste vide
												<?php }?>
											</div>

											<div class="form-group">
												<label class="control-label">Secretaire</label>
												<?php if (isset($_smarty_tpl->tpl_vars['secretaires']->value)) {?>
												<select name="idsecretaire" class="form-control" required>
													<option value="0">---Nom Secretaire---</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secretaires']->value, 'secretaire');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['secretaire']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['secretaire']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['secretaire']->value['iduser'];?>
</option>

													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</select>

												<?php } else { ?>
												Liste vide
												<?php }?>
											</div>
											<div class="reset-button">

												<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
												<input class="btn btn-warning" type="reset" name="annuler" value="Annuler"/>

											</div>

										</fieldset>
									</div>
								</div>





							</form>
						</div>
					</div>
				</div>
			</div>

		</section> <!-- /.content -->
	</div> <!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
		<strong>Copyright &copy; 2016-2017 <a href="#">Thememinister</a>.</strong> All rights reserved.
	</footer>
</div> <!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- jquery-ui -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- lobipanel -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Pace js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/pace/pace.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Hadmin frame -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/js/custom1.js" type="text/javascript"><?php echo '</script'; ?>
>

<!-- End Core Plugins
=====================================================================-->
<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/js/custom.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- End Theme label Script
=====================================================================-->

</body>

<!-- Mirrored from thememinister.com/health/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:45 GMT -->
</html>
<?php }
}
