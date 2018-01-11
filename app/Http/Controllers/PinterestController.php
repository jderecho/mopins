<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


const PINTEREST_API = "https://api.pinterest.com";
const MOPINS_APP_ID = "4944294436510123781";
const MOPINS_APP_SECRET = "44239a4a7c076daac2c29a53724c9aa616445ca4c3abfc025bfe7a838f713b67";

class PinterestController extends Controller
{
	
 	public function show(){
		return view('board');
	}
    //
    public function pins(Request $request){

    	$url = PINTEREST_API;
    	$url .= "/oauth";
    	$url .= "/?response_type=code";
    	$url .= "&redirect_uri=https://localhost/mopins/access";
    	$url .= "&client_id=" . MOPINS_APP_ID;
    	$url .= "&state=test";
    	$url .= "&scope=read_public,write_public";
    	
    	return URL::to($url);

    }
    public function access(Request $request){

	    $url = PINTEREST_API;
	    $url .= "/v1/oauth/token?";
	    $url .= "grant_type=authorization_code";
	    $url .= "&client_id=".MOPINS_APP_ID;
	    $url .= "&client_secret=".MOPINS_APP_SECRET;
	    $url .= "&code=".$request->code;

    	return $url;
    }
}

