<div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="propertyHomeModalLabel"> Free Download Twin tower</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <section class="contact-innar pa-20" >
                        <div class="container">
                            <div class="row">
                            	<div class="col-md-12 " style="text-align: center;display: none;" id="error_home_msg">
									<h5 style="color:red;font-size: 25px;font-weight: 700;" id="error_home_data">Your Name,Email and phone is Mandatory</h5>
								</div> <!-- /.col- -->
                                <div class="col-md-12">
                                    	
                                        <input type="hidden" id="propertyHomeTitle" name="title" value="8">
                                        <input type="hidden" id="propertyHomeDocument" name="document" value="10">
                                        <input type="hidden" id="propertyHomeSlug" name="slug" value="13">
                                        <div class="contact-form">
                                            <div class="input-full">
                                                <!-- <label for="name">Name*</label> -->
                                                <input type="text" name="name" id="nameHomeModal" placeholder="Your Name*" required>
                                            </div>

                                             <div class="input-full">
                                                <!-- <label for="phone">Phone*</label> -->
                                                <input type="text" name="phone" id="phoneHomeModal" placeholder="050 123 4567" required>
                                            </div>
                                            <div class="input-full">
                                                <!-- <label for="email">Email*</label> -->
                                                <input type="email" name="email" id="emailHomeModal" placeholder="Your Email*" required>
                                            </div>

                                           
                                           
                                            <div class="input-submit">
                                                    <button class="button button-transparent button-flat btn-lg btn-block text-center gen-btn" onclick="submitEnquiry()">Download</button>
                                            </div>
                                        </div>
                                    
                                    

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer text-center">

                </div>
            </div>
        </div>
    </div>

    

    
	<script>
	  const inputModal = document.querySelector("#phoneHomeModal");
	  window.intlTelInput(inputModal, {
	    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.7/build/js/utils.js",
	    initialCountry: "AE",
	  });
	</script>

    <script>
    	
    	var modal = document.getElementById("homeModal");
    	
        function brochureEnquiry(title,slug){
        	
        	$('#propertyHomeSlug').val(slug);
            $('#propertyHomeModalLabel').html('Free Brochure Download '+title);
            $('#propertyHomeTitle').val(title);
            $('#propertyHomeDocument').val("Brochure");
            $('#homeModal').modal('show');

        }


        function submitEnquiry(){

        

			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			var phoneRegex = /^[0-9\+]{1,}[0-9\-]{3,15}$/;

			if($('#nameHomeModal').val() == '' && $('#phoneHomeModal').val() == '' && $('#emailHomeModal').val() == ''){
				$('#error_home_data').html('Your Name,Email and phone is Mandatory');
				$('#error_home_msg').show();
			} else if(!emailRegex.test($('#emailHomeModal').val()) && $('#emailHomeModal').val()!=''){
				$('#error_home_data').html('Please check email format!!');
				$('#error_home_msg').show();
			} else if($('#nameHomeModal').val() == ''){
				$('#error_home_data').html('Your Name is Mandatory');
				$('#error_home_msg').show();
			} else if($('#emailHomeModal').val() == ''){
				$('#error_home_data').html('Your Email is Mandatory');
				$('#error_home_msg').show();
			} else if($('#phoneHomeModal').val() == ''){
				$('#error_home_data').html('Your Phone is Mandatory');
				$('#error_home_msg').show();
			} else {
				$('#error_home_msg').hide();
				$('#error_home_msg').hide();

				var urlHome = 
				$.ajax({
			        url: "/send_enquiry_home/"+parseInt($('#propertyHomeSlug').val()),
			        type: 'GET',
			        data: {
			        		"type":$('#propertyHomeDocument').val(),
			        		"enquiry_data":$('#propertyHomeTitle').val(),
			        		"title":$('#propertyHomeTitle').val(),
			                "name":$('#nameHomeModal').val(),
			                "phone":$('.iti__selected-country').attr('title')+" "+$('#phoneHomeModal').val(),
			                "email":$('#emailHomeModal').val(),
			                "message":$('#propertyHomeModalLabel').html(),
			                "page": window.location.href,
			        },
			        success: function(response){
			            console.log(response);

			            modal.style.display = 'none';
			            $('.modal-backdrop').removeClass('show');
			            
			            if(response['type'] == 'Floor Plan'){
				            if(response['floor_plan_link'] != ''){
				            	var homeURL = window.location.origin;
				            	var downloadFolder = "<?php echo asset('images/floorplan_pdfs')?>";
				            	var openPDF =  downloadFolder +"/"+ response['floor_plan_link'];
				            	window.open(openPDF, '_blank');
				            }
				        }

				        if(response['type'] == 'Brochure'){

				            if(response['brochure_link'] != ''){
				            	var homeURL = window.location.origin;
				            	var downloadFolder = "<?php echo asset('images/brochure_pdfs')?>";
				            	var openPDF =  downloadFolder +"/"+ response['brochure_link'];
				            	window.open(openPDF, '_blank');
				            }
				        }

			            Swal.fire({
			                title: "Thank you!.Your Enquiry was Successful. We shall contact you shortly!!!.",
			                icon: 'success',
			                showCloseButton: true
			            });
			            $('#nameHomeModal').val('');
			            $('#phoneHomeModal').val('');
			            $('#emailHomeModal').val('');
			            $('#message').val('');
			            
			        },
			        beforeSend: function(){
				    	//$('#loader_ajax').show();
				    	$(".gen-btn").prop("disabled",true);
				    	$(".gen-btn").html("<i class='fa fa-refresh fa-spin' style='font-size:24px'></i>&nbsp;&nbsp;Submitting");
				    	
				    },
				    complete: function(){
				        //$('#loader_ajax').hide();
				    	$(".gen-btn").prop("disabled",false);
				    	$(".gen-btn").html("Submit");
				    }    
			    });
			}
		}


    </script>