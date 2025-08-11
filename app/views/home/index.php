<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
        rel="stylesheet"
        as="style"
        onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>Menu digital</title>
    <link rel="icon" href="<?= URL ?>/favicon.svg" type="image/svg+xml">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>


<body style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <div class="h-full">
            <div
                class="flex h-full flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4"
                style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDwpDhbWPbbCD4wrWH3RmtkspAYA147fF-g9LCbOSQoZpNleUh6ra_UWGc7I4ZwacA7F0xhm7TDbmLuAEGZ-t_bG1S8reC6Uoc7I_SawjfMjigqrrKgKYCK_iYgckNnMaCutN5m-bJMQdZYQodsQ9GqdsOGzGGwsKuqGJznyNNbKWU7vrlIZ-F0vO4p3UUgBr80CpeLUcK4UbPhhX4Qd7EBJIDT7B9k_eaiLahkenXMrAKwYtFs_me_fws7AzVGaorCoY5GCqLT5HA");'>
                <div class="flex flex-col gap-2 text-center">
                    <h1
                        class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                        Bienvenido a tu Restaurante favorito
                    </h1>

                    <p class="text-white text-base font-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normalpb-3 pt-1 px-4 text-center">
                        Explora nuestro menú y descubre un mundo de sabores elaborados con pasión y los mejores ingredientes.
                    </p>
                </div>
                <button
                    onclick="location.href='<?= URL ?>/menu'"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#f9ad1f] text-[#181611] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]">
                    <span class="truncate">Explorar Menu</span>
                </button>
            </div>
        </div>
    </div>

</body>

</html>