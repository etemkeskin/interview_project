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
          <h1>Kullanıcı</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kullanıcı Ekleme Formu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="ad">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
                  </div>
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="role">
                      <option value="1">Sekreter</option>
                      <option value="2">Öğretmen</option>
                      <option value="3">İşletme sahibi</option>
                      <option value="4">Öğrenci</option>
                    </select>
                  </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



      


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>

  </section>
@endsection

@section('js')

@endsection