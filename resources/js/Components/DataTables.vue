<template>
    <div>
        <div class="docs-formats">
            <button class="btn btn-success" @click="exportarExcel()">
                <box-icon name='file-doc' type='solid' color='#fff' ></box-icon>
            </button>

            <button class="btn btn-danger" @click="exportarPDF()">
                <box-icon name='file-pdf' type='solid' color='#fff' ></box-icon>
            </button>
        </div>
        <table id="DataTables" class="table table-striped table-bordered w-50">
            <thead>
                <tr>
                    <th colspan="6" class="table-title text-center">
                        <h5 class="fw-bold">Lista de Alunos</h5>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="aluno in alunos" :key="aluno.id">
                    <th scope="row">{{ aluno.id }}</th>
                    <td>{{ aluno.nome }}</td>
                    <td>{{ aluno.email }}</td>
                    <td>{{ aluno.instituicao }}</td>
                    <td>{{ aluno.cpf }}</td>
                    <td><button class="btn btn-primary btn-sm">Visualização</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import $ from 'jquery';
import pdfMake from 'pdfmake/build/pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
import 'datatables.net';
import 'datatables.net-bs5';
import 'datatables.net-buttons';
import 'datatables.net-buttons-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-fixedheader-bs5';
import 'datatables.net-buttons/js/buttons.html5.js';
import 'jspdf';
import 'jspdf-autotable';
import ExcelJS from 'exceljs';

export default {
    name: 'DataTables',
    props: {
        alunos: {
            type: Array,
            required: true,
        },
    },
    mounted() {
        this.inicializarDataTables();
        pdfMake.vfs = pdfFonts.pdfMake.vfs;
    },
    methods: {
        exportarPDF() {
            const dataDeEmissao = new Date().toLocaleDateString();

            const pdf = {
                content: [
                    {
                        text: 'Lista de Alunos',
                        style: 'titulo',
                    },
                    {
                        table: {
                            headerRows: 1,
                            widths: [50, 100, 120, 100, 100],
                            body: [
                                [
                                    { text: 'ID', style: 'tableHeader' },
                                    { text: 'Nome', style: 'tableHeader' },
                                    { text: 'Email', style: 'tableHeader' },
                                    { text: 'Instituição', style: 'tableHeader' },
                                    { text: 'CPF', style: 'tableHeader' },
                                ],
                                // Dados dos alunos
                                ...this.alunos.map(aluno => [
                                    { text: aluno.id, style: 'tableText' },
                                    { text: aluno.nome, style: 'tableText' },
                                    { text: aluno.email, style: 'tableText' },
                                    { text: aluno.instituicao, style: 'tableText' },
                                    { text: aluno.cpf, style: 'tableText' },
                                ]),
                            ],
                        },
                    },
                    {
                        text:'Data de emissão: ' + dataDeEmissao,
                        style: 'dataEmissao',
                    },
                ],
                styles: {
                    titulo: {
                        fontSize: 13,
                        alignment: 'center',
                        marginBottom: 10,
                        bold: true
                    },
                    dataEmissao: {
                        fontSize: 10,
                        alignment: 'right',
                        marginTop: 5,
                        marginRight: 20,
                        bold: true,
                    },
                    tableHeader: {
                        bold: true,
                        fontSize: 12,
                        color: 'black',
                        fillColor: '#ccc',
                    },
                    tableText: {
                        fontSize: 10,
                        color: 'black',
                        noWrap: true,
                    },
                },
            };

            pdfMake.createPdf(pdf).download('Lista de Alunos.pdf');
        },

        async exportarExcel() {
            const workbook = new ExcelJS.Workbook();
            const worksheet = workbook.addWorksheet('Alunos');

            const headerRow = worksheet.addRow(['ID', 'Nome', 'Email', 'Instituição', 'CPF']);
            headerRow.font = { bold: true };
            headerRow.eachCell({ includeEmpty: true }, cell => {
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFCCCCCC' }
                };
            });

            worksheet.getColumn(1).width = 5;
            worksheet.getColumn(2).width = 20;
            worksheet.getColumn(3).width = 30;
            worksheet.getColumn(4).width = 25;
            worksheet.getColumn(5).width = 15;

            this.alunos.forEach(aluno => {
                const dataRow = worksheet.addRow([aluno.id, aluno.nome, aluno.email, aluno.instituicao, aluno.cpf]);
                dataRow.alignment = { vertical: 'middle', horizontal: 'left' };
                dataRow.font = { size: 11 };
                dataRow.height = 30;
            });

            const buffer = await workbook.xlsx.writeBuffer();

            const excelBlob = new Blob([buffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
            const excelURL = URL.createObjectURL(excelBlob);

            const a = document.createElement('a');
            a.href = excelURL;
            a.download = 'Lista_de_Alunos.xlsx';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        },

        inicializarDataTables() {
            if ($.fn.DataTable.isDataTable('#DataTables')) {
                $(this.$el).DataTable().destroy();
            }

            $(this.$el).find('table').DataTable({
                paging: true,
                pageLength: 9,
                language: {
                search: 'Pesquisar:',
                lengthMenu: '',
                info: 'Mostrando página _PAGE_ de _PAGES_',
                paginate: {
                    first: 'Primeira',
                    last: 'Última',
                    next: 'Próxima',
                    previous: 'Anterior',
                },
                emptyTable: 'Nenhum registro encontrado',
                zeroRecords: 'Nenhum registro correspondente encontrado',
                sInfoFiltered: '(filtrado de _MAX_ registros no total)',
                sInfoEmpty: 'Mostrando 0 até 0 de 0 registros',
                },
                search: {
                    input: '<input type="search" style="width: 300px;">'
                },
            });
        },
    },
};
</script>

<style>
.docs-formats {
    display: flex;
    gap: 0.8rem;
    margin-top: 0;
}

table {
    border-collapse: collapse;
}

th,
td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    white-space: nowrap;
}

th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
}

tr:hover {
    background-color: #f2f2f2;
}

.btn-sm {
    font-size: 12px;
    font-weight: bold;
}

#DataTables_wrapper .dataTables_filter input {
    width: 100%;
    max-width: 300px;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
}

#DataTables_wrapper .dataTables_filter input:focus {
    width: 100%;
    max-width: 400px;
    outline: none;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
}

#DataTables_wrapper .dataTables_scrollBody {
    max-width: 100%;
}
</style>
