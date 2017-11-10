	<script type="text/javascript" src="js/jquery-1.6.2.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#contactForm').submit(function(e) {
				contactus();
				e.preventDefault();	
			});	
		});

	</script>


					<p>All fields must be filled.</p>
					<HR/>
					<form id="contactForm" action="contact_submit.php" method="post">
						<table width="auto" align="center" border="0" cellspacing="2" cellpadding="0">
						  <tr>
							<td><label class="label" for="name">Your Names:</label></td>
							<td><input onclick="this.value='';" class="input" name="name" type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" size="25" maxlength="50" /></td>
						  </tr>
						  <tr>
							<td><label class="label" for="email">Email Address:</label></td>
							<td><input onclick="this.value='';" class="input" name="email" type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" size="25" maxlength="30"  /></td>
						  </tr>
						  <tr>
							<td><label class="label" for="message">Query/Comment:</label></td>
							<td align="center"><textarea class="input" name="message" cols="20" rows="4"></textarea></td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td>
								<input type="submit" value="Submit" /><img id="loading" src="images/loading.gif" alt="Sending.." />
							</td>
						  </tr>
						  <tr>
							<td colspan="2"><div id="error">&nbsp;</div></td>
						  </tr>
						</table>
					</form>
