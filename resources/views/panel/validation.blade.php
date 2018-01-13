<div class="alert alert-warning">
    <h4>
        <i class="icon fa fa-warning"></i>
        Alert!
    </h4>
    <ul style="padding-left: 20px;">
        @foreach ($alerts as $key => $message)
            <li>{{ $message[0] }}</li>
        @endforeach
    </ul>
</div>
