<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Daily , Update">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('Myportfolio/public/asset/css/DailySS.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">

    <title>Daily Update</title>


</head>

<body>

    <div class="flex-container">

        <h1 class="content">
            this is a (<code>when i got the time</code>) Daily <u>UPDATE</u> about my school presence and
            Lectrues
        </h1>

        <h2 class="content">
            Headlines
        </h2>

        <nav class="thenav">
            <ul id="onelist">
                <li> Binär Rechnen </a></li><br>
                <li> Binärzahlensystem (<u>Dualsystem</u>)</li><br>
                <li> Dezimal / Hexadezimalzahlensystem</li><br>
                <li> BCD codes für Dezimalziffern</li><br>
                <li> Signalen und Arten von Signalen </li><br>
                <li> Symetrische übertragung / Unsymetrische überstragung </li><br>
                <li> logic Gates / Logic Circuits</li><br>
                <li> Schaltalgebra</li><br>
                <li> RAID Systems <strong>Software(RAID) / Hardwar(RAID) 0 , 1 , 5 , 1 0</li> </strong></li><br>
                <li> Typen von Datenspeicherung (HDD, SSD ,M2-SSD)</li><br>
                <li> Parity system / Parität Berechnen</li><br>
                <li> Verknüpfung Elemente</li><br>
                <li> SChnittstellen (Software-Firmware-Hardware)</li><br>
                <li> <code>BIOS</code> <code>UEFI</code> Formating Partitiones & Security</li><br>
                <li> Computer Network--OSI:Open System Interconnectors</li><br>
                <li> Layers Of OSI</li><br>
                <li> Thin-Wire Verkablung</li><br>
                <li> Koaxialverkablung</li><br>
                <li> Universelle Gebäudeverkablung (UGV)</li><br>
                <li> Twisted Pair Cable Type</li><br>
                <li> Glasfaser</li><br>
                <li> Stufenindexfaser</li><br>
                <li> Gradientenindexfaser</li><br>
                <li> monomode - Sinlgemode Faser</li><br>
                <li> Fiber to the Desk</li><br>
                <li> Ethernet / Catagories 1 2 3 4 5 6 7 </li>

            </ul>
        </nav>
    </div>

    <footer class="mhd">
        Made possible in two thousands and neignteen
    </footer>

    <style>
        body {
            height: 100%;
            margin: 0;
            scroll-behavior: smooth;
            background-color: #252f4e !important;
        }


        .flex-container {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;

        }

        .content {
            text-align: center;
            font-size: 100%;
            color: rgba(226, 215, 215, 0.795) !important;
            text-align: center;
            font-family: 'Assistant', sans-serif;
        }

        .thenav>#onelist {
            height: 800px;
            width: 100%;
            overflow: scroll;
            overflow-x: hidden;
            scroll-behavior: smooth;
            margin: auto;
            text-align: center;
            font-size: 100%;
            color: rgba(197, 109, 109, 0.651) !important;

        }

        .thenav {
            max-height: 80%;
        }


        #onelist {
            list-style: outside;
            font-family: 'Assistant', sans-serif;

        }

        .mhd {
            text-align: center;
            font-size: 140%;
            font-family: 'Assistant', sans-serif;

        }
    </style>

</body>

</html>
