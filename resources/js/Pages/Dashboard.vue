<template>
    <Head title="Home" />
    <Sidebar />
    <section class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
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
                                    <input type="text" v-model="titulo" class="form-control" id="lbl-aviso" placeholder="Digite o aviso">
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" v-model="urgente" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <box-icon name='bell' type='solid' color='#fe0b0b' ></box-icon>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" v-model="alerta" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
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
    </section>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import Sidebar from '@/Layouts/Sidebar.vue';

export default {
    name: 'Dashboard',
    components: {
        Sidebar,
    },
    // data() {
    //     return {
    //         titulo: '',
    //         urgente: '',
    //         alerta: '',
    //     };
    // },
    // methods: {
    //     save() {
    //         axios.post('/cad_alunos', {
    //             titulo: this.titulo,
    //             urgente: this.urgente,
    //             alerta: this.alerta,
    //         })
    //         .then(response => console.log(response));
    //     },
    // },
};
</script>
