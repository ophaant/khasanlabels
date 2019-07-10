
@extends('admin.layout.master')
@section('content')

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Kategori</h3>

              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Kategori </h2>
      
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/admin/kategori/{{$kategori->id}}">
                      <input type="hidden" name="_method" value="PUT">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="nama_kategori" value="{{ $kategori->nama_kategori}}">
                          <br>
                          @if ($errors->has('nama_kategori'))
  <p> {{ $errors->first('nama_kategori') }}</p>
@endif
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onclick="javascript:history.back()">Cancel</button>
						  
                          <button type="submit" class="btn btn-success" name="submit">Save</button>
                        </div>
                      </div>
{{csrf_field()}}
                    </form>
                  </div>
                </div>
              </div>
            </div>

      </div>
          </div>      
            
        <!-- /page content -->
@endsection