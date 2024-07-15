<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="w-full max-w-2xl px-6 lg:max-w-7xl">
            <div class="flex justify-center py-10">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="150" height="150" viewBox="0 0 1279.000000 1280.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                       fill="#000000" stroke="none">
                        <path d="M8860 12794 c-14 -2 -59 -9 -100 -15 -239 -33 -517 -147 -776 -317
-253 -167 -443 -325 -819 -682 -289 -274 -407 -378 -542 -479 -519 -386 -1257
-658 -2443 -901 l-156 -32 -89 58 c-553 357 -1131 620 -1767 804 -195 57 -477
122 -628 146 -125 19 -378 22 -470 5 -396 -73 -610 -344 -660 -836 -17 -158
-8 -489 20 -755 94 -917 291 -1732 625 -2595 130 -336 155 -428 155 -568 -1
-133 -47 -238 -167 -378 -26 -31 -117 -129 -200 -218 -84 -89 -193 -216 -242
-281 -327 -434 -515 -957 -583 -1620 -17 -164 -17 -713 0 -895 41 -446 102
-807 228 -1360 75 -325 82 -363 100 -490 18 -130 46 -197 103 -251 33 -32 139
-89 148 -80 2 1 -15 56 -37 122 -331 981 -467 2193 -345 3069 63 449 180 794
364 1066 84 125 155 206 249 283 417 340 958 352 1592 35 731 -366 1229 -927
1365 -1539 26 -118 31 -375 10 -501 -81 -484 -404 -847 -863 -971 -121 -33
-373 -37 -520 -9 -458 88 -858 409 -1068 857 -25 55 -62 131 -80 171 -64 135
-170 194 -224 125 -50 -62 -4 -272 106 -482 83 -160 174 -280 324 -431 228
-229 457 -359 755 -427 138 -32 259 -42 645 -52 374 -10 459 -19 603 -65 115
-37 218 -87 326 -159 133 -89 222 -165 476 -406 251 -238 343 -317 469 -402
118 -79 219 -129 347 -171 94 -32 188 -52 609 -132 404 -78 626 -196 775 -414
l46 -68 -25 -89 c-67 -241 -97 -383 -87 -403 12 -22 107 -61 151 -61 58 0 66
17 130 273 86 350 118 437 206 568 110 164 210 287 348 425 394 392 882 646
1363 709 611 80 1175 -201 1482 -740 132 -232 196 -482 189 -743 l-3 -132 30
-12 c96 -40 221 27 261 139 18 52 17 209 -2 318 -47 272 -223 638 -431 895
-61 75 -221 235 -320 320 l-53 45 236 415 c707 1245 769 1347 864 1433 94 85
219 109 337 65 78 -28 185 -136 231 -229 96 -197 82 -365 -63 -767 -116 -325
-141 -460 -132 -720 8 -257 61 -471 177 -711 149 -307 359 -552 628 -732 123
-83 235 -137 379 -185 180 -61 272 -48 338 45 l30 43 -2 236 c-4 659 -168
1348 -472 1977 -103 213 -190 365 -326 570 -138 207 -243 342 -456 585 -195
223 -275 333 -340 465 -66 136 -89 237 -89 395 0 160 16 253 94 563 104 407
141 633 155 939 22 501 -50 960 -239 1510 -33 97 -128 346 -211 555 -364 913
-411 1112 -454 1933 -24 472 -43 684 -76 880 -79 471 -251 842 -508 1101 -185
185 -377 292 -623 345 -70 15 -326 27 -378 18z m310 -389 c418 -154 764 -684
909 -1391 108 -528 85 -1038 -69 -1488 -33 -99 -38 -156 -15 -200 8 -15 57
-85 109 -155 564 -762 742 -1203 850 -2111 61 -511 54 -960 -25 -1530 -45
-325 -135 -704 -195 -821 -7 -15 -50 -134 -95 -265 -44 -131 -103 -288 -130
-349 -194 -433 -500 -797 -942 -1118 -234 -171 -447 -291 -883 -498 -1049
-498 -1480 -649 -1998 -700 -175 -17 -564 -6 -736 20 -370 58 -792 181 -1245
363 -458 184 -929 419 -971 483 -24 37 -11 67 55 124 33 29 83 84 112 124 29
40 73 99 97 132 54 72 105 178 127 260 23 84 30 291 16 411 -18 141 -54 305
-116 526 -122 439 -218 648 -386 848 -30 36 -77 94 -104 130 -28 36 -78 96
-112 133 -96 105 -96 126 1 238 35 41 100 116 145 168 219 254 389 514 675
1034 277 502 376 870 445 1652 40 444 37 631 -13 829 -44 172 -163 438 -242
542 -49 64 -64 98 -64 149 0 41 5 51 45 94 95 102 276 168 815 299 380 93 898
177 1175 191 102 5 150 12 177 25 68 33 188 172 323 374 71 106 165 237 209
290 104 125 381 407 508 520 360 316 881 621 1175 686 109 25 279 16 373 -19z
m-7618 -2080 c128 -22 260 -69 398 -142 439 -231 634 -454 690 -793 32 -188
-30 -385 -184 -590 -123 -164 -422 -426 -566 -497 -173 -85 -303 -10 -472 273
-146 245 -255 484 -322 707 -44 145 -122 492 -136 601 -29 233 80 406 280 445
72 14 220 12 312 -4z"/>
                        <path d="M8851 11829 c-71 -12 -216 -61 -288 -98 -259 -131 -535 -391 -766
