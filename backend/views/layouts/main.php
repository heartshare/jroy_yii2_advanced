<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Modernizr JS Script-->
    <script src="static/vendor/modernizr/modernizr.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="static/vendor/fastclick/fastclick.js" type="application/javascript"></script>

</head>

<body>
<?php $this->beginBody() ?>
<!-- START Main wrapper-->
<section class="wrapper">
<!-- START Top Navbar-->
<nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
<!-- START navbar header-->
<div class="navbar-header">
    <a href="#" class="navbar-brand">
        <div class="brand-logo">Yii2-blog</div>
        <div class="brand-logo-collapsed">Yblog</div>
    </a>
</div>
<!-- END navbar header-->
<!-- START Nav wrapper-->
<div class="nav-wrapper">
<!-- START Left navbar-->
<ul class="nav navbar-nav">
    <li>
        <a href="#" data-toggle="aside">
            <em class="fa fa-align-left"></em>
        </a>
    </li>
    <li>
        <a href="#" data-toggle="navbar-search">
            <em class="fa fa-search"></em>
        </a>
    </li>
</ul>
<!-- END Left navbar-->
<!-- START Right Navbar-->
<ul class="nav navbar-nav navbar-right">
<!-- START Messages menu (dropdown-list)-->
<li class="dropdown dropdown-list">
    <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
        <em class="fa fa-envelope"></em>
        <div class="label label-danger">300</div>
    </a>
    <!-- START Dropdown menu-->
    <ul class="dropdown-menu">
         <li class="dropdown-menu-header">You have 5 new messages</li>
         <li>
            <div class="scroll-viewport">
               <!-- START list group-->
               <div class="list-group scroll-content">
                  <!-- START list group item-->
                  <a href="#" class="list-group-item">
                     <div class="media">
                        <div class="pull-left">
                           <img style="width: 48px; height: 48px;" src="app/img/user/01.jpg" alt="Image" class="media-object img-rounded">
                        </div>
                        <div class="media-body clearfix">
                           <small class="pull-right">2h</small>
                           <strong class="media-heading text-primary">
                              <div class="point point-success point-lg"></div>Sheila Carter</strong>
                           <p class="mb-sm">
                              <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                           </p>
                        </div>
                     </div>
                  </a>
                  <!-- END list group item-->
                  <!-- START list group item-->
                  <a href="#" class="list-group-item">
                     <div class="media">
                        <div class="pull-left">
                           <img style="width: 48px; height: 48px;" src="app/img/user/04.jpg" alt="Image" class="media-object img-rounded">
                        </div>
                        <div class="media-body clearfix">
                           <small class="pull-right">3h</small>
                           <strong class="media-heading text-primary">
                              <div class="point point-success point-lg"></div>Rich Reynolds</strong>
                           <p class="mb-sm">
                              <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                           </p>
                        </div>
                     </div>
                  </a>
                  <!-- END list group item-->
                  <!-- START list group item-->
                  <a href="#" class="list-group-item">
                     <div class="media">
                        <div class="pull-left">
                           <img style="width: 48px; height: 48px;" src="app/img/user/03.jpg" alt="Image" class="media-object img-rounded">
                        </div>
                        <div class="media-body clearfix">
                           <small class="pull-right">4h</small>
                           <strong class="media-heading text-primary">
                              <div class="point point-danger point-lg"></div>Beverley Pierce</strong>
                           <p class="mb-sm">
                              <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                           </p>
                        </div>
                     </div>
                  </a>
                  <!-- END list group item-->
                  <!-- START list group item-->
                  <a href="#" class="list-group-item">
                     <div class="media">
                        <div class="pull-left">
                           <img style="width: 48px; height: 48px;" src="app/img/user/05.jpg" alt="Image" class="media-object img-rounded">
                        </div>
                        <div class="media-body clearfix">
                           <small class="pull-right">4h</small>
                           <strong class="media-heading text-primary">
                              <div class="point point-danger point-lg"></div>Perry Cole</strong>
                           <p class="mb-sm">
                              <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                           </p>
                        </div>
                     </div>
                  </a>
                  <!-- END list group item-->
                  <!-- START list group item-->
                  <a href="#" class="list-group-item">
                     <div class="media">
                        <div class="pull-left">
                           <img style="width: 48px; height: 48px;" src="app/img/user/06.jpg" alt="Image" class="media-object img-rounded">
                        </div>
                        <div class="media-body clearfix">
                           <small class="pull-right">4h</small>
                           <strong class="media-heading text-primary">
                              <div class="point point-danger point-lg"></div>Carolyn Carpenter</strong>
                           <p class="mb-sm">
                              <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                           </p>
                        </div>
                     </div>
                  </a>
                  <!-- END list group item-->
               </div>
               <!-- END list group-->
            </div>
         </li>
         <!-- START dropdown footer-->
         <li class="p">
            <a href="#" class="text-center">
               <small class="text-primary">READ ALL</small>
            </a>
         </li>
         <!-- END dropdown footer-->
    </ul>
    <!-- END Dropdown menu-->
