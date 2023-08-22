<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <script src="{{ asset('js/visitor-counter.js') }}"></script>

    

   <div class="divc"> 
    <div class="cardblue">
        <div class="card-border-top">
        </div>
        <span class="span"> <h1>Home Views</h1></span>
        <br>
        <p class="text"> Views: {{ $viewCount }}</p>
        <p class="text">Daily Views: {{ $viewsPerDay }}</p>
        <p class="text">Monthly Views: {{ $viewsPerMonth }}</p>
        <p class="text">Annual Views: {{ $viewsPerYear }}</p>

        
    </div>

      <div class="cardgreen">
        <div class="card-border-top">
        </div>
        <span class="span"> <h1>Number of computers</h1></span>
        <br>
        <p class="text"> Computers: {{ $computerCount }}</p>
      </div>

      <div class="cardyellow">
        <div class="card-border-top">
        </div>
        <span class="span"> <h1>Number of Keyboards</h1></span>
        <br>
        <p class="text"> Keyboards: {{ $keyboardCount }}</p>
      </div>

      <div class="cardorange">
        <div class="card-border-top">
        </div>
        <span class="span"> <h1>Number of Monitors</h1></span>
        <br>
        <p class="text"> Monitors: {{ $monitorCount }}</p>
      </div>
      
      <div class="cardred">
        <div class="card-border-top">
        </div>
        <span class="span"> <h1>Number of Cables</h1></span>
        <br>
        <p class="text"> Cables: {{ $cableCount }}</p>
      </div>

   </div>
</x-app-layout>
