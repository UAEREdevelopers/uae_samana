<section class="contact-innar pa-100" style="background: rgb(233, 232, 232);" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-item mb-50">
                        <h4 style="text-align:center;">Contact Us</h4>
                        <div class="contact-lists">

                            <div class="contact-list d-flex justify-content-center">
                                <div class="icon">

                                </div>
                                <a class="btn button-primary rounded primary-color useraction" data-type="call" href="tel:+971588769834"><i class="fas fa-phone-alt primary-color" style="color: white;font-size: 20px;;"></i> +971588769834</a>
                            </div>
                            <div class="contact-list d-flex justify-content-center">
                                <a class="btn button-primary rounded useraction whatapp-btn" data-type="whatsapp" style="color: white;" href="https://api.whatsapp.com/send?phone=971588769834&text=Hi%20there%21%20I%27m%20interested%20to%20know%20more%20Samana%20Property %203"><img src="{{ asset('website') }}/images/whatsapp.png" width="10%"> Whatsapp Now</a>
                            </div>

                            <div class="contact-list d-flex justify-content-center">
                                <img src="{{ asset('website') }}/images/uaelogo.png" alt="" width="100px" class="img-fluid text-center">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="col-md-12 " style="text-align: center;display: none;" id="error_msg_contact">
                                <h5 style="color:red;font-size: 25px;font-weight: 700;" id="error_data_contact">Your Name,Email and phone is Mandatory</h5>
                            </div> <!-- /.col- -->
                        <div class="contact-form">

                            <div class="input-full">
                                <!-- <label for="name">Name*</label> -->
                                <input type="text" name="name" id="namebottom" placeholder="Your Name*" required>
                            </div>

                            <div class="input-full">
                                <!-- <label for="name">Email*</label> -->
                                <input type="email" name="email" id="emailbottom" placeholder="Your Email*" required>
                            </div>
                            <div class="input-full">
                                <!-- <label for="phone">Phone*</label> -->
                                <input type="text" name="phone" id="phonebottom" placeholder="050 123 4567" required>
                            </div>
                            <div class="textarea-full">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="messagebottom" placeholder="Your Message"></textarea>
                            </div>
                            <div class="input-submit">
                                <button type="button" class="button button-primary button-big gen-btn" onclick="submitEnquiryContact()">Submit</button>
                            </div>
                        </div>
                    

                </div>
            </div>
        </div>
    </section>

    <script>
        

        function submitEnquiryContact(){

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phoneRegex = /^[0-9\+]{1,}[0-9\-]{3,15}$/;


            if($('#namebottom').val() == '' && $('#emailbottom').val() == '' && $('#phonebottom').val() == '' && $('#messagebottom').val() == ''){
                $('#error_data_contact').html('Your Name,Email and phone is Mandatory');
                $('#error_msg_contact').show();
            } else if(!emailRegex.test($('#emailbottom').val()) && $('#emailbottom').val()!=''){
                $('#error_data_contact').html('Please check email format!!');
                $('#error_msg_contact').show();
            } else if($('#namebottom').val() == ''){
                $('#error_data_contact').html('Your Name is Mandatory');
                $('#error_msg_contact').show();
            } else if($('#emailbottom').val() == ''){
                $('#error_data_contact').html('Your Email is Mandatory');
                $('#error_msg_contact').show();
            } else if($('#phonebottom').val() == ''){
                $('#error_data_contact').html('Your Phone is Mandatory');
                $('#error_msg_contact').show();
            } else {

                $('#error_msg_contact').hide();
                        $.ajax({
                            url: "/send_bottom_enquiry/slug_null",
                            type: 'GET',
                            data: {
                                    "type":"Bottom Form Lead",
                                    "name":$('#namebottom').val(),
                                    "email":$('#emailbottom').val(),
                                    "phone":$('#phonebottom').val(),
                                    "message":$('#messagebottom').val(),
                                    "page": window.location.href,
                            },
                            success: function(response){
                                console.log(response);

                                

                                Swal.fire({
                                    title: "Thank you!.Your Enquiry was Successful. We shall contact you shortly!!!.",
                                    icon: 'success',
                                    showCloseButton: true
                                });
                                $('#namebottom').val('');
                                $('#phonebottom').val('');
                                $('#emailbottom').val('');
                                $('#messagebottom').val('');
                                
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