<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body class="antialiased">
    <section class="relative px-0 py-20 xl:px-20 min-w-screen animation-fade animation-delay">
        <div class="container px-10 mx-auto sm:px-0">
            <div class="sm:flex">
                <div class="flex-1 mr-12">
                    <div class="text-sm text-gray-500 uppercase">Get to know us more</div>
                    <div class="text-4xl">The Dream Team</div>
                    <div class="mt-10">
                        <div class="flex">
                            <div class="flex-shrink">
                                <svg class="w-10 text-green-500 stroke-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" data-type="outline" data-name="fullsize">
                                    <g transform="translate(0, 0)" class="nc-icon-wrapper" fill="none">
                                        <rect x="9" y="8" fill="none" stroke="currentColor" vector-effect="non-scaling-stroke" stroke-linecap="square" stroke-miterlimit="10" width="6" height="8" stroke-linejoin="miter"></rect>
                                        <line data-color="color-2" fill="none" stroke="currentColor" vector-effect="non-scaling-stroke" stroke-linecap="square" stroke-miterlimit="10" x1="5" y1="6" x2="5" y2="18" stroke-linejoin="miter">
                                        </line>
                                        <line data-color="color-2" fill="none" stroke="currentColor" vector-effect="non-scaling-stroke" stroke-linecap="square" stroke-miterlimit="10" x1="19" y1="6" x2="19" y2="18" stroke-linejoin="miter">
                                        </line>
                                        <line data-color="color-2" fill="none" stroke="currentColor" vector-effect="non-scaling-stroke" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="4" x2="1" y2="20" stroke-linejoin="miter">
                                        </line>
                                        <line data-color="color-2" fill="none" stroke="currentColor" vector-effect="non-scaling-stroke" stroke-linecap="square" stroke-miterlimit="10" x1="23" y1="4" x2="23" y2="20" stroke-linejoin="miter">
                                        </line>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-grow ml-5">
                                <div class="text-2xl">Background</div>
                                <p class="mt-5 leading-7 text-gray-700 text-md"> <p>Alamin Women Support Organization is a non-profit and non-governmental organization.
                                <BR />
                                <BR />
AWSO was formed to address the many concerns and growing number of cases pertaining to the rights of women. It has been founded in 10th October, 2019 by a focused group of a voluntary, experience and professional youth in Somalia. The main office of the organization locates in Mogadishu, the capital city of Somalia, having field offices in Middle Shabelle and Lower Shabelle in south central regions of Somalia.
 <BR />
<BR />
AWSO has had a significant experience of service delivery since 2019 in the areas of human rights, protection, education, health, water and sanitation, livelihood, agriculture, and shelter. 
<BR />
<BR />
We pride ourselves with the overwhelming support and acceptance we get from the community in program areas and all stakeholders. We are guided by the principles of accountability, collective responsibility, transparency, equity and social justice among others as evident in the profile. 
</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="px-10 mt-20 sm:flex-1 sm:mt-0 sm:px-0 sm:mt-48 lg:mt-0">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="col-span-1">
                            <img class="min-w-full rounded-md" width="245" height="330" src="https://picsum.photos/245/330?grayscale" />
                            <img class="min-w-full mt-5 rounded-md" width="245" height="245" src="https://picsum.photos/245/245?grayscale" />
                        </div>
                        <div class="col-span-1 pt-10">
                            <img class="min-w-full rounded-md" width="240" height="240" src="https://picsum.photos/240/240?grayscale" />
                            <img class="min-w-full mt-5 rounded-md" width="245" height="335" src="https://picsum.photos/245/335?grayscale" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GIRL CARD EVENTS POSSIBLE-->
    <x-craft-card />

    <!--BEGIN FOOTER-->
    <x-footer />

    <!--END FOOTER-->
</body>

</html>