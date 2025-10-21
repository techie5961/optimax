@extends('layout.users.app')
@section('title')
    Transaction History
@endsection
@section('css')
    <style class="css">
        .svg svg{
            fill:var(--primary);
           
        }
        
        svg.rotated{
            transform: rotate(180deg)
        }
        .svg svg{
            fill:currentColor;
        }
    </style>
@endsection
@section('main')
    <section class="w-full align-center p-10 column g-10">
        @if ($transactions->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Transactions Found'
            ])
        @else
       <div class="column g-10  w-full">
         <strong class="desc c-primary">Transaction History</strong>
        
       </div>
          <div class="w-full g-5 column  br-10 box-shadow">
              @foreach ($transactions as $data)
                <div onclick="spa(event,'{{ url('users/transaction/receipt?id='.$data->id.'') }}')" class="w-full bg-secondary-dark p-10 br-5 row align-center g-10 space-between">
                    <div class="h-30 w-30 column svg justify-center bg c-white circle clip-circle">{!! $data->svg !!}</div>
               <div class="column g-2 m-right-auto">
                <strong class="font-1">{{ $data->type }}</strong>
                <span class="text-average text-dim">{{ $data->frame }}</span>
               </div>
               <div class="column align-center g-2">
              @if ($data->class == 'credit')
               <strong class="font-1 c-green">+ &#8358;
                {{ number_format($data->amount,2) }}</strong>
                 @else
                  <strong class="font-1 c-red">- &#8358;
                {{ number_format($data->amount,2) }}</strong> 
              @endif
                <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
               </div>
                </div>
            @endforeach
            @if ($transactions->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $transactions->currentPage() + 1
                ])
            @endif
          </div>
        @endif
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
    </script>
@endsection