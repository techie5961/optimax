<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("{{ asset('banners/eb5f5b8e-696c-45b3-954b-87f8600b5fb6.jpeg') }}");
background-size: cover;
background-position:center;
color:white;

}
 body{
  
   background-color: var(--bg);
background-image: url("{{ asset('banners/4203604d-6ec9-4117-8f21-6c7dfce23305.jpeg') }}");
background-size:cover;
background-position:center;
  
}
      @media(min-width:800px){
        nav{
            width:30%;
           
        }
        nav section.nav{
            width:100%;
            border-right:1px solid var(--bg)
        }
        main,footer,header{
            width:calc(100% - 30%) !important;
           
            margin-left:30%;
        }
      }
      header{
        left:30% !important;
      }
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
   <svg fill="currentColor" height="100" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="7.33" height="7.33"><animate id="spinner_oJFS" begin="0;spinner_5T1J.end+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="15.66" width="7.33" height="7.33"><animate id="spinner_5T1J" begin="spinner_oJFS.begin+0.4s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect></svg>
   </div>
    <header style="z-index:3000" class="pos-sticky average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
        <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-left');
             document.body.classList.add('overflow-hidden');
            

            " style="background:white;color:var(--bg)" class="h-40 menu w-40 column pc-display-none justify-center circle p-10 bg-white">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>
   
        </div>
        <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="Logo" class="h-30">
        
      <img onclick="spa(event,'{{ url('users/more') }}')" src="{{ asset('users/'.Auth::guard('users')->user()->photo.'?v=1.1') }}" alt="" class="h-40 m-left-auto font-weight-900 desc w-40 circle no-shrink bg-dim column justify-center">        
    </header>
    <nav style="z-index:4000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-left');
    this.classList.add('mobile-display-none');
    document.body.classList.remove('overflow-hidden');
  
    " class="pos-fixed mobile-display-none border-right-1 border-color-dim high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column bg h-full w-semi-full">
            <div class="nav-profile z-index-1000 pos-sticky stick-top w-full column g-10 p-10">
                <img src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-70 w-70 circle border-4 border-color-primary box-shadow">
           <strong class="desc" style="font-weight:100;font-family:luckiest guy;">{{ ucfirst(Auth::guard('users')->user()->username) }}</strong>
            </div>
            <div class="nav-links flex-auto bg-inherit w-full column">
              {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                   <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 6.63415C2 4.07478 4.07478 2 6.63415 2C9.19352 2 11.2683 4.07478 11.2683 6.63415C11.2683 9.19352 9.19352 11.2683 6.63415 11.2683C4.07478 11.2683 2 9.19352 2 6.63415Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7317 17.3659C12.7317 14.8065 14.8065 12.7317 17.3659 12.7317C19.9252 12.7317 22 14.8065 22 17.3659C22 19.9252 19.9252 22 17.3659 22C14.8065 22 12.7317 19.9252 12.7317 17.3659Z" fill="CurrentColor"></path>
<path d="M2 17.5C2 15.3787 2 14.318 2.65901 13.659C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 13.659C11 14.318 11 15.3787 11 17.5C11 19.6213 11 20.682 10.341 21.341C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.341C2 20.682 2 19.6213 2 17.5Z" fill="CurrentColor"></path>
<path d="M13 6.5C13 4.37868 13 3.31802 13.659 2.65901C14.318 2 15.3787 2 17.5 2C19.6213 2 20.682 2 21.341 2.65901C22 3.31802 22 4.37868 22 6.5C22 8.62132 22 9.68198 21.341 10.341C20.682 11 19.6213 11 17.5 11C15.3787 11 14.318 11 13.659 10.341C13 9.68198 13 8.62132 13 6.5Z" fill="CurrentColor"></path>
</svg>



                    Dashboard
                 </a>
               @if (Auth::guard('users')->user()->type == 'vendor')
                     {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/vendor/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                   <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 2.75C17.9142 2.75 18.25 3.08579 18.25 3.5V5.75H20.5C20.9142 5.75 21.25 6.08579 21.25 6.5C21.25 6.91421 20.9142 7.25 20.5 7.25H18.25V9.5C18.25 9.91421 17.9142 10.25 17.5 10.25C17.0858 10.25 16.75 9.91421 16.75 9.5V7.25H14.5C14.0858 7.25 13.75 6.91421 13.75 6.5C13.75 6.08579 14.0858 5.75 14.5 5.75H16.75V3.5C16.75 3.08579 17.0858 2.75 17.5 2.75Z" fill="CurrentColor"></path>
<path d="M2 6.5C2 4.37868 2 3.31802 2.65901 2.65901C3.31802 2 4.37868 2 6.5 2C8.62132 2 9.68198 2 10.341 2.65901C11 3.31802 11 4.37868 11 6.5C11 8.62132 11 9.68198 10.341 10.341C9.68198 11 8.62132 11 6.5 11C4.37868 11 3.31802 11 2.65901 10.341C2 9.68198 2 8.62132 2 6.5Z" fill="CurrentColor"></path>
<path d="M13 17.5C13 15.3787 13 14.318 13.659 13.659C14.318 13 15.3787 13 17.5 13C19.6213 13 20.682 13 21.341 13.659C22 14.318 22 15.3787 22 17.5C22 19.6213 22 20.682 21.341 21.341C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.341C13 20.682 13 19.6213 13 17.5Z" fill="CurrentColor"></path>
<path d="M2 17.5C2 15.3787 2 14.318 2.65901 13.659C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 13.659C11 14.318 11 15.3787 11 17.5C11 19.6213 11 20.682 10.341 21.341C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.341C2 20.682 2 19.6213 2 17.5Z" fill="CurrentColor"></path>
</svg>




                  Vendor Dashboard
                  </a>

               @endif
                  {{-- NEW NAV LINK --}}
                 <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/tasks') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M9.56443 8.73049L10.0789 10.5926C10.5639 12.3481 10.8064 13.2259 11.5194 13.6252C12.2323 14.0244 13.1374 13.7892 14.9474 13.3188L16.8673 12.8199C18.6774 12.3495 19.5824 12.1143 19.9941 11.4227C20.4057 10.7312 20.1632 9.85344 19.6782 8.09788L19.1638 6.2358C18.6788 4.48023 18.4363 3.60244 17.7233 3.20319C17.0103 2.80394 16.1052 3.03915 14.2952 3.50955L12.3753 4.00849C10.5652 4.47889 9.66021 4.71409 9.24856 5.40562C8.83692 6.09714 9.07943 6.97493 9.56443 8.73049Z" fill="CurrentColor"></path>
<path d="M2.27749 5.24694C2.38823 4.84781 2.80157 4.61402 3.2007 4.72476L4.9044 5.19744C5.82129 5.45183 6.5469 6.15866 6.80003 7.07489L8.95106 14.8609L9.10935 15.4075C9.74249 15.6438 10.2863 16.0866 10.6314 16.6747L10.9414 16.579L19.8115 14.2739C20.2124 14.1697 20.6219 14.4102 20.7261 14.8111C20.8303 15.212 20.5897 15.6214 20.1888 15.7256L11.3515 18.0223L11.0228 18.1238C11.0161 19.3947 10.1392 20.5555 8.81236 20.9003C7.22189 21.3136 5.58709 20.3982 5.16092 18.8556C4.73476 17.313 5.67861 15.7274 7.26908 15.3141C7.3479 15.2936 7.42682 15.2764 7.5057 15.2623L5.35419 7.47433C5.24592 7.08242 4.92897 6.76092 4.50338 6.64284L2.79968 6.17016C2.40054 6.05942 2.16675 5.64608 2.27749 5.24694Z" fill="CurrentColor"></path>
</svg>



                   Tasks
                </a>
                
                 {{-- NEW NAV LINK --}}
                
               
                
                 <div class="nav-group c-white w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " style="pointer-events: none;" class="p-10 w-full space-between main-a row align-center g-5 no-u" >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM8.25 8C8.25 7.0335 9.0335 6.25 10 6.25H15C15.4142 6.25 15.75 6.58579 15.75 7C15.75 7.41421 15.4142 7.75 15 7.75H10C9.86193 7.75 9.75 7.86193 9.75 8V11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H9.75V16C9.75 16.1381 9.86193 16.25 10 16.25H15C15.4142 16.25 15.75 16.5858 15.75 17C15.75 17.4142 15.4142 17.75 15 17.75H10C9.0335 17.75 8.25 16.9665 8.25 16V8Z" fill="CurrentColor"></path>
</svg>

<span class="m-right-auto row">EarnGPT</span>
{{-- TO BE WORKED ON --}}
<div class="bg-green p-5 br-5 c-white row m-left-auti">Coming Soon</div>
                     <svg  class="m-left-auto display-none chevron transition-ease-half" width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>  </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-secondary bg-white c-black w-full column">
                        <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/articles/write') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Write Article</a>
                  <hr>
                          <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/articles/read') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Read Articles</a>
                             </div>
                </div>
              
                 {{-- NEW NAV LINK --}}
                <div class="nav-group c-white w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center w-full main-a row g-5 no-u" >
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.46689 4.39207C5.75949 4.68526 5.75902 5.16013 5.46583 5.45273C3.78722 7.128 2.75 9.44218 2.75 12C2.75 14.5878 3.81163 16.9262 5.52503 18.6059C5.82082 18.8959 5.82554 19.3707 5.53557 19.6665C5.24561 19.9623 4.77076 19.967 4.47497 19.677C2.48564 17.7269 1.25 15.0071 1.25 12C1.25 9.02783 2.45721 6.33616 4.40623 4.39102C4.69941 4.09842 5.17429 4.09889 5.46689 4.39207Z" fill="CurrentColor"></path>
<path d="M18.6164 4.46446C18.9122 4.17449 19.387 4.17921 19.677 4.475C21.5771 6.41326 22.75 9.07043 22.75 12C22.75 14.9645 21.5491 17.6499 19.609 19.5938C19.3164 19.887 18.8415 19.8875 18.5484 19.5949C18.2552 19.3023 18.2547 18.8274 18.5473 18.5342C20.2182 16.86 21.25 14.5512 21.25 12C21.25 9.47873 20.2422 7.1943 18.6059 5.52507C18.3159 5.22928 18.3206 4.75443 18.6164 4.46446Z" fill="CurrentColor"></path>
<path d="M8.30923 7.4876C8.59226 7.79004 8.57652 8.26465 8.27408 8.54768C7.32517 9.43567 6.75 10.6503 6.75 11.9823C6.75 13.3297 7.33869 14.5573 8.30756 15.4479C8.61251 15.7282 8.63248 16.2027 8.35216 16.5076C8.07185 16.8126 7.59739 16.8325 7.29244 16.5522C6.03967 15.4007 5.25 13.7824 5.25 11.9823C5.25 10.203 6.02148 8.60131 7.24916 7.45245C7.5516 7.16942 8.02621 7.18516 8.30923 7.4876Z" fill="CurrentColor"></path>
<path d="M15.7429 7.52562C16.0292 7.22629 16.5039 7.21574 16.8033 7.50205C18.0005 8.64717 18.75 10.2286 18.75 11.9823C18.75 13.7568 17.9825 15.3549 16.7604 16.5031C16.4586 16.7867 15.9839 16.7719 15.7003 16.47C15.4167 16.1682 15.4315 15.6935 15.7333 15.4099C16.6778 14.5225 17.25 13.3108 17.25 11.9823C17.25 10.6692 16.6911 9.47049 15.7664 8.58602C15.4671 8.29971 15.4566 7.82495 15.7429 7.52562Z" fill="CurrentColor"></path>
<path d="M12 14.0001C13.1046 14.0001 14 13.1046 14 12.0001C14 10.8955 13.1046 10.0001 12 10.0001C10.8954 10.0001 10 10.8955 10 12.0001C10 13.1046 10.8954 14.0001 12 14.0001Z" fill="CurrentColor"></path>
</svg>
     Airtime & Data
     <svg  class="m-left-auto chevron transition-ease-half" width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                        </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-secondary bg-white c-black w-full column">
                        <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/airtime/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Airtime</a>
                  <hr>
                          <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/data/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Data Bundle</a>
                             </div>
                </div>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 pointer align-center clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/bank/add') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
             <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12ZM8 15.25C7.58579 15.25 7.25 15.5858 7.25 16C7.25 16.4142 7.58579 16.75 8 16.75H16C16.4142 16.75 16.75 16.4142 16.75 16C16.75 15.5858 16.4142 15.25 16 15.25H8ZM7.58579 6.58579C8.17157 6 9.11438 6 11 6H13C14.8856 6 15.8284 6 16.4142 6.58579C17 7.17157 17 8.11438 17 10V10.25H19C19.4142 10.25 19.75 10.5858 19.75 11C19.75 11.4142 19.4142 11.75 19 11.75H5C4.58579 11.75 4.25 11.4142 4.25 11C4.25 10.5858 4.58579 10.25 5 10.25H7V10C7 8.11438 7 7.17157 7.58579 6.58579Z" fill="CurrentColor"></path>
</svg>

    Add Bank
                 </a>
                 {{-- NEW NAV LINK --}}

                  <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/withdraw') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
               <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4105 9.86058C20.3559 9.8571 20.2964 9.85712 20.2348 9.85715L20.2194 9.85715H17.8015C15.8086 9.85715 14.1033 11.4382 14.1033 13.5C14.1033 15.5618 15.8086 17.1429 17.8015 17.1429H20.2194L20.2348 17.1429C20.2964 17.1429 20.3559 17.1429 20.4105 17.1394C21.22 17.0879 21.9359 16.4495 21.9961 15.5577C22.0001 15.4992 22 15.4362 22 15.3778L22 15.3619V11.6381L22 11.6222C22 11.5638 22.0001 11.5008 21.9961 11.4423C21.9359 10.5506 21.22 9.91209 20.4105 9.86058ZM17.5872 14.4714C18.1002 14.4714 18.5162 14.0365 18.5162 13.5C18.5162 12.9635 18.1002 12.5286 17.5872 12.5286C17.0741 12.5286 16.6581 12.9635 16.6581 13.5C16.6581 14.0365 17.0741 14.4714 17.5872 14.4714Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2341 18.6C20.3778 18.5963 20.4866 18.7304 20.4476 18.8699C20.2541 19.562 19.947 20.1518 19.4542 20.6485C18.7329 21.3755 17.8183 21.6981 16.6882 21.8512C15.5902 22 14.1872 22 12.4158 22H10.3794C8.60803 22 7.20501 22 6.10697 21.8512C4.97692 21.6981 4.06227 21.3755 3.34096 20.6485C2.61964 19.9215 2.29953 18.9997 2.1476 17.8608C1.99997 16.7541 1.99999 15.3401 2 13.5548V13.4452C1.99998 11.6599 1.99997 10.2459 2.1476 9.13924C2.29953 8.00031 2.61964 7.07848 3.34096 6.35149C4.06227 5.62451 4.97692 5.30188 6.10697 5.14876C7.205 4.99997 8.60802 4.99999 10.3794 5L12.4158 5C14.1872 4.99998 15.5902 4.99997 16.6882 5.14876C17.8183 5.30188 18.7329 5.62451 19.4542 6.35149C19.947 6.84817 20.2541 7.43804 20.4476 8.13012C20.4866 8.26959 20.3778 8.40376 20.2341 8.4L17.8015 8.40001C15.0673 8.40001 12.6575 10.5769 12.6575 13.5C12.6575 16.4231 15.0673 18.6 17.8015 18.6L20.2341 18.6ZM5.61446 8.88572C5.21522 8.88572 4.89157 9.21191 4.89157 9.61429C4.89157 10.0167 5.21522 10.3429 5.61446 10.3429H9.46988C9.86912 10.3429 10.1928 10.0167 10.1928 9.61429C10.1928 9.21191 9.86912 8.88572 9.46988 8.88572H5.61446Z" fill="CurrentColor"></path>
<path d="M7.77668 4.02439L9.73549 2.58126C10.7874 1.80625 12.2126 1.80625 13.2645 2.58126L15.2336 4.03197C14.4103 3.99995 13.4909 3.99998 12.4829 4H10.3123C9.39123 3.99998 8.5441 3.99996 7.77668 4.02439Z" fill="CurrentColor"></path>
</svg>


                  Withdraw Funds
                 </a>
                 {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/transactions') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
               <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.24502 2H16.755C17.9139 2 18.4933 2 18.9606 2.16261C19.8468 2.47096 20.5425 3.18719 20.842 4.09946C21 4.58055 21 5.17705 21 6.37006V20.3742C21 21.2324 20.015 21.6878 19.3919 21.1176C19.0258 20.7826 18.4742 20.7826 18.1081 21.1176L17.625 21.5597C16.9834 22.1468 16.0166 22.1468 15.375 21.5597C14.7334 20.9726 13.7666 20.9726 13.125 21.5597C12.4834 22.1468 11.5166 22.1468 10.875 21.5597C10.2334 20.9726 9.26659 20.9726 8.625 21.5597C7.98341 22.1468 7.01659 22.1468 6.375 21.5597L5.8919 21.1176C5.52583 20.7826 4.97417 20.7826 4.6081 21.1176C3.985 21.6878 3 21.2324 3 20.3742V6.37006C3 5.17705 3 4.58055 3.15795 4.09946C3.45748 3.18719 4.15322 2.47096 5.03939 2.16261C5.50671 2 6.08614 2 7.24502 2ZM15.0595 8.49952C15.3353 8.19054 15.3085 7.71643 14.9995 7.44055C14.6905 7.16468 14.2164 7.19152 13.9405 7.5005L10.9286 10.8739L10.0595 9.9005C9.78358 9.59152 9.30947 9.56468 9.00049 9.84055C8.69151 10.1164 8.66467 10.5905 8.94055 10.8995L10.3691 12.4995C10.5114 12.6589 10.7149 12.75 10.9286 12.75C11.1422 12.75 11.3457 12.6589 11.488 12.4995L15.0595 8.49952ZM7.5 14.75C7.08579 14.75 6.75 15.0858 6.75 15.5C6.75 15.9142 7.08579 16.25 7.5 16.25H16.5C16.9142 16.25 17.25 15.9142 17.25 15.5C17.25 15.0858 16.9142 14.75 16.5 14.75H7.5Z" fill="CurrentColor"></path>
</svg>




                    Transactions
                </a>
              
                 {{-- NEW NAV LINK --}}
                    <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/team') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>


                My Downlines
                 </a>
                 {{-- NEW NAV LINK --}}
              
                 
              
               
               
                 
                 
                 <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/more') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z" fill="CurrentColor"></path>
</svg>

                      Account Settings
                 </a>
                 {{-- NEW NAV LINK --}}
                




                 
                 

                 <a class="p-10 pointer clip-10 pos-sticky m-top-auto stick-bottom bg-inherit w-full row g-5 no-u c-white" href="{{ url('users/logout') }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.8447 8.09467C10.5518 8.38756 10.5518 8.86244 10.8447 9.15533L12.5643 10.875H4.375C3.96079 10.875 3.625 11.2108 3.625 11.625C3.625 12.0392 3.96079 12.375 4.375 12.375H12.5643L10.8447 14.0947C10.5518 14.3876 10.5518 14.8624 10.8447 15.1553C11.1376 15.4482 11.6124 15.4482 11.9053 15.1553L14.9053 12.1553C15.1982 11.8624 15.1982 11.3876 14.9053 11.0947L11.9053 8.09467C11.6124 7.80178 11.1376 7.80178 10.8447 8.09467Z" fill="CurrentColor"></path>
<path d="M12.375 5.87745C12.375 6.3254 12.6492 6.71725 12.966 7.03401L15.966 10.034C16.8447 10.9127 16.8447 12.3373 15.966 13.216L12.966 16.216C12.6492 16.5327 12.375 16.9246 12.375 17.3726V19.625C16.7933 19.625 20.375 16.0433 20.375 11.625C20.375 7.20672 16.7933 3.625 12.375 3.625V5.87745Z" fill="CurrentColor"></path>
</svg>


                  Logout
                 </a>


            </div>

        </section>
    </nav>
    <main class="c-white">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
    <footer style="z-index:3000;" class="w-full m-top-auto no-select bottom-0 c-white p-10 pos-fixed stick-bottom bg backdrop-blur-5 grid grid-5 place-center g-10 space-between border-top-1 border-color-dim align-center text-center c-text">
   
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-white');
   data.querySelector('.icon').classList.remove('c-secondary');
   data.querySelector('span').classList.remove('c-white');
   });
    this.querySelector('.icon').classList.add('bg-white');
    this.querySelector('.icon').classList.add('c-secondary');
    this.querySelector('span').classList.add('c-white');
    spa(event,'{{ url('users/tasks') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column pc-pointer f-links w-full g-2 p-5 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
     <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M9.56443 8.73049L10.0789 10.5926C10.5639 12.3481 10.8064 13.2259 11.5194 13.6252C12.2323 14.0244 13.1374 13.7892 14.9474 13.3188L16.8673 12.8199C18.6774 12.3495 19.5824 12.1143 19.9941 11.4227C20.4057 10.7312 20.1632 9.85344 19.6782 8.09788L19.1638 6.2358C18.6788 4.48023 18.4363 3.60244 17.7233 3.20319C17.0103 2.80394 16.1052 3.03915 14.2952 3.50955L12.3753 4.00849C10.5652 4.47889 9.66021 4.71409 9.24856 5.40562C8.83692 6.09714 9.07943 6.97493 9.56443 8.73049Z" fill="CurrentColor"></path>
<path d="M2.27749 5.24694C2.38823 4.84781 2.80157 4.61402 3.2007 4.72476L4.9044 5.19744C5.82129 5.45183 6.5469 6.15866 6.80003 7.07489L8.95106 14.8609L9.10935 15.4075C9.74249 15.6438 10.2863 16.0866 10.6314 16.6747L10.9414 16.579L19.8115 14.2739C20.2124 14.1697 20.6219 14.4102 20.7261 14.8111C20.8303 15.212 20.5897 15.6214 20.1888 15.7256L11.3515 18.0223L11.0228 18.1238C11.0161 19.3947 10.1392 20.5555 8.81236 20.9003C7.22189 21.3136 5.58709 20.3982 5.16092 18.8556C4.73476 17.313 5.67861 15.7274 7.26908 15.3141C7.3479 15.2936 7.42682 15.2764 7.5057 15.2623L5.35419 7.47433C5.24592 7.08242 4.92897 6.76092 4.50338 6.64284L2.79968 6.17016C2.40054 6.05942 2.16675 5.64608 2.27749 5.24694Z" fill="CurrentColor"></path>
</svg>

   </div>
    <span class="transition-ease-full">Tasks</span>
   </div>
   <div onclick="
   try{
     let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-white');
   data.querySelector('.icon').classList.remove('c-secondary');
   data.querySelector('span').classList.remove('c-white');
   });
    this.querySelector('.icon').classList.add('bg-white');
    this.querySelector('.icon').classList.add('c-secondary');
    this.querySelector('span').classList.add('c-white');
    spa(event,'{{ url('users/transactions') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.24502 2H16.755C17.9139 2 18.4933 2 18.9606 2.16261C19.8468 2.47096 20.5425 3.18719 20.842 4.09946C21 4.58055 21 5.17705 21 6.37006V20.3742C21 21.2324 20.015 21.6878 19.3919 21.1176C19.0258 20.7826 18.4742 20.7826 18.1081 21.1176L17.625 21.5597C16.9834 22.1468 16.0166 22.1468 15.375 21.5597C14.7334 20.9726 13.7666 20.9726 13.125 21.5597C12.4834 22.1468 11.5166 22.1468 10.875 21.5597C10.2334 20.9726 9.26659 20.9726 8.625 21.5597C7.98341 22.1468 7.01659 22.1468 6.375 21.5597L5.8919 21.1176C5.52583 20.7826 4.97417 20.7826 4.6081 21.1176C3.985 21.6878 3 21.2324 3 20.3742V6.37006C3 5.17705 3 4.58055 3.15795 4.09946C3.45748 3.18719 4.15322 2.47096 5.03939 2.16261C5.50671 2 6.08614 2 7.24502 2ZM15.0595 8.49952C15.3353 8.19054 15.3085 7.71643 14.9995 7.44055C14.6905 7.16468 14.2164 7.19152 13.9405 7.5005L10.9286 10.8739L10.0595 9.9005C9.78358 9.59152 9.30947 9.56468 9.00049 9.84055C8.69151 10.1164 8.66467 10.5905 8.94055 10.8995L10.3691 12.4995C10.5114 12.6589 10.7149 12.75 10.9286 12.75C11.1422 12.75 11.3457 12.6589 11.488 12.4995L15.0595 8.49952ZM7.5 14.75C7.08579 14.75 6.75 15.0858 6.75 15.5C6.75 15.9142 7.08579 16.25 7.5 16.25H16.5C16.9142 16.25 17.25 15.9142 17.25 15.5C17.25 15.0858 16.9142 14.75 16.5 14.75H7.5Z" fill="CurrentColor"></path>
</svg>


    </div>
    <span class="transition-ease-full">Transactions</span>
   </div>
    <div style="transform: translateY(-50%);" onclick="
     let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-white');
   data.querySelector('.icon').classList.remove('c-secondary');
   data.querySelector('span').classList.remove('c-white');
   });
  
    spa(event,'{{ url('users/dashboard') }}')" class="column home-nav g-2 pc-pointer align-center bg-white c-secondary border-1 border-color-secondary p-10 circle clip-circle">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 6.63415C2 4.07478 4.07478 2 6.63415 2C9.19352 2 11.2683 4.07478 11.2683 6.63415C11.2683 9.19352 9.19352 11.2683 6.63415 11.2683C4.07478 11.2683 2 9.19352 2 6.63415Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7317 17.3659C12.7317 14.8065 14.8065 12.7317 17.3659 12.7317C19.9252 12.7317 22 14.8065 22 17.3659C22 19.9252 19.9252 22 17.3659 22C14.8065 22 12.7317 19.9252 12.7317 17.3659Z" fill="CurrentColor"></path>
