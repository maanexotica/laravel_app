@include('include.header')

<div class="form-heading">
 <h2>Submit Form with ajax</h2> 
     
</div> 
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

<div class="container">
    <div class="row">
    <div id = 'msg'></div>
  <form  id="ajaxform" method="post">
  @csrf
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" >
      <span class="error uname"></span>
      @error('uname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="uemail">Useremail:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter useremail" name="uemail" >
      <span class="error uemail"></span>
    </div>
    <div class="form-group">
      <label for="uphone">Phone:</label>
      <input type="tel" class="form-control" id="uphone" placeholder="Enter Phone" name="uphone" >
      <span class="error uphone"></span>
    </div>
    <div class="form-group">
      <label for="uroll">Roll No.:</label>
      <input type="number" class="form-control" id="uroll" placeholder="Enter roll No." name="uroll" >
      <span class="error uroll"></span>
    </div>
    <div class="form-group">
      <label for="ubranch">Branch name:</label>
      <input type="text" class="form-control" id="ubranch" placeholder="Enter branch name " name="ubranch" >
      <span class="error ubranch"></span>
    </div>
    <div class="form-group">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" >
      <span class="error pswd"></span>
    </div>
    
    <button class="btn btn-success save-data">Save</button>
  </form>
  </div>
  </div>

@include('include.footer')
<style>
    .error{
        color:red
    }
</style>
<script>
$('.save-data').on('click',function(e){
    e.preventDefault();

$.ajax({
    type:'POST',
    url:'/ajaxpost',
    dataType:'json',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:$('#ajaxform').serialize(),
    success:function(response){
        $.each(response.error, function( index, value ) {
                $("."+index).text(value)
            });
        

    },error:function(error){
        if(error.status === 422){
            $.each(error.responseJSON.errors, function( index, value ) {
                $("."+index).text(value)
            });

        }
    }
})

});
</script>