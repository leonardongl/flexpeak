<?php

namespace FlexPeak\Http\Controllers;

use FlexPeak\Company;
use FlexPeak\Contact;
use FlexPeak\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Listar todas as empresas
        $companies = Company::all()->where('user_id', '=', Auth::id());

        // Chamando a função para contar o número de empresas
        $numberCompanies = $this->count($companies);

        return view("company.index")->with(["companies" => $companies, "numberCompanies" => $numberCompanies]);
    }

    public function show(Company $company)
    {
        // Listando todos os contatos dessa empresa
        $contacts = Contact::all()->where("company_id","=", $company->id)->where("user_id", "=", Auth::id());

        // Listando todos os cargos
        $roles = Role::all()->where('user_id', '=', Auth::id());;

        return view("company.show")->with(['company' => $company, 'contacts' => $contacts, 'roles' => $roles]);
    }

    public function create()
    {
        return view("company.create");
    }

    public function store(Request $request)
    {
        $company = [
            'name' => ucfirst($request->name),
            'corporate_name' => ucfirst($request->corporate_name),
            'cnpj' => $request->cnpj,
            'street' => ucfirst($request->street),
            'number' => $request->number,
            'district' => ucfirst($request->district),
            'city' => ucfirst($request->city),
            'uf' => mb_strtoupper($request->uf),
            'user_id' => Auth::id()
        ];

        // Cria uma nova empresa
        Company::create($company);

        return redirect()->route("companies");
    }

    public function edit(Company $company)
    {
        return view("company.edit")->with(['company' => $company]);
    }

    public function update(Request $request, Company $company)
    {
        $company->name = ucfirst($request->name);
        $company->corporate_name = ucfirst($request->corporate_name);
        $company->cnpj = $request->cnpj;
        $company->street = ucfirst($request->street);
        $company->number = $request->number;
        $company->district = ucfirst($request->district);
        $company->city = ucfirst($request->city);
        $company->uf = mb_strtoupper($request->uf);

        // Atualiza dados da empresa
        $company->save();

        return redirect()->route("companies");
    }

    public function remove(Company $company)
    {
        return view("company.remove")->with(['company' => $company]);
    }

    public function destroy(Company $company)
    {
        // Deleta a empresa com o ID passado
        $company->delete();

        DB::update("UPDATE contacts SET company_id = 0 WHERE company_id = ?", [$company->id]);

        return redirect()->route("companies");
    }

    /*
     * Função privada para contar o número de empresas
     */
    private function count($query)
    {
        $numberCompanies = 0;

        // Contando número de empresas
        foreach ($query as $q) {
            $numberCompanies++;
        }

        return $numberCompanies;
    }
}
