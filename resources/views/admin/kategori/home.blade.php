@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kategori</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kategori</h2>
                    <a href="/admin/kategori/create" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah </a>
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
                          <th style="width: 5%">ID Kategori</th>
                          <th style="width: 20%">Nama Kategori</th>
                          <th style="width: 20%">Edit</th>
                        </tr>
                      </thead>
                       
                      <tbody>
                        @foreach ($kategoris as $kategori)
                        <tr>
                         
                          <td>{{ $kategori->id }}</td>
                          <td>
                            <a>{{ $kategori->nama_kategori }}</a>
                            
                          </td>
                          
                          
                          <td>
                            <form action="/admin/kategori/{{$kategori->id}}" method="post">
                            <a href="/admin/kategori/{{$kategori->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            
                            <input type="hidden" name="_method" value="DELETE">
                            
                            

                            <button type="submit" name="submit" class="btn btn-danger btn-xs"><span class="fa fa-trash-o"></span> Hapus</button>
 
                            
                            
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