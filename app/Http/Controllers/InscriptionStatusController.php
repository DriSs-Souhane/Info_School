<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionStatusMail;
use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Mail;

class InscriptionStatusController extends Controller
{
    public function accept($id)
    {
        $inscription = Inscription::find($id);
        if (!$inscription) {
            return redirect()->back()->with('error', 'Inscription not found!');
        }
        
        $inscription->status = 'accepted';
        $inscription->save();

       
        Mail::to($inscription->email)->send(new InscriptionStatusMail($inscription, 'accepted'));

        return redirect()->back()->with('success', 'Inscription accepted and email sent!');
    }

    public function reject($id)
    {
        $inscription = Inscription::find($id);
        if (!$inscription) {
            return redirect()->back()->with('error', 'Inscription not found!');
        }
        
        $inscription->status = 'rejected';
        $inscription->save();

        // Send email
        Mail::to($inscription->email)->send(new InscriptionStatusMail($inscription, 'rejected'));

        return redirect()->back()->with('success', 'Inscription rejected and email sent!');
    }
}
