
<x-InnerMain>
    @include('partials._search')

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        @unless(count($Events) == 0)
        
            @foreach($Events as $Event)

        <x-eventcard :events="$Event" class="col-lg-4 col-md-6"></x-eventcard>
            @endforeach
      
     @else
        <p>No listings found</p>
        @endunless
        <div class="mt-6 p-4"> {{$Events->links()}}
        </div>
    </div>
</x-InnerMain>  
 
