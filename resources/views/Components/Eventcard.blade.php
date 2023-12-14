@props(['events'])

<x-cards class="center">
  <div class="flex card-img">
      <img class="hidden w-48 mr-6 md:block img-fluid"
          src="{{$events->img ? asset('storage/' . $events->img) : asset('/img/DmpTestFiles/Sampleimg0.jpg')}}" alt="" />
      
      <h3 class="text-2xl">
        <a href="/Events/{{$events->id}}">{{$events->title}}</a>
      </h3>
      <div class="text-lg mt-4">
     <x-department :departmentCsv="$events->department"/>   
          </div>
      <div class="text-lg mt-4">
        <x-tags :tagsCsv="$events->tags" />
      </div>
    
  </div>
</x-cards>
