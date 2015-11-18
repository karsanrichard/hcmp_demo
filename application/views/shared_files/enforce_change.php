 <link rel="icon" href="<?php echo base_url().'assets/img/coat_of_arms.png'?>" type="image/x-icon" />
    <link href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" rel="stylesheet"/> 
    <link href="<?php echo base_url().'assets/css/select2.css'?>" type="text/css" rel="stylesheet"/> 
  <link href="<?php echo base_url().'assets/css/jquery-ui-1.10.4.custom.min.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/pace-theme-flash.css'?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/sweetalert/lib/sweet-alert.css'?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/alertifyjs/dist/css/alertify_bootstrap_3.css'?>" />
    <script src="<?php echo base_url().'assets/scripts/jquery.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/pace.js'?>" type="text/javascript"></script>
     <script src="<?php echo base_url().'assets/scripts/select2.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/bower_components/sweetalert/lib/sweet-alert.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/bower_components/alertifyjs/dist/js/alertify.js'?>" type="text/javascript"></script>

<style>
<?php 
$this -> session -> sess_destroy(); session_destroy();
?>
	
body{
	
	padding:0;
}
.modal {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('<?php echo base_url().'assets/img/Preloader_4.gif'?>') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .modal {
    display: block;
}
.form-control {
	
	border-radius: 0 !important;;
}
</style>
<title>Change Password</title>
<div class="modal"></div>
<div class="navbar  navbar-static-top" id="top-panel">
  <a href="<?php echo base_url();?>">    
<img style="max-width: 9em; float: left; margin-right: 2px;" src="<?php echo base_url();?>assets/img/coat_of_arms.png" class="img-responsive " alt="Responsive image"></a>

        <div id="logo_text" style="margin-top: 3%">
          <span style="font-size: 1.7em;font-weight: bold">Ministry of Health</span><br />
          <span style="font-size: 1.3em">Health Commodities Management Platform (HCMP)</span> 
        </div>
				
				
	</div>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-4" style="">
				
			</div>
			<div class="col-md-4" style="">
				
				<?php 
if (isset($popup)) {	
	echo	'<div class="alert alert-danger alert-dismissable" style="text-align:center;"> Error! Please make sure your details are correct! Try Again.
<button type="button" class=" close" data-dismiss="alert" aria-hidden="true">×</button>
','</div>';
}
unset($popup);
		
 						?>
			</div>
			<div class="col-md-4" style="">
				
				
			</div>
		</div>
		
	</div>

	<?php 
    $attributes = array( 'id' => 'myform');
	 echo form_open('user/change_default',$attributes); ?>
<div class="container">
    <div class="row">
    	<div role="form" class="col-md-2 go-right">
    		
    		<div class="col-md-12">
          
          
        </div>
    		</div>
		<div role="form" class="col-md-8 ">
			 <div id="contain_login" class="">
    <h2 style="background: #146E37"><span style="margin-right: 0.5em;" class="glyphicon glyphicon-lock"></span>Security Settings</h2> 
    
<div id="login" >
<div class="error"></div>
    
  <div class="form-group" style="margin-top: 2.3em;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control input-lg" name="username" id="username" placeholder="Enter email" required="required">
    <span class="error" id="err" style="margin-left: 0.2em;font-size: 10px"></span>
  </div>
  <div class="form-group" style="margin-bottom: 2em;">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control input-lg" name="new_password" id="new_password" placeholder="New Password" required="required">
    <span class="error" id="result" style="margin-left: 0.2em;font-size: 10px"></span>
  </div>
  
  <div class="form-group" style="margin-bottom: 2em;">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control input-lg" name="new_password_confirm" id="new_password_confirm" placeholder="Confirm Password" required="required">
    <span class="error" id="confirmerror" style="margin-left: 0.2em;font-size: 10px"></span>
  </div>
  
   <input type="submit" class="btn btn-primary " name="activate" id="activate" value="Change" style="margin-bottom: 3%;">
   
  
    
    
</div>


</div><!-- #contain_login -->
		</div>
		<div role="form" class="col-md-1 ">
			</div>
	</div>
</div>
<?php 

		echo form_close();
		?>

<div id="footer">
      <div class="container">
        <p class="text-muted"> Government of Kenya &copy <?php echo date('Y');?>. All Rights Reserved</p>
      </div>
    </div>
    
										
								
<script>

$(document).ready(function () {
	alertify.set({ delay: 15000 });
	alertify.error("This is a security measure.Please Change Your Password to Proceed.", null);
	
	$('#new_password').keyup(function() {
			$('#result').html(checkStrength($('#new_password').val()))
		})
		$('#new_password_confirm').keyup(function() {
			var newps = $('#new_password').val()
			var newpsconfirm = $('#new_password_confirm').val()
			
			if(newps!= newpsconfirm){
						
						 $('#confirmerror').html('Your passwords dont match');
						 return;
						
							}else{
								
								$("#confirmerror").empty();
								$('#confirmerror').html('Your passwords match');
								$('#confirmerror').removeClass('error');
								$('#confirmerror').addClass('successtext')
								
								
							}
		})
		function checkStrength(password) {

			//initial strength
			var strength = 0

			//if the password length is less than 6, return message.
			if (password.length < 6) {
				$('#result').removeClass()
				$('#result').addClass('short')
				return 'Too short'
			}

			//length is ok, lets continue.

			//if length is 8 characters or more, increase strength value
			if (password.length > 7)
				strength += 1

			//if password contains both lower and uppercase characters, increase strength value
			if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
				strength += 1

			//if it has numbers and characters, increase strength value
			if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))
				strength += 1

			//if it has one special character, increase strength value
			if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
				strength += 1

			//if it has two special characters, increase strength value
			if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/))
				strength += 1

			//now we have calculated strength value, we can return messages

			//if value is less than 2
			if (strength < 2) {
				$('#result').removeClass()
				$('#result').addClass('weak')
				$("#result").css("color","#BE2E21")
				return 'Weak'
			} else if (strength == 2) {
				$('#result').removeClass()
				$('#result').addClass('good')
				$("#result").css("color","#006633")
				
				return 'Good'
			} else {
				$('#result').removeClass()
				$('#result').addClass('strong')
				$("#result").css("color","#003300")
				return 'Strong'
			}
		}
	
	
	
	$("#activate").click(function() {

      
      
      var newps = $('#new_password').val()
	  var newpsconfirm = $('#new_password_confirm').val()
	  //check empty fields
            var email = $('#new_password').val()
            var user = $('#username').val()
            var newE = $('#new_password_confirm').val()
            
	  if (email==''||user==''||newE=='') {
				alert('Please make sure no field is empty');
			return;
			}

	  
	  if(newps!= newpsconfirm){
						
						 $('#confirmerror').html('Cannot proceed. Make sure your passwords match');
						$("#myform").submit(function(e){
    					return false;
							});
							}else if (newps=newpsconfirm){
								
								var url = "<?php echo base_url()."user/change_default";?>";
      							ajax_post (url);
								
								
							}
           
    });
    
    
     function ajax_post (url){
    var url =url;

     //alert(url);
    // return;
     var loading_icon="<?php echo base_url().'assets/img/Preloader_4.gif' ?>";
     $.ajax({
          type: "POST",
          data:{ 'new_password': $('#new_password').val(),'new_password_confirm': $('#new_password_confirm').val(),'username': $('#username').val()},
          url: url,
          beforeSend: function() {
            //$(div).html("");
            var answer = confirm("Are you sure you want to proceed?");

        if (answer){
            $('body').addClass("loading");
        } else {
            return false;
        }
             
            
          },
          success: function(msg) {
          //success message
          
          setTimeout(function () {
          	$("#myform").submit(); 
          	
        }, 4000);
        
              
          }
           
        }); 
}
});
</script>