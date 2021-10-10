<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage(Request $request)
    {

        if ($request->isMethod("POST")) {
            if ($request->decision === "resolved" and isset($request->solution_image)) {
                $resolved_ticket = Ticket::where("id", $request->id)->get()[0];

                $username = auth()->user()->login;
                $ticketCreationDate = $resolved_ticket->created_at;
                $new_img_name = "solution_$username$ticketCreationDate";

                // TODO: Rewrite TicketsController the same way
                $new_file_name = $request->file('solution_image')->store('public/solutions');

                $new_file_name = str_replace("public", "storage", $new_file_name);
                // Storage::url() not working perfectly. So seted up it by hand
                $image_url = "/$new_file_name";
                $resolved_ticket->solution_img_link = $image_url;
                $resolved_ticket->status = $request->decision;
                $resolved_ticket->save();
                $resolved_ticket->refresh();

                $every_ticket = Ticket::all();
                return view("profile.admin", ["tickets" => $every_ticket]);
            }

            if ($request->decision === "rejected") {
                $resolved_ticket = Ticket::where("id", $request->id)->get()[0];

                $resolved_ticket->status = $request->decision;
                $resolved_ticket->save();

                $every_ticket = Ticket::all();
                return view("profile.admin", ["tickets" => $every_ticket]);
            }
        }

        $every_ticket = Ticket::all();
        return view("profile.admin", ["tickets" => $every_ticket]);
    }
}
