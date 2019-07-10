@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Produk</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Produk</h2>
                    <a href="/admin/produk/create" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah </a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
                    <!-- start project list -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 5%"><center>ID</center></th>
                          <th style="width: 10%"><center>Nama produk</center></th>
                          <th style="width: 5%"><center>Gambar</center></th>
                          <th style="width: 5%"><center>Harga</center></th>
                          <th style="width: 20%"><center>Deskripsi</center></th>
                          <th style="width: 10%"><center>Edit</center></th>
                        </tr>
                      </thead>
                       
                      <tbody>
                        @foreach ($produks as $produk)
                        <tr>
                         
                          <td><center>{{ $produk->id }}</td>
                          <td><center>
                            <a>{{ $produk->nama_produk }}</a>
                            
                          </td>
                          <td>
                            <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt="" width="130px" height="100px">                            
                          </td>
                          <td><center>{{ $produk->harga }}</td>
                            @php
                              {{ $stok = $produk->stok;
                                
                               }}
                            @endphp
                            @if ($stok>1)
                             <td>[Tersedia : {{$stok}} ]{{ $produk->deskripsi }}</td>
                                  @else
                             <td>[Habis]{{ $produk->deskripsi }}</td> 
                                @endif
                         
                          
                          <td >
                            <form action="/admin/produk/{{$produk->id}}" method="post">
                            <center><a href="/admin/produk/{{$produk->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            
                            <input type="hidden" name="_method" value="DELETE">
                            
                            

                            <button type="submit" name="submit" class="btn btn-danger btn-xs"><span class="fa fa-trash-o"></span> Hapus</button>
 
                            </center>
                            
                            {{ csrf_field() }}
                        </form>
                          </td>
                          
                          
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>


                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection