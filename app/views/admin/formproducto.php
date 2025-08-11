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

<body style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
    <div
        class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='--select-button-svg: url(&apos;data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2724px%27 height=%2724px%27 fill=%27rgb(138,117,96)%27 viewBox=%270 0 256 256%27%3e%3cpath d=%27M181.66,170.34a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-48-48a8,8,0,0,1,11.32-11.32L128,212.69l42.34-42.35A8,8,0,0,1,181.66,170.34Zm-96-84.68L128,43.31l42.34,42.35a8,8,0,0,0,11.32-11.32l-48-48a8,8,0,0,0-11.32,0l-48,48A8,8,0,0,0,85.66,85.66Z%27%3e%3c/path%3e%3c/svg%3e&apos;); '>
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

                                <a href="http://menudigital.local/admin/menu" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#f5f2f0]">
                                    <div class="text-[#181411]" data-icon="ListBullets" data-size="24px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M56,128a16,16,0,1,1-16-16A16,16,0,0,1,56,128ZM40,48A16,16,0,1,0,56,64,16,16,0,0,0,40,48Zm0,128a16,16,0,1,0,16,16A16,16,0,0,0,40,176Zm176-64H88a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V120A8,8,0,0,0,216,112Zm0-64H88a8,8,0,0,0-8,8V72a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V56A8,8,0,0,0,216,48Zm0,128H88a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V184A8,8,0,0,0,216,176Z"></path>
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
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-3 px-3 py-2">
                                <div class="text-[#181411]" data-icon="Eye" data-size="24px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                                    </svg>
                                </div>
                                <p class="text-[#181411] text-sm font-medium leading-normal">Ver Menu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#181411] tracking-light text-[32px] font-bold leading-tight min-w-72">
                            <span class="text-gray-400 font-regular">Gestionar Menu /</span> Nuevo Producto
                        </p>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181411] text-base font-medium leading-normal pb-2">Nombre del producto</p>
                            <input
                                placeholder="Introduzca el nombre del producto"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-[#e6e0db] h-14 placeholder:text-[#8a7560] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181411] text-base font-medium leading-normal pb-2">Descripcion</p>
                            <textarea
                                placeholder="Introduzaca la description del producto"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-[#e6e0db] min-h-36 placeholder:text-[#8a7560] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181411] text-base font-medium leading-normal pb-2">Precio</p>
                            <input
                                placeholder="Introduzca el precio"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-[#e6e0db] h-14 placeholder:text-[#8a7560] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181411] text-base font-medium leading-normal pb-2">Categoría</p>
                            <select
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border border-[#e6e0db] bg-white focus:border-[#e6e0db] h-14 bg-[image:--select-button-svg] placeholder:text-[#8a7560] p-[15px] text-base font-normal leading-normal">
                                <option value="one">Seleccionar categoría</option>
                                <option value="two">two</option>
                                <option value="three">three</option>
                            </select>
                        </label>
                    </div>
                    <div class="max-w-[480px] flex flex-col p-4">
                        <div class="flex flex-col items-center gap-6 rounded-lg border-2 border-dashed border-[#e6e0db] px-6 py-14">
                            <div class="flex max-w-[480px] flex-col items-center gap-2">
                                <p class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em] max-w-[480px] text-center">Subir imagen</p>
                                <p class="text-[#181411] text-sm font-normal leading-normal max-w-[480px] text-center">Arrastre y suelte o haga clic para cargar</p>
                            </div>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">
                                <span class="truncate">Explorar archivos</span>
                            </button>
                        </div>
                    </div>
                    <div class="max-w-[480px] flex px-4 py-3 justify-end">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f9ad1f] hover:bg-yellow-400 text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Guardar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>