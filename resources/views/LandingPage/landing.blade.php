<x-app2-layout>
    <div class="bg-center bg-cover bg-no-repeat relative py-8" style="background-image: url(images/bg-hero.jpg);">

      <div class="bg-center bg-cover bg-no-repeat absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to">
      </div>

      <div class="container z-30 relative pt-20 sm:pt-56 lg:pt-64 pb-12 sm:pb-48 lg:pb-48">
          <div class="flex flex-col lg:flex-row justify-center items-center">
              <div class="rounded-full border-8 border-primary shadow-xl">
                  <img src="{{ asset('images/carlos.jpg') }}" class="h-48 sm:h-56 rounded-full" alt="author">
              </div>
              <div class="lg:pl-8 pt-8 sm:pt-10 lg:pt-0">
                  <h1 class="font-header text-white text-4xl sm:text-5xl md:text-6xl text-center sm:text-left">
                      ¡Hola, Bienvenido a MexicanShop!</h1>
                  <div class="flex flex-col sm:flex-row justify-center lg:justify-start pt-3 sm:pt-5">
                      <div class="flex justify-center sm:justify-start items-center pl-0 md:pl-1">
                          <p class="font-body text-white text-lg uppercase">Siguenos en nuestras redes</p>
                      </div>
                      <div class="flex items-center justify-center sm:justify-start pt-5 sm:pt-0 pl-2">
                          <a href="https://www.facebook.com/CarlosRamOficial/">
                              <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/></g></svg>
                          </a>

                          <a href="https://instagram.com/carlramireza?utm_medium=copy_link" class="pl-4">
                              <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                  <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                  <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                  <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#ffffff" data-original="#000000" style="" class=""/>
                              </svg>
                          </a>

                          <a href="https://twitter.com/carlramireza?s=21" class="pl-4">
                              <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" viewBox="0 0 496 496" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                  <path d="M365.008,0H130.992C57.536,0,0,57.536,0,130.992v234.016C0,438.464,57.536,496,130.992,496h234.016     C438.464,496,496,438.464,496,365.008V130.992C496,57.536,438.448,0,365.008,0z M464,365.008     c0,55.52-43.488,98.992-98.992,98.992H130.992C75.488,464,32,420.512,32,365.008V130.992C32,75.488,75.488,32,130.992,32h234.016     C420.528,32,464,75.488,464,130.992V365.008z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                  <path d="M403.984,126.64c-5.136-3.76-12.016-4.08-17.504-0.88c-5.472,3.216-17.6,4.8-27.328,6.08c-2.016,0.272-4,0.528-5.92,0.8     c-13.616-11.296-31.008-17.632-48.944-17.632c-40.4,0-73.552,31.264-75.904,70.592c-36.64-6.176-70.192-25.28-93.968-53.984     c-3.536-4.288-9.024-6.384-14.56-5.664c-5.504,0.768-10.208,4.336-12.432,9.424c-1.024,2.336-9.952,24.304-9.952,78.64     c0,47.056,37.136,81.632,62.608,99.824c-17.424,7.92-37.504,10.832-56.576,8.72c-7.456-0.8-14.432,3.584-16.896,10.608     c-2.464,7.04,0.256,14.848,6.56,18.832c30.08,18.976,64.848,29.008,100.56,29.008c114.688,0,184.096-90.096,186.672-178.928     c3.296-4.784,9.584-14.096,20.208-30.432c4.256-6.576,7.824-20.752,9.568-28.608C411.568,136.832,409.12,130.384,403.984,126.64z      M351.536,187.536c-1.968,2.72-3.04,6.016-3.04,9.376c0,63.152-48.016,152.096-154.752,152.096     c-9.648,0-19.216-0.88-28.592-2.608c12.512-4.736,24.336-11.344,35.2-19.712c4.352-3.344,6.672-8.72,6.16-14.176     c-0.512-5.456-3.792-10.288-8.704-12.768c-0.688-0.352-68.32-35.92-68.32-85.712c0-16.688,0.896-29.808,2.08-39.792     c31.408,27.04,71.376,43.216,113.44,45.296c0.32,0.016,0.656,0.032,0.96,0.016c9.312-0.272,16.16-7.104,16.16-16     c0-2.208-0.448-4.304-1.264-6.224c-0.4-2.4-0.608-4.816-0.608-7.232c0-23.76,19.744-43.088,44.032-43.088     c12.192,0,23.92,4.992,32.192,13.68c3.776,3.936,9.296,5.712,14.624,4.672c3.632-0.688,7.824-1.232,12.224-1.808     c1.568-0.208,3.152-0.416,4.768-0.64C356.08,181.216,351.744,187.248,351.536,187.536z" fill="#ffffff" data-original="#000000" style="" class=""/>
                              </svg>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="bg-grey-50" id="about">
      <div class="container py-16 md:py-20 flex flex-col items-center">
          <div class="w-full sm:w-3/4 lg:w-3/5 text-center lg:text-left">
              <h2 class="font-header font-semibold text-primary text-2xl sm:text-2xl lg:text-3xl uppercase">
                  Transformamos conciencias.</h2>

              <p class="font-body text-grey-20 pt-6 text-2xl leading-relaxed">En este espacio digital encontrarás algo con lo que te identificarás.
              </p>


          </div>

      </div>
  </div>

  <div class="container py-16 md:py-20" id="services">
      <h2 class="font-header font-semibold text-primary text-4xl sm:text-5xl lg:text-6xl uppercase text-center">
          Categorias</h2>
      <h3 class="font-header font-medium text-black text-xl sm:text-2xl lg:text-3xl pt-6 text-center">
          Estas son las categorias de nuestros productos</h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 pt-10 md:pt-12">
          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/pañuelo.svg')}}" alt="content marketing icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/handkerchief.svg')}} " alt="content marketing icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                      PAÑUELOS</h3>

              </div>
          </div>
          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/book.svg')}}" alt="development icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/open-book.svg')}}" alt="development icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                     LIBROS</h3>

              </div>
          </div>

          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/cap.svg')}}" alt="Mobile Application icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/hat1.svg')}}" alt="Mobile Application icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                    GORRAS</h3>

              </div>
          </div>
          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/tshirt.svg')}}" alt="Email Marketing icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/shirt.svg')}}" alt="Email Marketing icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                      PLAYERAS</h3>

              </div>
          </div>
          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/hoodie.svg')}}" alt="Theme Design icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/hoodieb.svg')}}" alt="Theme Design icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                      SUDADERAS</h3>

              </div>
          </div>
          <div class="shadow px-8 py-12 hover:bg-primary group rounded">
              <div class="text-center w-24 xl:w-28 h-24 xl:h-28 mx-auto">
                  <div class="hidden group-hover:block">
                      <img src="{{asset('images/thermo.svg')}}" alt="Graphic Design icon">
                  </div>
                  <div class="block group-hover:hidden">
                      <img src="{{asset('images/thermob.svg')}}" alt="Graphic Design icon">
                  </div>
              </div>
              <div class="text-center">
                  <h3 class="font-semibold  text-lg lg:text-xl text-primary uppercase pt-8 group-hover:text-yellow">
                      TERMOS Y TAZAS</h3>

              </div>
          </div>

      </div>
  </div>

  <div class="bg-grey-50" id="blog">
      <div class="container py-16 md:py-20">
          <h2 class="font-header font-semibold text-primary text-4xl sm:text-5xl lg:text-6xl uppercase text-center">Nuestros Productos</h2>
      
      </div>
  </div>

  <div class="bg-grey-50" id="clients">
      <div class="container py-16 md:py-20">
          <div class="w-full sm:w-3/4 lg:w-full mx-auto">
              <h2 class="font-header font-semibold text-primary text-4xl sm:text-5xl lg:text-6xl uppercase text-center">Aceptamos Tarjetas</h2>
              <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                  <span class="block m-8">
                      <img src="{{ asset('images/visa.png') }}" alt="client logo" class="mx-auto block h-12 w-auto" />
                  </span>

                  <span class="block m-8">
                      <img src="{{ asset('images/master.png') }}" alt="client logo"
                          class="mx-auto block h-12 w-auto" />
                  </span>

                  <span class="block m-8">
                      <img src="{{ asset('images/american.png') }}" alt="client logo"
                          class="mx-auto block h-12 w-auto" />
                  </span>

                  <span class="block m-8">
                      <img src="{{ asset('images/merca.png') }}" alt="client logo"
                          class="mx-auto block h-12 w-auto" />
                  </span>
              </div>
          </div>
      </div>
  </div>

  <div class="bg-top bg-cover bg-no-repeat pb-16 md:py-16 lg:py-24"
      style="background-image:url({{ asset('images/experience-figure.png') }})" id="statistics">
      <div class="container">
          <div class="bg-white w-5/6 md:w-11/12 2xl:w-full mx-auto py-16 lg:py-20 xl:py-24 shadow">
              <div class="grid grid-cols-2 xl:grid-cols-3 gap-5 md:gap-8 xl:gap-5">
                  <div class="flex md:flex-row flex-col justify-center items-center text-center md:text-left">
                      <div>
                          <img src="{{ asset('images/icon-project.svg') }}" class="mx-auto h-12 md:h-20 w-auto"
                              alt="icon project">
                      </div>
                      <div class="md:pl-5 md:pt-0 pt-5">
                          <h1 class="font-body font-bold md:text-2xl text-2xl text-primary">
                              ENVIOS SEGUROS</h1>
                          <h4 class="font-header font-medium md:text-xl/2 text-base text-grey-dark leading-loose">
                              Diseña tu orden</h4>
                      </div>
                  </div>

                  <div class="flex md:flex-row flex-col justify-center items-center text-center md:text-left">
                      <div>
                          <img src="{{ asset('images/call-center.svg') }}" class="mx-auto h-12 md:h-20 w-auto"
                              alt="icon award">
                      </div>
                      <div class="md:pl-5 md:pt-0 pt-5">
                          <h1 class="font-body font-bold md:text-2xl text-2xl text-primary">
                              COMPRA EN LÍNEA</h1>
                          <h4 class="font-header font-medium md:text-xl/2 text-base text-grey-dark leading-loose">
                              Pedidos en línea fáciles 24/7</h4>
                      </div>
                  </div>

                  <div
                      class="flex md:flex-row flex-col justify-center items-center text-center md:text-left lg:mt-0 md:mt-10 mt-6">
                      <div>
                          <img src="{{ asset('images/money-bag.svg') }}" class="mx-auto h-12 md:h-20 w-auto"
                              alt="icon happy clients">
                      </div>
                      <div class="md:pl-5 md:pt-0 pt-5">
                          <h1 class="font-body font-bold md:text-2xl text-2xl text-primary">
                              COMPRA SEGURA</h1>
                          <h4 class="font-header font-medium md:text-xl/2 text-base text-grey-dark leading-loose">
                              Dinero seguro con nosotros</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</x-app2-layout>
