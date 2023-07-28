<template>
<div>
    <Head title="Cadastro Alunos" />
    <Sidebar />
    <main class="main">
    <div class="card text-center">
        <div class="card-header">
        <h3 class="fw-bold">Cadastro de Alunos</h3>
        </div>
        <div class="card-body">
        <form @submit.prevent="salvarDados">
            <div class="row">
            <!-- Primeira coluna -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                <label class="d-flex" for="nome">Nome:</label>
                <input
                    type="text"
                    v-model="nome"
                    class="form-control"
                    id="nome"
                    aria-describedby="emailHelp"
                    placeholder="Nome completo"
                />
                </div>

                <div class="form-group mb-3">
                <label class="d-flex" for="instituicao">Instituição</label>
                <input
                    type="text"
                    v-model="instituicao"
                    class="form-control"
                    id="instituicao"
                    placeholder="Instituição"
                />
                </div>

                <div class="form-group mb-3">
                <label class="d-flex" for="periodo">Periodo</label>
                <input
                    type="text"
                    v-model="periodo"
                    class="form-control"
                    id="periodo"
                    placeholder="Período"
                />
                </div>

                <UploadImage v-model="foto" />
            </div>

            <!-- Segunda coluna -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                <label class="d-flex" for="curso">Curso:</label>
                <input
                    type="text"
                    v-model="curso"
                    class="form-control"
                    id="curso"
                    placeholder="Digite o curso"
                />
                </div>

                <div class="form-group mb-3">
                <label class="d-flex" for="cpf">CPF</label>
                <input
                    type="text"
                    v-model="cpf"
                    class="form-control"
                    id="cpf"
                    placeholder="Digite o CPF"
                />
                </div>

                <div class="form-group mb-3">
                <label class="d-flex" for="destino">Destino</label>
                <input
                    type="text"
                    v-model="destino"
                    class="form-control"
                    id="destino"
                    placeholder="Digite o destino"
                />
                </div>

                <div class="form-group mb-3">
                <label class="d-flex" for="email">E-mail</label>
                <input
                    type="email"
                    v-model="email"
                    class="form-control"
                    id="email"
                    placeholder="Digite o E-mail"
                />
                </div>
            </div>
            </div>
        </form>
        <button @click.prevent="save" class="btn btn-success mt-4">Salvar</button>
        </div>
    </div>
    </main>
</div>
</template>

<script>
import Sidebar from '@/Layouts/Sidebar.vue';
import UploadImage from '@/Components/UploadImage.vue';
import axios from 'axios';
import { Head } from '@inertiajs/vue3';

export default {
    name: 'CadAlunos',
    components: {
        Sidebar,
        UploadImage,
        Head,
    },
    data() {
        return {
            nome: '',
            instituicao: '',
            periodo: '',
            curso: '',
            cpf: '',
            destino: '',
            email: '',
            foto: '',
        };
    },
    methods: {
        save() {
            axios.post('/cad_alunos', {
                nome: this.nome,
                instituicao: this.instituicao,
                periodo: this.periodo,
                curso: this.curso,
                cpf: this.cpf,
                destino: this.destino,
                email: this.email,
                foto: this.foto,
            })
            .then(response => console.log(response));
        },
    },
};
</script>

<style scoped>
.card {
    width: 50rem;
    height: 29rem;
}

.form-control:focus {
box-shadow: none;
}

@media screen and (max-width: 320px)
{
    .card {
        height: 100vh;
        margin-top: 1rem;
        border: none;
    }

    .main {
        position: relative;
        display: flex;
        justify-content: center;
        height: 100vh;
        z-index: 100;
        background: #fff;
    }

}
</style>
