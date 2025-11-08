<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name')}} @yield('title')</title>
    
    @livewireStyles
    @stack('styles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body>
   
  <div class="area-admin">
    <!-- Menu lateral -->
    <div class="sidebar d-flex flex-column p-3">
      <h4 class="text-white mb-4">Admin</h4>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="bi bi-people me-2"></i> Usuários
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="bi bi-box-seam me-2"></i> Produtos
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="bi bi-gear me-2"></i> Configurações
          </a>
        </li>
        <li>
        <!--chamando a rota logout -->
          <a href="/logout" class="nav-link">
            <i class="bi bi-door-closed me-2"></i> Sair
          </a>
        </li>
      </ul>
    </div>

    <div class="container mt-4" style="height: 800px;">
        @yield('conteudo')
<!--colocando data e nome da pessoa-->
        <h1>Bem vindo a área administrativa {{Auth::user()->name }} hoje são {{date('d/m/y')}}</h1>
    </div>
  </div>



@livewireScripts
@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>