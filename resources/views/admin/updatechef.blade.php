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

        <form action="{{url('updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf   

            <div>
                <label for="">Chef Name</label>
                <input style="color: blue;" type="text" name="name" value="{{$data->name}}">

            </div>

            <div>
                <label for="">Speciality</label>
                <input style="color: blue;" type="text" name="speciality" value="{{$data->speciality}}">

            </div>

            <div>
                <label for="">Old Image</label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}" alt="">

            </div>

            <div>
                <label for="">New Image</label>
                <input type="file" name="image">

            </div>

            <div>
                <input style="color: blue;" type="submit" value="Update Chef" required>

            </div>

        </form>





    </div>
    



    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>


