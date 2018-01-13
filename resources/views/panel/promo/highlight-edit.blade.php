{!! csrf_field() !!}
<input type="hidden" name="type" value="{{ $type }}">
<input type="hidden" name="section" value="highlight-edit">
<input type="hidden" name="attraction_highlight_id" value="{{ $model->id }}">
<div class="form-group">
    <label for="day">Image</label><br/>
    <img id="image-preview" class="img-thumbnail" style="max-height:200px" src="{{ asset($model->image) }}"></br>
    <input type="file" name="image" id="image">
    <span class="help-block">Please use image in 225px X 290px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)</span>
</div>
<div class="form-group">
    <label for="day">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $model->title }}" required>
</div>
<div class="form-group">
    <label for="day">Title (ID)</label>
    <input type="text" class="form-control" name="title_id" id="title_id" value="{{ $trans->title }}" required>
</div>
<div class="form-group">
    <label for="day">Description</label>
    <textarea class="form-control" name="description" id="description" required>{{ $model->description }}</textarea>
</div>
<div class="form-group">
    <label for="day">Description (ID)</label>
    <textarea class="form-control" name="description_id" id="description_id" required>{{ $trans->description }}</textarea>
</div>
<div class="form-group">
    <label for="day">Permalink</label>
    <input type="text" name="permalink" class="form-control" id="permalink" value="{{ $model->permalink }}">
    <span class="help-block">Please use prefix "http://" or "https://" if you want to use external link.</span>
</div>
<div class="form-group">
    <label for="day">Sequence</label>
    <input type="number" name="sequence" class="form-control" id="sequence" value="{{ $model->sequence }}" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary btn-md" value="Submit">
    <a class="btn btn-danger" id="btn-cancel"> Cancel </a>
</div>
