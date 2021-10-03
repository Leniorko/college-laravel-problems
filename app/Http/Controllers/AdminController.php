<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage(Request $request)
    {
        $every_ticket = Ticket::all();

        if ($request->isMethod("POST")) {
            if ($request->decision === "resolved") {
                $resolved_ticket = Ticket::where("id", $request->id)->get()[0];

                $username = auth()->user()->login;
                $ticketCreationDate = $resolved_ticket->created_at;
                $new_img_name = "solution_$username$ticketCreationDate";

                $request->file('solution_image')->storeAs("public/solutions", $new_img_name);

                // Storage::url() not working perfectly. So seted up it by hand
                $image_url = "/storage/solutions/$new_img_name";
                $resolved_ticket->solution_img_link = $image_url;
                $resolved_ticket->status = $request->decision;
                $resolved_ticket->save();
                $resolved_ticket->refresh();

                return view("profile.admin", ["tickets" => $every_ticket]);
            }

            if ($request->decision === "rejected") {
                $resolved_ticket = Ticket::where("id", $request->id)->get()[0];

                $resolved_ticket->status = $request->decision;
                $resolved_ticket->save();
                return view("profile.admin", ["tickets" => $every_ticket]);
            }
        }

        return view("profile.admin", ["tickets" => $every_ticket]);
    }
}
