<div>

    @include('components.layouts.client.header')
    <div x-data="main" class="mt-[114px]">
        {{-- hero section --}}
        <section class="min-h-[calc(98svh-110px)] max-h-[calc(98svh-110px)] relative overflow-hidden z-0 w-full ">
            <img src="/assets/hero_bg.png"
                class="object-cover absolute top-0 left-0 w-full min-h-full object-right-bottom -z-10 brightness-75"
                alt="">
            <div class="grid grid-cols-3  px-[70px] min-h-[76svh] mt-20  ">
                <div>
                    <form action="" class="bg-dark rounded p-2 border-4 border-[#396B89] relative z-0">
                        <h1 class="font-semibold text-ylw text-2xl text-center">CONTACT US</h1>
                        <div class="p-5 grid grid-cols-1 gap-8">
                            <div class="relative z-0 ">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-ylw appearance-none focus:outline-none focus:ring-0  peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-sm text-ylw duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nickname</label>
                            </div>
                            <div class="relative z-0 ">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-ylw appearance-none focus:outline-none focus:ring-0  peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-sm text-ylw duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                            </div>

                            <div class="relative z-0 ">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-ylw appearance-none focus:outline-none focus:ring-0 resize  peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-sm text-ylw duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                            </div>
                            <div class="relative z-0 ">
                                <button class="bg-ylw px-3 py-1.5 rounded">Send</button>
                            </div>


                        </div>
                        <div
                            class="absolute min-w-[250px] h-[250px] bg-[#072D44] opacity-60 -z-10 -top-10 left-28 rounded-full">
                        </div>
                        <div
                            class="absolute min-w-[250px] h-[250px] bg-[#072D44] opacity-60 -z-10 -top-0 -left-8 rounded-full">
                        </div>
                        <div
                            class="absolute min-w-[250px] h-[250px] bg-[#072D44] opacity-60 -z-10 -bottom-6 -left-4 rounded-full">
                        </div>
                        <div
                            class="absolute min-w-[250px] h-[250px] bg-[#072D44] opacity-60 -z-10 -bottom-6 -right-8 rounded-full">
                        </div>
                    </form>
                </div>
                <div class=" col-span-2">
                    <h1 class="text-7xl font-semibold h-fit text-gray-50 text-right ">WE HELP BUILD YOUR DREAM</h1>
                    <h1 class="text-right mt-10 text-white  text-lg">Ready for your dream home? Choose your design and
                        estimate now.</h1>
                    <a href="/estimate"
                        class="bg-yellow-400 mt-3 px-6 py-2.5 font-bold text-lg text-gray-50 rounded w-fit float-right">Estimate
                        Now</a>
                </div>

            </div>

        </section>

        {{-- latest project --}}
        <section class="z-0 overflow-hidden relative min-h-[600px] max-h-[600px] bg-dark">
            <div class="absolute left-0 top-0 h-full w-full z-10">
                <h1 class="text-center text-3xl font-semibold py-20 text-ylw z-20">Latest Project</h1>

                <div>
                    <div class="swiper" x-ref="container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->

                            <div
                                class=" swiper-slide drop-shadow-2xl snap-center  overflow-hidden  relative z-20 transition-all h-fit ease-in-out duration-300  bg-[#ffffff]   rounded group">
                                {{-- <img :src="be + '/public/storage/project/' + latest.photo"
                                    class="object-cover  h-[310px] z-0 rounded  w-full brightness-75" alt=""> --}}
                                <img src="{{ asset('svg/loading.svg') }}"
                                    class="w-[60px] h-[310px] animate-spin mx-auto  rounded" alt="">
                                <div
                                    class="absolute top-0 left-0 w-0 h-full bg-white flex justify-center items-center flex-col group-hover:w-full transition-all ease-in-out duration-1000 overflow-hidden">
                                    <a href="#" title="view"
                                        class="min-h-[60px] flex justify-center items-center font-bold min-w-[60px] rounded-full bg-dark text-ylw"><img
                                            src="/svg/arrow.svg" class="w-[20px]" alt=""></a>

                                </div>
                            </div>
                            <div
                                class=" swiper-slide drop-shadow-2xl snap-center  overflow-hidden  relative z-20 transition-all h-fit ease-in-out duration-300  bg-[#ffffff]   rounded group">
                                {{-- <img :src="be + '/public/storage/project/' + latest.photo"
                                    class="object-cover  h-[310px] z-0 rounded  w-full brightness-75" alt=""> --}}
                                <img src="{{ asset('svg/loading.svg') }}"
                                    class="w-[60px] h-[310px] animate-spin mx-auto  rounded" alt="">
                                <div
                                    class="absolute top-0 left-0 w-0 h-full bg-white flex justify-center items-center flex-col group-hover:w-full transition-all ease-in-out duration-1000 overflow-hidden">
                                    <a href="#" title="view"
                                        class="min-h-[60px] flex justify-center items-center font-bold min-w-[60px] rounded-full bg-dark text-ylw"><img
                                            src="/svg/arrow.svg" class="w-[20px]" alt=""></a>

                                </div>
                            </div>

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>


            </div>
            <img src="/assets/hero_background.jpg" class="w-full h-[100%]  -z-50 object-cover opacity-10"
                alt="">
        </section>




        <!-- services  -->
        <section class=" relative z-0 overflow-hidden h-[600px] bg-ylw">
            <div class="absolute top-0 left-0 w-full h-full">
                <h1 class="text-center text-3xl leading-loose font-bold py-10 ">Our Services</h1>
                <div class="grid grid-cols-3 gap-20 w-[1200px]  mx-auto" ref="services">
                    <div
                        class="drop-shadow-2xl  hover:-translate-y-5 transition-all ease-in-out duration-700 z-20  bg-[#ffffff] rounded  ">
                        <img src="{{ asset('assets/renovate.jpg') }}"
                            class="object-cover rounded-t h-[270px] w-full brightness-75" alt="">
                        <h1 class="text-center font-bold text-2xl py-5">Renovate</h1>
                    </div>
                    <div
                        class="drop-shadow-2xl hover:-translate-y-5 transition-all ease-in-out duration-700 z-20 bg-[#ffffff] rounded  ">
                        <img src="{{ asset('assets/construct.jpg') }}"
                            class="object-cover rounded-t h-[270px] w-full brightness-75" alt="">
                        <h1 class="text-center font-bold text-2xl py-5">Construct</h1>
                    </div>
                    <div
                        class="drop-shadow-2xl  hover:-translate-y-5 transition-all ease-in-out duration-700  bg-[#ffffff] rounded z-20  ">
                        <img src="{{ asset('assets/elevate.jpg') }}"
                            class="object-cover rounded-t h-[270px] w-full brightness-75" alt="">
                        <h1 class="text-center font-bold text-2xl py-5">Elevate</h1>
                    </div>
                </div>
                <!-- <div class="flex justify-center pt-10 pb-32">
          <button class="bg-red-500 py-2 px-6 text-gray-50 rounded mx-auto">Read More</button>
        </div> -->
            </div>
            <img src="/assets/services_bg.jpg" class="w-full h-[100%]  -z-10 object-cover opacity-20" alt="">
        </section>


         <!-- testimonial -->
      <section class="px-[70px] bg-dark relative -z-10 ">
        <h4 class="text-lightYellow text-center pt-28 font-bold">TESTIMONIALS</h4>
        <h2 class="text-center text-4xl font-bold text-gray-50">What our customers are saying</h2>
        <div class="relative ">
          <div
            class="flex gap-5 min-w-[1100px] max-w-[1100px]  mx-auto py-20 overflow-x-auto snap-x snap-mandatory testimonials scroll-smooth"
            ref="testimonials">
            <!-- min-w-[352px] max-w-[352px] -->
            <div v-for="feedback in feedbacks" :key="feedback.id" class="shadow-2xl shadow-lightYellow bg-[#ffffff] rounded pt-10 pb-5 px-7 snap-center relative min-w-[32.4%] max-w-[32.4%] overflow-hidden min-h-[340px] max-h-[340px]">

              <img src="/svg/quote.svg" class=" w-[50px]  brightness-50 rotate-180 mx-auto" alt="">

              <div  class="flex mx-auto gap-x-1 w-fit mb-2">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
              </div>
              <div  class="flex mx-auto gap-x-1 w-fit mb-2">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
              </div>
              <div class="flex mx-auto gap-x-1 w-fit mb-2">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
              </div>
              <div  class="flex mx-auto gap-x-1 w-fit mb-2">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start-nobg.svg" class="w-[30px]" alt="">
              </div>
              <div  class="flex mx-auto gap-x-1 w-fit mb-2">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
                <img src="/svg/start.svg" class="w-[30px]" alt="">
              </div>
              <p  class="text-gray-500 pt-3 line-clamp-5">
                    'dsad\ad\ad'ad
              </p>
              <div class="flex items-center gap-2 mt-4 absolute bottom-3 w-full left-0 px-7  justify-between">
               <div class="flex items-center gap-2">
                <img src="{{ asset('assets/preview.png') }}" class="rounded-full w-[40px] h-[40px]" alt="">
                <h1 class="font-bold">LOyd </h1>
               </div>
                <small class="text-gray-400">2020-20-20</small>
              </div>
            </div>



          </div>
          <button @click="next(1)" class="absolute -left-6  top-[50%] -translate-y-1/2 z-50"><img src="/svg/arrow.svg"
              class="w-[40px] rotate-180" alt=""></button>
          <button @click="next(2)" class="absolute -right-6  top-[50%] -translate-y-1/2 z-50"><img src="/svg/arrow.svg" class="w-[40px]"
              alt=""></button>
        </div>

      </section>
        @include('components.layouts.client.footer')
    </div>
</div>
@script
    <script>
        Alpine.data('main', () => ({
            open: false,
            swiper: null,

            toggle() {
                this.open = !this.open
            },
            init() {
                this.swiper = new Swiper(this.$refs.container, {
                    // Optional parameters
                    // Optional parameters

                    direction: 'horizontal', // or 'vertical'
                    loop: true, // enable loop mode
                    slidesPerView: 1, // number of slides per view
                    spaceBetween: 30, // space between slides
                    pagination: {
                        el: '.swiper-pagination', // pagination element
                        clickable: true, // enable pagination clicks
                    },
                    navigation: {
                        nextEl: '.swiper-button-next', // next button element
                        prevEl: '.swiper-button-prev', // previous button element
                    },
                    keyboard: {
                        enabled: true,

                    },
                });
                this.swiper.on('slideChange', () => {
                    console.log('Slide changed!');
                });
            }
        }))
    </script>
@endscript
