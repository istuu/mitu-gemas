<form method="post" action="" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="day">Title</label>
        <input type="text" class="form-control" name="title" id="title" required>
    </div>
    <div class="form-group">
        <label for="day">Video Link</label>
        <input type="text" class="form-control" name="title_id" id="title_id" required>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-md" value="Submit">
    </div>
</form>
