<html>
<head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" /> -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/boot_nav.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrapformhelper/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/form_helpers.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/business-casual.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/validator.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrapformhelper/dist/js/bootstrap-formhelpers.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrapformhelper/js/bootstrap-formhelpers-selectbox.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrapformhelper/js/bootstrap-formhelpers-countries.js"></script>
  <title><?php echo $page_title . ' | ' . $site_name; ?></title>
</head>
<body>

<div class="container">
    <?php //include(FCPATH.'application/views/boot_nav.php'); ?>
    <div class="row body-main">
<?php
if ( $this->session->flashdata( 'success' ) )
  echo '<p class="success">' . $this->session->flashdata( 'success' ) . '</p>';

if ( $this->session->flashdata( 'error' ) )
  echo '<p class="error">' . $this->session->flashdata( 'error' ) . '</p>';
?>
