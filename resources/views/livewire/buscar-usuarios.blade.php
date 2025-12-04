<div>
    <input type="text" name="search" placeholder="buscar-vagabundos" wire:model.live.debounce.500ms='search' class='form-control mb-3'>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{route('usuarios-cadastrar')}}" class="btn btn-success">Novo Cadastro</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('usuarios-alterar', $user->id)}}" class="bi bi-pencil btn btn-primary"></a>
                            <a href="#" wire:click='apagar({{$user->id}})' class="bi bi-trash btn btn-danger"></a1>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
{{ $users->links() }}


</div>