<path d="M2 17.5C2 15.3787 2 14.318 2.65901 13.659C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 13.659C11 14.318 11 15.3787 11 17.5C11 19.6213 11 20.682 10.341 21.341C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.341C2 20.682 2 19.6213 2 17.5Z" fill="CurrentColor"></path>
<path d="M13 6.5C13 4.37868 13 3.31802 13.659 2.65901C14.318 2 15.3787 2 17.5 2C19.6213 2 20.682 2 21.341 2.65901C22 3.31802 22 4.37868 22 6.5C22 8.62132 22 9.68198 21.341 10.341C20.682 11 19.6213 11 17.5 11C15.3787 11 14.318 11 13.659 10.341C13 9.68198 13 8.62132 13 6.5Z" fill="CurrentColor"></path>
</svg>



   </div>
   
    <div onclick="
   try{
 
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-white');
   data.querySelector('.icon').classList.remove('c-secondary');
   data.querySelector('span').classList.remove('c-white');
   });
    this.querySelector('.icon').classList.add('bg-white');
    this.querySelector('.icon').classList.add('c-secondary');
    this.querySelector('span').classList.add('c-white');
    spa(event,'{{ url('users/team') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
     <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>

  </div>
      <span class="transition-ease-full">Downlines</span>
   </div>
    <div onclick="
   try{
     let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-white');
   data.querySelector('.icon').classList.remove('c-secondary');
   data.querySelector('span').classList.remove('c-white');
   });
    this.querySelector('.icon').classList.add('bg-white');
    this.querySelector('.icon').classList.add('c-secondary');
    this.querySelector('span').classList.add('c-white');
    spa(event,'{{ url('users/more') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>


  </div>
      <span class="transition-ease-full">More</span>
   </div>
   
    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script>
window.onload=function(){
        document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
  let max_bottom=document.querySelector('footer').getBoundingClientRect().bottom;
  document.querySelector('main').style.paddingBottom=max_bottom - document.querySelector('.home-nav').getBoundingClientRect().top + 'px'; 
 // document.querySelector('main').style.paddingBottom=document.querySelector('footer').offsetHeight + 'px';
}
    </script>
    @yield('js')
</body>
</html>