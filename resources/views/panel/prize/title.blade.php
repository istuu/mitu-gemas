<form method="post" action="" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input value="title" name="type" hidden>
    <div class="form-group">
        <label for="day">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $title->title }}" required>
    </div>
    <div class="form-group">
        <label for="day">Description</label>
        <textarea class="form-control" name="description" id="description" required>{{ $title->description }}</textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-md" value="Submit">
    </div>
</form>
