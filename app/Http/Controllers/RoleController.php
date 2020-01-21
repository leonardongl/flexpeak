<?php

namespace FlexPeak\Http\Controllers;


use FlexPeak\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Listar todas os cargos
        $roles = Role::all()->where('user_id', '=', Auth::id());

        // Chamando a função para contar o número de cargos
        $numberRoles = $this->count($roles);

        return view("role.index")->with(["roles" => $roles, "numberRoles" => $numberRoles]);
    }

    public function show(Role $role)
    {
        return view("role.show")->with(['role' => $role]);
    }

    public function create()
    {
        return view("role.create");
    }

    public function store(Request $request)
    {
        $role = [
            'name' => ucfirst($request->name),
            'user_id' => Auth::id()
        ];

        // Cria um novo cargo
        Role::create($role);

        return redirect()->route("roles");
    }

    public function edit(Role $role)
    {
        return view("role.edit")->with(['role' => $role]);
    }

    public function update(Request $request, Role $role)
    {
        $role->name = ucfirst($request->name);

        // Atualiza dados do cargo
        $role->save();

        return redirect()->route("roles");
    }

    public function remove(Role $role)
    {
        return view("role.remove")->with(['role' => $role]);
    }

    public function destroy(Role $role)
    {
        // Deleta o cargo com o ID passado
        $role->delete();

        DB::update("UPDATE contacts SET role_id = 0 WHERE role_id = ?", [$role->id]);

        return redirect()->route("roles");
    }

    /*
     * Função privada para contar o número de cargos
     */
    private function count($query)
    {
        $numberRoles = 0;

        // Contando número de contatos
        foreach ($query as $q) {
            $numberRoles++;
        }

        return $numberRoles;
    }
}
