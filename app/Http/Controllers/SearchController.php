<?php

namespace App\Http\Controllers;

use App\Client;
use App\Payment;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->get("s", "");
        $results = array(
            "payments" => Payment::where("name", "like", "%$query%")->get(),
            "users" => User::where("name", "like", "%$query%")->get(),
            "clients" => Client::where("name", "like", "%$query%")->get(),
        );

        return view("search")->with("s", $query)->with("title", "Search results for $query")->with("results", $results);
    }
}
