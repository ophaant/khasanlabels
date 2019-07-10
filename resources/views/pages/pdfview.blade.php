
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Invoice Template with Foundation</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300,400,700'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation-flex.min.css'>
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

      <link rel="stylesheet" href="{{asset('assets/invoice/css/style.css')}}">

  
</head>

<body>

  
<div class="row expanded">
  <main class="columns">
    <div class="inner-container">
    <header class="row align-center">

        <a class="button hollow secondary"><i class="ion ion-chevron-left"></i> Go Back to Purchases</a>
        &nbsp;&nbsp;<a href="{!! url('pdfview')!!}" class="button"><i class="ion ion-ios-printer-outline"></i> Print Invoice</a>
      </header>
    <section class="row">
      <div class="callout large invoice-container">
        
        <table class="invoice">
          <tr class="header">
            <td class="">
              <img src="{{asset('assets/images/logo.png')}}" alt="Company Name" />
            </td>
            <td class="align-right">
              <h2>Invoice</h2>
            </td>
          </tr>
          <tr class="intro">
            <td class="">
              
              Hello, {{ $pelanggan->nama}}.<br>
              Terima kasih atas pesanan anda.
            </td>
            <td class="text-right">
             
              <span class="num">{{$notrans->formid}}</span><br>
              <span class="num">(*Gunakan kode ini untuk konfirmasi)</span><br>
              
              {{$notrans->tanggal}}
            </td>
          </tr>
          <tr class="details">
            <td colspan="2">
              <table>
                <thead>
                  <tr>
                    <th class="desc">Barang</th>
                    <th class="id">ID Produk</th>
                    <th class="qty">Jumlah</th>
                    <th class="amt">Subtotal</th>
                  </tr>
                </thead>
                <?php $i = 1; ?>
                @foreach ($transaction as $cart)
                <tbody>
                  <tr class="item">
                    <td class="desc">{{ $cart->produk->nama_produk }}</td>
                    <td class="id num">PDK{{ $cart->produk_id }}NM17</td>
                    <td class="qty">{{ $cart->qty }}</td>
                    <td class="amt"><i>Rp. </i>{{ number_format($cart->total_harga, 2,',','.') }}</td>
                  </tr>
                </tbody>
                <?php $i++; ?>
                    @endforeach
              </table>
            </td> 
          </tr>
          <tr class="totals">
            <td></td>
            <td>
              <table>
                <tr class="fees">
                  <td class="num">Subtotal</td>
                  <td class="num"><i>Rp. </i>{{ $notrans->subtotal }}</td>
                </tr>
                <tr class="fees">
                  <td class="num">Ongkos Kirim</td>
                  <td class="num"><i>Rp. </i>{{ number_format($pelanggan->ongkir, 2,',','.') }}</td>
                </tr>
                
                @php
                  {{ $ongkir = $pelanggan->ongkir;
                     $sub = $notrans->subtotal;
                     $harga_str = preg_replace("/[^0-9]/", "", $sub);
                    
                    $harga_int = (int) $harga_str;
                    $tot = $ongkir + ($harga_int/100);

                   }}
                @endphp
                <tr class="total">
                  <td>Total</td>
                  <td><i>Rp. </i>{{ number_format($tot, 2,',','.') }}</td>
                </tr>
              </table>
            </td>
          </tr>
          {{csrf_field()}}
        </table>
        
        <section class="additional-info">
        <div class="row">
          <div class="columns">
            <h5>Informasi Tagihan</h5>
            <p>{{$pelanggan->nama}}<br>
              {{$pelanggan->telepon}}<br>
              {{$pelanggan->alamat}}<br>
              {{  $data['province'] }}<br>
              {{$pelanggan->kodepos}}</p>
          </div>
          <div class="columns">
            <h5>Informasi Pembayaran</h5>
            <p>
              
              <img src="{{asset('assets/images/bca.gif') }}" width='100' height='100'></p><p>
              <b>Bank BCA</b><br>
              Nomor Rekening:<br>
              <b>795 514 5844</b><br>
              a.n Nur
              </p>
          </div>
        </div>
        </section>
      </div>
    </section>
    
    </div>
  </main>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.js'></script>

  

</body>

</html>
