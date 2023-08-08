<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $ticketcount = Ticket::count();
        // dd($ticketcount);
        return view('dashboard');
    }

    public function index()
    {
        // $ticketcount = Ticket::count();
        // // dd($ticketcount);
        return view('dashboard');
    }
}
