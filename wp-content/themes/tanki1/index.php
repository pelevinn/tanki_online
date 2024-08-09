<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanki online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php wp_head()?>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <img class="header-logo" src="/assets/images/tank_logo.svg" alt="лого">
                    </a>
                </div>
                <div class="col-md-4">Привет</div>
                <div class="col-md-4">Поиск</div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-1 d-flex align-items-center">
                    <div class="footer-question">
                        <img src="/assets/images/question.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="footer-support">
                        <div class="footer-support__info">
                            <h3>Служба поддержки:</h3>
                            <a href="mailto:help@tankionline.com">help@tankionline.com</a>
                        </div>
                        <div class="footer-support__img">
                            <img src="/assets/images/man.png" alt="man">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div class="footer-btn">
                        <a href="https://tankionline.com/play/" class="play-button">Играть в браузере</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <div class="footer-alterlogo">
                        <a href="https://alternativa.games/" class="ag-logo" target="_blank">
                            <img src="/assets/images/ag-logo.svg" alt="ag-logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <?php wp_footer()?>
</body>
</html>