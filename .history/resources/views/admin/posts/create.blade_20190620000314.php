@extends('layouts.admin');
@section('content')
<h2>New Post</h2>
<!-- @if ($errors->any())
<div class="alert alert-danger">
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
</div>
@endif -->
<form method="post" action="{{ route('admin.posts.store') }}">
{{csrf_field()}}
<div class="form-group">
    <label class="control-label">Tiltle </label>
        <input type="text" name="title" id="title" value="{{ old('title')}}" class="col-7 form-control @error('title') is-invalid @enderror">
			 
    </div>
<div class="form-group">
    <label class="control-label">Content </label>
    
<textarea name="content" id="content" class="col-7 form-control @error('content') is-invalid @enderror" >{{ old('content') }}</textarea>
			 
 </div>
 <div class="form-group">
   <label for="category">Category</label>
   
   <select id="category" name="category[]"  class="form-control col-7 select2" multiple>
    <option value=""></option>
    @foreach($categories as $category)

    <option value="{{$category->id}}">{{$category->title}}</option>
    @endforeach 
</select> 
</div>
<script type="text/javascript"> 
    $(document).ready(function() {
$('#category').select2();
   });
  </script>

   <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection


