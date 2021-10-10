<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function addReview(Request $request)
    {
        Review::create([
            'name' => $request->c_fname.' '.$request->c_lname,
            'email' => $request->c_email,
            'subject' => $request->c_subject,
            'notes' => $request->c_message,
        ]);
        return redirect()->back()->with('status','Kritik dan Saran Berhasil ditambahkan !');
    }
}
