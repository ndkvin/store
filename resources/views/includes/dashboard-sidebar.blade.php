<div class="border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-center">
    <img src="/images/dashboard-store-logo.svg" alt="my-4">
  </div>

  <div class="list-group list-group-flush">
    <a href={{ url('dashboard') }} class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : '' }}">
      Dashboard
    </a>
    <a href={{ url('dashboard/products') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/products') ? 'active' : '' }}">
      My Products
    </a>
    <a href={{ url('dashboard/transactions') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/transactions') ? 'active' : '' }}">
      Transactions
    </a>
    <a href={{ url('dashboard/settings') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/settings') ? 'active' : '' }}">
      Store Settings
    </a>
    <a href={{ url('dashboard/create-store') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/create-store') ? 'active' : '' }}">
      Create Store
    </a>
    <a href={{ url('dashboard/account') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/account') ? 'active' : '' }}">
      My Account
    </a>
    <a href={{ url('logout') }} class="mt-auto list-group-item list-group-item-action ">
      Sign Out
    </a>
  </div>
</div>