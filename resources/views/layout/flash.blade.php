<div class="mt-2">
   @if (session()->has('Success'))
       <div class="alert alert-success" role="alert">
           {{ session('Success') }}
       </div>
   @endif
</div>