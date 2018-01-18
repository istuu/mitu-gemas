<div clas ='col-md-12' id="table">
<a href="{{ url('admin-panel/helper/listing/exchange/exchange_codes') }}"
        class="btn btn-primary"><span class="fa fa-arrow-left"></span> Back to List</a><br/><br/>

  <div class="panel panel-default">
      <div class="panel-heading"><h4>Exchange Code Detail</h4></div>
      <div class="panel-body">
          <table class="table table-responsive table-hover table-striped">
              <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td>{{ $model->name }}</td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>{{ $model->email }}</td>
              </tr>
              <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td>{{ $model->phone }}</td>
              </tr>
              <tr>
                  <td>Unique Code</td>
                  <td>:</td>
                  <td>{{ $model->vouchers->unique_code }}</td>
              </tr>
              <tr>
                  <td>Prize Type</td>
                  <td>:</td>
                  <td>{{ ucwords($model->vouchers->type) }}</td>
              </tr>
              <tr>
                  <td>Prize</td>
                  <td>:</td>
                  <td>{{ $model->vouchers->prize }}</td>
              </tr>
              <tr>
                  <td>ID Card Number</td>
                  <td>:</td>
                  <td>{{ $model->id_card }}</td>
              </tr>
              <tr>
                  <td>Province</td>
                  <td>:</td>
                  <td>{{ $model->provinces->name }}</td>
              </tr>
              <tr>
                  <td>City</td>
                  <td>:</td>
                  <td>{{ $model->regencies->name }}</td>
              </tr>
              <tr>
                  <td>Gender</td>
                  <td>:</td>
                  <td>{{ ucwords($model->gender) }}</td>
              </tr>
              <tr>
                  <td>Media</td>
                  <td>:</td>
                  <td>{{ ucwords($model->media) }}</td>
              </tr>
              <tr>
                  <td>Browser</td>
                  <td>:</td>
                  <td>{{ $model->browser }}</td>
              </tr>
              <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td>{{ $model->status }}</td>
              </tr>
              <tr>
                  <td>Submitted At</td>
                  <td>:</td>
                  <td>{{ $model->create_on }}</td>
              </tr>
          </table>
      </div>
  </div>
</div>
