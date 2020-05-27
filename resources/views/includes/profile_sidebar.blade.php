<div class="col-md-3">
    <div class="card">
        <div class="card-header">Sidebar</div>
        <img src="/img/{{ Auth::user()->avatar }}" alt="" width="250px">
    </div>
    <br>
    <div class="card">
        <div class="card-header">SIDEBAR</div>
        <a href="{{ route('home') }}" class="btn btn-primary btn-block">Dashboard</a>
        <a href="{{ route('profile') }}" class="btn btn-primary btn-block">Profile Settings</a>
        <a href="{{ route('changepassword') }}" class="btn btn-primary btn-block">Change Password</a>
        <a href="{{ route('avatarchange') }}" class="btn btn-primary btn-block">Update Profile Picture</a>
    </div>
</div>
