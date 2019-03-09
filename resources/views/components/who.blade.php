@if (Auth::guard('web')->check())
    <p>your login as user</p>
@else
    <p>your logout as user</p>    
@endif

@if (Auth::guard('admin')->check())
    <p>your login as admin</p>
@else
    <p>your logout as admin</p>    
@endif