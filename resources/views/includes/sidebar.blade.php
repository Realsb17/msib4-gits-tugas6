<div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4"><span class="text-white px-2 fas fa-solid fa-pie"></span>
            <span class="text-white sidebar-brand-text"> Billa's Kitchen</span></h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                class="fal fa-stream"></i></button>
    </div>

    <ul class="list-unstyled px-2">
        <li class="active ">
            <a href="{{ route('dashboard.index') }}" class="text-decoration-none px-2 d-block"><i
                    class="fal fa-home"></i> Dashboard</a></li>
    </ul>
    <li class=" ">
        <a href="{{ route('dashboard.category') }}" class="text-decoration-none px-2 d-block"><i
                class="fal fa-home"></i> Category</a></li>

    <li class=" ">
        <a href="{{ route('dashboard.product') }}" class="text-decoration-none px-2 d-block"><i
                 class="fal fa-home"></i> Product</a></li>

     <li class=" ">
        <a href="{{ route('dashboard.user') }}" class="text-decoration-none px-2 d-block"><i
                 class="fal fa-home"></i> User</a></li>

    <hr class="h-color mx-2">

    <ul class="list-unstyled px-2">
        <li class="">
            <a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                    class="fal fa-bars"></i>
                Settings</a></li>

        <li class="">
            <a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                    class="fal fa-bell"></i>
                Notifications</a></li>

    </ul>

</div>
