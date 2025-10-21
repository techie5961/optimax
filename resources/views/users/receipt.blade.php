@extends('layout.users.app')
@section('title')
    Transaction Receipt
@endsection
@section('css')
    <style class="css">
        body{
            overflow: hidden;
        }
        .house{
            background-color: var(--bg);
background-image: url("{{ asset('images/receipt.png') }}");
background-size:cover;
background-position:center;
            z-index:5000;
        }
    </style>
@endsection
@section('main')
    <section class="pos-fixed column align-center no-select p-10 house top-0 left-0 bottom-0 right-0">
        <div class="row bg-transparent trx-head backdrop-blur-10 space-between pos-fixed top-0 left-0 right-0 p-10 align-center">
            <div onclick="
            spa(event,'{{ url('users/transactions') }}');
            " class="h-30 pc-pointer w-30 column bg circle justify-center br-10">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5303 5.46967C10.8232 5.76256 10.8232 6.23744 10.5303 6.53033L5.81066 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H5.81066L10.5303 17.4697C10.8232 17.7626 10.8232 18.2374 10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303L3.46967 12.5303C3.17678 12.2374 3.17678 11.7626 3.46967 11.4697L9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong class="desc">Transaction Receipt</strong>
            <span></span>
        </div>
        <div class="w-full max-w-500 receipt-body br-10 bg-transparent backdrop-blur-50 p-10">
            <div class="row align-center w-full space-between g-10">
              <div class="column g-2">
                  <strong style="font-family:titan one;font-weight:100;font-size:1.4rem;color:var(--primary)">{{ config('app.name') }} Transaction Receipt</strong>
               
              </div>
              <div class="br-5 p-5 {{ $data->status == 'success' ? 'bg-green c-white' : ($data->status == 'pending' ? 'bg-gold c-black' : 'bg-red c-white') }}">{{ $data->status }}</div>
            </div>
            <hr class="bg-primary">
          @if ($data->class == 'credit')
                <strong style="font-size:2rem;"  class="desc w-fit c-green row m-x-auto">+ &#8358;{{ number_format($data->amount,2) }}</strong>
          @else
                <strong style="font-size:2rem;" class="desc w-fit c-red row m-x-auto">- &#8358;{{ number_format($data->amount,2) }}</strong>
          @endif
          <strong class="m-x-auto w-fit row font-weight-400">{{ $data->date_format }}</strong>
         <hr class="gradient">
           <div class="row m-top-10 w-full align-center g-10 space-between">
    <span>Transaction Type</span>
    <span>{{ $data->type }}</span>
</div>
         <div class="row m-top-10 w-full align-center g-10 space-between">
    <span>Transaction Amount</span>
    <span>&#8358;{{ number_format($data->amount,2) }}</span>
</div>
 <div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction Fee</span>
    <span>&#8358;{{ number_format(0,2) }}</span>
</div>
<div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction ID</span>
    <span>TRX-{{ $data->id }}</span>
</div>
<div class="row w-full m-top-10 align-center g-10 space-between">
    <span>TimeFrame</span>
    <span>{{ $data->frame }}</span>
</div>
<div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction Status</span>
    @switch($data->status)
        @case('pending')
            <div class="bg-gold p-5  p-x-10 c-black br-5">{{ $data->status }}</div>
            @break
        @case('success')
             <div class="bg-green p-x-10 p-5 c-white br-5">{{ $data->status }}</div>
            @break
        @default
             <div class="bg-red p-x-10 p-5 c-white br-5">{{ $data->status }}</div>
    @endswitch
</div>
           
       
        
         
          <hr class="gradient m-top-10 m-bottom-10">
        
          <div style="border-radius:0;border:0.1px dashed green;color:green" class="p-10 m-top-10 row g-5 align-center w-full bg-green-transparent br-10">
           <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22C13.0193 22 13.38 21.8424 14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2C11.1886 2 10.405 2.26824 8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241ZM15.0595 10.4995C15.3353 10.1905 15.3085 9.71642 14.9995 9.44055C14.6905 9.16467 14.2164 9.19151 13.9405 9.50049L10.9286 12.8739L10.0595 11.9005C9.78358 11.5915 9.30947 11.5647 9.00049 11.8405C8.69151 12.1164 8.66467 12.5905 8.94055 12.8995L10.3691 14.4995C10.5114 14.6589 10.7149 14.75 10.9286 14.75C11.1422 14.75 11.3457 14.6589 11.488 14.4995L15.0595 10.4995Z" fill="CurrentColor"></path>
</svg>


<div class="column g-2">
    <strong>Secure Transaction</strong>
    <span class="text-small">This transaction is protected by end-to-end encryption</span>
</div>
          </div>
          <div style="border-top:0.1px dashed silver" class="w-full text-average text-dim text-center p-5 m-y-10">
          NOTE - If you have any issues with this transactioon,do well to contact our hyper active support team and we would look into it. <br>
          <span>THANK YOU FOR CHOOSING {{ strtoupper(config('app.name')) }}</span>
        </div>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Restyle : function(){
                try{
                   
                       document.querySelector('.receipt-body').style.marginTop=document.querySelector('.trx-head').getBoundingClientRect().height + 'px';
                     //  let cont_bottom=document.querySelector('.timer').getBoundingClientRect().bottom;
                  //  document.querySelector('.line').style.height=cont_bottom - document.querySelector('.timer-circle').getBoundingClientRect().bottom + 'px';
                    
                }catch(error){
                    alert(error.stack);
                }
                 }
        }
        MyFunc.Restyle()
    </script>
@endsection


 