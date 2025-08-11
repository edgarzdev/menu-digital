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
    <link rel="icon" href="<?= URL ?>/favicon.svg" type="image/svg+xml">

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
                                <a href="http://menudigital.local/admin" class="flex items-center gap-3 px-3 py-2 ">
                                    <div class="text-[#181411]" data-icon="House" data-size="24px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path>
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

                                <a href="<?= URL ?>/admin/about" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#f5f2f0]">
                                    <div class="text-[#181411]" data-icon="Info" data-size="24px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-[#181411] text-sm font-medium leading-normal">About</p>
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
                        <p class="text-[#181411] tracking-light text-[32px] font-bold leading-tight min-w-72">Acerca de</p>
                        <button
                            onclick="location.href='<?= URL ?>/auth/logout'"
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal">
                            <span class="truncate">Cerrar sesión</span>
                        </button>
                    </div>
                    <h3 class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Información de la Applicación</h3>
                    <div class="p-4 grid grid-cols-[20%_1fr] gap-x-6">
                        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e6e0db] py-5">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal">Sistema</p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Menu digital para restaurante</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e6e0db] py-5">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal">Version</p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">1.0.0</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e6e0db] py-5">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal">Fecha de lanzamiento</p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">11 de agosto de 2025</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e6e0db] py-5">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal">Desarrolladores</p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Grupo 10</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid ">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal"></p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Jair Andres Mena Noky - Scrum Master</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid ">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal"></p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Wenseslao William Carvajal Caceres - Testing</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid ">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal"></p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Abimael Edgar Ramirez Lopez - BackEnd</p>
                        </div>
                        <div class="col-span-2 grid grid-cols-subgrid ">
                            <p class="text-[#8a7560] text-sm font-normal leading-normal"></p>
                            <p class="text-[#181411] text-sm font-normal leading-normal">Marco Ariel López Gutiérrez - FrontEnd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>