<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        return view('client.contact.index');
    }

    /**
     * Write code on Method
     *
     * @return \Illuminate\Http\RedirectResponse()
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validator = $this->validator($request->all());

            if ($validator->fails()) {
                return redirect('/contacto#contact-form')
                    ->withInput(['name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'subject' => $request->subject,
                        'message' => $request->message,
                    ])
                    ->withErrors($validator);
            }

            Contact::create($request->all());
            session()->flash('success', 'Gracias por contactarnos. nos pondremos en contacto con usted en breve..');

            DB::commit();

            return redirect('/contacto#contact-form');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
    }
}
