<option value="">Все</option>
@if(!empty($subs))
    @foreach($subs as $sub)
        <option  value="{{ $sub->id }}">{{ $sub->ru_title }}</option>
    @endforeach
@endif
