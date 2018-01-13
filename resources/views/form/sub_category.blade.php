@foreach($subs as $sub)
<option value="{{ $sub->id }}">{{ $sub->title }}</option>
@endforeach
