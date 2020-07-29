<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title><?php echo $this->lang->line("reset_password")." ".SITE_NAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="assets/style/bootstrap.css" rel="stylesheet">
  <link rel="assets/stylesheet" href="style/font-awesome.css">
  <link href="assets/style/style.css" rel="stylesheet">
  
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/img/favicon.png">
  <style> body { background:#111; } .alert { margin-bottom: 20px; padding: 10px; } </style>
</head>

<body>

<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
      <div><h1 style="text-align:center; padding-bottom:10px; font-size:32px; line-height: 36px; text-transform: uppercase; font-weight: bold; color:#FFF; display:block;"><?php echo SITE_NAME; ?></h1><!--<img src="<?php echo $this->config->base_url(); ?>assets/img/<?php echo INVOICE_LOGO; ?>" alt="<?php echo SITE_NAME; ?>"/>--></div>
            <div class="widget worange">
              <div class="widget-head">
               <?php echo $this->lang->line("reset_password"); ?> 
              </div>

              <div class="widget-content">
                <div class="padd" style="padding-bottom:0;">
                 <?php $attib = array('class' => 'form-horizontal');  echo form_open('module=auth&view=reset_password&code=' . $code, $attib);?> 
                  
                  <?php if($message) { echo "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $message . "</div>"; } ?>
                          
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputEmail"><?php echo $this->lang->line("new_pw"); ?></label>
                      <div class="col-lg-9">
                        <?php echo form_input($new_password, '', 'class="form-control" autofocus="autofocus" placeholder="(at least '.$min_password_length.' characters long)"'); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword"><?php echo $this->lang->line("confirm_pw"); ?></label>
                      <div class="col-lg-9">
                      	<?php echo form_input($new_password_confirm, '', 'class="form-control" placeholder="Type new password again"'); ?>
                      </div>
                    </div>

                    <?php echo form_input($user_id);?>
      				<?php echo form_hidden($csrf); ?>
               
                     <div class="form-group">
                    <div class="control-label col-lg-3">&nbsp;</div>
                        <div class="col-lg-9">
							<button type="submit" class="btn btn-primary btn-block"><?php echo $this->lang->line("submit"); ?></button>
							<!--<button type="reset" class="btn btn-default">Reset</button>-->
						</div>
                    </div>
                  <?php echo form_close();?>
				  
				</div>
                </div>
              
                <div class="widget-foot">
                <strong><?php echo $this->lang->line("go"); ?></strong> <a href="index.php?module=auth&view=login"><?php echo $this->lang->line("back_to_login"); ?></a>
                 
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
