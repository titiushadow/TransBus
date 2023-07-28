<template>
    <div>
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
                                <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome completo">
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-flex" for="instituicao">Instituição</label>
                                <input type="text" class="form-control" id="instituicao" placeholder="Instituição">
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-flex" for="Periodo">Periodo</label>
                                <input type="text" class="form-control" id="Periodo" placeholder="Período">
                            </div>

                            <UploadImage />
                        </div>

                        <!-- Segunda coluna -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="d-flex" for="curso">Curso:</label>
                                <input type="text" class="form-control" id="curso" placeholder="Digite o curso">
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-flex" for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF">
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-flex" for="destino">Destino</label>
                                <input type="text" class="form-control" id="destino" placeholder="Digite o destino">
                            </div>

                            <div class="form-group mb-3">
                                <label class="d-flex" for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite o E-mail">
                            </div>
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-success mt-4">Salvar</button>
            </div>
        </div>
        </main>
    </div>
</template>

<script>
import Sidebar from '@/Layouts/Sidebar.vue';
import UploadImage from '@/Components/UploadImage.vue';
    export default {
        Name: 'CadAlunos',
        components: {
            Sidebar,
            UploadImage,
        },
        methods: {
        salvarDados() {
            const formData = {
                nome: this.nome,
                instituicao: this.instituicao,
                periodo: this.periodo,
                foto: this.foto,
                curso: this.curso,
                cpf: this.cpf,
                destino: this.destino,
                email: this.email,
            };
        }
    }
}

</script>

<style scoped>
    .card {
        width: 50rem;
        height: 29rem;
    }

    .form-control:focus {
        box-shadow: none;
    }
</style>
