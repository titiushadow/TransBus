<script setup>
    import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
</script>

<template>
    <div class="d-flex justify-end mx-5">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $page.props.auth.user.name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <ResponsiveNavLink :href="route('profile.edit')" as="button">Perfil</ResponsiveNavLink>
                <ResponsiveNavLink :href="route('logout')" method="post" as="button">Sair</ResponsiveNavLink>
            </ul>
        </div>
        <main>
            <slot />
        </main>
    </div>
</template>
