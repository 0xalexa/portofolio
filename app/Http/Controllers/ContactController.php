<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Pesan berhasil dikirim!']);
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
