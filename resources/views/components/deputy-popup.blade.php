<div class="deputy_popup_container flex_row">

    <div class="popup_content_block flex_column">
        <h4 class="deputy_name">{{ $name }}</h4>
        <span class="district_name">{{ $district }}</span>
        <svg class="remove_button" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.7426 8.36236L8.25732 16.8476M16.7426 16.8476L8.25732 8.3623" stroke="#28303F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p>{!! $bio !!}</p>
    </div>
</div>