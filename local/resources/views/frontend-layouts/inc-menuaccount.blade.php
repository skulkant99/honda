<link rel="stylesheet" href="{{ asset('asset/frontend/css/menu_account.css') }}">

<div class="wrap_menumenber">
    <nav>
        <ul>
            <li><a href="{{ route('member.myprofiles', $sLocale) }}">My Profile</a></li>
            <li><a href="{{ route('member.shippingaddress', $sLocale) }}">Shipping & Billing Address</a></li>
            <li><a href="{{ route('member.wishlist', $sLocale) }}">My Wish List (3)</a></li>
            <li><a href="{{ route('member.myorder', $sLocale) }}">My Order (3)</a></li>
            <li><a href="{{ route('member.leaveareview', $sLocale) }}">Leave a Review (3)</a></li>
            <li><a href="{{ route('member.changepassword', $sLocale) }}">Change Password</a></li>
            <li><a href="{{ route('logout', $sLocale) }}">Sign Out</a></li>
        </ul>
    </nav>
</div>
