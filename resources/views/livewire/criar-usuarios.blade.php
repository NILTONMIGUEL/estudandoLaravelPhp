<div>
    <form wire:submit="salvar">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" wire:model="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Salvar Usuário</button>
    </form>

</div>