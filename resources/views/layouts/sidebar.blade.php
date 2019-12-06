<div class="sidebar-wrapper">
    <ul class="nav">
      <li class="{{ (request()->is('/')) ? 'active' : '' }}">
        <a href="/">
          <i class="nc-icon nc-circle-10"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="{{ (request()->is('/tambah* ')) ? 'active' : '' }}">
        <a href="/tambah">
          <i class="nc-icon nc-simple-add"></i>
          <p>Tambah</p>
        </a>
      </li>
      <li class="{{ (request()->is('/edit')) ? 'active' : '' }}">
        <a href="/edit">
          <i class="nc-icon nc-ruler-pencil"></i>
          <p>Edit</p>
        </a>
      </li>
    </ul>
  </div>
</div>
