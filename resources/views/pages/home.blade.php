@extends('templates.base')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Siswa
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
          <div class="box">
            <a href="/siswa/create" class="btn btn-primary">+ Tambah data</a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php($no = $siswa->perPage() * $siswa->currentPage() - $siswa->perPage() + 1)
                  @foreach ($siswa as $item)
                  <tr>
                    <td>{{ $no }}</td>
                    <td> {{ $item->nama }} </td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->alamat }} </td>
                    <td>
                      <form action="/siswa/{{ $item->id }}" method="post" class="d-inline">
                      <a href="/siswa/{{ $item->id }}/edit" type="submit" class="btn btn-primary">
                        <i class="fa fa-edit">Edit</i>
                      </a>
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash">Delete</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @php($no++)
                  @endforeach
                </table>
            </div>
            {{$siswa->links()}}
            <!-- /.box-body -->
          </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
