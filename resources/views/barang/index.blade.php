@extends('layouts.app')

@section('content')
    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <!--Begin Datatables-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="fa fa-table"></i></div>
                                <h5>Barang</h5>
                            </header>

                            <div id="collapse4" class="body">
                                <a href="{{ url('/barang/create') }}" class="btn btn-success btn-sm" title="Add New barang">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>

                                <form method="GET" action="{{ url('/barang') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>#</th><th>Kode Barang</th><th>Nama</th><th>Nomor Izin</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($barang as $item)
                                            <tr>
                                                <td>{{ $loop->iteration or $item->id }}</td>
                                                <td>{{ $item->kode_barang }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->nomor_izin }}</td>
                                                <td>
                                                    <a href="{{ url('/barang/' . $item->kode_barang) }}" title="View barang"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/barang/' . $item->kode_barang . '/edit') }}" title="Edit barang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/barang' . '/' . $item->kode_barang) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete barang" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $barang->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
