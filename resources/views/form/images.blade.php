<div{!! Html::attributes($attribute) !!}>
    @if (isset($group))
        <h3 class="box-title" style=" border-radius: 3px;border-top: 3px solid #3c8dbc;padding-top: 10px;">
            {{ $group }}
        </h3>
    @endif
    @if(isset($value))
      <img id="{{ $settings['id'] }}-preview" src="{{ asset($value) }}" class="img-thumbnail" style="max-height:200px"></br>
    @else
      <img id="{{ $settings['id'] }}-preview" class="img-thumbnail" style="max-height:200px"></br>
    @endif
    <label for="{{ $title or '' }}">{{ $title or '' }}</label>
    {!! $input or '...' !!}
    @if (!empty($info))
        <span class="help-block">{{ $info }}</span>
    @endif
</div>
<script>
  document.getElementById("{{ $settings['id'] }}").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("{{ $settings['id'] }}-preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script>
