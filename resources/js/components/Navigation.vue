<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <router-link class="nav-link" exact to="/">Home</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" :to="{name:'about'}">About</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" :to="{name:'showBook'}">Daftar Buku</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" :to="{name:'addBook'}">Tambah Buku</router-link>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
