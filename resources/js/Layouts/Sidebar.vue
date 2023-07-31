<template>
    <div>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <div class="text logo-text">
                        <span class="name">TransBus</span>
                    </div>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link d-flex">
                            <Link :href="route('CadAlunos')" class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAa1JREFUSEvN1k2ITlEYB/DfyKCkJsmONGShRFnZMaVYWJimbBTKR0nZSbEcSXZmarBhhZIppWYxC1YslFBmVvKVUkoWbCR06t5per13nnOne3ud7fPc/+88vZ1z3j49Wn09ci0GXoIRbCk2PYN7+FNniLrwTtzC5g5kFofxLBevAw9hCssqwn9gD57m4LnwSnzA6iD0IzbhZ4TnwsdxIwor6un3vx/15sLXcDIKK+pXcDbqzYWv40QUVtQncCrqzYXPYzQKK+rncDnqzYXTmX0dhRVneSPeRr25cMq5iSNB4FWcidBUrwMvL26o/RXBaWPH8LtpuNzoIRyYd6Y/4w4e5IBlT52J6+SGvf89vA7D2IoNWNox0i+8w0tM4lM0cjTxNlzCviioo/6wuL3Sq9V1LQSnm2oc/TXRsj09FEdxu9v3VfBB3F0kOP+zdLT2Yrozqxu8Fu+xogE4RXzFeqT3em51g8dwuiG0jLmAixH8BWsahp9jx0LwIN40jJZxq/C96uZKf+aetASno/mqCt6FRy3Bu/G4Ch7A9pbgF/hWBbdk/hsbXZmtbaRn8F8SWDwfL/V22AAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text">Alunos</span>
                            </Link>
                        </li>
                        <li class="nav-link">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAk1JREFUSEvd1knITXEYx/HPq0QylJSFTBvDAhtl2pgjG1GGjUgWJEqSEgsUkrKRjWQjFEoWSoaSDGVBypASSqYMhTIVPfW8dbq9955z3puUp273ntv//L7neZ7f//mfDv8oOv4RVzvgnliAEbiAx3WSaAd8FdMT9hPzcKUqvLvgMXjYADmHhf8tOCr1CKMKGa7Csb+dcegPwEwMx3XcqQqNdd3t8Tg8w+c6sOLaquDYMuHgzk9kGU4+hJ34WPcBysCDcRyzWgh/STdfrgMvAxf3aui+RQ8MaoC8wug6pW8FjrIGOOIgduEDbmBKF9kdxrqqWbcC38RkfMJQREljTH7N72A8xwPMT2A80K0q8GbgYrbbsTvFJjUIx4xeiSfoj+9ZpfOISfay2UM0A5/Cksx2WKF3G7PsnXoHsBlzcRr9CqBLmFMXHCVdhl44Urj5JJYWrlfjaF5HO9ZiBYZkv6PvXUaZqxtvip5GBTpjKsILxQjXz8bd3AVtg2MLvWtQCdcvx5sqhiquqZPxIpzJm+9hQv5+n22JnlaOOuD9aaQYlX2xA9uS9DuNVHl61QHHCTQNt3N/BzMO/hipfbLX0fNKUQUcDt+LTam4D1sL6nvyOrKOB/hWhVwGHosThX6+wMQGky3OPRy8mHRRkdJoBd6AyK53qlzLPfy6QXUknuZ/6/Oo7Da4OBp/YUtOrChnVxHOHpjDJIZKabTKOA75GZnl/RKli+nqWDe+lFry6hNGiWx/VBBaky9+McXOVljf7XeuKtot15S5um1AM4E/MGRsH+2TxhAAAAAASUVORK5CYII="/>
                                <span class="text nav-text">Rotas</span>
                            </Link>
                        </li>
                        <li class="nav-link">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAg1JREFUSEvt10uoT1EUx/HP9ZoYCIVuilLymBgw8SgGBoqZwgChFEIykeSRZHajPMqjyKsMzBiYEDEwoJRHSZh4DZQMJHm0ap/buafz///PObr+BvZsn7N+67vXXuusvU+PLo2eLnH9B/+1nW+31UOwDquwCDGvMn7iFi7iPH6VidqBD2F3FVIbm/04UAc8Bw+S4Cmu4UfFRQzFckxL0c7Gw6K2VcTHsAXfMQGfKkIzs7F4h+EIX1urgGMxbxPwOpbWhGbmN7AE79FbzHVZxAtwJ6mjuM41BG/AmaSdh/t5P2Xgo9iWcjoaXxqCx+AjIud92NkOPAIvMTHl6FRDaCbbhHF4nYrtW/YiH/FI3MTcP4S1kt/DYnwNgzw4GsXlQYJmblfgahEcH/u+QQZHMwnOgIjz4EeIIovPYDvG11zQh6SPTykKdVbSdwRPx/NkvAcHa4J34EjSzMfdquCpeJGMV+JKTfBGnE6a6HzRxWJ0jPgS9qaWeRzLaoKjN0ebfJJSlR0UHcE1OZXNS8G7cLiyi2aGsQtxaAyo6iioxxjWzGdHVTSOmXhVBMd8Pc7mXLxJ7a6j1xKDyZiUe74GF7J58ZBYmK4t2fv+nDQgFxtSXJ9u/3PgyHNcdbKxGScbRBuSOJlO5LQz8KxVxPF8Naak607cEj83BI/CWsS5HEdtf37Liqsho76sa78wvwHm7GMf/IDJ+wAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text">Motoristas</span>
                            </Link>
                        </li>
                        <li class="nav-link d-flex">
                            <Link :href="route('index')" class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAa1JREFUSEvN1k2ITlEYB/DfyKCkJsmONGShRFnZMaVYWJimbBTKR0nZSbEcSXZmarBhhZIppWYxC1YslFBmVvKVUkoWbCR06t5per13nnOne3ud7fPc/+88vZ1z3j49Wn09ci0GXoIRbCk2PYN7+FNniLrwTtzC5g5kFofxLBevAw9hCssqwn9gD57m4LnwSnzA6iD0IzbhZ4TnwsdxIwor6un3vx/15sLXcDIKK+pXcDbqzYWv40QUVtQncCrqzYXPYzQKK+rncDnqzYXTmX0dhRVneSPeRr25cMq5iSNB4FWcidBUrwMvL26o/RXBaWPH8LtpuNzoIRyYd6Y/4w4e5IBlT52J6+SGvf89vA7D2IoNWNox0i+8w0tM4lM0cjTxNlzCviioo/6wuL3Sq9V1LQSnm2oc/TXRsj09FEdxu9v3VfBB3F0kOP+zdLT2Yrozqxu8Fu+xogE4RXzFeqT3em51g8dwuiG0jLmAixH8BWsahp9jx0LwIN40jJZxq/C96uZKf+aetASno/mqCt6FRy3Bu/G4Ch7A9pbgF/hWBbdk/hsbXZmtbaRn8F8SWDwfL/V22AAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text">Alunos</span>
                            </Link>
                        </li>
                        <li class="nav-link d-flex">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAk1JREFUSEvd1knITXEYx/HPq0QylJSFTBvDAhtl2pgjG1GGjUgWJEqSEgsUkrKRjWQjFEoWSoaSDGVBypASSqYMhTIVPfW8dbq9955z3puUp273ntv//L7neZ7f//mfDv8oOv4RVzvgnliAEbiAx3WSaAd8FdMT9hPzcKUqvLvgMXjYADmHhf8tOCr1CKMKGa7Csb+dcegPwEwMx3XcqQqNdd3t8Tg8w+c6sOLaquDYMuHgzk9kGU4+hJ34WPcBysCDcRyzWgh/STdfrgMvAxf3aui+RQ8MaoC8wug6pW8FjrIGOOIgduEDbmBKF9kdxrqqWbcC38RkfMJQREljTH7N72A8xwPMT2A80K0q8GbgYrbbsTvFJjUIx4xeiSfoj+9ZpfOISfay2UM0A5/Cksx2WKF3G7PsnXoHsBlzcRr9CqBLmFMXHCVdhl44Urj5JJYWrlfjaF5HO9ZiBYZkv6PvXUaZqxtvip5GBTpjKsILxQjXz8bd3AVtg2MLvWtQCdcvx5sqhiquqZPxIpzJm+9hQv5+n22JnlaOOuD9aaQYlX2xA9uS9DuNVHl61QHHCTQNt3N/BzMO/hipfbLX0fNKUQUcDt+LTam4D1sL6nvyOrKOB/hWhVwGHosThX6+wMQGky3OPRy8mHRRkdJoBd6AyK53qlzLPfy6QXUknuZ/6/Oo7Da4OBp/YUtOrChnVxHOHpjDJIZKabTKOA75GZnl/RKli+nqWDe+lFry6hNGiWx/VBBaky9+McXOVljf7XeuKtot15S5um1AM4E/MGRsH+2TxhAAAAAASUVORK5CYII="/>
                                <span class="text nav-text">Rotas</span>
                            </Link>
                        </li>
                        <li class="nav-link d-flex">
                            <Link class="d-flex align-items-center text-decoration-none gap-3">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAg1JREFUSEvt10uoT1EUx/HP9ZoYCIVuilLymBgw8SgGBoqZwgChFEIykeSRZHajPMqjyKsMzBiYEDEwoJRHSZh4DZQMJHm0ap/buafz///PObr+BvZsn7N+67vXXuusvU+PLo2eLnH9B/+1nW+31UOwDquwCDGvMn7iFi7iPH6VidqBD2F3FVIbm/04UAc8Bw+S4Cmu4UfFRQzFckxL0c7Gw6K2VcTHsAXfMQGfKkIzs7F4h+EIX1urgGMxbxPwOpbWhGbmN7AE79FbzHVZxAtwJ6mjuM41BG/AmaSdh/t5P2Xgo9iWcjoaXxqCx+AjIud92NkOPAIvMTHl6FRDaCbbhHF4nYrtW/YiH/FI3MTcP4S1kt/DYnwNgzw4GsXlQYJmblfgahEcH/u+QQZHMwnOgIjz4EeIIovPYDvG11zQh6SPTykKdVbSdwRPx/NkvAcHa4J34EjSzMfdquCpeJGMV+JKTfBGnE6a6HzRxWJ0jPgS9qaWeRzLaoKjN0ebfJJSlR0UHcE1OZXNS8G7cLiyi2aGsQtxaAyo6iioxxjWzGdHVTSOmXhVBMd8Pc7mXLxJ7a6j1xKDyZiUe74GF7J58ZBYmK4t2fv+nDQgFxtSXJ9u/3PgyHNcdbKxGScbRBuSOJlO5LQz8KxVxPF8Naak607cEj83BI/CWsS5HEdtf37Liqsho76sa78wvwHm7GMf/IDJ+wAAAABJRU5ErkJggg=="/>
                                <span class="text nav-text">Motoristas</span>
                            </Link>
                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
                    <Link class="d-flex">
                        <AuthenticatedLayout />
                    </Link>
                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>
                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
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
        const modeSwitch = body.querySelector(".toggle-switch");
        const modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Modo Claro";
            } else {
                modeText.innerText = "Modo Escuro";
            }
        });
    },
};
</script>



<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
}

.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;
}
.sidebar.close{
    width: 88px;
}

.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

.sidebar li a{
    list-style: none;
    height: 50px;
    background-color: transparent;
    display: flex;
    align-items: center;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
    width: 100%;
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
}

.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
}

.menu-links {
    padding-left: 1rem;
}

</style>
