<?php foreach($datalembaga as $data){} ?>
<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('index.php/lembaga/'); ?>">
                <span>SISFO-TPA</span>
			</a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $user; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url("index.php/lembaga/logout"); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->


            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="<?php echo base_url('index.php'); ?>"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>

            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">MAIN</li>
                        <li><a class="ajax-link" href="<?php echo base_url('index.php/lembaga'); ?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
						<li class="nav-header hidden-md">DATA MASTER</li>
                        <li><a class="ajax-link" href="<?php echo base_url("index.php/lembaga/datatpa"); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Data TPA</span></a>
                        <li><a class="ajax-link" href="<?php echo base_url('index.php/lembaga/dataguru'); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Data Guru</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('index.php/lembaga/datarombel'); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Data Peserta Didik</span></a>
                        </li>
						<li><a class="ajax-link" href="<?php echo base_url('index.php/lembaga/dataalumni'); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Data Alumni</span></a>
                        </li>	
						<li class="nav-header hidden-md">KEUANGAN</li>
                        <li><a class="ajax-link" href="<?php echo base_url("index.php/lembaga/sumbangan"); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Data Sumbangan</span></a>
                        <li><a class="ajax-link" href="<?php echo base_url("index.php/lembaga/datasumbangan"); ?>"><i class="glyphicon glyphicon-eye-open"></i><span> Laporan Sumbangan</span></a>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
