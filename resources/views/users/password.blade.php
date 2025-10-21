@extends('layout.users.app')
@section('title')
    Update Password
@endsection
@section('main')
    <section class="w-full g-10 p-10 column flex-auto align-center">

        <div class="bg-transparent backdrop-blur-50 w-full column g-10 max-w-500 br-10 p-10">
            <div style="background:rgba(0,255,0,0.2);border:0.1px dashed green;" class="row p-10 space-between br-10  align-center">

                <span style="font-family:titan one;font-weight:100" class="desc bold">Update Password</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM14 16C14 17.1046 13.1046 18 12 18C10.8954 18 10 17.1046 10 16C10 14.8954 10.8954 14 12 14C13.1046 14 14 14.8954 14 16Z" fill="CurrentColor"></path>
</svg>

            </div>
            <div class="column g-5 w-full">
                <strong class="desc c-green">Note:</strong>
                <span>Your current account password would be changed upon updating password.</span>
            </div>
            <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Current Password</label>
               <div class="cont bg-black-transparent row align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="current_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">New Password</label>
               <div class="cont row bg-black-transparent align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="new_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Confirm New Password</label>
               <div class="cont row bg-black-transparent align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="confirm_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                
               
             
                <button class="post">Update Account Password</button>
            </form>
        </div>
      
    </section>
    
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Updated : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection