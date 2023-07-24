<div class="websites_section flex_row">
        
    <div class="inner_wrapper">
        <div class="title_row flex_row">
            <h2 class="title">@lang('app.main.websites_section')</h2>

            <div class="buttons_block">
                <svg class="arrow_left" id="scroll_left" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10" r="10" transform="matrix(-1 0 0 1 22.5 2)" stroke="#28303F" stroke-width="1.5"/>
                    <path d="M11.5 15L8.5 12M8.5 12L11.5 9M8.5 12L16.5 12" stroke="#28303F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg class="arrow_right" id="scroll_right" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12.5" cy="12" r="10" stroke="#0080C7" stroke-width="1.5"/>
                    <path d="M13.5 15L16.5 12M16.5 12L13.5 9M16.5 12L8.5 12" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <div class="content_block owl-carousel flex_row" id="websites_block">

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_2.svg') }}" alt="">
                <h3 class="content">
                    «TÜRKMENARAGATNAŞYK» agentligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_3.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Daşary işler ministrligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_4.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Gyzyl Ýarymaý Milli jemgyýeti
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_5.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Saglygy goraýyş we derman senagaty ministrligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_2.svg') }}" alt="">
                <h3 class="content">
                    «TÜRKMENARAGATNAŞYK» agentligi
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_4.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Gyzyl Ýarymaý Milli jemgyýeti
                </h3>
            </a>

            <a href="#" class="website_container flex_column">
                <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                <h3 class="content">
                    Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                </h3>
            </a>
        </div>
        

    </div>
</div>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:false,
            items:5,
            loop:true,
            nav:false,
        });
        
        const arrow_left = $('.buttons_block .arrow_left') 
        const arrow_right = $('.buttons_block .arrow_right') 
        const owl = $('#websites_block');
        
        arrow_left.on('click', (event)=>{
            owl.trigger('prev.owl');
        })

        arrow_right.on('click', (event)=>{
            owl.trigger('next.owl');
        })
       
    })
</script>