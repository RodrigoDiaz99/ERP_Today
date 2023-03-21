<footer class="px-4 py-20 text-white bg-black">
    <div class="mx-auto max-w-7xl">
      <div class="grid grid-cols-2 gap-4 mb-3 md:grid-cols-4">
        <a href="/" title="Go to Kutty Home Page" class="col-span-2 mb-12 md:col-span-1">
          
            <img src="{{url('https://res.cloudinary.com/hfakqpuzy/image/upload/v1625275000/TOXIK_2_rspebx.png')}}"
            class="w-24 lg:w-48"
            alt="logo image">
        </a>
        <nav class="mb-8">
          <p class="mb-3 text-xs font-bold tracking-wider text-gray-500 uppercase">Nosotros</p>
          <a href="" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Tienda</a>

          @if (Route::has('login'))
          @auth
          <a href="" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Panel</a>
          @else

          <a href="{{route('login')}}" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Acceder</a>
              @if (Route::has('register'))
              <a href="{{route('register')}}" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Registro</a>

              @endif
          @endauth
      @endif

       
         
      <form action="https://www.paypal.com/donate" method="post" target="_top">
        <input type="hidden" name="hosted_button_id" value="Y96EEWAWXETCL" />
        <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_SM.gif" border="0"
            name="submit" title="PayPal - The safer, easier way to pay online!"
            alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1" height="1" />
    </form>
    
        </nav>
     
        <nav class="mb-8">
          <p class="mb-3 text-xs font-bold tracking-wider text-gray-500 uppercase">Contacto</p>
          <a href="https://twitter.com/carlramireza?s=21" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Twitter</a>
          <a href="https://instagram.com/carlramireza?utm_medium=copy_link" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Instagram</a>
          <a href="https://www.facebook.com/CarlosRamOficial/" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Facebook</a>
       
        </nav>
        <nav class="mb-8">
          <p class="mb-3 text-xs font-bold tracking-wider text-gray-500 uppercase">Legal</p>
          <a href="" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Terminos de Servicio</a>
          <a href="" class="flex mb-3 text-sm font-medium transition md:mb-2 hover:text-primary">Politicas de privacidad</a>
  
     
        </nav>
      </div>
      
      <p class="text-sm font-medium text-left text-gray-600 md:text-center">© Copyright 2021 MexicanShop. Todos los derechos reservados.</p>
      <p class="text-sm font-medium text-left text-gray-600 md:text-center">© Design by <a target="_blank" href="https://serviciospeninsula.xyz" class="text-sm font-medium text-left text-gray-600 md:text-center">  Servicios Informaticos Peninsula</a> </p>
    </div>
  </footer>
  