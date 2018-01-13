<div clas ='col-md-12' id="table">
<a href="{{ url('admin-cp/helper/listing/volunteer/volunteer_datas') }}"
        class="btn btn-primary"><span class="fa fa-arrow-left"></span> Back to List</a><br/><br/>

  <div class="panel panel-default">
      <div class="panel-heading"><h4>Parent Volunteer Data Detail</h4></div>
      <div class="panel-body">
          <table class="table table-responsive table-hover table-striped">
              <tr>
                  <td>Initial</td>
                  <td>:</td>
                  <td>{{ $model->initial }}</td>
              </tr>
              <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td>{{ $model->name }}</td>
              </tr>
              <tr>
                  <td>Children Name</td>
                  <td>:</td>
                  <td>
                      <ul>
                          @foreach($children as $child)
                              <li>{{ $child->name }}</li>
                          @endforeach
                      </ul>
                  </td>
              </tr>
              <tr>
                  <td>Handphone</td>
                  <td>:</td>
                  <td>+62{{ $model->handphone }}</td>
              </tr>
              <tr>
                  <td>Telephone</td>
                  <td>:</td>
                  <td>+62{{ $model->telephone }}</td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>{{ $model->email }}</td>
              </tr>
              <tr>
                  <td>Submitted at</td>
                  <td>:</td>
                  <td>{{ date('d F Y H:i:s',strtotime($model->create_on)) }}</td>
              </tr>
              <tr>
                  <td>Volunteer Types</td>
                  <td>:</td>
                  <td>
                      <ul>
                          @foreach($types as $type)
                              <li>{{ $type->title }}</li>
                          @endforeach
                      </ul>
                  </td>
              </tr>
          </table>
      </div>
  </div>
</div>
