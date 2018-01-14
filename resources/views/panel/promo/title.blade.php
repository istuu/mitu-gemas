<form method="post" action="" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input value="title" name="type" hidden>
    <div class="form-group">
        <label for="day">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $title->title }}" required>
    </div>
    <div class="form-group">
        <label for="day">Video Link</label>
        <input type="text" class="form-control" name="video_link" id="title_id" value="{{ $title->video_link }}" required>
        <span class="help-block">Please use embed Youtube link video</span>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-md" value="Submit">
    </div>
</form>
