<div{!! Html::attributes($attribute) !!}>
    @if (isset($group))
        <h3 class="box-title" style=" border-radius: 3px;border-top: 3px solid #3c8dbc;padding-top: 10px;">
            {{ $group }}
        </h3>
    @endif
    <label for="{{ $title or '' }}">{{ $title or '' }}</label>
    <input id="datemax" name="{{ $name }}" value="{{ $value }}" class='form-control' type="text" data-date-format="yyyy-mm-dd" style='width:600px'/>
    @if (!empty($info))
        <span class="help-block">{{ $info }}</span>
    @endif
</div>
