<div class="border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-center w-50">
    <img src="/images/admin.png" alt="my-4"  style="max-width: 150px">
  </div>

  <div class="list-group list-group-flush">
    <a href={{ url('/admin') }} class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">
      Dashboard
    </a>
    <a href={{ url('') }} class="list-group-item list-group-item-action">
      Products
    </a>
    <a href={{ route('category.index') }} class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">
      Categories
    </a>
    <a href={{ url('') }} class="list-group-item list-group-item-action">
      Transactions
    </a>
    <a href={{ route('user.index') }} class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">
      Users
    </a>
    <a href={{ url('logout') }} class="mt-auto list-group-item list-group-item-action">
      Sign Out
    </a>
  </div>
</div>