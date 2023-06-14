@extends('layouts.app')

@section('content')
    <div class="hero-wrap" style="background-image: url({{asset('images/panti5.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donasi</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Halaman Donasi</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Terimakasih !</h2>
                    <p>Memberikan kebahagiaan untuk orang lain sejatinya juga membahagiakan diri-sendiri. Mari, bantu anak-anak yatim di panti asuhan agar senyum tergelincir di bibir mereka.</p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Donasi</h4>
                    <form id="donate-form" method="POST" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Donasi ex:200.000">
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="pesan..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                {{--                <div class="col-md-6" id="map"></div>--}}
                <div class="col-md-6">

                </div>

            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('app.midtrans_client_key') }}"></script>

    <script>
        $(document).ready(function() {
            $('#donate-form').submit(function(e) {
                e.preventDefault()

                var fd = new FormData(document.getElementById('donate-form'))

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    url: '{{ url('donate-action') }}',
                    data: fd,
                    enctype: 'multipart/form-data',
                    dataType: 'JSON',
                    success : function (res) {
                        console.log(res)
                        window.snap.pay(res.token, {
                            onSuccess: function(result){
                                /* You may add your own implementation here */
                                Swal.fire(
                                    'Berhasil',
                                    'Terimakasih atas kebaikan anda !',
                                    'success'
                                )
                            },
                            onPending: function(result){
                                /* You may add your own implementation here */
                                // alert("wating your payment!"); console.log(result);
                                Swal.fire(
                                    'Menunggu',
                                    'Silahkan melakukan pembayaran !',
                                    'info'
                                )
                            },
                            onError: function(result){
                                /* You may add your own implementation here */
                                // alert("payment failed!"); console.log(result);
                                Swal.fire(
                                    'Error',
                                    'Maaf, terjadi kesalahan !',
                                    'error'
                                )
                            },
                            onClose: function(){
                                /* You may add your own implementation here */
                                // alert('you closed the popup without finishing the payment');
                            }
                        });

                        $('input[name="jumlah"]').val("")
                        $('textarea[name="pesan"]').val("")
                    }
                })
            })
        })
    </script>
@endsection
