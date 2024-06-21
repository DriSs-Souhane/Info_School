<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Mail\InscriptionStatus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class InscriptionController extends Controller
{
    
    public function showForm()
    {
         return view('inscription');
    }


    public function submitForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:inscriptions,email',
            'phone_number' => 'required',
            'filiere' => 'required',
           
        ]);
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:inscriptions,email',
            'phone_number' => 'required',
            'filiere' => 'required',
          
        ];
        
        $messages = [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address has already been used.',
            'phone_number.required' => 'Please enter your phone number.',
            'filiere.required' => 'Please select your field of study (filiere).',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $validated = $request->validate($rules);
        $inscription = new Inscription();
        $inscription->first_name = $request->first_name;
        $inscription->last_name = $request->last_name;
        $inscription->email = $request->email;
        $inscription->phone_number = $request->phone_number;
        $inscription->filiere = $request->filiere;
     
        $inscription->save();
        

        return redirect()->back()->with('success', 'Inscription submitted successfully.');
    }
   

    public function accept($id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->status = 'accepted';
        $inscription->save();

        Mail::to($inscription->email)->send(new InscriptionStatus($inscription, 'accepted'));


        return redirect()->route('inscriptions.index')->with('success', 'Inscription accepted and email sent.');

    }

    public function reject($id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->status = 'rejected';
        $inscription->save();

        Mail::to($inscription->email)->send(new InscriptionStatus($inscription, 'rejected'));
        return redirect()->route('inscriptions.index')->with('success', 'Inscription rejected and email sent.');

        
    }
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('admin.inscriptions.index', compact('inscriptions'));
    }

}