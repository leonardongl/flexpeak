<?php

namespace FlexPeak\Http\Controllers;

use FlexPeak\Company;
use FlexPeak\Contact;
use FlexPeak\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Chamando a função para contar o número de cada tabela
        $numberContacts = $this->count(Contact::all()->where("user_id", "=", Auth::id()));
        $numberCompanies = $this->count(Company::all()->where("user_id", "=", Auth::id()));
        $numberRoles = $this->count(Role::all()->where("user_id", "=", Auth::id()));

        return view('home')->with(
            ['numberContacts' => $numberContacts, 'numberCompanies' => $numberCompanies,'numberRoles' => $numberRoles]);
    }

    /*
     * Função privada para contar o número de contatos
     */
    private function count($query)
    {
        $number = 0;

        foreach ($query as $q) {
            $number++;
        }

        return $number;
    }
}
