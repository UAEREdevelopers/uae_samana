  
    <section id="hero" class="hero-layout-five">
        <div class="hero-image">
                <img src="{{ asset('website') }}/images/banner2.webp" class="hide-desktop " alt="District one" style="width:100%;">
                <img src="{{ asset('website') }}/images/banner23.webp" alt="District one" class="mobile-hide" style="width:auto;">
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 align-self-center sys" style="display: none;">
                        <div class="hero-left banner-text-overlay">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hero-form text-center ">
                            <h3>Register Now</h3>
                            
                                <input type="text" placeholder="Name *" name="name" id="nameHero" required>
                                <input type="text" placeholder="050 123 4567 *" id="phoneHero" name="phone" required>
                                <textarea name="message" id="messageHero" placeholder="Enter Your Message*"></textarea>
                                <button type="button" class="gen-btn" onclick="submitEnquiryHero()">Submit</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        

        function submitEnquiryHero(){

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phoneRegex = /^[0-9\+]{1,}[0-9\-]{3,15}$/;


            if($('#nameHero').val() == '' && $('#phoneHero').val() == '' && $('#messageHero').val() == ''){
                alert('Your Name,phone and Message is Mandatory');
            } else {


                        $.ajax({
                            url: "/send_hero_enquiry/slug_null",
                            type: 'GET',
                            data: {
                                    "type":"Hero Page Lead",
                                    "name":$('#nameHero').val(),
                                    "phone":$('#phoneHero').val(),
                                    "message":$('#messageHero').val(),
                                    "page": window.location.href,
                            },
                            success: function(response){
                                console.log(response);

                                

                                Swal.fire({
                                    title: "Thank you!.Your Enquiry was Successful. We shall contact you shortly!!!.",
                                    icon: 'success',
                                    showCloseButton: true
                                });
                                $('#nameHero').val('');
                                $('#phoneHero').val('');
                                $('#messageHero').val('');
                                
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
    