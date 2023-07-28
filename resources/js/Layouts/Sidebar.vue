<template>
    <div>
        <nav class="sidebar" :class="{ close: isSidebarClosed }">
            <Link :href="route('dashboard')" class="logo">TransBus</Link>
            <div class="menu-section">
                <h5 class="text-white">Cadastros</h5>
                <ul class="menu-items">
                    <li class="item">
                        <Link :href="route('CadAlunos')"><box-icon color='rgba(255,255,255)' name='user'></box-icon>Alunos </Link>
                    </li>

                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='walk'></box-icon>Rotas</a>
                    </li>

                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='car'></box-icon>Motoristas</a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <h5 class="text-white">Consultas</h5>
                <ul class="menu-items">
                    <li class="item">
                        <Link :href="route('index')"><box-icon color='rgba(255,255,255)' name='user'></box-icon>Alunos </Link>
                    </li>

                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='walk'></box-icon>Rotas</a>
                    </li>

                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='car'></box-icon>Motoristas</a>
                    </li>

                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='bell'></box-icon>Avisos</a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <h5 class="text-white">Validações</h5>
                <ul class="menu-items">
                    <li class="item">
                        <a href="#"><box-icon color='rgba(255,255,255)' name='dollar'></box-icon>Pagamentos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar">
            <box-icon name='left-arrow-alt' id="sidebar-close" @click="toggleSidebar"></box-icon>
            <AuthenticatedLayout />
        </nav>
    </div>
</template>


  <script>
  import AuthenticatedLayout from './AuthenticatedLayout.vue';
  import { Link } from '@inertiajs/vue3';
  import 'boxicons';

  export default {
    name: "Sidebar",
    components: { AuthenticatedLayout, Link },
    data() {
      return {
        isSidebarClosed: false
      };
    },
    methods: {
      toggleSidebar() {
        this.isSidebarClosed = !this.isSidebarClosed;
        const sidebar = document.querySelector(".sidebar");
        const navbar = document.querySelector(".navbar");
        const main = document.querySelector(".main");
        const menuTexts = document.querySelectorAll(".menu-section h5");

        if (this.isSidebarClosed) {
          sidebar.style.display = "none";
          navbar.style.left = "0";
          navbar.style.width = "100%";
          main.style.left = "0";
          main.style.width = "100%";
        } else {
          sidebar.style.display = "block";
          navbar.style.left = "260px";
          navbar.style.width = "calc(100% - 260px)";
          main.style.left = "260px";
          main.style.width = "calc(100% - 260px)";
        }

        // Verificar se menuTexts existe antes de manipulá-lo
        if (menuTexts.length > 0) {
          menuTexts.forEach(text => {
            text.style.display = this.isSidebarClosed ? "none" : "block";
          });
        }
      }
    }
  }
  </script>


<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
.sidebar {
    position: fixed;
    height: 100%;
    width: 260px;
    background: #11101d;
    padding: 15px;
    z-index: 99;
}
.logo {
    font-size: 25px;
    padding: 0 15px;
}
.sidebar a {
    color: #fff;
    text-decoration: none;
}

.menu-section {
    margin-top: 40px;
}

.menu-items {
    height: 100%;
    width: 100%;
    list-style: none;
    transition: all 0.4s ease;
}
.submenu-active .menu-items {
    transform: translateX(-56%);
}

.item a {
    padding: 16px;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    width: 100%;
    border-radius: 12px;
}

.item i {
    font-size: 12px;
}
.item a:hover {
    background: rgba(255, 255, 255, 0.1);
}

.submenu {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: calc(-100% - 26px);
    height: calc(100% + 100vh);
    background: #11101d;
    display: none;
    }
.show-submenu ~ .submenu {
    display: block;
}

.navbar,
.main {
    left: 260px;
    width: calc(100% - 260px);
    transition: all 0.5s ease;
    z-index: 1000;
}
.sidebar.close ~ .navbar,
.sidebar.close ~ .main {
    left: 0;
    width: 100%;
}
.navbar {
    position: fixed;
    color: #fff;
    padding: 15px 20px;
    font-size: 25px;
    background: #4070f4;
    cursor: pointer;
}
.navbar #sidebar-close {
    cursor: pointer;
}
.main {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    z-index: 100;
    background: #e7f2fd;
}
.main h1 {
    color: #11101d;
    font-size: 40px;
    text-align: center;
}

@media screen and (max-width: 320px) {
    .sidebar {
        width: 100vw;
        position: relative;
    }
}
</style>
