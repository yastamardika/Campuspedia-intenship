<div class="sidebar-wrapper">
    <ul class="nav">
      <li class="{{ (request()->is('/')) ? 'active' : '' }}">
        <a href="/">
          <i class="nc-icon nc-circle-10"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li {{ (request()->is('/tambah* ')) ? 'class="active"' : '' }}>
        <a href="/tambah">
          <i class="nc-icon nc-simple-add"></i>
          <p>Tambah</p>
        </a>
      </li>
      <li {{ (request()->is('/edit/{id}')) ? 'style=opacity:1;' : 'style=opacity:0;' }}>
        <a href="">
          <i class="nc-icon nc-ruler-pencil"></i>
          <p>Edit</p>
        </a>
      </li>
    </ul>
  </div>
</div>
