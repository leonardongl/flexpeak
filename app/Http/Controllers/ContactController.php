<?php

namespace FlexPeak\Http\Controllers;

use FlexPeak\Role;
use FlexPeak\Company;
use FlexPeak\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Listar todos os contatos
        $contacts = Contact::all()->where('user_id', '=', Auth::id());

        // Chamando a função para contar o número de contatos
        $numberContacts = $this->count($contacts);

        return view("contact.index")->with(['contacts' => $contacts, 'numberContacts' => $numberContacts]);
    }

    public function show(Contact $contact)
    {
        // Listando empresas e cargos
        $companies = Company::all()->where('user_id', '=', Auth::id());;
        $roles = Role::all()->where('user_id', '=', Auth::id());;

        return view("contact.show")->with(['contact' => $contact, 'companies' => $companies, 'roles' => $roles]);
    }

    public function create()
    {
        // Listando empresas e cargos
        $companies = Company::all()->where('user_id', '=', Auth::id());;
        $roles = Role::all()->where('user_id', '=', Auth::id());;

        return view("contact.create")->with(['companies' => $companies, 'roles' => $roles]);
    }

    public function store(Request $request)
    {
        // Verificando se foi enviado uma imagem
        if($request->file("photo")) {
            // Verificando se a extensão do arquivo é valida
            if ($this->validateImageExtension($request->file("photo")->extension())) {
                $contact = [
                    'name' => ucfirst($request->name),
                    'email' => $request->email,
                    'photo' => $request->file("photo")->store("images"),
                    'cpf' => $request->cpf,
                    'phone' => $request->phone,
                    'street' => ucfirst($request->street),
                    'number' => $request->number,
                    'district' => ucfirst($request->district),
                    'city' => ucfirst($request->city),
                    'uf' => mb_strtoupper($request->uf),
                    'company_id' => mb_strtoupper($request->company_id),
                    'role_id' => mb_strtoupper($request->role_id),
                    'user_id' => Auth::id()
                ];
            } else {
                return view("contact.create")->with(["error" => "photo"]);
            }
        } else {
            $contact = [
                'name' => ucfirst($request->name),
                'email' => $request->email,
                'cpf' => $request->cpf,
                'phone' => $request->phone,
                'number' => $request->number,
                'street' => ucfirst($request->street),
                'district' => ucfirst($request->district),
                'city' => ucfirst($request->city),
                'uf' => mb_strtoupper($request->uf),
                'company_id' => mb_strtoupper($request->company_id),
                'role_id' => mb_strtoupper($request->role_id),
                'user_id' => Auth::id()
            ];
        }

        // Cria um novo contato
        Contact::create($contact);

        return redirect()->route("contacts");
    }

    public function edit(Contact $contact)
    {
        // Listando empresas e cargos
        $companies = Company::all()->where('user_id', '=', Auth::id());;
        $roles = Role::all()->where('user_id', '=', Auth::id());;

        return view("contact.edit")->with(['contact' => $contact, 'companies' => $companies, 'roles' => $roles]);
    }

    public function update(Request $request, Contact $contact)
    {
        // Verificando se foi enviado uma imagem
        if($request->file("photo")){
            // Verificando se a extensão do arquivo é válida
            if ($this->validateImageExtension($request->file("photo")->extension())) {
                $contact->photo = $request->file("photo")->store("images");
            } else {
                return view("contact.edit")->with(['contact' => $contact, 'error' => 'photo']);
            }
        }

        $contact->name = ucfirst($request->name);
        $contact->email = $request->email;
        $contact->cpf = $request->cpf;
        $contact->phone = $request->phone;
        $contact->street = ucfirst($request->street);
        $contact->number = $request->number;
        $contact->district = ucfirst($request->district);
        $contact->city = ucfirst($request->city);
        $contact->uf = mb_strtoupper($request->uf);
        $contact->company_id = $request->company_id;
        $contact->role_id = $request->role_id;

        // Atualiza dados do contato
        $contact->save();

        return redirect()->route("contacts");
    }

    public function remove(Contact $contact)
    {
        // Listando empresas e cargos
        $companies = Company::all()->where('user_id', '=', Auth::id());;
        $roles = Role::all()->where('user_id', '=', Auth::id());;

        return view("contact.remove")->with(['contact' => $contact, 'companies' => $companies, 'roles' => $roles]);
    }

    public function destroy(Contact $contact)
    {
        // Deleta o contato com o ID passado
        $contact->delete();

        return redirect()->route("contacts");
    }

    /*
     * Função privada para validar extensão de foto enviada
     */
    private function validateImageExtension($extension)
    {
        if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg') {
            return true;
        } else {
            return false;
        }
    }

    /*
     * Função privada para contar o número de contatos
     */
    private function count($query)
    {
        $numberContacts = 0;

        // Contando número de contatos
        foreach ($query as $q) {
            $numberContacts++;
        }

        return $numberContacts;
    }
}
