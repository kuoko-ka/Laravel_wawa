

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
          <x-Cards class="mt-4 p-2 space-x-6">
              <a href="/Events/{{$events->id}}/Edit">
                  <i class="fa-solid fa-pencil"></i> Edit
              </a>

          </x-Cards>

      </div>
    </section>
 </x-InnerMain>
