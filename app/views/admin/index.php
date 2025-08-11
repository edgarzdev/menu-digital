<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
        rel="stylesheet"
        as="style"
        onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Menu digital | Admin</title>
    <link rel="stylesheet" href="<?= URL ?>/css/style.css">
    <style>
        @container(max-width:120px) {
            .table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 {
                display: none;
            }
        }

        @container(max-width:240px) {
            .table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 {
                display: none;
            }
        }

        @container(max-width:360px) {
            .table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 {
                display: none;
            }
        }

        @container(max-width:480px) {
            .table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 {
                display: none;
            }
        }

        @container(max-width:600px) {
            .table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 {
                display: none;
            }
        }
    </style>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-80">
                    <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-[#181411] text-base font-medium leading-normal">Administración</h1>
                            <div class="flex flex-col gap-2">
                                <a href="<?= URL ?>/admin" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#f5f2f0]">
                                    <div class="text-[#181411]" data-icon="House" data-size="24px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-[#181411] text-sm font-medium leading-normal">Dashboard</p>
                                </a>
                                <a href="<?= URL ?>/admin/menu" class="flex items-center gap-3 px-3 py-2">
                                    <div class="text-[#181411]" data-icon="ListBullets" data-size="24px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M80,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H88A8,8,0,0,1,80,64Zm136,56H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM44,52A12,12,0,1,0,56,64,12,12,0,0,0,44,52Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,116Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,180Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-[#181411] text-sm font-medium leading-normal">Gestionar Menu</p>
                                </a>

                                <a href="<?= URL ?>/admin/about" class="flex items-center gap-3 px-3 py-2">
                                    <div class="text-[#181411]" data-icon="Question" data-size="24px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-[#181411] text-sm font-medium leading-normal">Acerca de</p>
                                </a>
                            </div>
                        </div>
                        <a href="<?= URL ?>/admin/prevMenu" class="flex flex-col gap-1">
                            <div class="flex items-center gap-3 px-3 py-2">
                                <div class="text-[#181411]" data-icon="Eye" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                                    </svg>
                                </div>
                                <p class="text-[#181411] text-sm font-medium leading-normal">Ver Menu</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#181411] tracking-light text-[32px] font-bold leading-tight min-w-72">Dashboard</p>
                        <button
                            onclick="location.href='<?= URL ?>/auth/logout'"
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal">
                            <span class="truncate">Cerrar sesión</span>
                        </button>
                    </div>
                    <div class="flex flex-wrap gap-4 p-4">
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6e0db]">
                            <p class="text-[#181411] text-base font-medium leading-normal">Total de productos</p>
                            <p class="text-[#181411] tracking-light text-2xl font-bold leading-tight">25</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6e0db]">
                            <p class="text-[#181411] text-base font-medium leading-normal">Productos inactivos</p>
                            <p class="text-[#181411] tracking-light text-2xl font-bold leading-tight">5</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e6e0db]">
                            <p class="text-[#181411] text-base font-medium leading-normal">Total de Categorias</p>
                            <p class="text-[#181411] tracking-light text-2xl font-bold leading-tight">3</p>
                        </div>
                    </div>
                    <h3 class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Productos agregados recientemente</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-lg border border-[#e6e0db] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">Producto</th>
                                        <th class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">
                                            Categoría
                                        </th>
                                        <th class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">Precio</th>
                                        <th class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 px-4 py-3 text-left text-[#181411] w-60 text-sm font-medium leading-normal">Estado</th>
                                        <th class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 px-4 py-3 text-left text-[#181411] w-60 text-[#8a7560] text-sm font-medium leading-normal">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#e6e0db]">
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181411] text-sm font-normal leading-normal">
                                            Gourmet Burger
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">Burgers</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">$11.99</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Available</span>
                                            </button>
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 h-[72px] px-4 py-2 w-60 text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e6e0db]">
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181411] text-sm font-normal leading-normal">
                                            Pasta Primavera
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">Pasta</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">$13.99</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Available</span>
                                            </button>
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 h-[72px] px-4 py-2 w-60 text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e6e0db]">
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181411] text-sm font-normal leading-normal">
                                            Apple Pie
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">Desserts</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">$6.99</td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Available</span>
                                            </button>
                                        </td>
                                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 h-[72px] px-4 py-2 w-60 text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>