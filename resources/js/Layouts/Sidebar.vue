<template>
    <div>
    <div class="sidebar">
            <ul class="sidebar-menu">
                <H5>Cadastros</H5>
                <li>
                    <a href="#" class="nav-link">
                        <span class="icon">
                            <box-icon type='solid' name='user'></box-icon>
                        </span>
                        Alunos
                    </a>
                </li>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon name='walk'></box-icon>
                    </span>
                    Rotas
                </a>
                </li>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon name='car' type='solid' ></box-icon>
                    </span>
                    Motoristas
                </a>
                </li>
                <H5 class="mt-3">Consultas</H5>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon type='solid' name='user'></box-icon>
                    </span>
                    Alunos
                </a>
                </li>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon name='walk'></box-icon>
                    </span>
                    Rotas
                </a>
                </li>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon name='car' type='solid' ></box-icon>
                    </span>
                    Motoristas
                </a>
                </li>
                <H5 class="mt-3">Validações</H5>
                <li>
                <a href="#" class="nav-link">
                    <span class="icon">
                        <box-icon name='dollar' ></box-icon>
                    </span>
                    Pagamentos
                </a>
                </li>
                <AuthenticatedLayout />
            </ul>
        </div>
    </div>
</template>

<script>
    import AuthenticatedLayout from './AuthenticatedLayout.vue';

    export default {
    name: "Sidebar",
    components: { AuthenticatedLayout }
}
</script>

<style>
    :root {
    --ig-separator: 219, 219, 219;
    }

    body {
    font-family: Roboto, serif;
    }

    .sidebar {
    width: 245px;
    background-color: #ffffff;
    padding-top: 35px;
    position: fixed;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 999;
    border-right: 1px solid rgb(var(--ig-separator));
    display: flex;
    flex-direction: column;
    }

    .logo-wrapper {
    width: 100%;
    padding: 5px 25px;
    margin-bottom: 20px;
    }

    .logo-wrapper img {
    width: 105px;
    }

    .sidebar-menu {
    font-size: 1rem;
    list-style-type: none;
    padding: 0 12px 20px 8px;
    margin: 0;
    display: flex;
    flex-direction: column;
    flex-grow: 3;
    }

    .sidebar-menu.bottom {
    flex-grow: 0;
    margin-bottom: 40px;
    }


    .sidebar-menu li a.nav-link {
    border-radius: 10px;
    padding: 16px 15px;
    color: #333333;
    text-decoration: none;
    display: flex;
    align-items: center;
    }

    .sidebar-menu li a.nav-link.active {
    font-weight: bold;
    }

    .sidebar-menu li a.nav-link.active img.icon {
    border: 2px solid black;
    }

    .sidebar-menu li a.nav-link .icon {
    margin-right: 15px;
    width: 24px;
    height: 24px;
    transition: all 0.2s ease-in-out;
    }

    .sidebar-menu li a.nav-link:hover {
    background-color: #f5f5f5;
    }

    .sidebar-menu li a.nav-link:hover .icon {
    transform: scale(1.08);
    }

    .rounded-circle {
    border-radius: 100%;
    }
</style>
