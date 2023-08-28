<div class="sidebar_right flex_column">
    <div class="inner_wrapper flex_column {{ $classes }}">
        @if($title)
            <h3 class="block_title">{{ $title }}</h3>
        @endif

        <div class="buttons_block flex_column">
            @foreach ($itemsList as $item)
                <a href="{{ $routeName ? route($routeName,['id'=>$item->id, 'lang'=>app()->getLocale()]) : route($item->routeName,['lang'=>app()->getLocale()]) }}" 
                    class="item_name @if($item->id == $currentItemId) active @endif">
                    {{ $item->{'name_' . app()->getLocale()} 
                    ?? 
                    $item->{'country_1_' . app()->getLocale()} . ' - ' . $item->{'country_2_' . app()->getLocale()} }}
                </a>
            @endforeach
        </div>
    </div>

    <svg class="ellipsis_button" fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.75 16c0 2.071-1.679 3.75-3.75 3.75s-3.75-1.679-3.75-3.75c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75zM19.75 27c0 2.071-1.679 3.75-3.75 3.75s-3.75-1.679-3.75-3.75c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75zM19.75 5c0 2.071-1.679 3.75-3.75 3.75s-3.75-1.679-3.75-3.75c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75z"></path>
    </svg>
</div>

<script>
    
    $(document).ready(function() {
        
        document.fonts.ready.then(() => {   //It is triggered when the fonts are loaded completely
            const nav_block = $('.sidebar_right .inner_wrapper');
            const nav_block_height = nav_block.outerHeight();
            const nav_block_width = nav_block.outerWidth();
            const ellipsis = $('.sidebar_right .ellipsis_button');

            const show_nav_block = ()=>{
                nav_block.addClass('active');
                ellipsis.addClass('active');
                nav_block.css('height', `${nav_block_height}px`);
            }
            const hide_nav_block = ()=>{
                nav_block.removeClass('active');
                ellipsis.removeClass('active');
                nav_block.css('height', `0px`);
            }
            if(nav_block.css('opacity') == '0'){
                nav_block.css('height', `0px`);
                
                $('body').click((event)=>{
                if( (!$(event.target).hasClass('ellipsis_button') && !$(event.target).parents().hasClass('ellipsis_button')) &&
                    (!$(event.target).hasClass('sidebar_right') && !$(event.target).parents().hasClass('sidebar_right')) ){
                    hide_nav_block();
                }
            })
            }
            
            ellipsis.on('click', ()=>{
                if (nav_block.hasClass('active')){
                    hide_nav_block();
                } else {
                    show_nav_block();
                }
            })

            

        });

    })
</script>