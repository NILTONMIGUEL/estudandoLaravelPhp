<div class="login-container">
    <h2>Bem-vindo(a) ao <br><span style="color:#0d6efd;">{{config('app.name')}}</span></h2>
    <form action="#" method="POST" wire:submit="login">
      @csrf <!--serve para manter ele mais seguro , para ser enviado apenas desse formulário-->
      <div class="input-group">
        <input type="email" name="email" placeholder="E-mail" wire:model="email" id="email" required>
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="password" id="password" wire:model="password" required>
      </div>
      <button type="submit" class="login-btn">Entrar</button>
      <div class="links">
        <p><a href="#">Esqueceu a senha?</a></p>
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
      </div>
      <div class="text-center">
        <small><a href="#">esqueceu a senha</a></small>
      </div>
      <!--criando mensagem de alerta para erros-->
      @error('email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      @error('password')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <!--criando condição para mostrar erro de validação-->
      @if(session()->has('error'))
      <div class="alert alert-danger">{{session()->get('error')}}</div>
      @endif
    </form>
  </div>