<?php
/* Smarty version 3.1.30, created on 2019-08-25 07:04:04
  from "C:\xampp\htdocs\KayFadiou\src\view\observation\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6216c4698591_89548886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c47848d56fd4bc6e7595dc82ae67b1e785bb25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KayFadiou\\src\\view\\observation\\add.html',
      1 => 1566708600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6216c4698591_89548886 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from thememinister.com/health/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:45 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>KayFadiou</title>

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
					<h4>Welcome</h4>
					<p>Mr. Alrazy</p>
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
						<li><a href="#">Ajouter Fiche Hospitalisation</a></li>
						<li><a href="#">Liste Fiche Hospitalisation</a></li>
						<li><a href="#">Ajouter fiche</a></li>
						<li><a href="#">liste fiche</a></li>


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
				<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Medecin/add" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
					</div>
				</form>
				<h1>Fiche d'observation</h1>
				<small>Observation</small>
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


						</div>
						<div class="panel-body">

							<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
							<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
							<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
							<?php }?>
							<?php }?>
							<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Observation/add">

								<div class="row">
									<!-- Form controls -->
									<div class="col-sm-12">
										<fieldset class="col-sm-6" >
											<div class="form-group">

												<label>Poids</label>
												<input name="poids" type="number" class="form-control" placeholder="Saisir poids..." required>
											</div>
											<div class="form-group">
												<label>Taille</label>
												<input name="taille" type="number" class="form-control" placeholder="Saisir taille..." required>
											</div>
											<div class="form-group">
												<label>Pouls</label>
												<input name="pouls" type="number" class="form-control" placeholder="Saisir pouls..." required>
											</div>


										</fieldset>
										<fieldset class="col-sm-6" >
											<div class="form-group">
												<label>Frequence</label>
												<input name="frequence" type="number" class="form-control" placeholder="Saisir frequence..." required>
											</div>
											<div class="form-group">
												<label>Temperature</label>
												<input name="temperature" type="number" class="form-control" placeholder="Saisir temperature..." required>
											</div>


											<div class="form-group">
												<label class="control-label">Fiche</label>
												<?php if (isset($_smarty_tpl->tpl_vars['fiches']->value)) {?>
												<select name="idfiche" class="form-control" required>
													<option value="0">---choix fiche---</option>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiches']->value, 'fiche');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['fiche']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fiche']->value['id'];?>
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
