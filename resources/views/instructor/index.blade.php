<h2>Lecture</h2>
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
    <i class="fe fe-power"></i> Sign Out
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>