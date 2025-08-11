<?php
$productos = $this->data['productos'];
$categorias = $this->data['categorias'];
?><html>

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
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col w-80">
          <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
            <div class="flex flex-col gap-4">
              <h1 class="text-[#181411] text-base font-medium leading-normal">Administración</h1>
              <div class="flex flex-col gap-2">
                <a href="<?= URL ?>/admin" class="flex items-center gap-3 px-3 py-2 ">
                  <div class="text-[#181411]" data-icon="House" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path>
                    </svg>
                  </div>
                  <p class="text-[#181411] text-sm font-medium leading-normal">Dashboard</p>
                </a>

                <a href="<?= URL ?>/admin/menu" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#f5f2f0]">
                  <div class="text-[#181411]" data-icon="ListBullets" data-size="24px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M56,128a16,16,0,1,1-16-16A16,16,0,0,1,56,128ZM40,48A16,16,0,1,0,56,64,16,16,0,0,0,40,48Zm0,128a16,16,0,1,0,16,16A16,16,0,0,0,40,176Zm176-64H88a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V120A8,8,0,0,0,216,112Zm0-64H88a8,8,0,0,0-8,8V72a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V56A8,8,0,0,0,216,48Zm0,128H88a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V184A8,8,0,0,0,216,176Z"></path>
                    </svg>
                  </div>
                  <p class="text-[#181411] text-sm font-medium leading-normal">Gestionar Menu</p>
                </a>
                <a href="<?= URL ?>/admin/about" class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#181411]" data-icon="Info" data-size="24px" data-weight="regular">
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
                <a href="<?= URL ?>/admin/prevMenu" class="text-[#181411] text-sm font-medium leading-normal">Ver Menu</a>
              </div>
            </div>

          </div>
        </div>
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#181411] tracking-light text-[32px] font-bold leading-tight min-w-72">Gestionar Menu</p>
            <button
              onclick="location.href='<?= URL ?>/auth/logout'"
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal">
              <span class="truncate">Cerrar sesión</span>
            </button>
          </div>
          <div class="pb-3">
            <div class="flex border-b border-[#e6e0db] px-4 gap-8">
              <button id="productsTab" class="flex flex-col items-center justify-center border-b-[3px] border-b-[#181411] text-[#181411] pb-[13px] pt-4">
                <p class="text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">Productos</p>
              </button>
              <button id="categoriesTab" class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#8a7560] pb-[13px] pt-4">
                <p class="text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">Categorias</p>
              </button>
            </div>
          </div>

          <div id="menuProductsSection">
            <div class="flex px-4 py-3 justify-between items-center">
              <h3 class="text-[#181411] text-lg font-bold tracking-[-0.015em] items-center">Productos</h3>
              <button
                onclick="location.href='<?= URL ?>/admin/createProduct'"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f9ad1f] hover:bg-yellow-400 text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Agregar Nuevo Producto</span>
              </button>
            </div>
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#8a7560] flex border-none bg-[#f5f2f0] items-center justify-center pl-4 rounded-l-lg border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Buscar item"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border-none bg-[#f5f2f0] focus:border-none h-full placeholder:text-[#8a7560] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
                </div>
              </label>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#e6e0db] bg-white">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-white">
                      <th class="table-66ac1ca8-df4e-416d-a584-af9b344548a8-column-120 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">Producto</th>
                      <th class="table-66ac1ca8-df4e-416d-a584-af9b344548a8-column-240 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">
                        Categoria
                      </th>
                      <th class="table-66ac1ca8-df4e-416d-a584-af9b344548a8-column-360 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">Precio</th>
                      <th class="table-66ac1ca8-df4e-416d-a584-af9b344548a8-column-480 px-4 py-3 text-left text-[#181411] w-60 text-sm font-medium leading-normal">Estado</th>
                      <th class="table-66ac1ca8-df4e-416d-a584-af9b344548a8-column-600 px-4 py-3 text-left text-[#181411] w-60 text-[#8a7560] text-sm font-medium leading-normal">
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($productos as $producto) :
                      $str = $producto['precio'] ? 'activo' : 'inactivo';
                    ?>
                      <tr class="border-t border-t-[#e6e0db]">
                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181411] text-sm font-normal leading-normal">
                          <?= htmlspecialchars($producto['nombre']) ?>
                        </td>
                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-240 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">
                          <?= htmlspecialchars($producto['categoria']) ?>
                        </td>
                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-360 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">
                          <?= htmlspecialchars($producto['precio']) ?>
                        </td>
                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                          <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                            <span class="truncate"><?= htmlspecialchars($str) ?></span>
                          </button>
                        </td>
                        <td class="table-b0b7f99b-c9e2-4e22-8bf1-115a047412a9-column-600 h-[72px] px-4 py-2 w-60 text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">

                          <button
                            onclick="location.href='<?= URL ?>/admin/editProduct/<?= $producto['id_producto'] ?>'"
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                            <span class="truncate"> Editar</span>
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="categoriesSection" class="hidden">
            <div class="flex px-4 py-3 justify-between items-center">
              <h3 class="text-[#181411] text-lg font-bold tracking-[-0.015em] items-center">Categorias</h3>
              <button
                onclick="location.href='<?= URL ?>/admin/createCategory'"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f9ad1f] hover:bg-yellow-400 text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Agregar Nueva categoria</span>
              </button>
            </div>
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#8a7560] flex border-none bg-[#f5f2f0] items-center justify-center pl-4 rounded-l-lg border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Buscas categorias"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border-none bg-[#f5f2f0] focus:border-none h-full placeholder:text-[#8a7560] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
                </div>
              </label>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#e6e0db] bg-white">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-white">
                      <th class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-120 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">
                        Categoría
                      </th>
                      <th class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-240 px-4 py-3 text-left text-[#181411] w-[400px] text-sm font-medium leading-normal">
                        Descripción
                      </th>
                      <th class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-360 px-4 py-3 text-left text-[#181411] w-60 text-[#8a7560] text-sm font-medium leading-normal">
                        Acciones
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($categorias as $categoria) :
                    ?>
                      <tr class="border-t border-t-[#e6e0db]">
                        <td class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-120 h-[72px] px-4 py-2 w-[400px] text-[#181411] text-sm font-normal leading-normal">
                          <?= htmlspecialchars($categoria['nombre']) ?>
                        </td>
                        <td class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-240 h-[72px] px-4 py-2 w-[400px] text-[#8a7560] text-sm font-normal leading-normal">
                          <?= htmlspecialchars($categoria['descripcion']) ?>
                        </td>
                        <td class="table-c4e06e96-3266-4177-bc7f-f66a771a4a6e-column-360 h-[72px] px-4 py-2 w-60 text-[#8a7560] text-sm font-bold leading-normal tracking-[0.015em]">
                          <button
                            onclick="location.href='<?= URL ?>/admin/editCategory/<?= $categoria['id_categoria'] ?>'"
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-full">
                            <span class="truncate"> Editar</span>
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <script>
      const productsTab = document.getElementById("productsTab");
      const categoriesTab = document.getElementById("categoriesTab");
      const menuProductsSection = document.getElementById("menuProductsSection");
      const categoriesSection = document.getElementById("categoriesSection");

      productsTab.addEventListener("click", () => {
        menuProductsSection.classList.remove("hidden");
        categoriesSection.classList.add("hidden");
        productsTab.classList.add("border-b-[#181411]", "text-[#181411]");
        productsTab.classList.remove("border-b-transparent", "text-[#8a7560]");
        productsTab.querySelector("p").classList.remove("text-[#8a7560]");
        categoriesTab.querySelector("p").classList.add("text-[#8a7560]");
        categoriesTab.classList.add("border-b-transparent", "text-[#8a7560]");
        categoriesTab.classList.remove("border-b-[#181411]", "text-[#181411]");
      });

      categoriesTab.addEventListener("click", () => {
        menuProductsSection.classList.add("hidden");
        categoriesSection.classList.remove("hidden");
        categoriesTab.classList.add("border-b-[#181411]", "text-[#181411]");
        categoriesTab.classList.remove("border-b-transparent", "text-[#8a7560]");
        categoriesTab.querySelector("p").classList.remove("text-[#8a7560]");
        productsTab.querySelector("p").classList.add("text-[#8a7560]");
        productsTab.classList.add("border-b-transparent", "text-[#8a7560]");
        productsTab.classList.remove("border-b-[#181411]", "text-[#181411]");
      });
    </script>
</body>

</html>