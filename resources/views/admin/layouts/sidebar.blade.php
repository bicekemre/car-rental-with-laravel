<div class="sidebar">
    <!-- start with head -->
    <div class="head">
        <div class="logo">
            <img src="{{ asset('img/logo-admin.png') }}" alt="">
        </div>
        <a href="#" class="btn btn-danger">SUBMIT new MOVIE</a>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.cars') }}" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="contacts.html" class="nav-link"><i class="fa fa-user"></i>Users</a></li>
            <li class="nav-item"><a href="forms.html" class="nav-link"><i class="fa fa-edit"></i>Locations</a></li>
            <li class="nav-item"><a href="tabels.html" class="nav-link"><i class="fa fa-table"></i>Reservations</a></li>
        </ul>
    </div>
    <!-- end the list -->
</div>
