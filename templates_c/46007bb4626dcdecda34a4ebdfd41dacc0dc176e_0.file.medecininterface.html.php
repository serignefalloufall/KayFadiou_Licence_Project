<?php
/* Smarty version 3.1.30, created on 2019-08-26 06:21:30
  from "C:\xampp\htdocs\KayFadiou\src\view\welcome\medecininterface.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d635e4a074490_89249804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46007bb4626dcdecda34a4ebdfd41dacc0dc176e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KayFadiou\\src\\view\\welcome\\medecininterface.html',
      1 => 1566781872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d635e4a074490_89249804 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from thememinister.com/health/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:07:38 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title> KayFadiou </title>

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
	<!-- Themify icons -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
	<!-- End Global Mandatory Style
    =====================================================================-->
	<!-- Start page Label Plugins
    =====================================================================-->
	<!-- Toastr css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
	<!-- Emojionearea -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
	<!-- Monthly css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
	<!-- End page Label Plugins
    =====================================================================-->
	<!-- Start Theme Layout Style
    =====================================================================-->
	<!-- Theme style -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
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
                        <!--<b>A</b>H-admin-->
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
					<p><?php if (isset($_smarty_tpl->tpl_vars['idmedecin']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['idmedecin']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['idmedecin']->value['nom'];?>
 <?php }?></p>
				</div>
			</div>

			<!-- sidebar menu -->
			<ul class="sidebar-menu">

				<li class="treeview">
					<a href="#">
						<i class="fa fa-stethoscop"></i><span>Consultation</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Consultation/add">Ajouter une consultation</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Consultation/liste">Liste des consultations</a></li>

					</ul>
				</li>



				<li class="treeview">
					<a href="#">
						<i class="fa fa-file-text"></i><span>Ordonance</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ordonance/add">Ajouter Ordonance</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ordonance/liste">Liste des Ordonance</a></li>

					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-bed"></i><span>Fiche Hospitalisation</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fichehospitalisation/add">Ajouter Fiche Hospitalisation</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fichehospitalisation/liste">Liste Fiche Hospitalisation</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fiche/add">Ajouter fiche</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fiche/liste">liste fiche</a></li>


					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-eye"></i><span>Observation</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Observation/add">Ajouter Observation</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Observation/liste">Liste des Observations</a></li>

					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-thermometer"></i><span>Examen</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Examen/add">Ajouter Examen</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Examen/liste">Liste des Examens</a></li>

					</ul>




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
	</aside>
	<!-- =============================================== -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="header-icon">
				<i class="pe-7s-note2"></i>
			</div>
			<div class="header-title">
				<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Medecin/add" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
					</div>
				</form>
				<h1>Gestion consultation</h1>
				<small>consultation</small>
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
								<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Patient/add"> <i class="fa fa-plus"></i>Ordonance</a>
							</div>

							<div class="btn-group">
								<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Observation/add"> <i class="fa fa-plus"></i>Fiche Observation</a>
							</div>


							<div class="btn-group">
								<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Fiche_Examen/add"> <i class="fa fa-plus"></i>Fiche Examen</a>
							</div>

						</div>
						<div class="panel-body">

							<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Consultation/add">

								<div class="row">
									<!-- Form controls -->
									<div class="col-sm-12">
										<fieldset class="col-sm-6" >
											<div class="form-group">

												<label>Libelle</label>
												<input name="libelle" type="text" class="form-control" placeholder="Saisir libelle" required>
											</div>
											<div class="form-group">
												<label>Date Consultation</label>
												<input name="datec" type="text" class="form-control" placeholder="Saisir la date" required>
											</div>


											<div class="form-group">
												<label class="control-label">Medecin</label>
												<?php if (isset($_smarty_tpl->tpl_vars['medecins']->value)) {?>
												<select name="idmedecin" class="form-control" required>
													<option value="0">---Nom Medecin---</option>
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
												<label class="control-label">Patient</label>
												<?php if (isset($_smarty_tpl->tpl_vars['patients']->value)) {?>
												<select name="idpatient" class="form-control" required>
													<option value="0">---Nom patient---</option>
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
										</fieldset>
										<fieldset class="col-sm-6" >


											<div class="form-group">
												<label class="control-label">Rendez-vous</label>
												<?php if (isset($_smarty_tpl->tpl_vars['rendezvouss']->value)) {?>
												<select name="idrv" class="form-control" required>
													<option value="0">---Rendez-vous---</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rendezvouss']->value, 'rendezvous');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rendezvous']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rendezvous']->value['motif'];?>
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
												<label class="control-label">Dossier</label>
												<?php if (isset($_smarty_tpl->tpl_vars['dossiers']->value)) {?>
												<select name="iddossier" class="form-control" required>
													<option value="0">---Dossier---</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dossiers']->value, 'dossier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dossier']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['dossier']->value['id_dos'];?>
"><?php echo $_smarty_tpl->tpl_vars['dossier']->value['id_dos'];?>
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
												<label class="control-label">Prise en charge</label>
												<?php if (isset($_smarty_tpl->tpl_vars['dossiers']->value)) {?>
												<select name="idcharge" class="form-control" required>
													<option value="0">---Prise en charge---</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['priseencharges']->value, 'priseencharge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['priseencharge']->value) {
?>

													<option value="<?php echo $_smarty_tpl->tpl_vars['priseencharge']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['priseencharge']->value['nomentreprise'];?>
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
											<br></br>
											<div class="reset-button">

												<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
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
		<strong>Copyright &copy; 2018-2019 <a href="#">KayFadiou</a>.</strong>
	</footer>
</div> <!-- ./wrapper -->
<!-- ./wrapper -->
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
<!-- Start Page Lavel Plugins
=====================================================================-->
<!-- Toastr js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/toastr/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Sparkline js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/sparkline/sparkline.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Data maps js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/d3.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/topojson.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Counter js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/counterup/waypoints.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- ChartJs JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/chartJs/Chart.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Monthly js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/monthly/monthly.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Data maps -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/d3.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/topojson.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<!-- End Page Lavel Plugins
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

<!-- Mirrored from thememinister.com/health/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:08:29 GMT -->
</html><!DOCTYPE html>
<?php }
}
