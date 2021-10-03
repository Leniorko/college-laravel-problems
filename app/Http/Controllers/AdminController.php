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
                $resolver_ticket = Ticket::where("id", $request->id)->get()[0];

                $username = auth()->user()->login;
                $ticketCreationDate = $resolver_ticket->created_at;
                $new_img_name = "solution_$username$ticketCreationDate";

                $request->file('solution_image')->storeAs("public/solutions", $new_img_name);

                // Storage::url() not working perfectly. So seted up it by hand
                $image_url = "/storage/solutions/$new_img_name";
                $resolver_ticket->solution_img_link = $image_url;
                $resolver_ticket->status = $request->decision;
                $resolver_ticket->save();
                $resolver_ticket->refresh();

                return view("profile.admin", ["tickets" => $every_ticket]);
            }

            if ($request->decision === "rejected") {
                $resolver_ticket = Ticket::where("id", $request->id)->get()[0];

                $resolver_ticket->status = $request->decision;
                $resolver_ticket->save();
                return view("profile.admin", ["tickets" => $every_ticket]);
            }
        }

        return view("profile.admin", ["tickets" => $every_ticket]);
    }
}