-724 -137 -196 -187 -308 -187 -419 0 -132 69 -206 275 -293 50 -21 252 -119
449 -218 198 -98 387 -190 420 -202 177 -66 342 -72 461 -17 221 104 336 414
322 872 -6 190 -21 294 -86 585 -44 196 -55 235 -96 314 -85 168 -265 239
-504 200z m64 -342 c64 -67 101 -182 179 -547 47 -223 67 -393 69 -586 2 -146
0 -164 -17 -183 -37 -41 -114 -24 -335 70 -210 90 -382 193 -576 344 -163 127
-194 188 -142 284 37 70 256 350 350 448 138 143 260 212 376 213 51 0 57 -3
96 -43z"/>
                        <path d="M8896 7075 c-33 -13 -110 -58 -170 -98 -61 -41 -150 -100 -197 -131
-98 -63 -185 -152 -220 -223 -35 -72 -38 -174 -7 -232 36 -68 87 -103 153
-109 53 -4 57 -3 89 32 23 24 48 72 76 143 69 180 119 240 260 306 113 54 177
42 294 -55 32 -27 73 -56 90 -66 42 -22 141 -22 184 1 69 37 92 129 53 206
-30 58 -123 137 -215 181 -156 75 -282 90 -390 45z"/>
                        <path d="M10005 6115 c-133 -23 -455 -129 -567 -186 -47 -24 -78 -64 -78 -101
0 -39 32 -100 70 -132 51 -42 99 -36 233 29 98 48 126 57 222 71 86 12 126 24
184 52 85 43 92 55 95 159 1 60 -2 75 -19 91 -28 28 -60 31 -140 17z"/>
                        <path d="M4960 5864 c-14 -2 -52 -9 -85 -15 -143 -25 -289 -131 -389 -282
-146 -222 -157 -309 -46 -384 44 -31 106 -30 151 0 21 14 49 50 74 97 52 97
186 236 266 274 115 55 216 53 379 -9 109 -41 160 -44 221 -12 84 45 90 109
18 191 -61 70 -113 91 -289 120 -93 16 -261 27 -300 20z"/>
                        <path d="M10045 5513 c-332 -90 -336 -92 -371 -128 -34 -37 -49 -87 -34 -115
5 -10 24 -23 41 -29 58 -20 114 -13 226 30 99 38 117 41 223 45 146 5 244 21
263 42 40 45 32 125 -18 177 -29 31 -38 35 -81 34 -27 -1 -139 -26 -249 -56z"/>
                        <path d="M7263 5475 c-261 -47 -493 -195 -623 -396 -63 -98 -77 -186 -41 -264
