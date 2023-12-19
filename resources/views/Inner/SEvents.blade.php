

<x-InnerMain>

    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">        
        <div class="row-gy-4">         
          <div class="col-lg-8">
              <img src="{{$events->img ? asset('storage/' . $events->img) : asset('/img/DmpTestFiles/Sampleimg0.jpg')}}" alt="" class="img-fluid services-img" />
            <h3>{{$events->title}}</h3>
              <h4>
              </h4>
              <span>
               By:  <b>{{$events->editor}}</b> ,<span>{{$events->Dcreated_at}}</span>              
              </span>
              
            <p>
               {{$events->Description}}
            </p>
          </div>

        </div>
          @auth
          @if(Auth::user()->roles == 0)
          <x-Cards class="mt-4 p-2 space-x-6">
              <a href="/Events/{{$events->id}}/Edit">
                  <i class="fa-solid fa-pencil"></i> Edit
              </a>
              <form method="POST" action="/Events/{{$events->id}}">
                  @csrf
                    @method('DELETE')
                  <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>

          </x-Cards>
          @endif
        @endauth
      </div>
    </section>
 </x-InnerMain>
