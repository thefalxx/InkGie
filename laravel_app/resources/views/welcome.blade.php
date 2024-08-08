<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>InkGie</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Megrim&display=swap');
        </style>
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>

    <body class="bg-gray-100 text-gray-800">
        <header class="relative w-full h-screen bg-cover bg-center">
            <img src="{{ asset('images/Resources/banner.jpg') }}" alt="banner" class="absolute inset-0 object-cover w-full h-full z-0">
            <div class="absolute inset-0 bg-black bg-opacity-50 ">
                <nav class="flex justify-between w-full max-w-6xl mx-auto p-6">
                    <div class="text-white space-x-6">
                        <a href="#" class="hover:underline font-customDosis">Home</a>
                        <a href="#" class="hover:underline font-customDosis">Artists</a>
                        <a href="#" class="hover:underline font-customDosis">Gallery</a>
                    </div>
                    <div class="flex-grow flex justify-center">
                        <img src="{{ asset('images/Resources/logo-header.png') }}" alt="Logo" class="h-15">
                    </div>
                    <div class="text-white space-x-6">
                        <a href="#" class="hover:underline font-customDosis">Services</a>
                        <a href="#" class="hover:underline font-customDosis">Clinic</a>
                    </div>
                </nav>
            </div>
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
                <h1 class="text-5xl text-white font-bold font-customFont">We Turn Skin Into Art;</h1>
                <div class="absolute bottom-4 left-0 w-full">
                    <button class="w-full py-1 bg-[#7b7f5d] text-[#FFFFFF]  font-customDosis text-lg uppercase tracking-widest hover:bg-[#d5db9b] transition duration-300">
                        Book Now
                    </button>
                </div>
            </div>

            
        </header>
    
        <section class="py-20 shadow-slate-600" style="background-image: url('images/Resources/bg-1.jpg')";>
            <div class="container mx-auto text-center mb-60 ">
                <h2 class="text-4xl font-bold mb-8 font-customFont">Artists; Masterpieces in Motion</h2>
                <p class="text-lg mb-16 font-customDosis">Crafting Dreams into Stunning, Wearable Art</p>
            </div>

            <div class="py-20 shadow-slate-600 shadow-2xl" style="background-image: url('images/Resources/bg-2.jpg')";>
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-bnw-1.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                        </div>
    
                        {{-- <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-2.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                            
                        </div> --}}

                        {{-- <div class="relative w-full h-auto">
                            <img src="{{ asset('images/Resources/img-artist-2.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                            <div class="absolute text-center top-1/2 right-full w-full transform -translate-y-1/2 rotate-[-90deg] origin-top-right bg-black bg-opacity-5 text-black p-4 rounded">
                                <h3 class="text-xl font-semibold font-customFont">Solana Mercure</h3>
                                <br class="font-customDosis">Tattoo Artist
                            </div>
                        </div> --}}

                        <div class="relative w-full h-auto">
                            <img src="{{ asset('images/Resources/img-artist-2.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                            <div class="absolute bottom-[-8] h-auto w-[100%] transform -translate-y-0 rotate-[-90deg] origin-top-left text-black p-4 flex items-center justify-center">
                                <div>
                                    <h3 class=" text-center text-4xl font-semibold font-customFont">Solana Mercure</h3>
                                    <p class="text-center mt-2 font-customDosis">Tattoo Artist</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-bnw-3.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                        </div>
    
                        <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-bnw-4.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                        </div>
    
                        <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-bnw-5.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                        </div>
    
                        <div class="bg-white shadow-lg">
                            <img src="{{ asset('images/Resources/img-artist-bnw-6.png') }}" alt="image" class="w-full h-auto object-cover rounded-t-lg">
                        </div>
                        
                    </div>

                </div>
            </div>

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
                <div class="absolute bottom-4 left-0 w-full">
                    <button class="w-full py-1 bg-[#7b7f5d] text-[#FFFFFF]  font-customDosis text-lg uppercase tracking-widest hover:bg-[#d5db9b] transition duration-300">
                        Inquire Now
                    </button>
                </div>
            </div>

        </section>

       


        <section>
            <div class="py-20 " style="background-image: url('images/Resources/bg-2.jpg')";>
                <div class="container mx-auto text-center ">
                    <h2 class="text-4xl text-white mb-4 font-customFont">Services;</h2>
                    <div class="font-customDosis text-white font-extralight mb-14">Harmonizing Art and Expression</div>

                    <div class="flex justify-center space-x-12">
                        <button class="px-6 py-3 text-white font-customFont text-4xl hover:bg-[#7b7f5d]">Tattoos</button>
                        <button class="px-6 py-3 text-white font-customFont text-4xl hover:bg-[#7b7f5d]">Aesthetics</button>
                    </div>
                </div>
            </div>
        </section>

    
        <section class="py-20" style="background-image: url('images/Resources/bg-1.jpg')";>
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8 font-customFont">Our Works; Ink Your Memories, Wear Your Story</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="bg-white shadow-lg hover:shadow-slate-400">
                        <img src="{{ asset('images/Resources/img-works-bnw-1.png') }}" alt="image" class="w-full h-80 object-cover">
                    </div>

                    <div class="bg-white shadow-lg hover:shadow-slate-400">
                        <img src="{{ asset('images/Resources/img-works-2.png') }}" alt="image" class="w-full h-80 object-cover">
                    </div>

                    <div class="bg-white shadow-lg hover:shadow-slate-400">
                        <img src="{{ asset('images/Resources/img-works-bnw-3.png') }}" alt="image" class="w-full h-80 object-cover">
                    </div>
                </div>
            </div>

            <div class="realtive inset-x-0 bottom-4 flex justify-between px-4">
                <button class="arrow-left cursor-pointer w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="arrow-right cursor-pointer w-10 h-10 flex items-center justify-center bg-gray-200 rounded-full">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
                <div class="absolute top-10 left-0 w-full">
                    <button class="w-full py-1 bg-[#7b7f5d] text-[#FFFFFF]  font-customDosis text-lg uppercase tracking-widest hover:bg-[#d5db9b] transition duration-300">
                        Book Now
                    </button>
                </div>
            </div>
        </section>
    
        <footer class="bg-gray-900 text-white py-10 " style="background-image: url('images/Resources/bg-2.jpg')";>
            <div class="container mx-auto text-center">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 class="text-4xl font-customFont">Location</h3>
                        <p class="font-customDosis">Davao City, Philippines</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31807.79223965909!2d125.5354664!3d7.1907084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f94a4e29db2c85%3A0x1aab07b511285fd2!2sDavao%20City%2C%20Davao%20del%20Sur%2C%20Philippines!5e0!3m2!1sen!2sus!4v1690142415168!5m2!1sen!2sus" 
                        referrerpolicy="no-referrer-when-downgrade" alt="map" class="mt-2 w-full h-40"></iframe>

                        
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Resources/logo-footer.png') }}" alt="Logo" class="h-15">
                        <div class="mt-4">
                            <span class="text-4xl font-customFont">InkGie</span>
                            <div class="font-customDosis">Tattoo & Aesthetics</div>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-4">
                        <div>
                            <h3 class="text-4xl font-customFont ">Hours</h3>
                            <p class="font-customDosis">Mon - Sat: 8AM - 6PM</p>
                        </div>
                       
                        <div>
                            <h3 class="text-4xl font-customFont">Socials</h3>
                            <div class="flex space-x-4 mt-2">
                                <img src="images/Resources/facebook-app-symbol.png" alt="Facebook" class="w-8 h-8   " />
                                <img src="images/Resources/instagram (2).png" alt="Instagram" class="w-8 h-8" />
                                <img src="images/Resources/tik-tok.png" alt="TikTok" class="w-8 h-8" />
                            </div>
                        </div>

                        <div>
                            <h3 class="text-4xl font-customFont">Contact</h3>
                            <p class="font-customDosis">sample@gmail.com</p>
                            <p class="font-customDosis">+63 999 482 8760</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-700 pt-4 font-customDosis">
                    <p>&copy; InkGie Tattoo Website. All Rights Reserved. Designed & Developed by R Web Solutions Corp.</p>
                </div>

            </div>
        </footer>
    
    </body>



</html>
