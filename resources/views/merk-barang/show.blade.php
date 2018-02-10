@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">merkBarang {{ $merkbarang->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/merk-barang') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/merk-barang/' . $merkbarang->id . '/edit') }}" title="Edit merkBarang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('merkbarang' . '/' . $merkbarang->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete merkBarang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $merkbarang->id }}</td>
                                    </tr>
                                    <tr><th> Kode </th><td> {{ $merkbarang->kode }} </td></tr><tr><th> Nama </th><td> {{ $merkbarang->nama }} </td></tr><tr><th> Asal Negara </th><td> {{ $merkbarang->asal_negara }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
