@include('include.header')

<div class="form-heading">
 <h2>Form Validation</h2> 
     
</div> 
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<!-- @if ($errors->any())
  <?php
  $status = '';
  //print_r($errors->all());
  ?>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

  <form action="{{route('usrsave')}}"  method="post">
  @csrf
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" >
      @error('uname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="uemail">Useremail:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter useremail" name="uemail" >
      @error('uemail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="uphone">Phone:</label>
      <input type="tel" class="form-control" id="uphone" placeholder="Enter Phone" name="uphone" >
      @error('uphone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="uroll">Roll No.:</label>
      <input type="number" class="form-control" id="uroll" placeholder="Enter roll No." name="uroll" >
      @error('uroll')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="ubranch">Branch name:</label>
      <input type="text" class="form-control" id="ubranch" placeholder="Enter branch name " name="ubranch" >
      @error('uroll')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" >
      @error('pswd')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Register</button>
  </form>


@include('include.footer')