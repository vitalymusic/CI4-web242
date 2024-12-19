<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<script>

  fetch("<?=base_url('get_menu') ?>")
    .then((data)=>{return data.json()})
    .then((json)=>{
       return createMenu(json);
    });

    function createMenu(data){
      let out = "";
      data.menu.forEach((item)=>{
        out+=`
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url()?>${item.menu_url}">${item.menu_name}</a>
        </li>
        `;
      })
        document.querySelector(".navbar-nav").innerHTML = out;
    }
</script>