42 -90 132 -142 318 -181 267 -56 316 -74 332 -117 19 -49 62 -389 62 -490 0
-96 -4 -117 -37 -217 -58 -176 -123 -258 -246 -315 -193 -88 -433 -28 -636
159 -51 46 -108 90 -127 96 -53 18 -98 -8 -131 -76 -23 -48 -26 -63 -22 -124
8 -113 72 -196 203 -262 158 -81 327 -113 544 -105 286 10 431 83 523 260 77
148 159 236 242 258 36 10 49 9 106 -12 59 -22 84 -24 260 -27 107 -2 253 1
324 7 156 13 204 32 295 117 35 32 107 95 159 139 127 106 138 128 164 331 12
92 17 175 13 201 -8 55 -51 106 -103 121 -53 16 -155 15 -195 -2 -62 -26 -70
-45 -78 -179 -9 -136 -37 -262 -70 -309 -30 -42 -101 -85 -184 -111 -89 -28
-266 -30 -365 -4 -151 40 -271 128 -304 222 -8 26 -20 93 -27 149 -21 189 10
317 129 534 116 209 135 255 140 341 3 71 2 79 -26 123 -58 90 -226 148 -422
147 -58 0 -137 -7 -177 -14z"/>
                        <path d="M9828 4739 c-44 -13 -88 -60 -88 -95 0 -40 25 -88 61 -118 32 -27 36
-28 99 -20 142 18 180 12 282 -39 102 -51 140 -57 193 -31 43 20 135 117 135
142 0 56 -99 111 -257 143 -115 23 -369 34 -425 18z"/>
                        <path d="M4855 4609 c-171 -59 -384 -188 -478 -289 -56 -60 -86 -123 -74 -154
11 -29 57 -39 114 -28 68 14 505 196 566 236 68 45 76 168 15 234 -27 28 -64
28 -143 1z"/>
                        <path d="M4830 3973 c-14 -2 -60 -15 -102 -29 -195 -64 -340 -225 -308 -343
14 -52 62 -108 101 -116 43 -10 125 33 185 96 27 28 58 56 69 62 12 6 71 11
140 12 104 0 126 4 162 23 70 37 88 93 54 167 -46 102 -162 151 -301 128z"/>
                        <path d="M4955 3331 c-46 -21 -106 -77 -227 -215 -117 -131 -132 -191 -66
-256 89 -89 261 -41 354 100 35 52 61 67 144 85 139 29 180 62 180 146 0 57
-18 80 -85 109 -47 20 -188 50 -234 50 -14 0 -44 -9 -66 -19z"/>
                        <path d="M3003 4475 c-34 -15 -37 -23 -33 -95 5 -94 71 -212 180 -320 86 -87
153 -125 201 -115 42 9 95 59 109 100 15 46 3 83 -59 177 -95 145 -182 220
-290 252 -65 19 -67 19 -108 1z"/>
                        <path d="M2341 4194 c-13 -9 -29 -32 -37 -50 -25 -60 -19 -78 47 -136 70 -60
99 -106 133 -205 45 -131 81 -159 188 -147 83 9 102 29 95 98 -10 94 -53 189
-118 260 -98 107 -222 196 -271 196 -8 0 -24 -7 -37 -16z"/>
                        <path d="M1684 3875 c-26 -40 -14 -104 34 -177 56 -87 87 -157 116 -267 14
-52 33 -102 41 -110 10 -10 33 -16 61 -16 40 0 50 5 79 36 83 91 38 290 -100
438 -108 115 -195 151 -231 96z"/>
                    </g>
                </svg>

            </div>
            <header class="flex justify-center py-10">
            @if (Route::has('login'))
                    <nav class="flex space-x-4">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black dark:focus-visible:ring-white"
                            >
                                Se connecter
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black dark:focus-visible:ring-white"
                                >
                                    S'enrergistrer
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <footer class="py-16 text-center text-sm text-black dark:text-black">
                Purrfect Meow &copy; 2024
            </footer>
        </div>
    </div>
    </body>
</html>
