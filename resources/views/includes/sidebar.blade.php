<div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h3 class="fs-4">
            <span class="text-white px-2 fas fa-solid fa-mug-hot"></span>
            <span class="text-white sidebar-brand-text" style="font-family: Fjalla-One;">Billa's Cafe</span></h3>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                class="fal fa-stream"></i></button>
    </div>

    <ul class="list-unstyled px-2">
        <li class="active">
            <a href="{{ route('dashboard.index') }}" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-home"></i>
                Dashboard
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.category') }}" class="text-decoration-none px-3 py-2 d-block">
                Category
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.product') }}" class="text-decoration-none px-3 py-2 d-block">
                Product
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.user') }}" class="text-decoration-none px-3 py-2 d-block">
                User
            </a>
        </li>

    </ul>

    <hr class="h-color mx-2">

</div>
