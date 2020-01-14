<?php
$hex_yellow = "#fce700";
$hex_yellowgray = "#99978a";
$hex_yellow_light = "#fdf37f";
$hex_green = "#1f5b43";
$hex_green_dark = "#1b331f";
$hex_green_light = "#9bc3b0";
$hex_good = "#008044";
$hex_bad = "#e67422";
$hex_ugly = "#d93f21";

$hex_usa = "#444444";
$hex_usa_bg = "#ececec";
$hex_dat = "#1f5b43";
$hex_dat_bg = "#e8eeec";
$hex_dat_bg_alt = "#f4f7f5";
$hex_market = "#056839";
$hex_market_bg = "#e6f0eb";
$hex_market_bg_alt = "#f2f7f5";

?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Campaign Monitor Newsletter</title>
	<style>
	a:hover {
		text-decoration: underline !important;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6{
		font-family:'Trebuchet MS',Helvetica,Arial,sans-serif;
		margin-top:0;
		margin-bottom:0;
		padding-top:0;
		padding-bottom:10px;
	}
	h2{
		font-size:24px;
		line-height:28px;
	}
	h3{
		font-size:22px;
		line-height:26px;
	}
	p{
		margin-top:0;
		margin-bottom:0;
		padding-top:10px;
		padding-bottom:10px;
	}

	td.masthead p {
		font-family:'Trebuchet MS',Helvetica,Arial,sans-serif;
		color:<?php echo($hex_green_dark); ?>;
		font-size:16px;
		line-height:18px;
		margin-top:0;
		margin-bottom:0;
		padding-top:0;
		padding-bottom:0;
	}
	
	td.cal-header{
		color:<?php echo($hex_green_dark); ?>;
		text-align:center;
		font-family:'Trebuchet MS',Helvetica,Arial,sans-serif;
		color:#ffffff;
		font-size:14px;
		line-height:16px;
	}
	td.cal-body{
  	text-align:center;
  	padding-top:10px;
  	padding-bottom:0;
	}
	
	td.cal-day{
	  color:<?php echo($hex_green_dark); ?>;
	  font-family:'Trebuchet MS',Helvetica,Arial,sans-serif;
	  font-weight:bold;
	  margin-top:0;
	  margin-bottom:0;
	  padding-top:0;
	  padding-bottom:0;
		font-size:42px;
		line-height:44px;
		text-align:center;
	}
	td.cal-year{
	  color:<?php echo($hex_green_dark); ?>;
	  font-family:'Trebuchet MS',Helvetica,Arial,sans-serif;
	  font-weight:bold;
  	margin-top:0;
	  margin-bottom:0px;
  	padding-top:0;
  	padding-bottom:0;
		font-size:20px;
		line-height:22px;
		text-align:center;
	}

  td.text-module{
    font-family:Arial,Helvetica,sans-serif;
    font-size:16px;
    line-height:1.2;
  }
  td.text-module a{
    color:<?php echo($hex_green); ?>;
  }
  
  td.text-module hr{
    border-width:1px;
    border-color:<?php echo($hex_usa_bg); ?>;
    border-style:solid;
  }
  
  td.text-module ol,
  td.text-module ul{
    padding-left:30px;
  }
  td.text-module li{
    margin-top:0;
    margin-bottom:0;
    padding-left:0;
    padding-top:0;
    padding-bottom:5px;
  }
  td.text-module ol li{
    color:<?php echo($hex_green_light); ?>;
  }

	td.reversedcolor{
		color:#ffffff;
	}
	td.reversedcolor a{
  	color:#ffffff;
	}
	
	.green-feature{
  	padding-top:20px;
  	padding-bottom:20px;
	}
	
	/* News Items */
	.news-item-text p,
	.more-to-munch-item p{
	  margin-top:0;
  	margin-bottom:0;
  	padding-top:0;
  	padding-bottom:5px;
	}
	.news-item-category{
  	color: #aaaaaa;
  	font-size:12px;
  	line-height:14px;
  	text-transform:uppercase;
	}
	.news-item-title{
  	font-size:18px;
  	font-weight:bold;
	}
	.news-item-title a{
  	text-decoration:none;
	}

  /* Pictures */
  td.picture-module img{
  /*   margin-bottom: 10px; */
  }

	/* Rankings */
	td.rankings-header,
	td.rankings-list{
		color:<?php echo($hex_green); ?>;
	}
	td.rankings-header{
		text-align:center;
		text-decoration:uppercase;
	}
	
	/* The Numbers */
	.numbers-intro p{
  	margin-top:0;
  	margin-bottom:0;
  	padding:10px;
	}
	
	.small-text{
	  font-family:Arial,Helvetica,sans-serif;
  	font-size:12px;
  	line-height:14px;
  	text-transform:uppercase;
	}
	.small-number{
	  font-family:Arial,Helvetica,sans-serif;
  	font-size:18px;
  	line-height:22px;
  	font-weight:bold;
	}
	
	.medium-number{
	  font-family:Arial,Helvetica,sans-serif;
  	font-size:24px;
  	line-height:26px;
	}
	.medium-text{
	  font-family:Arial,Helvetica,sans-serif;
  	font-size:18px;
  	line-height:20px;
  	text-transform:uppercase;
	}
	
	.cc-header img{
  	margin-top:0;
  	margin-bottom:0;
  	padding-top:10px;
  	padding-bottom:10px;
	}
	
	.market-header{
  	border-top-width:10px;
  	border-top-color:<?php echo($hex_market); ?>;
  	border-top-style:solid;
  	color:<?php echo($hex_market); ?>;
	}
	.market-body{
  	color:<?php echo($hex_market); ?>;
	}
	.market-header td,
	.market-body td{
  	padding-top:10px;
  	padding-bottom:10px;
	}
	
	.market-header-usa{
  	border-top-width:10px;
  	border-top-color:<?php echo($hex_usa); ?>;
  	border-top-style:solid;
  	color:<?php echo($hex_usa); ?>;
	}
	.market-body-usa{
  	color:<?php echo($hex_usa); ?>;
	}
	
	.market-header-dat{
  	border-top-width:10px;
  	border-top-color:<?php echo($hex_dat); ?>;
  	border-top-style:solid;
  	color:<?php echo($hex_dat); ?>;
	}
	.market-body-dat{
  	color:<?php echo($hex_dat); ?>;
	}

	.market-header h3{
	  font-family:Arial,Helvetica,sans-serif;
	  font-size:30px;
  	line-height:32px;
  	font-weight:normal;
  	text-transform:uppercase;
  	margin-top:0;
  	margin-bottom:0;
  	padding-top:0;
  	padding-bottom:2px;
	}
	.market-header .small-text{
  	display:block;
	}
	.market-header h3.large-number{
/*
	  font-family:Arial,Helvetica,sans-serif;
  	font-size:30px;
  	line-height:34px;
  	font-weight:bold;
*/
	}
	
	.cc-table td{
  	padding:10px;
	}

  .totals-header .small-text{
    display:block;
    margin-top:0;
    margin-bottom:0;
    padding-top:10px;
    padding-bottom:0;
  }
  .totals-header .medium-text{
    margin-top:0;
    margin-bottom:0;
    padding-top:0;
    padding-bottom:10px;
  }
 
  .footer-links{
    font-size:14px;
    line-height:16px;
    color:#444444;
  }
  .footer-links a{
    
  }

	@media only screen and (max-width: 480px) {
    
    table[class="flex-container"],
    td[class="flex-container"],
    table[class~="flex-container"],
    td[class~="flex-container"],
    td[class~="flex-container"] > table > tbody,
    td[class~="flex-container"] > table > tbody > tr
    {
      display:block !important;
      width:100% !important;
      float:none !important;
    }



    table[class="flex-total"],
    td[class="flex-total"],
    table[class~="flex-total"],
    td[class~="flex-total"]{
      width:100% !important;
    }
    
    img[class="flex-image"]{
      display:block !important;
      width: 100% !important;
      max-width:100% !important;
      height: auto;
    }
    
    td[class~="flex-padding"]{
      padding:10px 20px !important;
    }
    
    td[class="hide"]{
      display:none !important;
    }
    
		table[class="table"],
		td[class="cell"],
		td[class~="cell"]{
		  width:100% !important;
		}
		td[class="cell"],
		td[class~="cell"]{
		  width:100% !important;
		  display:block !important;
		}
		
		table[class="table-fivepad"] td.cell{
  	/*	width:100% !important;*/
		}
		
		td[class="cell"] > img{
		  width:100% !important;
		  display:block !important;
		}

    td[class="masthead"] p {
  		font-size:12px !important;
  		line-height:14px !important;
  	}

  	table[class="market-header"] h3,
  	table[class~="market-header"] h3{
  	  font-size:18px !important;
    	line-height:20px !important;
      padding-left:10px !important;
      padding-right:10px !important;
  	}
  	table[class="market-header"] .small-text,
  	table[class~="market-header"] .small-text{
      padding-left:10px !important;
      padding-right:10px !important;
  	}

  	td[class="market-header-image"] img,
  	td[class~="market-header-image"] img{
      width:55px;
      height:30px;
  	}


  	table[class="cc-table"] td{
    	padding:5px !important;
  	}
  	
  	span[class="small-number"],
  	p[class="small-number"]{
    	font-size:14px !important;
    	line-height:16px !important;
  	}
  	span[class="small-text"],
  	p[class="small-text"]{
    	font-size:10px !important;
    	line-height:12px !important;
  	}
  	
  	span[class="medium-text"],
  	p[class="medium-text"],
  	h3[class="medium-text"]{
    	font-size:14px !important;
    	line-height:16px !important;
  	}

	}

	*{
	/*	border: 1px solid gray !important;*/
	}
	</style>
	<!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
  </xml><![endif]-->
</head>
<body bgcolor="<?php echo($hex_yellow); ?>" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="-webkit-font-smoothing: antialiased;width:100% !important;background:<?php echo($hex_yellow); ?>;-webkit-text-size-adjust:none;">
	
<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo($hex_yellow); ?>">
	<tr>
		<td bgcolor="<?php echo($hex_yellow); ?>" width="100%">

  		<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table" sytle="margin-top:0;margin-right:auto;margin-bottom:0;margin-left:auto;">
  			<tr>
  				<td width="600" class="cell">
  				
  				  <img editable="true" border="0" src="images/bg_header.png" label="Hero image" width="600" height="310" id="header" class="flex-image" style="display:block;" hspace="0" vspace="0">
  				
  					<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table">
  						<tr>
  							<td width="470" bgcolor="<?php echo($hex_yellow); ?>" valign="top">                      
  							 	
  								<table width="100%" cellpadding="30" cellspacing="0" border="0" style="border-top-width:10px;border-top-color:<?php echo($hex_yellow); ?>;border-top-style:solid;">
  									<tr>
  										<td bgcolor="<?php echo($hex_yellow_light); ?>" class="masthead">
  
  											<multiline label="Masthead Text"><p><strong>The freshest news, stats and business thoughts for SUBWAY owners of the Mid-South. Brought to you by your local DA office.</strong></p></multiline>

  										</td>
  									</tr>
  								</table>
  							
  							</td>
  							<td width="130" bgcolor="<?php echo($hex_yellow_light); ?>" valign="top">
  							 
  								<table width="100%" cellpadding="0" cellspacing="0" border="0">
  								  <tr>
  								    <td bgcolor="<?php echo($hex_green); ?>" class="cal-header">
                        <table width="130" cellpadding="10" cellspacing="0" border="0">
                          <tr>
                            <td bgcolor="<?php echo($hex_green); ?>" class="cal-header">
                              <span><singleline label="W/E Month">W/E MAY</singleline></span>
                            </td>
                          </tr>
                        </table>
  								    </td>
  								  </tr>
  									<tr>
  										<td bgcolor="#ffffff" class="cal-body">
  										  <table width="100%" cellpadding="10" cellspacing="0" border="0">
  										    <tr>
  										      <td class="cal-day"><singleline label="W/E Day">DD</singleline></td>
  										    </tr>
  										  </table>
  										  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  										    <tr>
  										      <td class="cal-year"><singleline label="W/E Year">2014</singleline></td>
  										    </tr>
  										  </table>
  										</td>
  									</tr>
  								</table>
                  <img src="images/bg_cal_body.png" width="130" height="30" alt="calendar bottom" style="display:block;" hspace="0" vspace="0">
  							
  							</td>
  						</tr>
  					</table>
    				<br>
    
            <repeater>
  
<?php /* Text */ ?>
<?php include('_one_col_text.php'); ?>
<?php include('_one_col_text_green.php'); ?>
<?php include('_two_cols_text.php'); ?>
<?php include('_three_cols_text.php'); ?>
<?php include('_four_cols_text.php'); ?>

<?php /* Images */ ?>
<?php include('_one_col_img.php'); ?>
<?php include('_two_cols_imgs.php'); ?>
<?php include('_full_width_img.php'); ?>

<?php /* Divider */ ?>
<?php include('_yellow_divider.php'); ?>

<?php /* Sections */ ?>
<?php include('_good_bad_ugly.php'); ?>
<?php include('_numbers.php'); ?>

<?php /* Headers */ ?>
<?php include('_weekly_feature_header.php'); ?>
<?php include('_store_rankings_header.php'); ?>
<?php include('_movers_shakers_header.php'); ?>
<?php include('_congrats_header.php'); ?>
<?php include('_news_header.php'); ?>
<?php include('_more_to_munch_header.php'); ?>

<?php /* News */ ?>
<?php include('_news_item.php'); ?>

<?php /* Resources */ ?>

<?php include('_more_to_munch_one_col.php'); ?>
<?php include('_more_to_munch_two_cols.php'); ?>
  
            </repeater>           
  
  				</td>
  			</tr>
  		</table>

		</td>
	</tr>
</table>  	   			     	 
<img label="Continued" src="images/spacer.gif" width="1" height="20" hspace="0" vspace="0" style="display:block;height:20px !important;">
<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo($hex_green); ?>">
	<tr>
		<td bgcolor="<?php echo($hex_green); ?>" width="100%">

  		<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
  			<tr>
  				<td width="600" class="cell">
  				  
  				  <table width="100%" cellpadding="0" cellspacing="0" border="0">
            	<tr>
            	  <td width="20" bgcolor="<?php echo($hex_green); ?>" class="hide">&nbsp;</td>
            		<td width="560" bgcolor="<?php echo($hex_green); ?>" class="flex-container">
            	
            			<table width="100%" cellpadding="10" cellspacing="0" border="0">
            				<tr>
            					<td bgcolor="<?php echo($hex_green); ?>" class="text-module reversedcolor" align="center">
            
            						<multiline label="Contact Header">
              				    <p><span style="color:<?php echo($hex_yellow); ?>;"><span style="font-size:14px;">BROUGHT TO YOU BY</span></span></p>
              				  </multiline>
              				  <multiline label="Contact Address">
                				  <p>
                				    <strong>Ring Enterprises, Inc.</strong><br>
                  				  7599 Poplar Pike<br>
                  				  Germantown, TN 38138
                				  </p>
              				  </multiline>
              				  <multiline label="Contact Phone">
                				  <p>
                				    <a href="tel:9017947858">901-794-7858</a>
                				  </p>
              				  </multiline>
            
            					</td>
            				</tr>
            			</table>
            	
            		</td>
            		<td width="20" bgcolor="<?php echo($hex_green); ?>" class="hide">&nbsp;</td>
            	</tr>
            </table>  
  				  
  				</td>
  			</tr>
  		</table>
  		
		</td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f2f2f2">
	<tr>
		<td bgcolor="#f2f2f2" width="100%">

  		<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
  			<tr>
  				<td width="600" class="cell">
  				  
  				  <table width="100%" cellpadding="0" cellspacing="0" border="0">
            	<tr>
            	  <td width="20" bgcolor="#f2f2f2" class="hide">&nbsp;</td>
            		<td width="560" bgcolor="#f2f2f2" class="flex-container">
            	
            			<table width="100%" cellpadding="10" cellspacing="0" border="0">
            				<tr>
            					<td bgcolor="#f2f2f2" class="text-module">
            
            						<multiline label="Disclaimer Heading"><p><strong>DISCLAIMER</strong></p></multiline>
		  
                        <multiline label="Disclaimer Text"><p style="text-align:justify;"><span style="font-size:14px;">The information contained in this e-mail and attachments, if any, is confidential and may be subject to legal privilege. If you are not the intended recipient, you must not use, copy, distribute or disclose the e-mail and its attachment, or any part of its content or take any action in reliance of it. If you have received this e-mail in error, please e-mail the message back to the sender by replying and then deleting it. We cannot accept responsibility for loss or damage arising from the use of this e-mail or attachments, and recommend that you subject these to your virus checking procedures prior to use. Thank you.</span></p></multiline>
		  
                        <p class="footer-links"><preferences><strong>Edit Your Subscription</strong></preferences>&nbsp;&nbsp;|&nbsp;&nbsp;<unsubscribe><strong>Unsubscribe Instantly</strong></unsubscribe></p>
            
            					</td>
            				</tr>
            			</table>
            	
            		</td>
            		<td width="20" bgcolor="#f2f2f2" class="hide">&nbsp;</td>
            	</tr>
            </table>  
  				  
  				</td>
  			</tr>
  		</table>
  		
		</td>
	</tr>
</table>

</body>
</html>
