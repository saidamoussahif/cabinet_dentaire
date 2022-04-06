<template>
<!-- Nav Bar -->
<div class="home">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Web Zone</a> -->
        <img src="../assets/logo.svg" style="width:45px;" alt="">
        <h4>Dentistiq</h4>
        <button
          class="navbar-toggler btn-dark"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link class="nav-link text-dark link-r" to="/">Accueil</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link text-dark link-r" to="/Apropos">A propos</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link text-dark link-r" to="/Sinscrire">S'inscrire</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>






    
</div>
</template>

<script>
export default {
    name: 'NavBar',
  components: {
    
  }
}
</script>


<style scoped>
.link-r{
  font-weight: 500;
  font-size: 1.1rem;
}

</style>
