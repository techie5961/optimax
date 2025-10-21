@extends('layout.users.index')
@section('title')
    Vendors
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10 align-center">
        <strong class="desc font-weight-400 c-primary" style="font-family:luckiest guy;font-size:1.5rem;">Buy Coupon Code</strong>
        <span class="text-center">Connect directly with our authprized vendors via whatsapp to purchase your coupon code.</span>
        <span class="text-center c-red" style="color:gold">Note:To prevent fraud, only transact with the vendors officially listed on this page.{{ config('app.name') }} is not liable for payments made to unlisted individuals claiming to vendors.</span>
        @if ($vendors->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Vendors Available at the moment,check back later'
            ])
        @else
           <div class="grid pc-grid-2 w-full g-10 place-center">
             @foreach ($vendors as $data)
                <div style="box-shadow: inset 0 0 50px var(--bg-light);backdrop-filter:blur(50px);" class="w-full align-center br-20 p-20 row g-10 bg">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-70 no-shrink w-70 circle">
                    <div class="column space-between g-2">
                     <div class="row align-center g-2">
                           <span class="desc c-primary" style="font-family:luckiest guy">{{ ucfirst($data->username) }}</span>
                        <span style="color:#00ff08" class="m-right-auto c-green">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                        </span>
                     </div>
                     <span>Country: Nigeria</span>

                       
                    </div>
                    <div class="grid grid-2 align-center w-full space-between g-10">
                      
        </div>

                    <button onclick="window.open('https://wa.me/{{$data->phone}}?text={{ urlencode('Hello '.ucfirst($data->username).',are you online,i want to purchase coupon code for '.config('app.name').'') }}')" class="btn-green-3d c-white g-5 clip-5 br-5">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M22 8.5C22 4.91015 19.0899 2 15.5 2C13.4171 2 11.5631 2.9823 10.3735 4.50721C15.4471 4.70336 19.5 8.87838 19.5 14C19.5 14.1103 19.4981 14.2202 19.4944 14.3296L19.8267 14.4185C20.793 14.677 21.677 13.793 21.4185 12.8267L21.2911 12.3506C21.1882 11.9661 21.2501 11.5598 21.4155 11.1977C21.7908 10.376 22 9.46242 22 8.5Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 14C18 18.4183 14.4183 22 10 22C8.76449 22 7.5944 21.7199 6.54976 21.2198C6.19071 21.0479 5.78393 20.9876 5.39939 21.0904L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L2.90955 18.6006C3.01245 18.2161 2.95209 17.8093 2.7802 17.4502C2.28008 16.4056 2 15.2355 2 14C2 9.58172 5.58172 6 10 6C14.4183 6 18 9.58172 18 14ZM6.5 15C7.05228 15 7.5 14.5523 7.5 14C7.5 13.4477 7.05228 13 6.5 13C5.94772 13 5.5 13.4477 5.5 14C5.5 14.5523 5.94772 15 6.5 15ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15ZM13.5 15C14.0523 15 14.5 14.5523 14.5 14C14.5 13.4477 14.0523 13 13.5 13C12.9477 13 12.5 13.4477 12.5 14C12.5 14.5523 12.9477 15 13.5 15Z" fill="CurrentColor"></path>
</svg>



                        <span>Chat</span>
                    </button>
                </div>
            @endforeach
           </div>
        @endif
    </section>
@endsection