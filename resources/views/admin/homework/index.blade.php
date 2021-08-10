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
          <h1>Ödevler</h1>
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
            <h3 class="card-title">Ödevler</h3>
            <a href="{{ route('homeworks.create') }}" class="btn btn-success float-right">Ekle</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>                  
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Başlık</th>
                  <th>İçerik</th>
                  <th>Kurs</th>
                  <th>Kişi</th>
                  <th style="width: 40px"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($homeworks as $homework)
                <tr>
                  <td>1.</td>
                  <td>{{ $homework->title }}</td>
                  <td>
                    {{ $homework->content }}
                  </td>
                  <td>
                    {{ $homework->course->title }}
                  </td>
                  <td>
                    {{ $homework->user->name }}
                  </td>
                  <td>
                    <form action="{{ route('homeworks.destroy', $homework->id)}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="badge bg-danger">Sil</button>
                    </form>
                    
                    <a href="{{ route('homeworks.edit' , $homework->id) }}" class="badge bg-primary">Düzenle</a></td>
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