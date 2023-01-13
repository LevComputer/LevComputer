@extends('BackEnd.master')

@section('title')
    Subscribe
@endsection

@section('content')

<div class="card my-5">

  {{-- ========= Message ========= --}}
  @if(Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
  {{-- ========= Message ========= --}}

    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
        </tr>
        </thead>
        <tbody>

        @php($i = 1)
        @foreach ($newsletters as $newsletter)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $newsletter->newsletter_email }}</td>
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection