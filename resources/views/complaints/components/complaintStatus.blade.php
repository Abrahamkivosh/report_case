@switch($status)
@case("approved")
    <span class="badge badge-success">Approved</span>
    @break
@case("pedding")
<span class="badge badge-warning">Pedding</span>
    @break
@case("declined")
<span class="badge badge-danger">Declined</span>
    @break
@default
    <span class="badge badge-pill badge-info">Error</span>
@endswitch