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
@if ($errors->any())
          <div class='flash alert-danger'>
          @foreach ( $errors->all() as $error )
          <p>{{ $error }}</p>
          @endforeach
          </div>
        @endif
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{!!route('laporan.show')!!}">
                    
                      <div class="form-group">
                        <label class="control-label col-md-4 control-label" for="awal">Periode Awal <span class="required">*</span>
                        </label>
                         <div class="col-md-6">
                        <div class='input-group' >
                            <input type='text' name='awal' id='myDatepicker2' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                          <br>
                          {{-- @if ($errors->has('nama_kategori'))
  <p> {{ $errors->first('nama_kategori') }}</p>
@endif --}}
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 control-label" for="akhir">Periode Akhir <span class="required">*</span>
                        </label>
                         <div class="col-md-6">
                        <div class='input-group' >
                            <input type='text' name='akhir' id='myDatepicker25' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                          <br>
                          {{-- @if ($errors->has('nama_kategori'))
  <p> {{ $errors->first('nama_kategori') }}</p>
@endif --}}
                        
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                        </div>
                      </div>
{{csrf_field()}}
                    </form>
                    <!-- start project list -->
                    
 
          


                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection