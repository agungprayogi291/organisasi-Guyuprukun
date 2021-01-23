@extends('Template.dashboard')
@section('title','GR|home-ketua')
<!--
   content for page hoem admin
   extends template.dashboard  -->
@section('content-main')
  <div class="row m-auto">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Guyuprukun anggota</h3>
                <form action="{{route('register')}}"  style="float:right;" >
                <button class="btn btn-success">registrasi</button></form>
            </div>
              <!-- /.card-header -->
           <div class="card-body">
              <table id="example2" class="table table-bordered table-hover ">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>level</th>
                    <th>phone</th>
                    <th>Jkel</th>
                    <th>email</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody  >
                @foreach($users as $user)
                  <tr >
                    <td><?php echo $user->name ;?></td>
                    <td><?php echo $user->level ;?></td>
                    <td><?php echo $user->phone ;?></td>
                    <td><?php echo $user->jkel ;?></td>
                    <td><?php echo $user->email ;?> </td>
                    <td>
                    <button class="btn btn-primary">reset</button><button class="btn btn-danger">delete</button>
                    </td>
                @endforeach
                  </tr>
                
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                  </tfoot>
              </table>
             </div>
              <!-- /.card-body -->
        </div>
            <!-- /.card -->
      </div>
</div>
@endsection
<!--  -->