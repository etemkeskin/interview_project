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
          <h1>Kurslar</h1>
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
                <h3 class="card-title">Kurs Ekleme Formu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
                  </div>
                  <div class="form-group">
                    <label>İçerik</label>
                    <textarea class="form-control" name="content" rows="3" placeholder="İçerik ..."></textarea>
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