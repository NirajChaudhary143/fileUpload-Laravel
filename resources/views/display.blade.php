<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
        
</head>
      <body>
        
         <div class="container">
               <!-- <h2>Laravel DataTables Tutorial Example</h2> -->
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Image</th>
                  </tr>
               </thead>
               @foreach($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone_number}}</td>
                        <!-- <td>{{$item->image}}</td> -->
                        <td><img src="{{ asset($item->image) }}" width="50" height="50" alt="image"></td>
                    </tr>
                @endforeach

            </table>
         </div>
      
   </body>
</html>