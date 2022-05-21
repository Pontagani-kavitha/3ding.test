<div class="offcanvas offcanvas-end" tabindex="-1" id="help-me" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header justify-content-end">
		<!-- Close Buttton -->
		<button type="button" class="btn-close text-reset text-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>

	<div class="offcanvas-body ">
		<h3 id="offcanvasRightLabel" class="text-center">Help me Choose a 3D Printer</h3>


		<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments Do not remove this code are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
		<div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm' style='background-color: white;color: black;max-width: 600px;'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
			<form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1665145000106021013 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory1665145000106021013()' accept-charset='UTF-8'>
				<input type='text' style='display:none;' name='xnQsjsdp' value='a7b3d44633db77947b602f28991297b31963ce7a6fd20f2497993a6e988aec7e'></input>
				<input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
				<input type='text' style='display:none;' name='xmIwtLD' value='fef4548fc7135ea636ea629dc779f28d0df0c3015b390e072cb324fb2e3d6713'></input>
				<input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
				<input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.3ding.in&#x2f;3dprinters&#x2f;thankyou'> </input>
				<!-- Do not remove this code. -->
				<input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
				<input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
				<!-- Do not remove this code. -->
				<!-- <style> -->

				<form autocomplete="on">

					<div class="my-3 form-floating">
						<textarea class="form-control" placeholder="Leave a comment here" id='LEADCF23' name='LEADCF23' style="height: 100px"></textarea>
						<label for="LEADCF23">What's your End Use?</label>
					</div>

					<div class="my-3 form-floating">
						<select class="form-select" id="budget" aria-label="budget" id='LEADCF25' name='LEADCF25'>
							<option value="20K">20K </option>
							<option value="50K">50K</option>
							<option value="1L" selected>1L (Market Avg for FFF) </option>
							<option value="5L">5L</option>
							<option value="10L">10L</option>
							<option value="50L">50L</option>
							<option value="1Cr">1Cr+</option>
						</select>

						<!-- <input type='text' id='LEADCF25' name='LEADCF25' maxlength='255'></input> -->

						<label for="LEADCF25">What's your approximate budget?</label>
					</div>



					<div class="form-floating py-0 mb-3">
						<select class="form-select" id='LEADCF24' name='LEADCF24' aria-label="size">
							<option value="150 mm">150 mm</option>
							<option selected value="200 mm">200 mm (Market Avg) </option>
							<option value="300 mm">300 mm</option>
							<option value="500 mm">500 mm</option>
							<option value="1 metre">1 metre</option>
						</select>
						<!-- <textarea id='LEADCF24' name='LEADCF24'></textarea> -->
						<label for="size">What's your max part size? (in any axis)</label>
					</div>

					<div class="form-floating py-0 mb-3">
						<input type="text" ftype='email' id='Email' name='Email' maxlength='100' class="form-control" placeholder="name@example.com">
						<label for="Email">Email address</label>
					</div>

					<div class="form-floating py-0 mb-3">
						<input type='text' id='Mobile' name='Mobile' maxlength='30' class="form-control" placeholder="999 999 9999">
						<label for="Mobile">Mobile</label>

					</div>
					<div class="form-floating py-0 mb-3">
						<input type="text" class="form-control" id="Last_Name" name='Last Name' maxlength='80' placeholder="John Doe">
						<label for="Last_Name">Name</label>
					</div>

					<button type="submit" id='formsbumit' value='Submit' title='Submit' class="btn btn-primary">Help me!</button>

					<div class=" d-none  ">
						<div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF4'>Product Interest</label></div>
						<div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF4' name='LEADCF4' multiple>
								<option selected value='Consulting'>Consulting</option>
							</select>
							<div class='zcwf_col_help'></div>
						</div>
					</div>

				</form>

		</div>


	</div>

	<script>
		function validateEmail1665145000106021013() {
			var form = document.forms['WebToLeads1665145000106021013'];
			var emailFld = form.querySelectorAll('[ftype=email]');
			var i;
			for (i = 0; i < emailFld.length; i++) {
				var emailVal = emailFld[i].value;
				if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
					var atpos = emailVal.indexOf('@');
					var dotpos = emailVal.lastIndexOf('.');
					if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
						alert('Please enter a valid email address. ');
						emailFld[i].focus();
						return false;
					}
				}
			}
			return true;
		}

		function checkMandatory1665145000106021013() {
			var mndFileds = new Array('Last Name', 'Email');
			var fldLangVal = new Array('Last\x20Name', 'Email');
			for (i = 0; i < mndFileds.length; i++) {
				var fieldObj = document.forms['WebToLeads1665145000106021013'][mndFileds[i]];
				if (fieldObj) {
					if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
						if (fieldObj.type == 'file') {
							alert('Please select a file to upload.');
							fieldObj.focus();
							return false;
						}
						alert(fldLangVal[i] + ' cannot be empty.');
						fieldObj.focus();
						return false;
					} else if (fieldObj.nodeName == 'SELECT') {
						if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
							alert(fldLangVal[i] + ' cannot be none.');
							fieldObj.focus();
							return false;
						}
					} else if (fieldObj.type == 'checkbox') {
						if (fieldObj.checked == false) {
							alert('Please accept  ' + fldLangVal[i]);
							fieldObj.focus();
							return false;
						}
					}
					try {
						if (fieldObj.name == 'Last Name') {
							name = fieldObj.value;
						}
					} catch (e) {}
				}
			}
			trackVisitor();
			if (!validateEmail1665145000106021013()) {
				return false;
			}
			document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
		}

		function tooltipShow1665145000106021013(el) {
			var tooltip = el.nextElementSibling;
			var tooltipDisplay = tooltip.style.display;
			if (tooltipDisplay == 'none') {
				var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
				for (i = 0; i < allTooltip.length; i++) {
					allTooltip[i].style.display = 'none';
				}
				tooltip.style.display = 'block';
			} else {
				tooltip.style.display = 'none';
			}
		}
	</script>



	<!-- <script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:'2fe59aafaad6e4a947ba045feb9c31f2ca46f1b18637b5cd7f40c671dced934098226a7e56b457bcaa14e7654c99b1bf', values:{},ready:function(){}};var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.com/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads1665145000106021013']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads1665145000106021013']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads1665145000106021013']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script> -->
	<!-- Do not remove this --- Analytics Tracking code starts -->
	<script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=fef4548fc7135ea636ea629dc779f28d0df0c3015b390e072cb324fb2e3d6713gida7b3d44633db77947b602f28991297b31963ce7a6fd20f2497993a6e988aec7egid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'></script><!-- Do not remove this --- Analytics Tracking code ends. -->
	</form>
</div>