</li>
<!-- END Messages menu (dropdown-list)-->
<!-- START Alert menu-->
<li class="dropdown dropdown-list">
    <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
        <em class="fa fa-bell"></em>
        <div class="label label-info">120</div>
    </a>
    <!-- START Dropdown menu-->
    <ul class="dropdown-menu">
        <li>
            <!-- START list group-->
            <div class="list-group">
                <!-- list item-->
                <a href="#" class="list-group-item">
                    <div class="media">
                        <div class="pull-left">
                            <em class="fa fa-envelope-o fa-2x text-success"></em>
                        </div>
                        <div class="media-body clearfix">
                            <div class="media-heading">Unread messages</div>
                            <p class="m0">
                                <small>You have 10 unread messages</small>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- list item-->
                <a href="#" class="list-group-item">
                    <div class="media">
                        <div class="pull-left">
                            <em class="fa fa-cog fa-2x"></em>
                        </div>
                        <div class="media-body clearfix">
                            <div class="media-heading">New settings</div>
                            <p class="m0">
                                <small>There are new settings available</small>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- list item-->
                <a href="#" class="list-group-item">
                    <div class="media">
                        <div class="pull-left">
                            <em class="fa fa-fire fa-2x"></em>
                        </div>
                        <div class="media-body clearfix">
                            <div class="media-heading">Updates</div>
                            <p class="m0">
                                <small>There are
                                    <span class="text-primary">2</span>new updates available</small>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- last list item -->
                <a href="#" class="list-group-item">
                    <small>Unread notifications</small>
                    <span class="badge">14</span>
                </a>
            </div>
            <!-- END list group-->
        </li>
    </ul>
    <!-- END Dropdown menu-->
</li>
<!-- END Alert menu-->
<!-- START User menu-->
<li class="dropdown">
    <a href="#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
        <em class="fa fa-user"></em>
    </a>
    <!-- START Dropdown menu-->
    <ul class="dropdown-menu">
        <li>
            <div class="p">
                <p>Overall progress</p>
                <div class="progress progress-striped progress-xs m0">
                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="divider"></li>
        <li><a href="#">Profile</a>
        </li>
        <li><a href="#">Settings</a>
        </li>
        <li><a href="#">Notifications<div class="label label-info pull-right">5</div></a>
        </li>
        <li><a href="#">Messages<div class="label label-danger pull-right">10</div></a>
        </li>
        <li><a href="#">Logout</a>
        </li>
    </ul>
    <!-- END Dropdown menu-->
</li>
<!-- END User menu-->
<!-- START Contacts button-->
<li>
    <a href="#" data-toggle="offsidebar">
        <em class="fa fa-align-right"></em>
    </a>
</li>
<!-- END Contacts menu-->
</ul>
<!-- END Right Navbar-->
</div>
<!-- END Nav wrapper-->
<!-- START Search form-->
<form role="search" class="navbar-form">
    <div class="form-group has-feedback">
        <input type="text" placeholder="Type and hit Enter.." class="form-control">
        <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
    </div>
    <button type="submit" class="hidden btn btn-default">Submit</button>
</form>
<!-- END Search form-->
</nav>
<!-- END Top Navbar-->
<!-- START aside-->
<aside class="aside">
<!-- START Sidebar (left)-->
<nav class="sidebar">
<ul class="nav">
<!-- START user info-->
<li>
    <div class="item user-block has-submenu">
        <!-- User picture-->
        <div class="user-block-picture">
            <img src="static/backend/img/face.png" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
            <!-- Status when collapsed-->
            <div class="user-block-status">
                <div class="point point-success point-lg"></div>
            </div>
        </div>
        <!-- Name and Role-->
        <div class="user-block-info">
            <span class="user-block-name item-text">Welcome, Jroy</span>
            <span class="user-block-role">Coder</span>
        </div>
    </div>
</li>
<!-- END user info-->
<!-- START Menu-->
<li class="active">
    <a href="/admin.php" title="Dashboard">
        <em class="fa fa-dashboard"></em>
        <div class="label label-primary pull-right">12</div>
        <span class="item-text">Dashboard</span>
    </a>
