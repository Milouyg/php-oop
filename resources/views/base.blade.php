<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Base</title>
</head>

<body class="flex gap-4 flex-col h-screen">
    <header class="flex flex-row justify-between px-8 h-1/5">
        <h1 class="flex text-3xl font-bold underline items-center">Logo</h1>
        <ul class="flex gap-4 items-center">
            <li class="hover:cursor-pointer">Home</li>
            <li class="hover:cursor-pointer">Over ons</li>
            <li class="hover:cursor-pointer">Contact</li>
        </ul>
    </header>
    <section class="px-8 flex flex-col items-center h-3/5">
        <h1 class="font-bold">Over ons</h1>
        <p class="">
            Laravel is een open-source PHP-webframework dat is ontworpen om het ontwikkelingsproces van webapplicaties te versnellen en te vereenvoudigen. Het werd voor het eerst gelanceerd door Taylor Otwell in 2011 en heeft sindsdien snel aan populariteit gewonnen vanwege zijn elegante syntaxis, krachtige functies en uitgebreide gemeenschapsondersteuning.

            Waarom Laravel?
            1. Eenvoudige Syntax
            Een van de belangrijkste redenen voor de populariteit van Laravel is de eenvoudige en expressieve syntax. Laravel maakt gebruik van de moderne PHP-functies en biedt ontwikkelaars een elegante manier om code te schrijven, waardoor het gemakkelijker wordt om complexe taken uit te voeren.

            2. MVC Architectuur
            Laravel volgt het Model-View-Controller (MVC)-ontwerppatroon, wat zorgt voor een duidelijke scheiding van logica en presentatie. Dit maakt de codebase gestructureerd, gemakkelijk te begrijpen en bevordert herbruikbaarheid van code.

            3. Artisan Command Line Tool
            Laravel wordt geleverd met Artisan, een krachtige command line tool waarmee ontwikkelaars taken kunnen automatiseren, zoals het genereren van code, het uitvoeren van database migraties en het beheren van applicatieconfiguraties.

            4. Eloquent ORM
            Het Eloquent ORM (Object-Relational Mapping) van Laravel biedt een intuïtieve manier om met databases te communiceren. Het maakt het mogelijk om database-interacties uit te voeren met behulp van objectgeoriënteerde syntax, wat de ontwikkeltijd verkort en de leesbaarheid verbetert.

            5. Blade Templating Engine
            Laravel bevat de Blade templating engine, die krachtige maar eenvoudige templatingmogelijkheden biedt. Met Blade kunnen ontwikkelaars gestructureerde en herbruikbare views maken.

            6. Laravel Ecosystem
            Laravel heeft een bloeiend ecosysteem met talloze pakketten en extensies die ontwikkelaars kunnen gebruiken om functionaliteit aan hun applicaties toe te voegen. Het Laravel Package System vereenvoudigt het beheer van externe pakketten.

            Conclusie
            Laravel heeft zich bewezen als een krachtig PHP-framework voor het bouwen van moderne, schaalbare webapplicaties. Het combineert eenvoudige syntaxis, MVC-architectuur, handige tools zoals Artisan en een actieve gemeenschap om een ontwikkelaarsvriendelijke omgeving te creëren. Of je nu een beginnende of ervaren ontwikkelaar bent, Laravel biedt een solide basis voor het snel en efficiënt ontwikkelen van webapplicaties.
        </p>
    </section>
    <footer class="px-8 h-1/5 flex justify-center items-center">
        <p class="">Dit is de footer</p>
    </footer>
</body>

</html>