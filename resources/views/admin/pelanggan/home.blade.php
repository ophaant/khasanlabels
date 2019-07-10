@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pelanggan</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pelanggan</h2>
                    
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
                          <th style="width: 10%"><center>Nama Pelanggan</center></th>
                          <th style="width: 5%"><center>Telepon</center></th>
                          <th style="width: 5%"><center>Kota</center></th>
                          <th style="width: 5%"><center>Provinsi</center></th>
                          <th style="width: 20%"><center>Alamat</center></th>
                          <th style="width: 5%"><center>Kode Pos</center></th>
                          <th style="width: 10%"><center>Edit</center></th>
                        </tr>
                      </thead>
                       
                      <tbody>
                        @foreach ($pelanggans as $pelanggan)
                        <tr>
                         
                          <td><center>{{ $pelanggan->id }}</td>
                          <td><center>
                            <a>{{ $pelanggan->nama }}</a>
                            
                          </td>
                          <td>
                             <center>{{ $pelanggan->telepon }}                           
                          </td>
                           @php
                            {{ $data = RajaOngkir::Provinsi()->find($pelanggan->provinsi); 
                               $data2 = RajaOngkir::Kota()->find($pelanggan->kota);
                            }}
                          @endphp
                          <td><center>{{ $data2['city_name'] }}</td>

                           
                          
                            {{-- expr --}}
                          
                          <td>{{ $data['province'] }}</td>
                         
                          
                          <td>{{ $pelanggan->alamat }}</td>
                          <td>{{ $pelanggan->kodepos }}</td>
                          
                          <td >
                            <form action="/admin/pelanggan/{{$pelanggan->id}}" method="post">
                            <center>
                            
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