</li>
<li>
    <a href="#" title="Charts" data-toggle="collapse-next" class="has-submenu">
        <em class="fa fa-bar-chart-o"></em>
        <span class="item-text">栏目管理</span>
    </a>
    <!-- START SubMenu item-->
    <ul class="nav collapse ">
        <li>
            <a href="<?=Url::to(['category/index'])?>" title="Flot" data-toggle="" class="no-submenu">
                <span class="item-text">栏目列表</span>
            </a>
        </li>
        <li>
            <a href="#" title="Radial" data-toggle="" class="no-submenu">
                <span class="item-text">Radial</span>
            </a>
        </li>
    </ul>
    <!-- END SubMenu item-->
</li>
<li>
    <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
        <em class="fa fa-table"></em>
        <span class="item-text">内容管理</span>
    </a>
    <!-- START SubMenu item-->
    <ul class="nav collapse ">
        <li>
            <a href="<?=Url::to(['post/index'])?>" title="Data Table" data-toggle="" class="no-submenu">
                <span class="item-text">内容列表</span>
            </a>
        </li>
        <li>
            <a href="table-standard.html" title="Standard" data-toggle="" class="no-submenu">
                <span class="item-text">Standard</span>
            </a>
        </li>
        <li>
            <a href="table-extended.html" title="Extended" data-toggle="" class="no-submenu">
                <span class="item-text">Extended</span>
            </a>
        </li>
    </ul>
    <!-- END SubMenu item-->
</li>

<!-- END Menu-->
<!-- Sidebar footer    -->
<li class="nav-footer">
    <div class="nav-footer-divider"></div>
    <!-- START button group-->
    <div class="btn-group text-center">
        <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
            <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
            </em>
        </button>
        <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
            <em class="fa fa-cog text-muted"></em>
        </button>
        <a data-toggle="tooltip" data-title="Logout" class="btn btn-link" href="<?php echo Url::to(['site/logout'])?>">
            <em class="fa fa-sign-out text-muted"></em>
        </a>
    </div>
    <!-- END button group-->
</li>
</ul>
</nav>
<!-- END Sidebar (left)-->
</aside>
<!-- End aside-->
<!-- START aside-->
<aside class="offsidebar">
    <!-- START Off Sidebar (right)-->
    <nav>
        <ul class="nav">
            <!-- START user info-->
            <li>
                <div class="item">
                    <div style="background-image: url('static/backend/img/offsidebar-bg.jpg')" class="p-lg">
                        <div class="text-center">
                            <p>
                                <img src="static/backend/img/user/02.jpg" style="width: 64px; height: 64px" alt="Image" class="img-circle img-thumbnail">
                            </p>
                            <p class="text-white">
                                <strong>Alex</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <!-- END user info-->
            <!-- START list title-->
            <li class="p">
                <small class="text-muted">ONLINE</small>
            </li>
            <!-- END list title-->
            <li>
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/05.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Tommy Sam</strong>
                           <br>
                           <small class="text-muted">tommy39</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/06.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">be40210</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/07.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Victor Long</strong>
                           <br>
                           <small class="text-muted">longlong</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/08.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Danielle Berry</strong>
                           <br>
                           <small class="text-muted">hunter49</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
            </li>
            <!-- START list title-->
            <li class="p">
                <small class="text-muted">OFFLINE</small>
            </li>
            <!-- END list title-->
            <li>
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/09.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Bertha Cooper</strong>
                           <br>
                           <small class="text-muted">ber123</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
                <!-- START User status-->
                <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="static/backend/img/user/10.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                    <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Anne Curtis</strong>
                           <br>
                           <small class="text-muted">anni</small>
                        </span>
                     </span>
                </a>
                <!-- END User status-->
            </li>
            <li>
                <!-- Optional link to list more users-->
                <a href="#" title="See more contacts" class="p">
                    <strong>
                        <small class="text-muted">&hellip;</small>
                    </strong>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END Off Sidebar (right)-->
</aside>
<!-- END aside-->
<!-- START Main section-->
<section>
<!-- START Page content-->
<section class="main-content">
<div data-toggle="notify" data-onload data-message="&lt;b&gt;New Updates Available!&lt;/b&gt; Don't forget to check them!" data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div>
<!-- START dashboard main content-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?=$content?>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END Page content-->
</section>
<!-- END Main section-->
</section>
<!-- END Main wrapper-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>