<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Admin\ReplyContactMail;
use App\Mail\Admin\SendContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index()
    {
        return view('admin.contact.index');
    }

    public function getContactEmails($type)
    {
        try {
            $emails = match ($type) {
                'favorites' => Contact::where('favorite', 1)->paginate(15),
                'important' => Contact::where('important', 1)->paginate(15),
                default => Contact::paginate(15),
            };
            $unreadEmails = Contact::where('read', 0)->count();
            return response()->json(['emails' => $emails, 'unreadEmails' => $unreadEmails]);

        } catch (\Exception $e) {
            return response()->json('Error to get emails');
        }
    }

    public function markAsFavorite($id)
    {
        try {
            DB::beginTransaction();

            $status = Contact::findOrFail($id);
            $oldStatus = $status->favorite;
            $status->update(['favorite' => !$status->favorite]);

            DB::commit();

            if ($oldStatus) {
                return response()->json(['message' => 'Correo quitado de favoritos']);
            }

            return response()->json(['message' => 'Correo marcado en favoritos']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function markAsImportant($id)
    {
        try {
            DB::beginTransaction();

            $status = Contact::findOrFail($id);
            $oldStatus = $status->important;
            $status->update(['important' => !$status->important]);

            DB::commit();

            if ($oldStatus) {
                return response()->json(['message' => 'Correo quitado de importantes']);
            }

            return response()->json(['message' => 'Correo marcado en importantes']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function markAllAsRead(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());

            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['read' => 1]);
            }
            DB::commit();

            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos marcados como leido'], 200);
            }
            return response()->json(['message' => 'Correo marcado como leido'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function markAllAsUnread(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());

            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['read' => 0]);
            }
            DB::commit();
            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos quitados de leidos'], 200);
            }
            return response()->json(['message' => 'Correo quitado como no leido'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function markAllAsFavorite(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());
            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['favorite' => 1]);
            }
            DB::commit();
            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos marcados en favoritos'], 200);
            }
            return response()->json(['message' => 'Correo marcado en favoritos'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function removeFromFavorite(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());
            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['favorite' => 0]);
            }
            DB::commit();
            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos quitados de favoritos'], 200);
            }
            return response()->json(['message' => 'Correo quitado de favoritos'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function markAllAsImportant(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());
            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['important' => 1]);
            }
            DB::commit();
            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos marcados como importantes'], 200);
            }
            return response()->json(['message' => 'Correo marcado en importantes'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function removeFromImportant(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());
            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->update(['important' => 0]);
            }
            DB::commit();
            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos quitados de importantes'], 200);
            }
            return response()->json(['message' => 'Correo quitado de importantes'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La actualizacion de estado del correo fallo'], 400);
        }
    }

    public function deleteEmails(Request $request)
    {
        try {
            DB::beginTransaction();
            $totalEmails = count($request->all());
            foreach ($request->all() as $email) {
                $status = Contact::findOrFail($email['id']);
                $status->delete();
            }
            DB::commit();

            if ($totalEmails > 1) {
                return response()->json(['message' => 'Correos eliminados'], 200);
            }
            return response()->json(['message' => 'Correos eliminado'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'La eliminacion fallo'], 400);
        }
    }

    public function sendEmail(Request $request)
    {
        Mail::to($request['to'])->send(new SendContactMail($request['message']));
        return response()->json(['message' => 'Correo enviado exitosamente'], 200);
    }

    public function replyEmail(Request $request)
    {
       Mail::to($request['to'])->send(new ReplyContactMail($request['message'],$request['client']));
        return response()->json(['message' => 'Correo enviado exitosamente'], 200);
    }

}
