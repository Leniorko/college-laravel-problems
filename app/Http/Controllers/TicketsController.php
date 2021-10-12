<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function newTicket(Request $request)
    {
        if ($request->isMethod("POST")) {

            $username = auth()->user()->login;
            $current_time = now()->timestamp;
            $new_img_name = "problem_$username$current_time";

            $request->file('problem_image')->storeAs("public/problems", $new_img_name);

            // Storage::url() not working perfectly. So seted up it by hand
            $image_url = "/storage/problems/$new_img_name";

            $new_ticket = new Ticket(["name" => $request->name,
                "description" => $request->description,
                "problem_img_link" => $image_url]);
            $new_ticket->user_id = auth()->user()->id;

            // Explicitly setting timestamp
            $new_ticket->created_at = $current_time;
            $new_ticket->updated_at = $current_time;

            $new_ticket->save();
            $new_ticket->refresh();

            return redirect()->route("ticket", ["id" => $new_ticket->id]);
        }

        return view("profile.new_ticket");
    }

    public function changeTicketStatus(Request $request)
    {
        $ticket = Ticket::where('id', $request->id)->get();
        $ticket->status = $request->new_status;

        $ticket->save();

        return redirect()->route("ticket", ["id" => $ticket[0]->id]);
    }

    public function getTicket(Request $request, Ticket $ticket)
    {
        return view("profile.ticket", ["ticket" => $ticket]);
    }

    public function addSolutionImg(Request $request)
    {

    }

    public function deleteTicket(Request $request)
    {

    }
}
