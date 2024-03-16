@include('layouts.theme.styles')
{{-- @include('layouts.theme.styles3') --}}
<div wire:ignore.self class="modal fade" id="theModal2" tabindex="-1"
   role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">





<div class="contenedor__todo">
    <div class="caja__trasera">
        <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Comunicate con el Administrador</p>
            <button id="btn__registrarse">Enviar Datoss</button>
        </div>
    </div>

    <!--Formulario de Login y registro-->
    <div class="contenedor__login-register">
        <!--Login-->
        <form action="{{ route('login')}}" method="POST" class="formulario__login">
            @csrf
            <h2>Iniciar Sesión</h2>
            <input type="text" name="email" placeholder="Correo Electrónico">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Entrar</button>

        </form>

        <!--Register-->
        <form action="" class="formulario__register">
            <h2>Proporciona tus datos</h2>
            <input type="text" placeholder="Nombre completo">
            <input type="text" placeholder="Correo Electronico">
            <input type="text" placeholder="Cedula de Identidad">
            <input type="password" placeholder="Contraseña">
            <button>Enviar</button>
        </form>
    </div>
</div>

      </div>
    </div>
    @include('layouts.theme.scripts')
    {{-- @include('layouts.theme.scripts3') --}}
</div>
