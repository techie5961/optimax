@extends('layout.users.app')
@section('title')
    Withdraw
@endsection
@section('css')
    <style class="css">
       .wallets.active{
        background:#4caf50 !important;
        color:white !important;
        animation: scale-in-out 0.5s ease forwards;
       } 
       @keyframes scale-in-out{
        0%,100%{
            transform: scale(1)
        }

        50%{
            transform:scale(0.95);
        }

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
    <section class="w-full align-center justify-center column g-10 p-10">
         <div class="bg-transparent backdrop-blur-50 w-full column g-10 mmax-w-500 br-10 p-10">
            <div style="background:rgba(0,255,0,0.2);border:0.1px dashed green;" class="row p-10 space-between br-10  align-center">

                <span style="font-family:titan one;font-weight:100" class="desc bold">Withdraw Funds</span>
           <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4105 9.86058C20.3559 9.8571 20.2964 9.85712 20.2348 9.85715L20.2194 9.85715H17.8015C15.8086 9.85715 14.1033 11.4382 14.1033 13.5C14.1033 15.5618 15.8086 17.1429 17.8015 17.1429H20.2194L20.2348 17.1429C20.2964 17.1429 20.3559 17.1429 20.4105 17.1394C21.22 17.0879 21.9359 16.4495 21.9961 15.5577C22.0001 15.4992 22 15.4362 22 15.3778L22 15.3619V11.6381L22 11.6222C22 11.5638 22.0001 11.5008 21.9961 11.4423C21.9359 10.5506 21.22 9.91209 20.4105 9.86058ZM17.5872 14.4714C18.1002 14.4714 18.5162 14.0365 18.5162 13.5C18.5162 12.9635 18.1002 12.5286 17.5872 12.5286C17.0741 12.5286 16.6581 12.9635 16.6581 13.5C16.6581 14.0365 17.0741 14.4714 17.5872 14.4714Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2341 18.6C20.3778 18.5963 20.4866 18.7304 20.4476 18.8699C20.2541 19.562 19.947 20.1518 19.4542 20.6485C18.7329 21.3755 17.8183 21.6981 16.6882 21.8512C15.5902 22 14.1872 22 12.4158 22H10.3794C8.60803 22 7.20501 22 6.10697 21.8512C4.97692 21.6981 4.06227 21.3755 3.34096 20.6485C2.61964 19.9215 2.29953 18.9997 2.1476 17.8608C1.99997 16.7541 1.99999 15.3401 2 13.5548V13.4452C1.99998 11.6599 1.99997 10.2459 2.1476 9.13924C2.29953 8.00031 2.61964 7.07848 3.34096 6.35149C4.06227 5.62451 4.97692 5.30188 6.10697 5.14876C7.205 4.99997 8.60802 4.99999 10.3794 5L12.4158 5C14.1872 4.99998 15.5902 4.99997 16.6882 5.14876C17.8183 5.30188 18.7329 5.62451 19.4542 6.35149C19.947 6.84817 20.2541 7.43804 20.4476 8.13012C20.4866 8.26959 20.3778 8.40376 20.2341 8.4L17.8015 8.40001C15.0673 8.40001 12.6575 10.5769 12.6575 13.5C12.6575 16.4231 15.0673 18.6 17.8015 18.6L20.2341 18.6ZM5.61446 8.88572C5.21522 8.88572 4.89157 9.21191 4.89157 9.61429C4.89157 10.0167 5.21522 10.3429 5.61446 10.3429H9.46988C9.86912 10.3429 10.1928 10.0167 10.1928 9.61429C10.1928 9.21191 9.86912 8.88572 9.46988 8.88572H5.61446Z" fill="CurrentColor"></path>
<path d="M7.77668 4.02439L9.73549 2.58126C10.7874 1.80625 12.2126 1.80625 13.2645 2.58126L15.2336 4.03197C14.4103 3.99995 13.4909 3.99998 12.4829 4H10.3123C9.39123 3.99998 8.5441 3.99996 7.77668 4.02439Z" fill="CurrentColor"></path>
</svg>

             
            </div>
            <div class="column g-5 w-full">
               
                <span>Select a wallet you intend to withdraw from.</span>
            </div>
            <form action="{{ url('users/post/withdraw/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full column g-10">
              
                <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <div class="w-full grid grid-2 g-10 place-center">
                    <div onclick="
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                     });
                     this.classList.add('active');
                        document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : &#8358;{{ number_format($activities_minimum,2) }}`;
                    document.querySelector('input.wallet').value='activities_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                   
                     " class="w-full wallets transition-ease-half column bg-dim align-center g-5 p-10 no-select pointer clip-5 br-5">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12ZM8 15.25C7.58579 15.25 7.25 15.5858 7.25 16C7.25 16.4142 7.58579 16.75 8 16.75H16C16.4142 16.75 16.75 16.4142 16.75 16C16.75 15.5858 16.4142 15.25 16 15.25H8ZM7.58579 6.58579C8.17157 6 9.11438 6 11 6H13C14.8856 6 15.8284 6 16.4142 6.58579C17 7.17157 17 8.11438 17 10V10.25H19C19.4142 10.25 19.75 10.5858 19.75 11C19.75 11.4142 19.4142 11.75 19 11.75H5C4.58579 11.75 4.25 11.4142 4.25 11C4.25 10.5858 4.58579 10.25 5 10.25H7V10C7 8.11438 7 7.17157 7.58579 6.58579Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Activities Wallet</strong>
                        <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : &#8358;{{ number_format($affiliate_minimum,2) }}`;
                    document.querySelector('input.wallet').value='affiliate_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full wallets transition-ease-half column bg-dim align-center g-5 p-10 no-select pointer clip-5 br-5">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M21.1009 8.00353C21.0442 7.99996 20.9825 7.99998 20.9186 8L20.9026 8.00001H18.3941C16.3264 8.00001 14.5572 9.62757 14.5572 11.75C14.5572 13.8724 16.3264 15.5 18.3941 15.5H20.9026L20.9186 15.5C20.9825 15.5 21.0442 15.5001 21.1009 15.4965C21.9408 15.4434 22.6835 14.7862 22.746 13.8682C22.7501 13.808 22.75 13.7431 22.75 13.683L22.75 13.6667V9.83334L22.75 9.81702C22.75 9.75688 22.7501 9.69199 22.746 9.6318C22.6835 8.71381 21.9408 8.05657 21.1009 8.00353ZM18.1717 12.75C18.704 12.75 19.1355 12.3023 19.1355 11.75C19.1355 11.1977 18.704 10.75 18.1717 10.75C17.6394 10.75 17.2078 11.1977 17.2078 11.75C17.2078 12.3023 17.6394 12.75 18.1717 12.75Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.9179 17C21.067 16.9961 21.1799 17.1342 21.1394 17.2778C20.9387 17.9902 20.62 18.5975 20.1088 19.1088C19.3604 19.8571 18.4114 20.1892 17.239 20.3469C16.0998 20.5 14.6442 20.5 12.8064 20.5H10.6936C8.85583 20.5 7.40019 20.5 6.26098 20.3469C5.08856 20.1892 4.13961 19.8571 3.39124 19.1088C2.64288 18.3604 2.31076 17.4114 2.15314 16.239C1.99997 15.0998 1.99998 13.6442 2 11.8064V11.6936C1.99998 9.85583 1.99997 8.40019 2.15314 7.26098C2.31076 6.08856 2.64288 5.13961 3.39124 4.39124C4.13961 3.64288 5.08856 3.31076 6.26098 3.15314C7.40019 2.99997 8.85582 2.99998 10.6936 3L12.8064 3C14.6442 2.99998 16.0998 2.99997 17.239 3.15314C18.4114 3.31076 19.3604 3.64288 20.1088 4.39124C20.62 4.90252 20.9386 5.50974 21.1394 6.22218C21.1799 6.36575 21.067 6.50387 20.9179 6.5L18.394 6.50001C15.5574 6.50001 13.0571 8.74091 13.0571 11.75C13.0571 14.7591 15.5574 17 18.394 17L20.9179 17ZM7 15.5C6.58579 15.5 6.25 15.1642 6.25 14.75V8.75C6.25 8.33579 6.58579 8 7 8C7.41421 8 7.75 8.33579 7.75 8.75V14.75C7.75 15.1642 7.41421 15.5 7 15.5Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Affiliate Wallet</strong>
                        <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance) }}</strong>
                    </div>
                </div>
                {{-- WALLET SELECTED --}}
                <input type="hidden" name="wallet" class="input wallet">
                <label for="">Enter Withdrawal Amount</label>
                <div class="cont row align-center bg-black-transparent w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter withdrawal amount" name="amount" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                <span class="minimum_text"></span>
                  @if ($bank_linked !== 'false')
                  {{-- bank --}}
            <div class="w-full card no-select m-x-auto max-w-500 p-20 br-10 bg-green-transparent g-10">
                   <span style="font-size:1.3rem;font-family:titan one;color:var(--primary);margin-bottom:20px;display:flex;">My Bank Details</span>
             
                <div class="w-full display-none p-10 bg-primary primary-text bold font-cinzel-decorative desc br-10 justify-center text-center">Bank Details

                </div>
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
                 
               
              
                <button class="post ddisabled">Withdraw Funds</button>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection