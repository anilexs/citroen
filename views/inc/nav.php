</head>
<body>
<?php
if(isset($_COOKIE[''])){ ?>
    <nav>

    </nav>
<?php }else{ ?>
    <nav>
        <ul>
            <li>
                <a href="" id="logo">
                    <img src="<?= $host ?>asset/img/logo3.png" alt="logo citroen" id="logo">
                </a>
            </li>
            <li>
                <a href="">
                    Accueil
                </a>
            </li>
            <li>
                <a href="">
                    Pieces
                </a>
            </li>
            <li>
                <a href="">
                    Contact
                </a>
            </li>
        </ul>
    </nav>
<?php } ?>