<form action="{{ $route }}" method="{{ "POST" }}">
    @csrf
   
      @method( $method ?? "Post")
 
    
<input type="text" name="status" hidden value="{{ $action }}  " >
<button type="submit" class="{{ $class}}">{{ $name }}</button>
</form>