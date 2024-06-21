

<?php if(!empty($property->payment_construction) && !empty($property->payment_handover)){ ?>
    <section class="community mt-4">
        <div class="container">
            <div class="section-head-two mb-50 payment_plan_heading">
                <h2 class="mb-0 primary-color">5 YEARS PAYMENT PLAN</h2>
            </div>
            <div class="row mb-30">
                <div class="col-md-5 col-lg-5 col-xs-5 div_construction_handover">
                    <h2 class="mb-0"><span class="pp_percentage_font">{{$property->payment_construction}}</span> <div>During Construction</div></h2>
                </div>
                <div class="col-md-2 col-lg-2 col-xs-2 div_construction_handover">
                    <h2 class="mb-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow_payment_plan">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.14645 4.64645C8.32001 4.47288 8.58944 4.4536 8.78431 4.58859L8.85355 4.64645L15.8536 11.6464C16.0271 11.82 16.0464 12.0894 15.9114 12.2843L15.8536 12.3536L8.85355 19.3536C8.65829 19.5488 8.34171 19.5488 8.14645 19.3536C7.97288 19.18 7.9536 18.9106 8.08859 18.7157L8.14645 18.6464L14.793 12L8.14645 5.35355C7.97288 5.17999 7.9536 4.91056 8.08859 4.71569L8.14645 4.64645Z" fill="currentColor"></path>
                        </svg>
                    </h2>
                </div>
                <div class="col-md-5 col-lg-5 col-xs-5 div_construction_handover">
                   <h2 class="mb-0"><span class="pp_percentage_font">{{$property->payment_handover}}</span> <div>After Handover</div></h2>
                </div>
                
            </div>
        </div>
    </section>
    <?php } ?>