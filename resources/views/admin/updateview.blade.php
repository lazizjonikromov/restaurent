<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>

        <base href="/public">
        @include('admin.admincss')

    </head>
    
  <body>
    <div class="container-scroller">

        @include('admin.navbar')


        <div class="" style="position: relative;top: 60px; right: -150px;">

            <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" value="{{$data->title}}" required> 
                </div>

                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="number" name="price" value="{{$data->price}}" required> 
                </div>

                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" value="{{$data->description}}" required> 
                </div>

                <div>
                    <label for="">Old Image</label>
                    <img height="150" width="150" src="/foodimage/{{$data->image}}" alt="">
                </div>

                <div>
                    <label for="">New Image</label>
                    <input type="file" name="image" required> 
                </div>

                <div>
                    <input style="color: black;" type="submit" value="Save">
                </div>
            </form>

        </div>





    </div>
    



    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>


