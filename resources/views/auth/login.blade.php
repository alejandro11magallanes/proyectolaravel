
<style>
  .imagen-redonda {
  border-radius: 50%;
  width:200px;
  height:200px;
  text-align: center;
  display: block;
  margin: auto;
}
</style>


<x-guest-layout>





    <div class="font-sans min-h-screen antialiased bg-gray-900 pt-10 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
        <img src="{{URL::asset('images/Dulceria.png')}}" alt="" class="imagen-redonda">
            <!-- Session Status -->
            <x-auth-session-status class="mb-2" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-2" :errors="$errors" />
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
              <h1 class="font-bold text-xl text-center">Inicia sesion con tu cuenta</h1>

              <div class="flex flex-col space-y-1">
                <input type="email" name="email" id="email" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Correo electronico" :value="old('email')" required autofocus />
              </div>

              <div class="flex flex-col space-y-1">
                <input type="password" name="password" id="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Contraseña" required autocomplete="current-password"/>
              </div>



              <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">

                <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors m-auto">Iniciar sesion</button>
              </div>
            </div>
          </form>
          <div class="flex justify-center text-gray-500 text-sm">
          
          </div>
        </div>
    </div>
 
</x-guest-layout>
