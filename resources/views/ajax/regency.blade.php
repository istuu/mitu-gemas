@foreach($regencies as $reg)
<option value="{{ $reg->id }}">{{ $reg->name }}</option>
@endforeach
