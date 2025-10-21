@extends('layout.users.app')
@section('title')
    Buy Data Bundle
@endsection
@section('css')
    <style class="css">
        .placeholder-bold::placeholder{
            font-weight: bold;
        }
        .networks{
            top:calc(100% + 10px);
        }
        .angle{
            border-left:5px solid transparent;
            border-right:5px solid transparent;
            border-bottom:5px solid #708090;
          
            position:absolute;
            bottom:100%;
            left:10px;
        }
        .network.active .radio span{
            background:#4caf50 !important;
        }
        .network.active .radio{
           border-color:#4caf50;
        }
        .amount.active{
            background:#4caf50;
            color:white;
            animation:bounce-in-out 0.5s ease forwards;
        }
        @keyframes bounce-in-out{
            50%{
                transform:scale(0.95);
            }
            0%,100%{
                transform:scale(1);
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full column p-10 g-10">
         <div class="bg-transparent backdrop-blur-50 w-full column g-10 mmax-w-500 br-10 p-10">
              <div style="background:rgba(0,255,0,0.2);border:0.1px dashed green;" class="row p-10 space-between br-10  align-center">

                 <span style="font-family:titan one;font-weight:100" class="desc bold">Buy Data Bundle</span>
           <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.03471C9.3028 8.03471 7.11628 10.1864 7.11628 12.8406C7.11628 14.1679 7.66214 15.3684 8.54669 16.2388C8.81915 16.5069 8.81915 16.9417 8.54669 17.2098C8.27423 17.4779 7.83249 17.4779 7.56003 17.2098C6.4245 16.0923 5.72093 14.5467 5.72093 12.8406C5.72093 9.42803 8.53217 6.66161 12 6.66161C15.4678 6.66161 18.2791 9.42803 18.2791 12.8406C18.2791 14.5467 17.5755 16.0923 16.44 17.2098C16.1675 17.4779 15.7258 17.4779 15.4533 17.2098C15.1809 16.9417 15.1809 16.5069 15.4533 16.2388C16.3379 15.3684 16.8837 14.1679 16.8837 12.8406C16.8837 10.1864 14.6972 8.03471 12 8.03471Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.3731C7.24778 4.3731 3.39535 8.16412 3.39535 12.8406C3.39535 15.179 4.35769 17.2949 5.91559 18.828C6.18805 19.0961 6.18805 19.5308 5.91559 19.7989C5.64313 20.067 5.20139 20.067 4.92893 19.7989C3.12005 18.0189 2 15.5578 2 12.8406C2 7.40578 6.47715 3 12 3C17.5228 3 22 7.40578 22 12.8406C22 15.5578 20.8799 18.0189 19.0711 19.7989C18.7986 20.067 18.3569 20.067 18.0844 19.7989C17.8119 19.5308 17.8119 19.0961 18.0844 18.828C19.6423 17.2949 20.6047 15.179 20.6047 12.8406C20.6047 8.16412 16.7522 4.3731 12 4.3731Z" fill="CurrentColor"></path>
<path d="M10.3099 17.3441C11.0774 16.4683 11.4612 16.0304 11.935 16.002C11.9783 15.9993 12.0217 15.9993 12.065 16.002C12.5389 16.0304 12.9226 16.4683 13.6901 17.3441C15.3601 19.2497 16.1951 20.2025 15.9613 21.0245C15.9412 21.0952 15.9163 21.1639 15.8867 21.2301C15.5426 22 14.3617 22 12 22C9.63827 22 8.45741 22 8.11329 21.2301C8.08371 21.1639 8.05875 21.0952 8.03866 21.0245C7.80489 20.2025 8.63989 19.2497 10.3099 17.3441Z" fill="CurrentColor"></path>
<path d="M14.5 12.5C14.5 13.8807 13.3807 15 12 15C10.6193 15 9.5 13.8807 9.5 12.5C9.5 11.1193 10.6193 10 12 10C13.3807 10 14.5 11.1193 14.5 12.5Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div class="column g-5 w-full">
                <strong class="desc c-green">Note:</strong>
                @if ($general->vtu->data == 'open')
                <span>
                  The Data portal is now active and accessible. Users can proceed with data bundle purchases and related services while the portal remains open.

                </span>
                    
                @else
                  <span>The Data portal is presently closed by Admin. It will reopen soon — please check back later.</span>
  
                @endif
                            </div>
                            <label for="">Select Network Provider & Enter Number</label>
        <div class="w-full pos-relative h-50 border-1 border-color-silver br-10 row align-center">
            <div onclick="
           if(document.querySelector('.networks').classList.contains('display-none')){
            document.querySelector('.networks').classList.remove('display-none');
           }else{
            document.querySelector('.networks').classList.add('display-none');
           }
                " class="h-full pc-pointer g-5 row align-center p-10">
            <img src="{{ asset('networks/mtn.jpg') }}" alt="" class="h-full network-img no-shrink perfect-square circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M72.61,83.06a8,8,0,0,1,1.73-8.72l48-48a8,8,0,0,1,11.32,0l48,48A8,8,0,0,1,176,88H80A8,8,0,0,1,72.61,83.06ZM176,168H80a8,8,0,0,0-5.66,13.66l48,48a8,8,0,0,0,11.32,0l48-48A8,8,0,0,0,176,168Z"></path></svg>

            </div>
            <input readonly onfocus="this.removeAttribute('readonly')" autocomplete="off" oninput="
             if(document.querySelector('input[name=network]').value !== '' && document.querySelector('input[name=amount]').value !== '' ){
             if((this.value).replace(/^0+/,'').length == 10){
              document.querySelector('button.topup').classList.remove('disabled');
             }else{
              document.querySelector('button.topup').classList.add('disabled');
             }
              }
            " type="number" placeholder="0XXXXXXXXX" name="number" class="inp placeholder-bold input w-full h-full bg-transparent border-none br-10">
        <div style="background:#708090 !important" class="pos-absolute max-w-500 average display-none networks top-full w-full column p-10 g-2 bg-dim br-10">
            <div class="angle"></div>
            <div onclick="
             try{
             
              document.querySelector('.network-img').src=this.querySelector('img').src;
              document.querySelectorAll('.network').forEach((network)=>{
              network.classList.remove('active');
              });
              this.classList.add('active');
              document.querySelector('input[name=network]').value='MTN';
              this.closest('.networks').classList.add('display-none');
              if(document.querySelector('input[name=amount]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }
             }catch(error){
             alert(error.stack);
             }

              " class="w-full network align-center space-between row g-10 pc-pointer">
              <img src="{{ asset('networks/mtn.jpg') }}" alt="" class="h-30 no-shrink perfect-square circle">
              <strong class="m-right-auto">MTN</strong>
              <div class="h-15 p-2 radio perfect-square circle border-1 border-color-silver">
                <span class="h-full row perfect-square circle"></span>
              </div>
            </div>
            <hr class="bg-silver">
              <div onclick="
              document.querySelector('.network-img').src=this.querySelector('img').src;
              document.querySelectorAll('.network').forEach((network)=>{
              network.classList.remove('active');
              });
              this.classList.add('active');
              document.querySelector('input[name=network]').value='Airtel';
              this.closest('.networks').classList.add('display-none');
               if(document.querySelector('input[name=amount]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

              " class="w-full network align-center space-between row g-10 pc-pointer">
              <img src="{{ asset('networks/airtel.jpg') }}" alt="" class="h-30 no-shrink perfect-square circle">
              <strong class="m-right-auto">Airtel</strong>
              <div class="h-15 p-2 radio perfect-square circle border-1 border-color-silver">
                <span class="h-full row perfect-square circle"></span>
              </div>
            </div>
            <hr class="bg-silver">
              <div onclick="
              document.querySelector('.network-img').src=this.querySelector('img').src;
              document.querySelectorAll('.network').forEach((network)=>{
              network.classList.remove('active');
              });
              this.classList.add('active');
              document.querySelector('input[name=network]').value='Globacom';
              this.closest('.networks').classList.add('display-none');
               if(document.querySelector('input[name=amount]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

              " class="w-full network align-center space-between row g-10 pc-pointer">
              <img src="{{ asset('networks/glo.jpg') }}" alt="" class="h-30 no-shrink perfect-square circle">
              <strong class="m-right-auto">Globacom</strong>
              <div class="h-15 p-2 radio perfect-square circle border-1 border-color-silver">
                <span class="h-full row perfect-square circle"></span>
              </div>
            </div>
            <hr class="bg-silver">
              <div onclick="
              document.querySelector('.network-img').src=this.querySelector('img').src;
              document.querySelectorAll('.network').forEach((network)=>{
              network.classList.remove('active');
              });
              this.classList.add('active');
              document.querySelector('input[name=network]').value='9Mobile';
              this.closest('.networks').classList.add('display-none');
               if(document.querySelector('input[name=amount]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

              " class="w-full network align-center space-between row g-10 pc-pointer">
              <img src="{{ asset('networks/9mobile.jpg') }}" alt="" class="h-30 no-shrink perfect-square circle">
              <strong class="m-right-auto">9Mobile</strong>
              <div class="h-15 p-2 radio perfect-square circle border-1 border-color-silver">
                <span class="h-full row perfect-square circle"></span>
              </div>
            </div>
            
        </div>
        </div>
      
        <label for="">Select Amount</label>
        <div class="w-full grid grid-full g-10 grid-3 pc-grid-6">
        
            <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                document.querySelector('input[name=amount]').value=1000;
                 if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">1GB</strong>
                <span class="text-average">click to select</span>
            </div>
              <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                   document.querySelector('input[name=amount]').value=2000;
                    if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">2GB</strong>
                <span class="text-average">click to select</span>
            </div>
              <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                   document.querySelector('input[name=amount]').value=3000;

                    if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">3GB</strong>
                <span class="text-average">click to select</span>
            </div>
              <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                   document.querySelector('input[name=amount]').value=4000;
                    if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">4GB</strong>
                <span class="text-average">click to select</span>
            </div>
            <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                   document.querySelector('input[name=amount]').value=5000;
                    if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">5GB</strong>
                <span class="text-average">click to select</span>
            </div>
            <div onclick="
            document.querySelectorAll('.amount').forEach((amount)=>{
            amount.classList.remove('active');
            })
                this.classList.add('active');
                   document.querySelector('input[name=amount]').value=6000;
                    if(document.querySelector('input[name=network]').value !== '' && (document.querySelector('input[name=number]').value).replace(/^0+/,'').length == 10 ){
              document.querySelector('button.topup').classList.remove('disabled');
              }

                " class="column transition-ease-half amount bg-dim no-select br-5 justify-center p-10 w-full g-5 pc-pointer">
                <strong class="font-1">6GB</strong>
                <span class="text-average">click to select</span>
            </div>
        </div>
          {{-- NETWORK SELECTED HIDDEN INPUT --}}
        <input type="hidden" value="null" name="network" name="hidden" class="input bg">
        {{-- AMOUNT SELECTED HIDDEN INPUT --}}
        <input type="hidden" name="amount" class="input bg">
        <button onclick="
        let amount=document.querySelector('input[name=amount]').value;
        let number=document.querySelector('input[name=number]').value;
        let network=document.querySelector('input[name=network]').value;
        let net_img=document.querySelector('.network-img').src;
        if(network == 'null'){
        document.querySelector('.networks').classList.remove('display-none');
        CreateNotify('error','Please select network provider');
        return;
        
        }
        let data=`<div class='w-full p-20 column g-10'>
        <div class='row w-full align-center g-10 space-between'>
            <span class='text-dim'>Product Name</span>
            <span>Data Bundle</span>
        </div>
         <div class='row w-full align-center g-5 space-between'>
            <span class='text-dim'>Recipient Mobile</span>
            <span>${document.querySelector('input[name=number]').value}</span>
        </div>
        <div class='row w-full align-center g-5 space-between'>
            <span class='text-dim'>Recipient Network</span>
            <img src='${net_img}' alt='' class='m-left-auto no-shrink h-15 perfect-square circle'>
            <span>${document.querySelector('input[name=network]').value}</span>
        </div>
         <div class='row w-full align-center g-5 space-between'>
            <span class='text-dim'>Topup Amount</span>
            <span>&#8358;${parseFloat(document.querySelector('input[name=amount]').value).toLocaleString()}.00</span>
        </div>
          <div class='row w-full align-center g-5 space-between'>
            <span class='text-dim'>Debit Wallet</span>
            <span>Activities Wallet</span>
        </div>
        <button onclick='GetRequest(event,&quot;{{ url('users/get/data/topup?number=') }}${number}&network=${network}&amount=${amount}&quot;,this,MyFunc.Completed)' class='btn-primary m-top-10 m-bottom-10 h-50 w-full clip-1000 br-1000'>Confirm Purchase</button>
    </div>`;
    SlideUp(data);
        " class="post topup disabled">Buy Data Bundle</button>
    </div>
    </section>
@endsection

@section('js')
     <script class="js">
     window.MyFunc ={
        Completed : function(response,event){
       let data=JSON.parse(response);
       CreateNotify(data.status,data.message);
       if(data.status == 'success'){
        HideSlideUp();
        spa(event,data.url);
       }

        }
     }
     </script>
@endsection