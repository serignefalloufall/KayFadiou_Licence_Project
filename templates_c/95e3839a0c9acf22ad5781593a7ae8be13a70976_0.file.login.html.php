<?php
/* Smarty version 3.1.30, created on 2019-08-25 03:05:50
  from "C:\xampp\htdocs\KayFadiou\src\view\welcome\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d61deee653ab9_21034210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e3839a0c9acf22ad5781593a7ae8be13a70976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KayFadiou\\src\\view\\welcome\\login.html',
      1 => 1566693165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d61deee653ab9_21034210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememinister.com/health/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:23 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>KayFadiou</title>

	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/img/ico/favicon.png" type="image/x-icon">


	<!-- Bootstrap -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap rtl -->
	<!--<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
	<!-- Pe-icon-7-stroke -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
	<!-- style css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
	<!-- Theme style rtl -->
	<!--<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>
<!-- Content Wrapper -->
<div class="login-wrapper">

	<div class="container-center">
		<div class="panel panel-bd">
			<div class="panel-heading">
				<div class="view-header">
					<div class="header-icon">
						<i class="pe-7s-unlock"></i>
					</div>
					<div class="header-title">
						<h3>Authentification</h3>
						<small><strong>Entrer vos informations pour se connecter a KayFadiou.</strong></small>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/login">
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" placeholder="login" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
						<span class="help-block small">Votre login svp</span>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">Password</label>
						<input type="password" title="svp enterer votre password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
						<span class="help-block small">votre password</span>
					</div>
					<div>
						<center>
						<button name="connexion" class="btn btn-primary">Se connecter</button>
						<a class="btn btn-warning" href="#">Annuler</a></center>
						<span class="text-danger align-middle">
                    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
                    <p class="text-danger">
                        <div class="alert alert-danger" style="font-size:18px; text-align:justify;">
                            <?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>

                        </div>
							</p>
							<?php }?>
                </span>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
<!-- jQuery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- bootstrap js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>

<!-- Mirrored from thememinister.com/health/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:23 GMT -->
</html><?php }
}
