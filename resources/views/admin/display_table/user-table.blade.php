@extends('layouts.admin-layout')
@section('content')
<style type="text/css">
  td{
    padding:0.5rem 0rem 0rem 0rem !important;
  }
</style>
<!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
        </div>
      </div>
    </section>
       -->
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>User Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach($alluser as $user)
                <tr>
                  <td class="width-fix-title">
                    <p style="text-align: center;">
                      {{$user->name}}
                    </p>
                  </td>
                  <td class="width-fix-title">
                    <p style="text-align: center;">
                      {{$user->email}}
                    </p>
                  </td>
<!--                   <td class="width-fix-title">
                    <p style="text-align: center;">
                      @if($user->status==1)
                      <select class="form-select" aria-label="Default select example">
                        <option value="1">Enable</option>
                        <option value="0">Disabled</option>
                      </select>
                      @else
                      <div>
                        <select style="color:red" class="form-select" aria-label="Default select example">
                          <option value="0">Disabled</option>
                          <option style="color:black" value="1">Enable</option>
                        </select>
                      </div>

                      @endif
                    </p>
                  </td> -->
                  <td>
                    @if($user->status==1)
                    <a href="{{ route('admin.edit_status',$user['id'])}}" class="btn btn-success m-2" >
                      <i class="fa fa-check"></i>
                    </a>
                    @else
                    <a href="{{ route('admin.edit_status',$user['id'])}}" class="btn btn-danger m-2" >
                      <i class="fa fa-ban"></i>
                    </a>
                    @endif
                  </td>
                  <td>
                 
                    <form method="POST" action="{{ route('admin.delete_user',$user['id'])}}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}  
                      <button class="btn btn-danger" onclick="return checkdelete()"><i class="fa fa-trash-o fa-lg"></i></button> 
                    </form>
                  
<!--                       <div class="row justify-content-center">
                        <div class="col-md-4">
                          <a class="btn btn-info" href="{{ route('admin.dashboard',$user['id'])}}">
                            <i class="fa fa-edit fa-lg"></i>
                          </a>
                        </div>
                        <div class="col-md-4">
                          <form method="POST" action="{{ route('admin.dashboard',$user['id'])}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}  
                            <button class="btn btn-danger" onclick="return checkdelete()"><i class="fa fa-trash-o fa-lg"></i></button> 
                          </form>
                        </div>
                      </div> -->
                    </td>
<!--                     <td>
                      <form method="POST" action="{{ route('admin.dashboard',$user['id'])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}  
                        <button class="btn btn-danger" onclick="return checkdelete()"><i class="fa fa-trash-o fa-lg"></i></button> 
                      </form>
                    </td> -->
                </tr>
                @endforeach
                <tr>
                  <th>Disease Name</th>
                  <th>User Email</th>
                  <th>Suspend</th>
                  <th>Action</th>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection