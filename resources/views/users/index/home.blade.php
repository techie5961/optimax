@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:scale(0);
            }
             100%{
                opacity:1;
                transform:scale(1);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:scale(0) rotate(0deg);
            
            }
             100%{
                opacity:1;
                transform:scale(1) rotate(360deg);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <span style="font-size:2rem;text-align:center;line-height:1;font-family:luckiest guy" class=" m-x-auto c-primary"><span class="c-white">Welcome to</span> {{ config('app.name') }}</span>
        <span style="font-size:1.2rem;text-align:center;line-height:1;font-family:luckiest guy" class="font-bowl m-x-auto c-primary"><span class="c-white">Where your efforts meets rewards</span></span>
        <span class="text-center">Discover a platform designed to recognize your potential. At {{ config('app.name') }}, we provide genuine opportunities for you to grow your income through meaningful engagement and simple tasks.</span>
        <div class="row w-full p-10 m-x-auto  justify-center align-center g-10">
            <button style="border-bottom:none;box-shadow:inset 0 0 20px var(--primary);" onclick="window.location.href='{{ url('register') }}'" class="c-white btn-primary-3d bg min-w-100 clip-1000 br-1000">Get Started</button>
            <button style="border-bottom:none;box-shadow:inset 0 0 20px var(--primary)" onclick="window.location.href='{{ url('login') }}'" class="c-white btn-primary-3d bg min-w-100 clip-1000 br-1000">Login</button>
        </div>
       <div class="w-full grid pc-grid-2 g-10 place-center">
         <img data-class='scale-in' src="{{ asset('banners/76dc306d-34fb-4ec8-a811-4574a9297843.jpeg') }}" alt="" class="w-full observe br-10 max-w-500">
         <div class="pos-relative">
            <img data-class='scale-out' src="{{ asset('banners/b34161fa-4dfd-4af7-80c5-8f361e92e755.jpeg') }}" alt="" class="w-full observe br-10 max-w-500">
            {{-- <div style="backdrop-filter: blur(10px);border:0.1px solid silver" class="h-fit happy-users column g-5 perfect-square pos-absolute left-10 bottom-10  p-20 br-20 bg-transparent">
                <div style="border:0.1px solid silver" class="h-40 w-40 br-10  p-5">
                    <img src="{{ asset('banners/IMG-20250916-WA0013.jpg') }}" class="h-full br-10 w-full" alt="">
                </div>
                <strong class="desc">7,432+ </strong>
                <span>Happy Users</span>
            </div> --}}
         </div>
       </div>
       <div class="grid m-top-20 w-full g-10 pc-grid-2 place-center">
            <img src="{{ asset('banners/9e87ee85-ce76-4352-8bff-ea948484ef72.jpeg') }}" alt="" data-class="rotate-in-from-left" class="w-full observe br-10">
            <img src="{{ asset('banners/6802043e-3c4e-44db-9b8e-ae50b86da2dc.jpeg') }}" alt="" data-class="rotate-in-from-right" class="w-full observe br-10">
           
        </div>
        <span style="font-family:luckiest guy" class="fondt-1 desc c-primary">Why members choose {{ config('app.name') }}</span>
        <div class="grid grid-2 w-full g-10">
            <div data-class="trans-up" style="text-align:center;backdrop-filter:blur(10px);box-shadow:inset 0 0 50px var(--primary)" class="w-full observe align-center br-10 bg backdrop-blur-10 p-10 column g-10">
                <span class="c-white">
<svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM14 16C14 17.1046 13.1046 18 12 18C10.8954 18 10 17.1046 10 16C10 14.8954 10.8954 14 12 14C13.1046 14 14 14.8954 14 16Z" fill="CurrentColor"></path>
</svg>


                </span>
                <strong class="desc c-primary">Protected & Secure</strong>
                <span class="text-center">We maintain strict security measures to safeguard your account and ensure your earnings remain protected.</span>
            </div> 

             <div data-class="trans-up" style="text-align:center;backdrop-filter:blur(10px);box-shadow:inset 0 0 50px var(--primary)" class="w-full observe align-center br-10 bg backdrop-blur-10 p-10 column g-10">
              <span class="c-white">
                   <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4105 9.86058C20.3559 9.8571 20.2964 9.85712 20.2348 9.85715L20.2194 9.85715H17.8015C15.8086 9.85715 14.1033 11.4382 14.1033 13.5C14.1033 15.5618 15.8086 17.1429 17.8015 17.1429H20.2194L20.2348 17.1429C20.2964 17.1429 20.3559 17.1429 20.4105 17.1394C21.22 17.0879 21.9359 16.4495 21.9961 15.5577C22.0001 15.4992 22 15.4362 22 15.3778L22 15.3619V11.6381L22 11.6222C22 11.5638 22.0001 11.5008 21.9961 11.4423C21.9359 10.5506 21.22 9.91209 20.4105 9.86058ZM17.5872 14.4714C18.1002 14.4714 18.5162 14.0365 18.5162 13.5C18.5162 12.9635 18.1002 12.5286 17.5872 12.5286C17.0741 12.5286 16.6581 12.9635 16.6581 13.5C16.6581 14.0365 17.0741 14.4714 17.5872 14.4714Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2341 18.6C20.3778 18.5963 20.4866 18.7304 20.4476 18.8699C20.2541 19.562 19.947 20.1518 19.4542 20.6485C18.7329 21.3755 17.8183 21.6981 16.6882 21.8512C15.5902 22 14.1872 22 12.4158 22H10.3794C8.60803 22 7.20501 22 6.10697 21.8512C4.97692 21.6981 4.06227 21.3755 3.34096 20.6485C2.61964 19.9215 2.29953 18.9997 2.1476 17.8608C1.99997 16.7541 1.99999 15.3401 2 13.5548V13.4452C1.99998 11.6599 1.99997 10.2459 2.1476 9.13924C2.29953 8.00031 2.61964 7.07848 3.34096 6.35149C4.06227 5.62451 4.97692 5.30188 6.10697 5.14876C7.205 4.99997 8.60802 4.99999 10.3794 5L12.4158 5C14.1872 4.99998 15.5902 4.99997 16.6882 5.14876C17.8183 5.30188 18.7329 5.62451 19.4542 6.35149C19.947 6.84817 20.2541 7.43804 20.4476 8.13012C20.4866 8.26959 20.3778 8.40376 20.2341 8.4L17.8015 8.40001C15.0673 8.40001 12.6575 10.5769 12.6575 13.5C12.6575 16.4231 15.0673 18.6 17.8015 18.6L20.2341 18.6ZM5.61446 8.88572C5.21522 8.88572 4.89157 9.21191 4.89157 9.61429C4.89157 10.0167 5.21522 10.3429 5.61446 10.3429H9.46988C9.86912 10.3429 10.1928 10.0167 10.1928 9.61429C10.1928 9.21191 9.86912 8.88572 9.46988 8.88572H5.61446Z" fill="CurrentColor"></path>
<path d="M7.77668 4.02439L9.73549 2.58126C10.7874 1.80625 12.2126 1.80625 13.2645 2.58126L15.2336 4.03197C14.4103 3.99995 13.4909 3.99998 12.4829 4H10.3123C9.39123 3.99998 8.5441 3.99996 7.77668 4.02439Z" fill="CurrentColor"></path>
</svg>


                </span>
                <strong class="desc c-primary">Timely Payouts</strong>
                <span class="text-center">Count on reliable withdrawals processed directly to your bank account according to our schedule.</span>
            </div>
            <div data-class="trans-up" style="text-align:center;backdrop-filter:blur(10px);box-shadow:inset 0 0 50px var(--primary)" class="w-full observe align-center br-10 bg backdrop-blur-10 p-10 column g-10">
               <span class="c-white">
                  <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M10 22.0002H14C17.7712 22.0002 19.6569 22.0002 20.8284 20.8286C22 19.6571 22 17.7714 22 14.0002C22 10.229 22 8.34335 20.8284 7.17178C20.4658 6.80918 20.0343 6.5588 19.4996 6.38591C19.5 6.55544 19.5 6.72881 19.5 6.90517L19.5 9.06327C19.5 9.09263 19.5003 9.12461 19.5006 9.15893C19.5035 9.49938 19.5085 10.07 19.264 10.592C19.0195 11.1141 18.578 11.4756 18.3145 11.6913C18.2882 11.7128 18.263 11.7334 18.2407 11.752L16.7342 13.0075C15.8734 13.7248 15.1241 14.3493 14.4505 14.7825C13.7245 15.2495 12.9391 15.5949 12 15.5949C11.0609 15.5949 10.2756 15.2495 9.54949 14.7825C8.87589 14.3493 8.12661 13.7248 7.26587 13.0075L5.75937 11.752C5.73681 11.7333 5.71207 11.713 5.68551 11.6913C5.42207 11.4756 4.98056 11.1141 4.73604 10.592C4.49152 10.07 4.49648 9.49938 4.49944 9.15893C4.49973 9.12462 4.50001 9.09262 4.50001 9.06327L4.50001 6.90516C4.49999 6.72858 4.49998 6.55528 4.5004 6.38556C3.96577 6.55846 3.53442 6.80893 3.17157 7.17178C2 8.34335 2 10.229 2 14.0002C2 17.7714 2 19.6571 3.17157 20.8286C4.34314 22.0002 6.22877 22.0002 10 22.0002Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.71972 10.5997L8.15898 11.7991C9.99562 13.3296 10.9139 14.0949 12.0001 14.0949C13.0862 14.0949 14.0046 13.3296 15.8412 11.7991L17.2805 10.5997C17.6343 10.3048 17.8113 10.1574 17.9057 9.95578C18.0001 9.75421 18.0001 9.52389 18.0001 9.06325V7C18.0001 6.67937 18.0001 6.38054 17.9982 6.10169C17.9865 4.3306 17.9005 3.36486 17.2679 2.73223C16.5356 2 15.3571 2 13.0001 2H11.0001C8.64306 2 7.46455 2 6.73232 2.73223C6.09969 3.36486 6.01179 4.3306 6.00009 6.10169C5.99824 6.38054 6.00009 6.67937 6.00009 7V9.06325C6.00009 9.52389 6.00009 9.75421 6.0945 9.95578C6.18891 10.1574 6.36584 10.3048 6.71972 10.5997ZM9.25 6C9.25 5.58579 9.58579 5.25 10 5.25H14C14.4142 5.25 14.75 5.58579 14.75 6C14.75 6.41421 14.4142 6.75 14 6.75H10C9.58579 6.75 9.25 6.41421 9.25 6ZM10.25 9C10.25 8.58579 10.5858 8.25 11 8.25H13C13.4142 8.25 13.75 8.58579 13.75 9C13.75 9.41421 13.4142 9.75 13 9.75H11C10.5858 9.75 10.25 9.41421 10.25 9Z" fill="CurrentColor"></path>
</svg>



                </span>
                <strong class="desc c-primary">Always available customer service</strong>
                <span class="text-center">Our customer care team provides round-the-clock assistance to help you succeed.</span>
            </div>
             <div data-class="trans-up" style="text-align:center;backdrop-filter:blur(10px);box-shadow:inset 0 0 50px var(--primary)" class="w-full observe align-center br-10 bg backdrop-blur-10 p-10 column g-10">
              <span>
                   <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 1.25C1.58579 1.25 1.25 1.58579 1.25 2C1.25 2.41421 1.58579 2.75 2 2.75H4V10.5C4 13.5641 4 15.0962 5.00421 16.0481C6.00841 17 7.62465 17 10.8571 17H11.25V20.5365L9.66459 21.3292C9.29411 21.5144 9.14394 21.9649 9.32918 22.3354C9.51442 22.7059 9.96493 22.8561 10.3354 22.6708L12 21.8385L13.6646 22.6708C14.0351 22.8561 14.4856 22.7059 14.6708 22.3354C14.8561 21.9649 14.7059 21.5144 14.3354 21.3292L12.75 20.5365V17H13.1429C16.3753 17 17.9916 17 18.9958 16.0481C20 15.0962 20 13.5641 20 10.5V2.75H22C22.4142 2.75 22.75 2.41421 22.75 2C22.75 1.58579 22.4142 1.25 22 1.25H2ZM15.5303 7.96967C15.8232 8.26256 15.8232 8.73744 15.5303 9.03033L14.2131 10.3476C14.0681 10.4927 13.9113 10.6496 13.7612 10.7642C13.5852 10.8984 13.3335 11.0429 13 11.0429C12.6665 11.0429 12.4148 10.8984 12.2388 10.7642C12.0887 10.6496 11.9319 10.4927 11.7869 10.3476L11.1768 9.73744C11.1067 9.66738 11.0499 9.61061 11 9.56229C10.9501 9.61061 10.8933 9.66738 10.8232 9.73744L9.53033 11.0303C9.23744 11.3232 8.76256 11.3232 8.46967 11.0303C8.17678 10.7374 8.17678 10.2626 8.46967 9.96967L9.78691 8.65241C9.9319 8.50732 10.0887 8.35042 10.2388 8.23584C10.4148 8.10161 10.6665 7.95711 11 7.95711C11.3335 7.95711 11.5852 8.10161 11.7612 8.23584C11.9113 8.35041 12.0681 8.50728 12.213 8.65235L12.8232 9.26256C12.8933 9.33262 12.9501 9.38939 13 9.43771C13.0499 9.38939 13.1067 9.33262 13.1768 9.26256L14.4697 7.96967C14.7626 7.67678 15.2374 7.67678 15.5303 7.96967Z" fill="CurrentColor"></path>
</svg>


                </span>
                <strong class="desc c-primary">Multiple Income Channels</strong>
                <span class="text-center">Access various earning methods through one integrated platform designed for you</span>
            </div>
        </div>
        
        <span style="font-size:1rem;text-align:center;line-height:1;font-family:luckiest guy" class=" m-x-auto c-primary">Explore Earning Methods</span>
       
        <div class="grid m-top-20 w-full g-10 pc-grid-2 place-center">
           <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Social Earnings</strong>
             <span>Connect with people worldwide through our conversation platform and get rewarded for meaningful interactions.</span>
           
            </div>
            <img src="{{ asset('banners/2753162e-6f8a-4824-a2f8-5578a4ee53c8.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
             <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Content Creations</strong>
             <span>Utilize our writing tools to create articles and earn competitive rates for quality content.</span>
           
            </div>
            <img src="{{ asset('banners/61f8ff4c-6592-449f-ab5e-9f4f1d158d71.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
              <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Data Welcome Bonus</strong>
             <span>Premium members receive complimentary data bundles to enhance their earning experience.</span>
           
            </div>
            <img src="{{ asset('banners/b77991e8-2090-45da-b01f-8347b6552488.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
             <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">AI Engagement</strong>
             <span>Receive compensation for engaging with our AI system through thoughtful questions and interactions.</span>
           
            </div>
            <img src="{{ asset('banners/f0b922f0-e07f-4f89-8957-754b135126a9.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
            <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Market Insights</strong>
             <span>Gain access to valuable trading information as part of your membership benefits.</span>
           
            </div>
            <img src="{{ asset('banners/eb5f5b8e-696c-45b3-954b-87f8600b5fb6.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
            
           
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection
