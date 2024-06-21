<?php

namespace App\Http\Controllers;

use Session;
use App\Property;
use App\Gallery;
use App\Enquiry;
use App\Setting;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries = Enquiry::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.enquiry.index', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'title' => 'required|unique:communities',
        ]);

        $enquiry = Enquiry::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
        ]);


        Session::flash('success', 'Enquiry created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        return view('admin.enquiry.edit', compact('enquiry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        // validation
        $this->validate($request, [
            'title' => "required",
        ]);

        $enquiry->title = $request->title;
        $enquiry->slug = Str::slug($request->title, '-');
        $enquiry->description = $request->description;

        if($request->hasFile('image')){
            \Log::info('hasFile');
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/communities/'), $image_new_name);
            $enquiry->image =  $image_new_name;
        }


        $enquiry->save();

        Session::flash('success', 'Enquiry updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        if($enquiry){
            $enquiry->delete();

            Session::flash('success', 'Enquiry deleted successfully');
            return redirect()->route('enquiry.index');
        }
    }


    public function sendBottomEnquiry(Request $request, $slug){
        $messageData = $request->message;
        Enquiry::create([
            'type'=> $request->type,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $messageData,
            'page_link'=> $request->page,
        ]);

        $tableAdmin = '';
        $table = '<style> table, th, td { border: 1px solid black; } </style>';
        $tableAdmin .= '<table style="border: 1px solid black;">';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Name</th><td style="border: 1px solid black;">'.$request->name.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Contact</th><td style="border: 1px solid black;">'.$request->phone.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Type</th><td style="border: 1px solid black;">'.$request->type.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Message</th><td style="border: 1px solid black;">'.$messageData.'</td></tr>';
        $tableAdmin .= '</table>';

        $contentAdminZoho = "<b style='font-size:15px'> Samana leads Admin,</b> <br> <h2>Lead Details: </h2><br> ".$tableAdmin."<br><a href='https://uaere.ae/' target='_blank'>Visit Website</a>";
        $dataZohoAdmin = [
            "fromAddress"=>"info@superdeals.ae",
            "toAddress"=>Setting::first()->email,
            "subject"=> $request->type,
            "content"=>$contentAdminZoho,
            "askReceipt" =>"yes",
        ];

        $result_message_admin_zoho = $this->mailZohoSet($dataZohoAdmin);
        \Log::info(print_r($result_message_admin_zoho,true));
        $resposeData['type'] = $request->type;

        
        $resposeData['type'] = $request->type;
        
        
        return $resposeData;

    }
    

    public function sendHeroEnquiry(Request $request, $slug){

        $messageData = $request->message;
        Enquiry::create([
            'type'=> $request->type,
            'name'=> $request->name,
            'email'=> "hero page",
            'phone'=> $request->phone,
            'message'=> $messageData,
            'page_link'=> $request->page,
        ]);

        $tableAdmin = '';
        $table = '<style> table, th, td { border: 1px solid black; } </style>';
        $tableAdmin .= '<table style="border: 1px solid black;">';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Name</th><td style="border: 1px solid black;">'.$request->name.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Contact</th><td style="border: 1px solid black;">'.$request->phone.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Type</th><td style="border: 1px solid black;">'.$request->type.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Message</th><td style="border: 1px solid black;">'.$messageData.'</td></tr>';
        $tableAdmin .= '</table>';

        $contentAdminZoho = "<b style='font-size:15px'> Samana leads Admin,</b> <br> <h2>Lead Details: </h2><br> ".$tableAdmin."<br><a href='https://uaere.ae/' target='_blank'>Visit Website</a>";
        $dataZohoAdmin = [
            "fromAddress"=>"info@superdeals.ae",
            "toAddress"=>Setting::first()->email,
            "subject"=> $request->type,
            "content"=>$contentAdminZoho,
            "askReceipt" =>"yes",
        ];

        $result_message_admin_zoho = $this->mailZohoSet($dataZohoAdmin);
        \Log::info(print_r($result_message_admin_zoho,true));
        $resposeData['type'] = $request->type;
        
        
        return $resposeData;


    }
    
    
    public function sendEnquiryHome(Request $request, $slug){

        
        $type = $request->type;
        $messageData = $request->message;
        $enquiryData = $request->enquiry_data;
        $title = $request->title;
        $propertyData = Property::where('title', $title)->first();

        \Log::info($type);
        $floor_plan_link = $propertyData->floorplan_pdf;
        $brochure_link = $propertyData->brochure_pdf;

        $resposeData = array();



        Enquiry::create([
            'type'=> $request->type,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $messageData,
            'page_link'=> $request->page,
        ]);

        $resposeData['type'] = $type;
        $resposeData['floor_plan_link'] = $floor_plan_link;
        $resposeData['brochure_link'] = $brochure_link;


        $tableAdmin = '';
        $table = '<style> table, th, td { border: 1px solid black; } </style>';
        $tableAdmin .= '<table style="border: 1px solid black;">';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Name</th><td style="border: 1px solid black;">'.$request->name.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Email</th><td style="border: 1px solid black;">'.$request->email.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Contact</th><td style="border: 1px solid black;">'.$request->phone.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Type</th><td style="border: 1px solid black;">'.$request->type.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Message</th><td style="border: 1px solid black;">'.$messageData.'</td></tr>';
        $tableAdmin .= '</table>';

        $contentAdminZoho = "<b style='font-size:15px'> Samana leads Admin,</b> <br> <h2>Lead Details: </h2><br> ".$tableAdmin."<br><a href='https://uaere.ae/' target='_blank'>Visit Website</a>";
        $dataZohoAdmin = [
            "fromAddress"=>"info@superdeals.ae",
            "toAddress"=>Setting::first()->email,
            "subject"=> $request->type,
            "content"=>$contentAdminZoho,
            "askReceipt" =>"yes",
        ];

        $result_message_admin_zoho = $this->mailZohoSet($dataZohoAdmin);
        \Log::info(print_r($result_message_admin_zoho,true));

        
        
        return $resposeData;
    }
    


    public function sendEnquiry(Request $request, $slug){

        
        $type = $request->type;
        $messageData = $request->message;
        $enquiryData = $request->enquiry_data;
        $title = $request->title;
        $propertyData = Property::where('title', $title)->first();

        \Log::info($type);
        $floor_plan_link = $propertyData->floorplan_pdf;
        $brochure_link = $propertyData->brochure_pdf;

        $resposeData = array();



        Enquiry::create([
            'type'=> $request->type,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $messageData,
            'page_link'=> $request->page,
        ]);

        $resposeData['type'] = $type;
        $resposeData['floor_plan_link'] = $floor_plan_link;
        $resposeData['brochure_link'] = $brochure_link;


        $tableAdmin = '';
        $table = '<style> table, th, td { border: 1px solid black; } </style>';
        $tableAdmin .= '<table style="border: 1px solid black;">';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Name</th><td style="border: 1px solid black;">'.$request->name.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Email</th><td style="border: 1px solid black;">'.$request->email.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Contact</th><td style="border: 1px solid black;">'.$request->phone.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Type</th><td style="border: 1px solid black;">'.$request->type.'</td></tr>';
        $tableAdmin .= '<tr><th style="border: 1px solid black;">Message</th><td style="border: 1px solid black;">'.$messageData.'</td></tr>';
        $tableAdmin .= '</table>';

        $contentAdminZoho = "<b style='font-size:15px'> Samana leads Admin,</b> <br> <h2>Lead Details: </h2><br> ".$tableAdmin."<br><a href='https://uaere.ae/' target='_blank'>Visit Website</a>";
        $dataZohoAdmin = [
            "fromAddress"=>"info@superdeals.ae",
            "toAddress"=>Setting::first()->email,
            "subject"=> $request->type,
            "content"=>$contentAdminZoho,
            "askReceipt" =>"yes",
        ];

        $result_message_admin_zoho = $this->mailZohoSet($dataZohoAdmin);
        \Log::info(print_r($result_message_admin_zoho,true));

        
        
        return $resposeData;
    }

    public function mailZohoSet($data){
        
        
        $mailResult = $this->mailZohoLaunch($data);

        \Log::info(print_r($mailResult,true));
        if(isset($mailResult["data"]["errorCode"]) && $mailResult["data"]["errorCode"] == "INVALID_OAUTHTOKEN"){

            \Log::info("Get New Access Token");
            $newAccessTokenGenerated = $this->generateZohoAcessToken();
            if($newAccessTokenGenerated != ''){
                \Log::info("New Access Token Generated");
                $mailResult = $this->mailZohoLaunch($data);
            }
        }

        return "Mail Launch Done";

    }



    public function mailZohoLaunch($data){

        $settings = Setting::first();
        $zohoAccountID = '1359402000000008002';
        $zohoAccessToken = $settings->zoho_access_token;
        $zohoRefreshToken = '1000.813086803d38b8260b7854742c435b53.8b8f81585b5ed41e69e191dca9980ad4';
        $url = 'https://mail.zoho.com/api/accounts/'.$zohoAccountID.'/messages';

        \Log::info("EnquiryController : mailZohoSent: zohoAccessToken:  ".print_r($zohoAccessToken,true));

        $postdata = json_encode($data);
        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: Zoho-oauthtoken ' . $zohoAccessToken));
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result,true);
        
        return $result;

    }

    public function generateZohoAcessToken(){

        $settings = Setting::first();
        $zohoAccountID = '1359402000000008002';
        $zohoAccessToken = $settings->zoho_access_token;
        $zohoRefreshToken = '1000.813086803d38b8260b7854742c435b53.8b8f81585b5ed41e69e191dca9980ad4';
        $zohoClientId = '1000.KF8VAJJT5Y14FMVTP74ZY9O0ZFFHBC';
        $zohoClientSecret = '3879d5b1e55e756ba65d7e79a30ea027b8a7b53dfe';
        $zohoRedirectURI = 'https://superdeals.ae/zoho_response';
        $zohoScope = 'ZohoMail.messages.CREATE,ZohoMail.messages.READ,ZohoMail.messages.UPDATE';
        $zohoGrantType = 'refresh_token';


        $urlGenerateRefresh = 'https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.813086803d38b8260b7854742c435b53.8b8f81585b5ed41e69e191dca9980ad4&grant_type=refresh_token&client_id=1000.KF8VAJJT5Y14FMVTP74ZY9O0ZFFHBC&client_secret=3879d5b1e55e756ba65d7e79a30ea027b8a7b53dfe&redirect_uri=https://superdeals.ae/zoho_response&scope=ZohoMail.messages.CREATE,ZohoMail.messages.READ,ZohoMail.messages.UPDATE';

        $dataToken = [
            "refresh_token"=>$zohoRefreshToken,
            "grant_type"=>$zohoGrantType,
            "client_id"=>$zohoClientId,
            "client_secret"=>$zohoClientSecret,
            "redirect_uri"=>$zohoRedirectURI,
            "scope"=>$zohoScope,
        ];


        $postdataToken = json_encode($dataToken);

        $ch = curl_init($urlGenerateRefresh); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdataToken);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        
        $resultToken = curl_exec($ch);
        curl_close($ch);

        $resultToken = json_decode($resultToken,true);
        $newAccessToken = $resultToken["access_token"];


        //update access Token in settingsTable
        $settings = Setting::first();
        $settings->update(['zoho_access_token' => $newAccessToken]);


        \Log::info("New Acess Token: ".print_r($newAccessToken,true));

        return $newAccessToken;
    }

    
   
    
   
    
    

   
}