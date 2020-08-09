@extends('layouts/master')

@section('content')
<form action="/proyek" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nama_proyek">Nama Proyek</label>
    <input type="text" name="nama_proyek"  class="form-control" id="nama_proyek"  placeholder="Nama Proyek">
    
  </div>
  <div class="form-group">
    <label for="deskripsi_proyek">Deskripsi Proyek</label>
    <input type="text" name="deskripsi_proyek"  class="form-control" id="deskripsi_proyek"  placeholder="Deskripsi Proyek">
    
  </div>

  <div class="form-group">
    <label for="tgl_mulai">Mulai Proyek</label>
    <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai" >
  </div>

  <div class="form-group">
    <label for="tgl_deadline">Deadline Proyek</label>
    <input type="date" name="tgl_deadline" class="form-control" id="tgl_deadline" >
  </div>
  
 <div class="form-group">
    <label for="status">Status</label>
    <input type="boolean" name="status" class="form-control" id="status">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection