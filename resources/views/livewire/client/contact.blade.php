<div>

    @include('components.layouts.client.header')
    <div x-data="main" class="mt-[114px]">
        <section  class="min-h-[calc(98svh-110px)] bg-[#DEDEDE] relative overflow-hidden z-0 w-full ">
            <div class="bg-[#072D44] z-0 relative">
                <img src="/assets/contact_bg.png" class="w-full z-0 h-[350px] opacity-20" alt="">
                <div class="absolute  w-full flex  flex-col items-center overflow-hidden h-full top-0 left-0 z-10">
                    <h1 class=" whitespace-nowrap text-xl text-ylw sm:text-2xl md:text-[50px] font-semibold pt-[130px]">LET’S MAKE YOUR DREAM A REALITY</h1>
                    <h3 class="text-gray-50 mt-16 text-center text-sm sm:text-base">Got any questions? Fill the form below and start your dream!</h3>
                </div>
            </div>

            <h1 class="font-medium text-[40px] text-center pt-[40px]">Contact Us</h1>
            <h1 class="font-normal text-[#484848] text-[18px] text-center pt-[10px]">Let’s talk about your dream</h1>
            <form action="" class="max-w-screen-lg mx-auto my-10 px-10 ">
                <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 gap-x-20">
                    <input type="text" class="rounded px-3 py-2.5 bg-[#ffffff]" placeholder="First name*">
                    <input type="text" class="rounded px-3 py-2.5 bg-[#ffffff]" placeholder="Last name*">
                </div>
                <div class="mt-10">
                    <input type="text" class="rounded px-3 py-2.5 bg-[#ffffff] w-full" placeholder="Email address*">
                </div>
                <div class="mt-10">

                    <textarea name="" id="" cols="30" rows="4" class="rounded px-3 py-2.5 bg-[#ffffff] w-full" placeholder="What is your question?*"></textarea>
                </div>

                <div class="mt-10 flex justify-center">
                    <button class="bg-dark text-ylw py-2.5 px-9 rounded ">Send</button>
                </div>
            </form>
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
