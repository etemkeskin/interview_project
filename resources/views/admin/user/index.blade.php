@extends('layouts.admin')
@section('title')

@endsection

@section('css')

@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kullanıcılar</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kullanıcılar</h3>
            <a href="{{ route('users.create') }}" class="btn btn-success float-right">Ekle</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>                  
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Ad</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>1.</td>
                  <td>{{ $user->name }}</td>
                  <td>
                    {{ $user->email }}
                  </td>
                  <td>
                    {{ $user->role }}
                  </td>
                  <td>
                    <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="badge bg-danger">Sil</button>
                    </form>
                    
                    <a href="{{ route('users.edit' , $user->id) }}" class="badge bg-primary">Düzenle</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->

      </div>
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

  
  </div>


  </section>
@endsection

@section('js')

@endsection