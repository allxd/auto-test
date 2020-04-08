Как развернуть проект:
1. composer install
2. Необходимо скачать версию Chromedriver https://chromedriver.chromium.org/downloads соотсетствующую установленному Chrome  

Чтобы запустить тесты
1. Запустить скачанный Chromedriver командой `chromedriver --url-base=wd/hub/`
2. Запустить тесты командой php `vendor/codeception/codeception/codecept run`  

Чтобы написать новый тест необходимо в файле tests/acceptance/LoginCest.php написать
новый метод по аналогии с loginFormFillTest