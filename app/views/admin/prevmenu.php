<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title>Menu digital | Vista previa</title>
  <link rel="stylesheet" href="<?= URL ?>/css/style.css">

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f5f2f0] px-10 py-3">
        <div class="flex items-center gap-4 text-[#181411]">
          <div class="size-4">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                fill="currentColor"></path>
            </svg>
          </div>
          <h2 class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em]">Menu Digital</h2>
        </div>
        <div class="flex flex-1 justify-end gap-8">
          <div class="flex items-center gap-9">
            <a class="text-[#181411] text-sm font-medium leading-normal" href="<?= URL ?>/admin">Admin</a>
          </div>
          <button
            onclick="location.href='<?= URL ?>/auth/logout'"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f5f2f0] text-[#181411] text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Cerrar sesión</span>
          </button>
        </div>
      </header>
      <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#181411] tracking-light text-[32px] font-bold leading-tight min-w-72">Vista previa del menu </p>
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
                  placeholder="Search menu items"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181411] focus:outline-0 focus:ring-0 border-none bg-[#f5f2f0] focus:border-none h-full placeholder:text-[#8a7560] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value="" />
              </div>
            </label>
          </div>
          <div class="flex gap-3 p-3 flex-wrap pr-4">
            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f5f2f0] pl-4 pr-2">
              <p class="text-[#181411] text-sm font-medium leading-normal">Category</p>
              <div class="text-[#181411]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </div>
            </button>
            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f5f2f0] pl-4 pr-2">
              <p class="text-[#181411] text-sm font-medium leading-normal">Price Range</p>
              <div class="text-[#181411]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </div>
            </button>
            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f5f2f0] pl-4 pr-2">
              <p class="text-[#181411] text-sm font-medium leading-normal">Availability</p>
              <div class="text-[#181411]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
              </div>
            </button>
          </div>
          <h3 class="text-[#181411] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Menu Items</h3>
          <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
              <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                  <p class="text-[#181411] text-base font-bold leading-tight">Classic Burger</p>
                  <p class="text-[#8a7560] text-sm font-normal leading-normal">Juicy beef patty with cheese, lettuce, tomato, and our special sauce.</p>
                </div>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-fit">
                  <span class="truncate">$9.99</span>
                </button>
              </div>
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCngoy2ybdz1hwpNY74_Qz6nv62Hw36tk6dk2siyC1PO1JF8oKrOBDeasdO_ge-BjaR1LMx-TDdJYGehtWbucYNWlpX5YYi40u1eAG2wesX-sp_1q39NEVG60JisaMbQ0TnRRs-KBqRogIWxIPkk_Xvnsfi4snr3FGnY4ZswKd7GEMT1y1KDmrFAcmrTCsAZ6ygNmla0OK71HI_ppX7D-nPfSZQjp4V8GiOLSh9izmhvOxhuYmAs4Bj6fFYqwx5yGsbeRcz4-8Xiezs");'></div>
            </div>
          </div>
          <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
              <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                  <p class="text-[#181411] text-base font-bold leading-tight">Margherita Pizza</p>
                  <p class="text-[#8a7560] text-sm font-normal leading-normal">Classic pizza with fresh mozzarella, basil, and tomato sauce.</p>
                </div>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-fit">
                  <span class="truncate">$12.99</span>
                </button>
              </div>
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDzN7VP3HIxxQw_il8qJPFTi40xVdGmzu4W0ut2_LHuilZKCV5phkhr-BD32fF2JpjWWPzZhfY6bfOfL2BsfSEL6iyMq1txmEZrBxo5t4JMCWrWC5vz3lWTRrdDLqVkW_HH-Y2_-I0keJPMSLsi9vJ8ZWPTdu0wl3ijaicwJX1QK8hExiYIpdGd9Qj6_xQo-DtCzbJ2-9Uu6jDvii9nPn0vwvgbAkQXyGL3wlFo6-TDB7d7Uqegt8LtL-rPq84p9Z4OBy3dFxdLxqco");'></div>
            </div>
          </div>
          <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
              <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                  <p class="text-[#181411] text-base font-bold leading-tight">Caesar Salad</p>
                  <p class="text-[#8a7560] text-sm font-normal leading-normal">Crisp romaine lettuce with parmesan cheese, croutons, and Caesar dressing.</p>
                </div>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-fit">
                  <span class="truncate">$7.99</span>
                </button>
              </div>
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCA5-Z-D2nGyfkfw8F9wTSki752j0AwIGDSsKwq7Zw-T75UNGLgIJm1iea8kHXyZKrfk3Z79kOEcDzLIsDBzuqkdFfa9iUViWpAwK23t0-deK88yt1FLw5JyJ6zg79Wlq-Mi7IC7rX5KcQcDohUy8x8TeiV-sfUUVbHJL14M-cSYgemoO72dU4Ol3ZXRvSoikl5DfMIb5yx8nzX59U5AlUHw5KK__OfBxHfSbsmRHHF1rQx6BbRonEzYps97Uucyg7ABqFV9k4NhvOb");'></div>
            </div>
          </div>
          <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
              <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                  <p class="text-[#181411] text-base font-bold leading-tight">Spaghetti Carbonara</p>
                  <p class="text-[#8a7560] text-sm font-normal leading-normal">Pasta with creamy sauce, bacon, and parmesan cheese.</p>
                </div>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-fit">
                  <span class="truncate">$14.99</span>
                </button>
              </div>
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLXzwbOjXrPowQX5l3F751YdpqmUyemBIgPvGmOSYT5rHIIN_Bl7g_ClbkNsiVGnP8EVOl5waNujgwruW5OYNd_iOf3O0ekn7CdaPV8045hMCOnk5xjCXu6juzocROo59jPCRV09gTwfqC7RaqiO_ekA2GGzv2HCUmeXaqdXDJeLz0sBTzANGek_BVt0i92e32PXnfTjaF9uIqu9rp2_ZCK4A94reil2AG7xazdhpZqBDU9mcuzlafjIouKn1cYxtNhmKotjEi_j3k");'></div>
            </div>
          </div>
          <div class="p-4">
            <div class="flex items-stretch justify-between gap-4 rounded-lg">
              <div class="flex flex-[2_2_0px] flex-col gap-4">
                <div class="flex flex-col gap-1">
                  <p class="text-[#181411] text-base font-bold leading-tight">Chocolate Brownie</p>
                  <p class="text-[#8a7560] text-sm font-normal leading-normal">Rich chocolate brownie with a scoop of vanilla ice cream.</p>
                </div>
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f5f2f0] text-[#181411] text-sm font-medium leading-normal w-fit">
                  <span class="truncate">$5.99</span>
                </button>
              </div>
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTpUK6dV-3zr5SydQwPOfSvY3CQrbhxIrTVIkJwtfkgXDhJbaWSYSUDvhUibmnPMJl_fsOetH1FM3r6UHsZXdKmWAAM62JNw3ENA0A2b7WZxXn4irrjDf_huttZDcaNtBBrZerhFe-Qi_4LG6fRvDgKka1k-u4nXonDiJUrWEj7EhvqOEMVxvLlcQdg5irYKCrTtFqbhZ6UpwZD7s-i5XfMoMIUcM5jfm_UeiLBuch79kOKM-EcPvR9rs6TLV-qogzVnB8Rj77o98T");'></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>