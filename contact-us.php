<?php include("header.php"); ?>
<div class="clearfix"></div>
  <div class="header_medium two">
    <div class="container">
      <h3 class="bigtext"> Contact <span>Us</span></h3>
     
    </div>
  </div>
  <!--end header medium-->
  
  <div class="section_holder18">
    <div class="container">
      <div class="pagetitle">
        <h3>Contact Us</h3>
      </div>
      <div class="pagenation">&nbsp;<a href="index.php">Home</a> <i>/</i> Contact Us</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>

  <div class="section_holder30">
    <div class="container">	
    
      
 <div class="one_half">
      
        <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
        <br />
        <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: +1-(888)-336-2103</strong></p>
        <br /><br />
        
        <form action="#" method="post" id="sky-form" class="sky-form">
          <h2 class="uppercase"><strong>send us a message</strong></h2>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Name*</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" required id="name">
                </label>
              </section>
              <section class="col col-6">
                <label class="label">E-mail*</label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" required id="email">
                </label>
              </section>
            </div>
            <section>
              <label class="label">Subject</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </section>
            <section>
              <label class="label">Message</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="message" id="message"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>Send a copy to my e-mail address</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
        </form>
      </div>  
      
<div class="one_half last">
      
        <div class="address_info">
        
          <h3>Address Info</h3>
          <ul>
            <h6><strong>Web Solution Expertz</strong></h6>
            968 Kinlea Way NW Calgary AB T3R 0C8
            <br />
              Telephone: +1-(888)-336-2103<br />
            
              E-mail: <a href="mailto:info@websolutionexpertz.online">info@websolutionexpertz.online</a><br />
              Website: <a href="index.html">www.websolutionexpertz.online</a> </li>
          </ul>
        </div>
        <h3>Find the Address</h3>
        <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=USA,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe>
        <div class="bottom_strip"></div><div class="bottom_shape"></div>
        <br />
        <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=USA,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small> 
        
        </div>  

</div>
  
  </div>
  </div>
  <!--end section 22-->
  
 
<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- mega menu -->
<link href="js/mainmenu/sticky.css" rel="stylesheet">
<link href="js/mainmenu/bootstrap.min.css" rel="stylesheet">
<link href="js/mainmenu/demo.css" rel="stylesheet">
<link href="js/mainmenu/menu.css" rel="stylesheet">

<!-- simple line icons -->
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />

<!-- forms -->
<link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">

 
  <!-- ######### JS FILES ######### --> 
<!-- get jQuery from the google apis --> 
<script type="text/javascript" src="js/universal/jquery.js"></script> 

<!-- style switcher --> 
<script src="js/style-switcher/jquery-1.js"></script> 
<script src="js/style-switcher/styleselector.js"></script> 

<!-- mega menu --> 
<script src="js/mainmenu/bootstrap.min.js"></script> 
<script src="js/mainmenu/customeUI.js"></script> 

<!-- sticky menu --> 
<script type="text/javascript" src="js/mainmenu/sticky.js"></script> 
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script> 

<!-- scroll up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
  <script src="js/form/jquery.form.min.js"></script>
<script src="js/form/jquery.validate.min.js"></script>
<script type="text/javascript">
			$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script>
  
  <?php include("footer.php"); ?>