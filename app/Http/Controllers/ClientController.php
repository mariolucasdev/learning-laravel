<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * List Clients
     *
     * @return void
     */
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show Client Details By Id
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Form to Create Client
     *
     * @return void
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store Clients Data In Database
     *
     * @return void
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }
}
