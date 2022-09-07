<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="height:80px;">
  <div class="container fw-bold">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Me</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Project
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#web">Website App</a></li>
            <li><a class="dropdown-item" href="#mobile">Mobile App</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact  ">Contact</a>
        </li>
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0 align-self-end">
        <li class="nav-item">
          <a class="nav-link me-4" target="_blank" href="https://www.linkedin.com/in/faiz-sulistiyo/"><i class="bi bi-linkedin fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-4" href="#"><i class="bi bi-envelope-fill fs-4"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
  $("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});
</script>