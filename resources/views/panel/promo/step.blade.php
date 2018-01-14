<form method="post" action="" id="form-step-add" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="type" value="step-add">
    <div class="form-group">
        <label for="day">Image</label><br/>
        <img id="image-preview" class="img-thumbnail" style="max-height:200px"></br>
        <input type="file" name="image" id="image" required>
        <span class="help-block">Please use image in 400px X 400px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)</span>
    </div>
    <div class="form-group">
        <label for="day">Description</label>
        <textarea class="form-control" name="description" id="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="day">Sequence</label>
        <input type="number" name="sequence" class="form-control" id="sequence" value="{{ $max +1 }}" required>
    </div>
    <div class="form-group">
        <label for="day">Is Active</label>
        <select class="form-control" name="is_active">
            <option value="1">ON</option>
            <option value="0">OFF</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-md" value="Submit">
        <a class="btn btn-danger" id="btn-cancel"> Cancel </a>
    </div>
</form>
<div id="btn-add">
    <a class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Add More </a><br/><br/>
</div>
<table class="table table-responsive table-hover table-striped table-bordered" id="data_table">
    <thead>
        <tr>
            <td>Image</td>
            <td>Description</td>
            <td>Sequence</td>
            <td>Is Active</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($steps as $row)
            <tr>
                <td><img src="{{ asset($row->image) }}" width="70"></td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->sequence }}</td>
                <td>{{ $row->is_active }}</td>
                <td>
                    <a href='javascript:void(0)' onclick='updateData("{{ $row->id }}")' class='btn btn-warning btn-sm btn-block'><span class='fa fa-edit'></span> Edit</a>
                    <a href='javascript:void(0)' onclick='deleteData("{{ $row->id }}")' class='btn btn-danger btn-sm btn-block'><span class='fa fa-trash'></span> Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
