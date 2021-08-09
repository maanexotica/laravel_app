@include('include.header')

<h2>List Student</h2>
  
            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Roll No.</th>
        <th>Branch</th>
        <th colspan="2"> Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($listData as $list)
     <!--  @php
     $img = json_decode($list->image_name); 
      @endphp
      @foreach($img as $img1)
      <td><img src="{{ asset('files/' . $img1) }}" /></td>
      @endforeach -->
      <tr>
      
        <td>{{$list['id']}}</td>
        <td>{{$list['name']}}</td>
        <td>{{$list['email']}}</td>
        <td>{{$list['phone']}}</td>
        <td>{{$list['rollno']}}</td>
        <td>{{$list['branch_name']}}</td>
        <td><a href="{{ route('delete', $list['id']) }}">Delete</a></td>
        <td><a href="{{ route('edit', $list['id']) }}">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@include('include.footer')