<script setup>
    import { Head } from '@inertiajs/vue3';
    import Sidebar from '@/Layouts/Sidebar.vue';
</script>

<template>
    <Head title="Home" />
    <Sidebar />
    <main class="main flex-column">
        <div class="card text-center w-50">
            <div class="card-header">
                <h3 class="fw-bold">Aviso</h3>
            </div>
            <div class="card-body bg-cyan">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="me-3 flex-grow-1">
                                    <label for="lbl-aviso" class="form-label d-flex">Título</label>
                                    <input type="text" class="form-control" id="lbl-aviso" placeholder="Digite o aviso">
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <box-icon name='bell' type='solid' color='#fe0b0b' ></box-icon>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <box-icon name='alarm-exclamation' type='solid' color='#ffff00' ></box-icon>
                                        </label>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success">Salvar</a>
            </div>
        </div>
    </main>
</template>
