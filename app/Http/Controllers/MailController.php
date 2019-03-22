<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Redirect;
use Session;
// use App\Http\Requests\ContactRequest;
use Validator;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {


      $validator = \Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required|max:700'
       ]);

       if ($validator->fails())
       {
           return response()->json(['errors' => $validator->errors()->all()]);
       }

      Mail::to("contacto@purasangrecrossfit.cl")->send(new ContactMail($request->input()));

      if (Mail::failures()) {

      //   //dd('algo paso');
        // Session::flash('error','error.');
        return response()->json(['warning']);

      }
      else {
      //
        // Session::flash('success','Su mensaje a sido recibido satisfactoriamente y pronto nos contactaremos con usted.');
        return response()->json(['success']);

      }


    }

}
