<div>
    <input type="text" name="search" placeholder="buscar-vagabundos" wire:model.live.debounce.500ms='search' class='form-control mb-3'>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
{{ $users->links() }}


</div>
