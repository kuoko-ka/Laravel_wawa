<x-InnerMain>
   <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up" >
          <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-25">
          
            <form action="/Events/Post" method="POST" enctype="multipart/form-data">
               @csrf
              <div class="row gy-4">      
                <div class="col-lg-12">
                  <h4>Create a Post</h4>
                </div>
                <div class="col-md-12">
                  <input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">
                </div>
                   @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                <div class="col-md-12 ">
                   <input type="text" name="department" class="form-control" placeholder="Department (Comma Seperated)" value="{{old('department')}}">
                </div>  
                   @error('department')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  
                <div class="col-md-12 ">
                   <input type="text" name="tags" class="form-control" placeholder="Tags (Comma Seperated)" value="{{old('tags')}}">
                </div>
                   @error('tags')
                     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

               <div class="col-md-12">
                  <Input type="file" class="form-control" name="img">
                </div>
                  @error('img')
                     <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror

                <div class="col-md-12">
                  <textarea class="form-control" name="description" rows="6" placeholder="Description"></textarea>
                </div>
                   @error('description')
                   <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                <div class="col-md-12 text-center">
                 

                  <button  type="submit" class="bg-primary text-white rounded-pill form-control  px-3">Post</button>
                </div>
                
              </div>
            </form>
           
          </div>

        </div>

      
    </section>

</x-InnerMain>
