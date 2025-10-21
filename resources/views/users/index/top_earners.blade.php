@extends('layout.users.index')
@section('title')
    Top Earners
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
        <strong class="desc font-weight-400 c-primary" style="font-family:luckiest guy;font-size:1.5rem;">Top Earners</strong>
        @if ($top->isEmpty())
            @include('components.sections',[
                'null' => 'true',
                'text' => 'No Data Found'
            ])
        @else
         <div class="grid pc-grid-2 w-full g-10 place-center">
          
        @foreach ($top as $data)
               <div style="box-shadow: inset 0 0 50px var(--bg-light);backdrop-filter:blur(50px);" class="w-full align-center br-20 p-20 row g-10 bg">
                  <strong style="font-weight:400;font-family:luckiest guy;font-size:3rem;" class="no-select">{{ $loop->iteration }}</strong>
              
                <img style="min-height:70px;min-width:70px;" src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-70 no-shrink row w-70 circle">
            
                <div class="column space-between g-2">
                        <span class="font-1 c-primary" style="font-family:luckiest guy">{{ ucfirst($data->user->username) }}</span>
                       <strong style="font-size:1.5rem;font-family:luckiest guy;font-weight:400" class="c-primary">&#8358;{{ number_format($data->total,2) }}</strong>
                     
                    </div>
                       
            </div>
        @endforeach
         </div>
            
        @endif
       </section>
@endsection