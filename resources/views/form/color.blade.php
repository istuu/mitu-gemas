<div{!! Html::attributes($attribute) !!}>
    @if (isset($group))
        <h3 class="box-title" style=" border-radius: 3px;border-top: 3px solid #3c8dbc;padding-top: 10px;">
            {{ $group }}
        </h3>
    @endif
    <label for="{{ $title or '' }}">{{ $title or '' }}</label>
    <div id="colorpicker" class="input-group colorpicker-component"  style='width:600px'>
        <input type="text" name="{{ $name }}" value="{{ $value }}" class="form-control" />
        <span class="input-group-addon"><i></i></span>
     </div>
    @if (!empty($info))
        <span class="help-block">{{ $info }}</span>
    @endif
</div>
