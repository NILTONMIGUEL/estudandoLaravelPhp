<div class="login-container">
    <h2>Bem-vindo(a) ao <br><span style="color:#0d6efd;">{{config('app.name')}}</span></h2>
    <form action="#" method="POST" wire:submit="login">
      @csrf
      <div class="input-group">
        @error('email')
        <input type="email" name="email" placeholder="E-mail" wire:model="email" required>
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="Senha" wire:model="password" required>
      </div>
      <button type="submit" class="login-btn">Entrar</button>
      <div class="links">
        <p><a href="#">Esqueceu a senha?</a></p>
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
      </div>
      @error('email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      @error('password')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror


      @if(session()->has('error'))
        <div class="alert alert-danger">{{session()-get('error')}}</div>
      @endif

      <div class="text-center">
        <small><a href="#">esqueceu a senha</a></small>
      </div>
    </form>
  </div>