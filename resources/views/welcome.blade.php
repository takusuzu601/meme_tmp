<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- ヒーローセクション -->
    <header class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero001.png') }}');">
        <!-- オーバーレイ -->
        <div class="absolute inset-0"></div>

        <!-- テキストコンテンツ -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center">
                    <img src="{{ asset('images/logo001.png') }}" class="mx-auto" width="55%" alt="">
                </h1>
                <p class="text-lg md:text-2xl mb-6 bg-gray-500 text-white py-2 px-6 rounded-md">
                    D31QqFFZSy33NRP4XF4dLXtibMCM74YUjteeWLKepump
                </p>
                <p class="text-lg md:text-2xl mb-6 bg-gray-500 text-white py-2 px-6 rounded-md">
                    参考URL <a href="https://skidog.fun/">https://skidog.fun/</a>
                </p>

                <p class="text-lg md:text-2xl mb-6 bg-gray-500 text-white py-2 px-6 rounded-md">
                    参考URL <a href="https://www.textstudio.com/text-generator?sort=popular&text=SKIDOG">https://www.textstudio.com/text-generator?sort=popular&text=SKIDOG</a>
                </p>

            </div>
            <div class="">
                <ul class="flex">
                    <li><span><a href="">
                        <svg class="e-font-icon-svg e-fab-x-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                    </a></span></li>
                    <li><span><a href="">
                        <svg class="e-font-icon-svg e-fab-telegram-plane" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"><path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path></svg>
                    </a></span></li>
                    <li><span><a href=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" fill="white" id="Layer_1" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><style type="text/css">	.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><path class="st0" d="M292.5,179.2c15.1-7.5,34.4-18.6,53.6-33.8c4.1,8.4,4.5,15.8,2.4,21.7c-1.5,4.2-4.3,7.8-8,10.7 c-4,3.1-9,5.4-14.4,6.6C315.8,186.9,303.6,185.5,292.5,179.2 M295.2,256.5l20,11.6c-40.9,22.9-52,65.5-65.2,106.9 c-13.2-41.4-24.3-84-65.2-106.9l20-11.6c4-1.5,6.5-5.4,6.3-9.6c-1.8-38.8,8.6-56,22.8-66.7c5.1-3.9,10.6-5.8,16.1-5.8 s11,1.9,16.1,5.8c14.1,10.8,24.6,27.9,22.8,66.7C288.6,251.1,291.2,255,295.2,256.5L295.2,256.5L295.2,256.5z M250,3.1 c23.1,0.6,46.3,5.1,66.5,13.8c13.9,6.1,27,14.1,38.7,23.6c5.3,4.3,9.7,8.5,14.5,13.3c13,0.5,32-14,40.9-27.5 C395.4,76.2,326,135,278,157.5l0,0c-8.6-6.6-18.3-9.9-28-9.9s-19.4,3.3-28,9.9c0,0,0,0-0.1,0C173.9,135,104.6,76.2,89.4,26.4 c8.8,13.5,27.8,28,40.9,27.5c4.8-4.8,9.2-9,14.5-13.3C156.6,31,169.6,23,183.5,17C203.7,8.3,226.9,3.8,250,3.1 M207.4,179.2 c-15.1-7.5-34.4-18.6-53.6-33.9c-4.1,8.4-4.5,15.8-2.4,21.7c1.5,4.2,4.3,7.8,7.9,10.7c4,3.1,8.9,5.4,14.4,6.6 C184.2,186.9,196.4,185.5,207.4,179.2"></path><path class="st0" d="M367.3,126.8c10.6-10.7,20-22.5,27.5-33.1l3.8,7.2c12.3,24.6,18.7,49.1,18.7,76.6v43.7l0.2,22.7 c0.9,55.6,12.9,111.9,40.2,163.5l-57.1-46l-40.4,65.5L317.8,387L250,497l-67.8-110l-42.4,39.9l-40.4-65.5l-57.1,46 c27.3-51.5,39.3-107.8,40.2-163.5l0.2-22.7v-43.7c0-27.6,6.4-52,18.7-76.6l3.8-7.2c7.5,10.6,16.9,22.4,27.5,33.1l-3.3,6.9 c-6.4,13.4-8.6,28.3-3.6,42.5c3.2,9.1,9.1,17,16.7,23c7.4,5.8,16.1,9.7,25.3,11.8c6,1.3,12,1.9,18.1,1.7c-1.4,8-2,16.2-2.1,24.7 l-53.8,31l41.5,23.3c3.3,1.9,6.5,4,9.4,6.4c34.2,30.8,54.8,121.7,69,166.1c14.1-44.4,34.7-135.4,69-166.1c3-2.4,6.1-4.5,9.5-6.4 l41.5-23.3l-53.8-31.1c0-8.4-0.6-16.7-2.1-24.7c6,0.2,12.1-0.4,18.1-1.7c9.1-2.1,17.9-6,25.3-11.8c7.6-6,13.5-13.8,16.7-23 c5-14.2,2.9-29.1-3.5-42.5L367.3,126.8L367.3,126.8L367.3,126.8z"></path></svg></a></span></li>
                    <li><span><a href=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" fill="white" id="Layer_1" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><path d="M499.9,122.6c-6.4-38.9-26.2-70.7-58.5-94.8c-21.5-16-45-27.1-73.7-27.8c-15.2-0.4-30.4-1.4-45.3,1.1 c-30.2,5.1-55.9,19.2-77.5,39.8c-70.6,67.4-136,139.5-203.5,209.7C9.8,283.4-1.9,323.2,2.4,367c4.2,42.5,25.2,77.1,60,103.7 c32,24.4,68.8,31.9,108.9,27.8c34.4-3.5,63.5-17,87.4-40.9c10.9-10.9,22.2-21.4,32.8-32.5c45.6-47.4,91.1-94.8,136.6-142.3 c9.9-10.3,19.5-20.8,29.5-31c27.5-28.1,44-60.5,43-98.3C502.2,142.2,501.5,132.2,499.9,122.6z M477,146.9 c-0.4,34.1-11.1,63.7-37,88.6c-28.8,27.7-56,56.9-83.6,85.6c-3.3,3.5-4.9,3.3-8.4,0.2c-39.6-35.2-77.7-71.9-116.8-107.5 c-20.1-18.3-39.9-37-59.9-55.4c-3.5-3.2-4.6-5.5-0.6-9.6c28.8-29.2,57.3-58.7,85.9-88.1c26.1-26.9,58.3-40.7,96.7-40.4 c60.8,0.5,114,46,122.2,103.7C476.4,131.6,477.1,139.2,477,146.9z"></path></svg></a></span></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- 次のセクション -->
    <section id="next-section" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">ABOUT US</h2>
            <div class="">
                <div class="">
                    <p class="text-3xl font-bold text-center mb-12">Yo, we’re Skidog. We don’t just run, we hustle chasing bigger things and making moves. We’re all about that grind, fun, and sticking together. If you’re down to roll with a pack that’s all about staying real and pushing limits, then come join us.
                        Let’s make some noise and run this thing!</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/hero001.png') }}" alt="">
                </div>
            </div>

        </div>
    </section>

    <!-- セクション 1 -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">MEME GALLERY</h2>
            <p class="text-3xl font-bold text-center mb-12">
                Our memes are on another level
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                   <img src="{{ asset('images/gallery001.png') }}" alt="">
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="{{ asset('images/gallery002.png') }}" alt="">
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <img src="{{ asset('images/gallery003.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- フッター -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm">©SKIDOG. All Rights Reserved.</p>
        </div>
    </footer>
</html>
