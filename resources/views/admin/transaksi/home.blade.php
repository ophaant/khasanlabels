@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Transaksi</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Transaksi</h2>
                  
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
                          <th style="width: 1%"><center>No</center></th>
                          <th style="width: 10%"><center>Invoice</center></th>
                          <th style="width: 5%"><center>Tanggal</center></th>
                          <th style="width: 5%"><center>Subtotal</center></th>
                          <th style="width: 5%"><center>Status</center></th>
                          
                          
                          <th style="width: 15%"><center>Edit</center></th>
                        </tr>
                      </thead>
                       
                      <tbody>
                        @php
                          {{ $no=0; }}
                        @endphp
                       
                        @foreach ($transaksis as $transaksi)

                        @php
                          {{ $no++; }}
                        @endphp
                        @php
                            {{ $data = DB::table("pelanggans")->where('formid', $transaksi->formid)->get(); 
                            
                              // $jumlah = intval(preg_replace('/\D/','',$data[0]->ongkir)) + intval(preg_replace('/\D/','',$transaksi->subtotal));
                            $total=preg_replace('/\D/','',$transaksi->subtotal);
                            
                            // $ongkir=$data->ongkir;
                            
                            }}

                          @endphp
                          @php
                            
                          @endphp
                          @foreach ($data as $dt)
                              @php
                                {{ 
                                  $ongkir = 0;
                                  $ongkir = $ongkir+$dt->ongkir+$dt->kode; 

                                }}
                              @endphp
                            @endforeach  
                          
                        <tr>
                         
                          <td><center>{{ $no }}</td>
                          <td><center>
                            <a>{{ $transaksi->formid }}</a>
                            
                          </td>
                          <td>
                             <center>{{ $transaksi->tanggal }}                           
                          </td>
                           @php
                          {{ $jumlah = (($ongkir*100) + $total)/100; }}
                        @endphp
                          <td><center>{{ number_format($jumlah, 2,',','.') }}</td>
                          
                           
                          
                        @if ($transaksi->status == 'unpaid')
                          <td><center><span class="label label-danger">{{ $transaksi->status}}</span></center></td>
                        @else
                          <td><center><span class="label label-success">{{ $transaksi->status}}</span></center></td>
                        @endif
                         
                          
                          
                          
                          @foreach ($data as $kodepos)
                              
                          
                          @endforeach 
                          <td >
                            <form action="/admin/transaksi/{{$transaksi->id}}" method="post">
                            <center><a href="/admin/transaksi/{{$transaksi->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Detail </a>

                            <a href="/admin/transaksi/{{$transaksi->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            
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