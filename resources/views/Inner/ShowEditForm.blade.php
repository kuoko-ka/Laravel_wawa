<x-innermain>
    <section id="get-a-quote" class="get-a-quote">
        <div class="container" data-aos="fade-up">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-25">
                <h3>{{$events->title}}</h3>

                <form method="POST" action="/Events/{{$events->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $events->title }}" />
                        </div>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror   

                        <div class="col-md-12 ">
                            <input type="text" name="department" class="form-control" placeholder="Department (Comma Seperated)" value="{{$events->department}}" />
                        </div>
                        @error('department')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <div class="col-md-12 ">
                            <input type="text" name="tags" class="form-control" placeholder="Tags (Comma Seperated)" value="{{$events->tags}}" />
                        </div>
                        @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <div class="col-md-12"> 
                            <input type="file" class="form-control" name="img" />
                            <img src="{{$events->img ? asset('storage/' . $events->img) : asset('/img/DmpTestFiles/Sampleimg0.jpg')}}" alt="" class="img-fluid services-img" />
                        </div>
                        @error('img')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <div class="col-md-12">
                            <textarea class="form-control" name="description" rows="6" placeholder="Description">{{$events->description}}</textarea>
                        </div>
                        @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        <div class="col-md-12 text-center">


                            <button type="submit" class="bg-primary text-white rounded-pill form-control  px-3">Done</button>
                        </div>

                    </div>
                </form>

            </div> 

        </div>


    </section>

</x-innermain>
