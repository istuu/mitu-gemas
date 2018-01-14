{!! csrf_field() !!}
<input type="hidden" name="type" value="step-edit">
<input type="hidden" name="id" value="{{ $model->id }}">
<div class="form-group">
    <label for="day">Image</label><br/>
    <img id="image-preview" src="{{ asset($model->image) }}" class="img-thumbnail" style="max-height:200px"></br>
    <input type="file" name="image" id="image">
    <span class="help-block">Please use image in 400px X 400px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)</span>
</div>
<div class="form-group">
    <label for="day">Description</label>
    <textarea class="form-control" name="description" id="description" required>{{ $model->description }}</textarea>
</div>
<div class="form-group">
    <label for="day">Sequence</label>
    <input type="number" name="sequence" class="form-control" id="sequence" value="{{ $model->sequence }}" required>
</div>
<div class="form-group">
    <label for="day">Is Active</label>
    <select class="form-control" name="is_active">
        <option value="1" {{ $model->is_active == 1 ? 'selected':null }}>ON</option>
        <option value="0" {{ $model->is_active == 0 ? 'selected':null }}>OFF</option>
    </select>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary btn-md" value="Submit">
    <a class="btn btn-danger" id="btn-cancel"> Cancel </a>
</div>
