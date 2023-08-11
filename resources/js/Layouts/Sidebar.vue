<template>
    <div>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <div class="text logo-text">
                        <Link :href="route('dashboard')" class="text-decoration-none text-dark">
                            <span class="name text-white">TransBus</span>
                        </Link>
                    </div>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <div class="text logo-text">
                        <span class="name text-white">Cadastro</span>
                    </div>
                    <ul class="menu-links">
                        <li class="nav-link d-flex">
                            <Link :href="route('CadAlunos')" class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAa1JREFUSEvN1k2ITlEYB/DfyKCkJsmONGShRFnZMaVYWJimbBTKR0nZSbEcSXZmarBhhZIppWYxC1YslFBmVvKVUkoWbCR06t5per13nnOne3ud7fPc/+88vZ1z3j49Wn09ci0GXoIRbCk2PYN7+FNniLrwTtzC5g5kFofxLBevAw9hCssqwn9gD57m4LnwSnzA6iD0IzbhZ4TnwsdxIwor6un3vx/15sLXcDIKK+pXcDbqzYWv40QUVtQncCrqzYXPYzQKK+rncDnqzYXTmX0dhRVneSPeRr25cMq5iSNB4FWcidBUrwMvL26o/RXBaWPH8LtpuNzoIRyYd6Y/4w4e5IBlT52J6+SGvf89vA7D2IoNWNox0i+8w0tM4lM0cjTxNlzCviioo/6wuL3Sq9V1LQSnm2oc/TXRsj09FEdxu9v3VfBB3F0kOP+zdLT2Yrozqxu8Fu+xogE4RXzFeqT3em51g8dwuiG0jLmAixH8BWsahp9jx0LwIN40jJZxq/C96uZKf+aetASno/mqCt6FRy3Bu/G4Ch7A9pbgF/hWBbdk/hsbXZmtbaRn8F8SWDwfL/V22AAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text text-white">Alunos</span>
                            </Link>
                        </li>
                        <li class="nav-link">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAk1JREFUSEvd1knITXEYx/HPq0QylJSFTBvDAhtl2pgjG1GGjUgWJEqSEgsUkrKRjWQjFEoWSoaSDGVBypASSqYMhTIVPfW8dbq9955z3puUp273ntv//L7neZ7f//mfDv8oOv4RVzvgnliAEbiAx3WSaAd8FdMT9hPzcKUqvLvgMXjYADmHhf8tOCr1CKMKGa7Csb+dcegPwEwMx3XcqQqNdd3t8Tg8w+c6sOLaquDYMuHgzk9kGU4+hJ34WPcBysCDcRyzWgh/STdfrgMvAxf3aui+RQ8MaoC8wug6pW8FjrIGOOIgduEDbmBKF9kdxrqqWbcC38RkfMJQREljTH7N72A8xwPMT2A80K0q8GbgYrbbsTvFJjUIx4xeiSfoj+9ZpfOISfay2UM0A5/Cksx2WKF3G7PsnXoHsBlzcRr9CqBLmFMXHCVdhl44Urj5JJYWrlfjaF5HO9ZiBYZkv6PvXUaZqxtvip5GBTpjKsILxQjXz8bd3AVtg2MLvWtQCdcvx5sqhiquqZPxIpzJm+9hQv5+n22JnlaOOuD9aaQYlX2xA9uS9DuNVHl61QHHCTQNt3N/BzMO/hipfbLX0fNKUQUcDt+LTam4D1sL6nvyOrKOB/hWhVwGHosThX6+wMQGky3OPRy8mHRRkdJoBd6AyK53qlzLPfy6QXUknuZ/6/Oo7Da4OBp/YUtOrChnVxHOHpjDJIZKabTKOA75GZnl/RKli+nqWDe+lFry6hNGiWx/VBBaky9+McXOVljf7XeuKtot15S5um1AM4E/MGRsH+2TxhAAAAAASUVORK5CYII="/>
                                <span class="text nav-text text-white">Rotas</span>
                            </Link>
                        </li>
                        <li class="nav-link">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAg1JREFUSEvt10uoT1EUx/HP9ZoYCIVuilLymBgw8SgGBoqZwgChFEIykeSRZHajPMqjyKsMzBiYEDEwoJRHSZh4DZQMJHm0ap/buafz///PObr+BvZsn7N+67vXXuusvU+PLo2eLnH9B/+1nW+31UOwDquwCDGvMn7iFi7iPH6VidqBD2F3FVIbm/04UAc8Bw+S4Cmu4UfFRQzFckxL0c7Gw6K2VcTHsAXfMQGfKkIzs7F4h+EIX1urgGMxbxPwOpbWhGbmN7AE79FbzHVZxAtwJ6mjuM41BG/AmaSdh/t5P2Xgo9iWcjoaXxqCx+AjIud92NkOPAIvMTHl6FRDaCbbhHF4nYrtW/YiH/FI3MTcP4S1kt/DYnwNgzw4GsXlQYJmblfgahEcH/u+QQZHMwnOgIjz4EeIIovPYDvG11zQh6SPTykKdVbSdwRPx/NkvAcHa4J34EjSzMfdquCpeJGMV+JKTfBGnE6a6HzRxWJ0jPgS9qaWeRzLaoKjN0ebfJJSlR0UHcE1OZXNS8G7cLiyi2aGsQtxaAyo6iioxxjWzGdHVTSOmXhVBMd8Pc7mXLxJ7a6j1xKDyZiUe74GF7J58ZBYmK4t2fv+nDQgFxtSXJ9u/3PgyHNcdbKxGScbRBuSOJlO5LQz8KxVxPF8Naak607cEj83BI/CWsS5HEdtf37Liqsho76sa78wvwHm7GMf/IDJ+wAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text text-white">Motoristas</span>
                            </Link>
                        </li>
                    </ul>

                    <div class="text logo-text">
                        <span class="name text-white">Consultas</span>
                    </div>
                    <ul class="menu-links">
                        <li class="nav-link d-flex">
                            <Link :href="route('ShowAlunos')" class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAa1JREFUSEvN1k2ITlEYB/DfyKCkJsmONGShRFnZMaVYWJimbBTKR0nZSbEcSXZmarBhhZIppWYxC1YslFBmVvKVUkoWbCR06t5per13nnOne3ud7fPc/+88vZ1z3j49Wn09ci0GXoIRbCk2PYN7+FNniLrwTtzC5g5kFofxLBevAw9hCssqwn9gD57m4LnwSnzA6iD0IzbhZ4TnwsdxIwor6un3vx/15sLXcDIKK+pXcDbqzYWv40QUVtQncCrqzYXPYzQKK+rncDnqzYXTmX0dhRVneSPeRr25cMq5iSNB4FWcidBUrwMvL26o/RXBaWPH8LtpuNzoIRyYd6Y/4w4e5IBlT52J6+SGvf89vA7D2IoNWNox0i+8w0tM4lM0cjTxNlzCviioo/6wuL3Sq9V1LQSnm2oc/TXRsj09FEdxu9v3VfBB3F0kOP+zdLT2Yrozqxu8Fu+xogE4RXzFeqT3em51g8dwuiG0jLmAixH8BWsahp9jx0LwIN40jJZxq/C96uZKf+aetASno/mqCt6FRy3Bu/G4Ch7A9pbgF/hWBbdk/hsbXZmtbaRn8F8SWDwfL/V22AAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text text-white">Alunos</span>
                            </Link>
                        </li>
                        <li class="nav-link d-flex">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAk1JREFUSEvd1knITXEYx/HPq0QylJSFTBvDAhtl2pgjG1GGjUgWJEqSEgsUkrKRjWQjFEoWSoaSDGVBypASSqYMhTIVPfW8dbq9955z3puUp273ntv//L7neZ7f//mfDv8oOv4RVzvgnliAEbiAx3WSaAd8FdMT9hPzcKUqvLvgMXjYADmHhf8tOCr1CKMKGa7Csb+dcegPwEwMx3XcqQqNdd3t8Tg8w+c6sOLaquDYMuHgzk9kGU4+hJ34WPcBysCDcRyzWgh/STdfrgMvAxf3aui+RQ8MaoC8wug6pW8FjrIGOOIgduEDbmBKF9kdxrqqWbcC38RkfMJQREljTH7N72A8xwPMT2A80K0q8GbgYrbbsTvFJjUIx4xeiSfoj+9ZpfOISfay2UM0A5/Cksx2WKF3G7PsnXoHsBlzcRr9CqBLmFMXHCVdhl44Urj5JJYWrlfjaF5HO9ZiBYZkv6PvXUaZqxtvip5GBTpjKsILxQjXz8bd3AVtg2MLvWtQCdcvx5sqhiquqZPxIpzJm+9hQv5+n22JnlaOOuD9aaQYlX2xA9uS9DuNVHl61QHHCTQNt3N/BzMO/hipfbLX0fNKUQUcDt+LTam4D1sL6nvyOrKOB/hWhVwGHosThX6+wMQGky3OPRy8mHRRkdJoBd6AyK53qlzLPfy6QXUknuZ/6/Oo7Da4OBp/YUtOrChnVxHOHpjDJIZKabTKOA75GZnl/RKli+nqWDe+lFry6hNGiWx/VBBaky9+McXOVljf7XeuKtot15S5um1AM4E/MGRsH+2TxhAAAAAASUVORK5CYII="/>
                                <span class="text nav-text text-white">Rotas</span>
                            </Link>
                        </li>
                        <li class="nav-link d-flex">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAg1JREFUSEvt10uoT1EUx/HP9ZoYCIVuilLymBgw8SgGBoqZwgChFEIykeSRZHajPMqjyKsMzBiYEDEwoJRHSZh4DZQMJHm0ap/buafz///PObr+BvZsn7N+67vXXuusvU+PLo2eLnH9B/+1nW+31UOwDquwCDGvMn7iFi7iPH6VidqBD2F3FVIbm/04UAc8Bw+S4Cmu4UfFRQzFckxL0c7Gw6K2VcTHsAXfMQGfKkIzs7F4h+EIX1urgGMxbxPwOpbWhGbmN7AE79FbzHVZxAtwJ6mjuM41BG/AmaSdh/t5P2Xgo9iWcjoaXxqCx+AjIud92NkOPAIvMTHl6FRDaCbbhHF4nYrtW/YiH/FI3MTcP4S1kt/DYnwNgzw4GsXlQYJmblfgahEcH/u+QQZHMwnOgIjz4EeIIovPYDvG11zQh6SPTykKdVbSdwRPx/NkvAcHa4J34EjSzMfdquCpeJGMV+JKTfBGnE6a6HzRxWJ0jPgS9qaWeRzLaoKjN0ebfJJSlR0UHcE1OZXNS8G7cLiyi2aGsQtxaAyo6iioxxjWzGdHVTSOmXhVBMd8Pc7mXLxJ7a6j1xKDyZiUe74GF7J58ZBYmK4t2fv+nDQgFxtSXJ9u/3PgyHNcdbKxGScbRBuSOJlO5LQz8KxVxPF8Naak607cEj83BI/CWsS5HEdtf37Liqsho76sa78wvwHm7GMf/IDJ+wAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text text-white">Motoristas</span>
                            </Link>
                        </li>

                        <li class="nav-link d-flex">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZFJREFUSEvt1k9LFVEUAPCf+AEqBPdRSNBGXOgiIl0EQd+gRZsgcOFSBHWnILSsjbRo4ycQhDZBfyioCMSF2qL8AEFBtTbjwDwYRufN3DtPRPCsHsw953fvfXfm3CFnFENn5MqFL2GumPQz/E5dQA58BR8xVmD7mMLfFDwFvowlPELg5fiJF1jFnzYTaAs/wFOMNBT9gcfYbMLbwMtYaSpUeT6L9X45TfA0XieiMfwIk/hSl9sPjmdfS4co1X+P2znwfWylapXxE9g+qUa/Fcdh6r2ruf4CnqTCL3EvVyzyNvAwFY5DFYerS7zC3VT4De50UfG2bvL9/uMLOGfXz89WX8cHjOYss5QTTeMWvlXrnHS4bhSnsSvaswKfwV4Zr8LRZw8QvXeQ8QtXy726Csd7G6/RaUTUftcrXIWjlX06DbW4Hn2ug4fxHNcGjH8vbiaHdfCAvfpyTTeQauZ4cauInSnHP0Tv3Wk781Q46kZ/na8Aa1hsi8a4HDjybhYfhvgdH5rdFLQLnOocG5+74s7wf3miPB/OgoyfAAAAAElFTkSuQmCC"/>
                                <span class="text nav-text text-white">Avisos</span>
                            </Link>
                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
                    <ul class="menu-links">
                        <Link class="d-flex">
                            <AuthenticatedLayout />
                        </Link>
                    </ul>
                </div>
            </div>
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
    mounted() {
        const body = document.querySelector('body');
        const sidebar = body.querySelector('nav');
        const toggle = body.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    },
};
</script>



<style>

.sidebar {
    background-color: #4E73DF;
}
</style>
