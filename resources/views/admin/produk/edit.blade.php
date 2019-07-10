
@extends('admin.layout.master')
@section('content')

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Produk</h3>

              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Produk </h2>
      
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/admin/produk/{{$produk->id}}" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="nama_kategori">
                            @foreach ($kategoris as $kategori)
                              {{-- expr --}}
                            
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori}}</option>
                            @endforeach
                          </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="nama_produk" value="{{ $produk->nama_produk}}">
                          <br>
                          @if ($errors->has('nama_produk'))
  <p> {{ $errors->first('nama_produk') }}</p>
@endif
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="harga" value="{{ $produk->harga}}">
                          <br>
                          @if ($errors->has('harga'))
  <p> {{ $errors->first('harga') }}</p>
@endif
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="stok" value="{{ $produk->stok}}">
                          <br>
                          @if ($errors->has('stok'))
  <p> {{ $errors->first('stok') }}</p>
@endif
                        </div>
                      </div>


<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="descr">{{ $produk->deskripsi}}</textarea>
                  
                  <br />
                          @if ($errors->has('descr'))
  <p> {{ $errors->first('descr') }}</p>
@endif
                        </div>
                      </div>
                    
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rekomendasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                            {{-- expr --}}
                          
                         <p>
                        Y:
                        <input type="radio" class="flat" name="rekomendasi" id="genderM" value="Y" {{ $produk->rekomendasi == 'Y' ? 'checked' : '' }}  /> 
                        N:
                        <input type="radio" class="flat" name="rekomendasi" id="genderF" value="N" {{ $produk->rekomendasi == 'N' ? 'checked' : '' }} />
                      </p>
                       
                          <br>
                          @if ($errors->has('rekomendasi'))
  <p> {{ $errors->first('rekomendasi') }}</p>
@endif
<br>
                        </div>
                      </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gambar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                        
<input type="file" name="featured_img" value="{{ $produk->gambar}}">
<br>
@if ($errors->has('featured_img'))
  <p> {{ $errors->first('featured_img') }}</p>
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