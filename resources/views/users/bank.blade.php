@extends('layout.users.app')
@section('title')
    Add Bank Account
@endsection
@section('css')
    <style class="css">
        .verifying.resolved svg{
            display:none;
        }
        .verifying.resolved.success span{
            color:#4caf50;
        }
         .verifying.resolved.success svg.success{
            display:flex !important;
        }
          .verifying.resolved.error span{
            color:red;
        }
        .verifying.resolved.error svg.error{
            display:flex !important;
        }
          .card{
          background-color: var(--bg);
background-image: url("{{ asset('images/receipt.png') }}");
background-size:cover;
background-position:center;
       }
    </style>
@endsection
@section('main')
    <section class="w-full g-10 p-10 column flex-auto align-center">

        <div class="bg-transparent backdrop-blur-50 w-full column g-10 max-w-500 br-10 p-10">
            <div style="background:rgba(0,255,0,0.2);border:0.1px dashed green;" class="row p-10 space-between br-10  align-center">

                 <span style="font-family:titan one;font-weight:100" class="desc bold">Update Bank</span>
               <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.052 1.25H11.948C11.0495 1.24997 10.3003 1.24995 9.70552 1.32991C9.07773 1.41432 8.51093 1.59999 8.05546 2.05546C7.59999 2.51093 7.41432 3.07773 7.32991 3.70552C7.27259 4.13189 7.25637 5.15147 7.25179 6.02566C5.22954 6.09171 4.01536 6.32778 3.17157 7.17157C2 8.34315 2 10.2288 2 14C2 17.7712 2 19.6569 3.17157 20.8284C4.34314 22 6.22876 22 9.99998 22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14C22 10.2288 22 8.34315 20.8284 7.17157C19.9846 6.32778 18.7705 6.09171 16.7482 6.02566C16.7436 5.15147 16.7274 4.13189 16.6701 3.70552C16.5857 3.07773 16.4 2.51093 15.9445 2.05546C15.4891 1.59999 14.9223 1.41432 14.2945 1.32991C13.6997 1.24995 12.9505 1.24997 12.052 1.25ZM15.2479 6.00188C15.2434 5.15523 15.229 4.24407 15.1835 3.9054C15.1214 3.44393 15.0142 3.24644 14.8839 3.11612C14.7536 2.9858 14.5561 2.87858 14.0946 2.81654C13.6116 2.7516 12.964 2.75 12 2.75C11.036 2.75 10.3884 2.7516 9.90539 2.81654C9.44393 2.87858 9.24644 2.9858 9.11612 3.11612C8.9858 3.24644 8.87858 3.44393 8.81654 3.9054C8.771 4.24407 8.75661 5.15523 8.75208 6.00188C9.1435 6 9.55885 6 10 6H14C14.4412 6 14.8565 6 15.2479 6.00188ZM12 9.25C12.4142 9.25 12.75 9.58579 12.75 10V10.0102C13.8388 10.2845 14.75 11.143 14.75 12.3333C14.75 12.7475 14.4142 13.0833 14 13.0833C13.5858 13.0833 13.25 12.7475 13.25 12.3333C13.25 11.9493 12.8242 11.4167 12 11.4167C11.1758 11.4167 10.75 11.9493 10.75 12.3333C10.75 12.7174 11.1758 13.25 12 13.25C13.3849 13.25 14.75 14.2098 14.75 15.6667C14.75 16.857 13.8388 17.7155 12.75 17.9898V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.9898C10.1612 17.7155 9.25 16.857 9.25 15.6667C9.25 15.2525 9.58579 14.9167 10 14.9167C10.4142 14.9167 10.75 15.2525 10.75 15.6667C10.75 16.0507 11.1758 16.5833 12 16.5833C12.8242 16.5833 13.25 16.0507 13.25 15.6667C13.25 15.2826 12.8242 14.75 12 14.75C10.6151 14.75 9.25 13.7903 9.25 12.3333C9.25 11.143 10.1612 10.2845 11.25 10.0102V10C11.25 9.58579 11.5858 9.25 12 9.25Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div class="column g-5 w-full">
                <strong class="desc c-green">Note:</strong>
                <span>You can add or update your bank details at anytime ,just make sure you are adding the correct bank as all withdrawals are sent inti the bank linked upon withdrawal.</span>
            </div>
            <form action="{{ url('users/post/add/bank/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Added)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Account Number</label>
                <div class="cont row align-center w-full h-50 br-10 border-1 bg-black-transparent border-color-silver">
                    <input oninput="

      if((document.querySelector('.account-number').value).length == 10 &&   document.querySelector('.bank-code').value !== ''){
        document.querySelector('.verifying').classList.remove('display-none');
         document.querySelector('.verifying').classList.remove('success');
       document.querySelector('.verifying').classList.remove('error');
        document.querySelector('.verifying').classList.remove('resolved');
          document.querySelector('button.post').classList.add('disabled');
          document.querySelector('.verifying span').innerHTML='VERIFYING ACCOUNT NAME....'; 
      GetRequest(event,'{{ url('users/get/bank/auto/verify') }}?account_number=' + document.querySelector('.account-number').value + '&bank_code=' +   document.querySelector('.bank-code').value,document.createElement('div'),MyFunc.Verified);

        }
        " placeholder="Enter 10 digits account number" name="account_number" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Account Bank</label>
                <div onclick="SlideUp()" class="cont row align-center space-between g-10 p-10 no-select w-full h-50 br-10 border-1 bg-black-transparent border-color-silver">
                 <input type="hidden" class="bank-code">
                 <input type="hidden" name="bank_name" class="inp bank-name input required">
                    <span class="bank-selected">Select Bank</span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </div>
                <div class="bg-green-transparent display-none verifying row g-5 align-center no-select w-full br-10 p-10">
                    <svg fill="currentColor" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_XR07" begin="0;spinner_npiH.begin+0.4s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_npiH.begin+0.4s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_npiH.begin+0.4s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_r5ci" begin="spinner_XR07.begin+0.4s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_XR07.begin+0.4s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_XR07.begin+0.4s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_npiH" begin="spinner_XR07.begin+0.8s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_XR07.begin+0.8s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_XR07.begin+0.8s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" class="success display-none" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" class="error display-none" height="20" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  <span>VERIFYING ACCOUNT NAME....</span>
                </div>
                <input type="hidden" name="account_name" class="input account_name">
                <button class="post disabled">Update Bank Details</button>
            </form>
        </div>
       @if ($bank_linked !== 'false')
             <div class="w-full card no-select m-x-auto max-w-500 p-20 br-10 bg-green-transparent g-10">
                <div class="w-full display-none p-10 bg-primary primary-text bold font-cinzel-decorative desc br-10 justify-center text-center">Bank Details
                
                </div>
                <span style="font-size:1.3rem;font-family:titan one;color:var(--primary);margin-bottom:20px;display:flex;">My Bank Details</span>
                 <div class="row space-between g-10 align-center">
                <strong class="font-1 c-primary">{{ $bank->bank_name }}</strong>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                
            </div>
            <div class="row space-between g-10 align-center">
                <strong style="font-size:1.4rem;" class="c-white row m-x-auto">{{ $bank->account_name }}</strong>
               
            </div>
              
            <div class="row space-between g-10 align-center">
              
                <span class="m-x-auto row">{{ $bank->account_number }}</span>
            </div>
           {{-- <div onclick="spa(event,'{{ url('users/bank/add') }}')" class="w-full m-top-10 no-select clip-10 pointer row br-10 bg-dim p-10 align-center justify-center">
            Update Bank <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M222.33,123.89c-.06-.13-.12-.26-.19-.38L192,69.91V32a16,16,0,0,0-16-16H80A16,16,0,0,0,64,32V69.9L33.86,123.51c-.07.12-.13.25-.2.38a15.94,15.94,0,0,0,1.46,16.57l.11.14,77.61,100.81A4,4,0,0,0,120,239V154.63a24,24,0,1,1,16,0V239a4,4,0,0,0,7.16,2.44l77.6-100.81.11-.14A15.92,15.92,0,0,0,222.33,123.89ZM176,64H80V32h96Z"></path></svg>


           </div> --}}
        </div>
       @endif
    </section>
