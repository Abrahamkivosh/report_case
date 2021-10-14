<form action="{{ route('complaint.action.taken',$complaint) }}" method="post">
    @csrf
<input type="text" name="status" hidden value="{{ $action }}  " >
<button type="submit" class="{{ $class}}">{{ $name }}</button>
</form>