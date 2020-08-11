<?php
/* Smarty version 3.1.30, created on 2019-08-25 09:44:37
  from "C:\xampp\htdocs\KayFadiou\src\view\dossier\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d623c656995c9_33834931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc304cfc65acbe242a2e99d7d09ed281b4da90b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KayFadiou\\src\\view\\dossier\\liste.html',
      1 => 1566719072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d623c656995c9_33834931 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from thememinister.com/health/pt-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:09:45 GMT -->
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
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
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
                <h1>Dossier medicale</h1>
                <small>Liste dossier</small>
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
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">


                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">



                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="success">
                                    <tr>
                                        <th>Date</th>
                                        <th>Remarque</th>
                                        <th>Patient</th>


                                        <th align="center" colspan="2">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dossiers']->value, 'dossier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dossier']->value) {
?>
                                    <tr>

                                        <td><?php echo $_smarty_tpl->tpl_vars['dossier']->value['date_dos'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['dossier']->value['remarque_dos'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['dossier']->value['id_pat'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Dossier/delete/<?php echo $_smarty_tpl->tpl_vars['dossier']->value['id_dos'];?>
">Supprimer</a></td>
                                        <td><a href="#">Editer</a></td>
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="page-nation text-right">
                                <ul class="pagination pagination-large">
                                    <li class="disabled"><span>«</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li class="disabled"><span>...</span></li><li>
                                    <li><a rel="next" href="#">Next</a></li>
                                </ul>
                            </div>

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

<!-- Mirrored from thememinister.com/health/pt-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2019 16:10:38 GMT -->
</html><?php }
}