@endsection
@section('slideup_child')
<strong class="desc c-primary m-right-auto p-10 no-select">Select Bank</strong>
    @foreach (Banks()->data as $data)
        <div onclick="
    try{
      HideSlideUp();
      document.querySelector('.bank-selected').innerHTML='{{ $data->name }}';
      document.querySelector('.bank-code').value={{ $data->code }};
       document.querySelector('.bank-name').value='{{ $data->name }}';
      if((document.querySelector('.account-number').value).length == 10){
      document.querySelector('.verifying').classList.remove('display-none');
      document.querySelector('.verifying').classList.remove('success');
       document.querySelector('.verifying').classList.remove('error');
        document.querySelector('.verifying').classList.remove('resolved');
          document.querySelector('button.post').classList.add('disabled');
       document.querySelector('.verifying span').innerHTML='VERIFYING ACCOUNT NAME....'; 
        GetRequest(event,'{{ url('users/get/bank/auto/verify') }}?account_number=' + document.querySelector('.account-number').value + '&bank_code={{ $data->code }}',document.createElement('div'),MyFunc.Verified);

        }
    }catch(error){
    CreateNotify('error',error.stack);
    }
        " class="w-full p-10 no-select pointer clip-10 br-10 br-10 row align-center g-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#708090" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

            {{ $data->name }}
        </div>
    @endforeach
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Added : function(response,event){
                  let data=JSON.parse(response);
                if(data.status == 'success'){
                   spa(event,"{{ url('users/bank/add') }}");
                }
            },
            Verified : function(response){
               if(IsJSONABLE(response)){
                 let data=JSON.parse(response);
                document.querySelector('.verifying span').innerHTML=data.message;
                document.querySelector('.verifying').classList.add('resolved');
                document.querySelector('.verifying').classList.add(data.status);
                if(data.status == 'success'){
                    document.querySelector('input.account_name').value=data.message;
                    document.querySelector('button.post').classList.remove('disabled');

                }

               }else{
                CreateNotify('error',response);
               }
            }
          
        }
    </script>
@endsection