<li class="nav-item">
    <button id="showPopOver" data-popover-content="#notificationsPopupContent" class="btn btn-primary btn-sm mt-2 me-4 nav-popover position-relative d-none d-lg-block" role="button" data-bs-placement="bottom" data-bs-toggle="popover">
        <i class="fas fa-bell"></i>
        <div class="notif-quantity-indicator"><small>3</small></div>
    </button>
    <button type="button" id="test" class="btn no-btn nav-link d-block d-lg-none position-relative" data-bs-toggle="collapse" aria-expanded="false" aria-controls="notificationsPopupContent" data-bs-target="#notificationsPopupContent">
        @include('partials.nav.icontext', ['icon' => 'bell', 'text' => 'notifications' ])
        <div class="notif-quantity-indicator-mobile"><small>3</small></div>
    </button>
    <div id="notificationsPopupContent" class="collapse p-2 d-lg-none">
        @foreach ($followRequests as $followRequest)
            @include('partials.nav.followInfo', ['name' => $followRequest['name'], 'id' => $followRequest['id'], 'state' => $followRequest['state']])
        @endforeach
    </div>
</li>
