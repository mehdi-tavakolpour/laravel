<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function add(Request $request){

    	$orgText = $request->input("orgText"); // put original text in variable

    	$orgText = strtolower($orgText); // convert original text to lowercase

    	//replace all dots to Commas in string and keeping in temp variable 
    	$str2 = ".";
		$str4 = ",";
		$tempText = str_replace( $str2 , $str4,$orgText);

		//spliting words and put them in  $text array
		//all items of this array are Paragraphs starter
		$texts = explode(",", $tempText);

		foreach ($texts as $text) {
			$text = trim($text);//remove space inside variable
			$upperText = ucfirst($text); //change first letter of Paragraph starter to uppercase
			$orgText = str_replace( $text , $upperText,$orgText);//replace Paragraph starter in original string
		}





		$namesText = $request->input("namesText"); // put names text in variable

		$namesText = strtolower($namesText); // convert names text to lowercase

		//spliting words and put them in  $text array
		//all items of this array  are names and must be starts by uppercase

		$texts = explode(",", $namesText);

		foreach ($texts as $text) {
			$text = trim($text);//remove space inside variable
			$upperText = ucfirst($text); //change first letter of Paragraph starter to uppercase
			$orgText = str_replace( $text , $upperText,$orgText);//replace names in original string
		}




	
	
		return redirect()->back()->with('message', $orgText);
    	 // return view('convert',compact('orgText'));
    	
    }
}